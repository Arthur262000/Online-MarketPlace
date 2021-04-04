<?php
// The amounts of products to show on each page
$num_products_on_each_page = 4;
// The current page, in the URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the date added
$stmt = $pdo->prepare('SELECT * FROM item ORDER BY Date_Added DESC LIMIT ?,?');
// bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT
$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of products
$total_products = $pdo->query('SELECT * FROM item')->rowCount();
?>
<?=template_header('Console')?>

<div class="container containerItems mt-4 pt-4">
  <h1>Console</h1>
    <p><?=$total_products?> Products</p>
    <hr>
    <div class="row m-2">
        <?php foreach ($products as $product): ?>
          <div class="col-3 Item mb-4">
        <a href="index.php?page=product&id=<?=$product['Id']?>">
            <img src="Images/<?=$product['photo']?>" alt="<?=$product['name_']?>" class="colItems" width="200" height="200">
            <h3 class="name"><?=$product['name_']?></h3>
            <span class="price">
                <?=$product['price']?>&dollar;
            </span>
        </a>
        </div>
        <?php endforeach; ?>
      </div>
      </div>
    <div class="buttons">
        <?php if ($current_page > 1): ?>
        <a href="index.php?page=products&p=<?=$current_page-1?>">Prev</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
        <a href="index.php?page=products&p=<?=$current_page+1?>">Next</a>
        <?php endif; ?>
    </div>
</div>

<?=template_footer()?>