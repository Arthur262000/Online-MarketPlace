
<?php
// If the user clicked the add to cart button on the product page we can check for the form data
if (isset($_POST['product_id'])) {
    // Set the post variables so we easily identify them, also make sure they are integer
    $product_id = (int)$_POST['product_id'];
    // Prepare the SQL statement, we basically are checking if the product exists in our databaser
    $stmt = $pdo->prepare('SELECT * FROM item WHERE id = ?');
    $stmt->execute([$_POST['product_id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if ($product > 0) {
        // Product exists in database, now we can create/update the session variable for the cart
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($product_id, $_SESSION['cart'])) {
                // Product is not in cart so add it
                $_SESSION['cart'][$product_id] = $quantity;
            }
        } else {
            // There are no products in cart, this will add the first product to cart
            $_SESSION['cart'] = array($product_id => $quantity);
        }
    }
    // Prevent form resubmission...
    header('location: index.php?page=Cart');
    exit;
}


// Remove product from cart, check for the URL param "remove", this is the product id, make sure it's a number and check if it's in the cart
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    // Remove the product from the shopping cart
    unset($_SESSION['cart'][$_GET['remove']]);
}

// Send the user to the place order page if they click the Place Order button, also the cart should not be empty
if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    header('Location: index.php?page=placeorder');
    exit;
}

// Check the session variable for products in cart
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
// If there are products in cart
if ($products_in_cart) {
    // There are products in the cart so we need to select those products from the database
    // Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM item WHERE Id IN (' . $array_to_question_marks . ')');
    // We only need the array keys, not the values, the keys are the id's of the products
    $stmt->execute(array_keys($products_in_cart));
    // Fetch the products from the database and return the result as an Array
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Calculate the subtotal
    foreach ($products as $product) {
        $subtotal += (float)$product['price'] * (int)$products_in_cart[$product['Id']];
    }
}
?>
<?=template_header('Cart')?>

<div class="container containerItems pt-4 mt-4 mb-4">
    <h1>Cart</h1>
    <hr>
    <form action="index.php?page=Cart" method="post">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($products)): ?>
                <tr>
                    <td colspan="2" align="center">You have no products added in your Shopping Cart</td>
                </tr>
                <!-- En dessous, essaye de faire fonctionner le php en ajoutant un item au cart
                et dis moi si la disposition est bonne -->
                <?php else: ?>
                <?php foreach ($products as $product): ?> 
                    <tr>
                        <td class="img mt-2 mb-2">
                            <a href="index.php?page=product&id=<?=$product['Id']?>">
                                <img src="Images/<?=$product['photo']?>" width="50" height="50" alt="<?=$product['name_']?>">
                            </a>
                        </td>
                        <td>
                            <a href="index.php?page=product&id=<?=$product['Id']?>"><?=$product['name_']?></a>
                            <br>
                            <a href="index.php?page=cart&remove=<?=$product['Id']?>" class="remove">Remove</a>
                        </td>
                        <td class="price"><?=$product['price']?>&dollar;</td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <div align="end" class="m-4">
            <span class="text">Total :</span>
            <!-- Afficher le prix total en additionnant le prix des items -->
            <span class="price"><?//=$total?>&dollar;</span>
        </div>
        </div>
        <div align="end">
            <!-- Redirige vers la page Payment -->
        <a type="button" class="btn btn-outline-primary btn-lg m-4" id="submit" href="Index.php?page=Payment&Id=$Id">Payment &#187;</a>
                </type=>
        </div>
    </form>
</div>

<?=template_footer()?>