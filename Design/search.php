<?php

$connection = new mysqli('localhost', 'root', '', 'webmarket');

$search = $_POST['search'];


$query = "SELECT Categorie FROM item WHERE Categorie LIKE '%".$search."%'";
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
template_header('Search');

echo <<<EOT

<div class="container containerItems mt-4 pt-4">
<h1>$search</h1>
<p>Products</p>
<hr>
<div class="row m-2">
EOT;
foreach ($products as $product) :
    if ($product['Name_'] = $search){
        echo <<< EOT

        <div class="col-3 Item mb-4">
        <a href="index.php?page=product&IdItem=<?=$product['Id']?>&Id=<?=$Id?>">
    <img src="Images/<?=$product['Photo']?>" alt="<?= $product['Name_'] ?>" class="colItems" width="200" height="200">
    <h3 class="name"><?= $product['Name_'] ?></h3>
    <span class="price">
      <?= $product['Price'] ?>&dollar;
    </span>
  </a>
</div> 
EOT;

    } ?>

<?php endforeach;
echo <<<EOT
</div>
</div>
EOT;

mysqli_close($connection);
