<?php
if (!$Id) {
    header('Location: login.html');
} else {

    $stmt = $pdo->prepare("SELECT * FROM item WHERE IdSell = $Id ORDER BY Date_Added DESC");
    // bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT
    
    $stmt->execute();
    // Fetch the products from the database and return the result as an Array
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    

    template_header('My Market', $Id);
echo <<<EOT
            <div class="container containerItems mt-4 mb-4 pt-4 pb-4">
                <ul class="nav nav-tabs">
                <li class="nav-item tabs">
                    <a class="nav-link active" href="Index?page=MyMarket&Id=$Id">My Market</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Index?page=MyProfile&Id=$Id">My Profile</a>
                </li>
                </ul>
                <div align='center' class="mb-3 mt-3"> 
                            <a type="button" class="btn btn-outline-primary btn-lg" id="submit" href="Index.php?page=AddProduct&Id=$Id">Add a Product
                            </a>
                        </div>
            </div>
            
            EOT;}?>
            <div class="container containerItems mt-4 pt-4">
                <h1>MyItem</h1>
                    <p><?=$total_products_consoles?> Products</p>
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
<?
template_footer();
