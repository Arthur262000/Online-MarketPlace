<?php
// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM item ORDER BY Date_Added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo $Id;
?>

<?=template_header('Home', $Id)?>

        <!-- Carousel / Slider -->
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Carousel1.png" class="d-block h-100 w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Carousel2.jpg" class="d-block h-100 w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Carousel3.jpg" class="d-block h-100 w-100" alt="...">
          </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>

  <div class="container containerItems mt-4 pt-4">
    <h2>New Arrivals</h2>
    <hr>
    <div class="row m-2">
        <?php foreach ($recently_added_products as $product): ?>
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

<?=template_footer()?>