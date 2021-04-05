<?php
// The amounts of products to show on each page
$num_products_on_each_page = 30;
// The current page, in the URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the date added
$stmt = $pdo->prepare('SELECT * FROM item WHERE Category="Video-Game" ORDER BY Date_Added DESC LIMIT ?,?');
// bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT
$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of products
$total_products_games = $pdo->query('SELECT * FROM item WHERE Category="Video-Game"')->rowCount();
?>

<?=template_header('Video Games', $Id)?>

<div class="container containerItems mt-4 pt-4">
  <h1>Video Games</h1>
    <p><?=$total_products_games?> Products</p>
    <hr>
    <div class="row m-2">
        <?php foreach ($products as $product): ?>
          <div class="col-3 Item mb-4">
        <a href="index.php?page=product&id=<?=$product['Id']?>">
            <img src="Images/<?=$product['Photo']?>" alt="<?=$product['Name_']?>" class="colItems" width="200" height="200">
            <h3 class="name"><?=$product['Name_']?></h3>
            <span class="price">
                <?=$product['Price']?>&dollar;
            </span>
        </a>
        </div>
        <?php endforeach; ?>
      </div>
</div>


<?=template_footer()?>