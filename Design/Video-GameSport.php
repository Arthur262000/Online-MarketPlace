<?php

// The current page, in the URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the date added
$stmt = $pdo->prepare('SELECT * FROM item WHERE Category="Video-Game" AND SubCategory="Sport" ORDER BY Date_Added DESC');
// bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT

$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of products
$total_products_consoles = $pdo->query('SELECT * FROM item WHERE Category="Video-Game" AND SubCategory="Sport"')->rowCount();
if (!$Id) {
  header('Location: login.html');
} else {
  $Id = $_GET['Id'];
  template_header('Video Games | Sport', $Id);
  

echo <<<EOT

<div class="container containerItems mt-4 pt-4">
<h1>Video Games | Sport</h1>
<p> $total_products_consoles Products</p>
<hr>
<div class="row m-2">
EOT;
foreach ($products as $product) :?>
<div class="col-3 Item mb-4">
  <a href="index.php?page=product&IdItem=<?=$product['Id']?>&Id=<?=$Id?>">
    <img src="Images/<?=$product['Photo']?>" alt="<?= $product['Name_'] ?>" class="colItems" width="200" height="200">
    <h3 class="name"><?= $product['Name_'] ?></h3>
    <span class="price">
      <?= $product['Price'] ?>&dollar;
    </span>
  </a>
</div>
<?php endforeach;
echo <<<EOT
</div>
</div>
EOT;

template_footer();}?>