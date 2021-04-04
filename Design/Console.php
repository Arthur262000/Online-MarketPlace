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

  <!-- <div class="container containerItems pt-4 mt-4">
    <div id="Playstation">
      <h2>Playstation</h2>
      <hr>
      <div class="row m-2">
      </form>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="/Images/PS4-Slim.png" alt="PS4-Slim">
          </div>
          <div class="productCaption">
            <h5>Playstation 4 Slim</h5>
            <p>369.99$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="PS4.png" alt="PS4">
          </div>
          <div class="productCaption">
            <h5>Playstation 4</h5>
            <p>309.99$</p>
          </div>
        </div>
      </div>
      <div class="row m-2">
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="PS3.png" alt="PS3">
          </div>
          <div class="productCaption">
            <h5>Playstation 3</h5>
            <p>119.90$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="PS2.png" alt="PS2">
          </div>
          <div class="productCaption">
            <h5>Playstation 2</h5>
            <p>86.98$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="PS1.png" alt="PS1">
          </div>
          <div class="productCaption">
            <h5>Playstation 1</h5>
            <p>79.99$</p>
          </div>
        </div>
      </div>
    </div>
    <div id="Xbox">
      <h2>Xbox</h2>
      <hr>
      <div class="row m-2">
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="XBOX-SerieX.png" alt="XBOX-SerieX">
          </div>
          <div class="productCaption">
            <h5>XBOX Serie X</h5>
            <p>700.90$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="XBOX-One-S.png" alt="XBOX-One-S">
          </div>
          <div class="productCaption">
            <h5>XBOX One S</h5>
            <p>369.99$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="XBOX-One.png" alt="XBOX-One">
          </div>
          <div class="productCaption">
            <h5>XBOX One</h5>
            <p>309.90$</p>
          </div>
        </div>
      </div>
      <div class="row m-2">
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="XBOX-360.png" alt="XBOX-360">
          </div>
          <div class="productCaption">
            <h5>XBOX 360</h5>
            <p>119.95$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="XBOX-1.png" alt="XBOX-1">
          </div>
          <div class="productCaption">
            <h5>XBOX 1st Generation</h5>
            <p>69.99$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="XBOX-One.png" alt="XBOX-One">
          </div>
          <div class="productCaption">
            <h5>XBOX One</h5>
            <p>305.99$</p>
          </div>
        </div>
      </div>
    </div>
    <div id="Nintendo">
      <h2>Nintendo</h2>
      <hr>
      <div class="row m-2">
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="Nintendo-Switch-Lite.png" alt="Nintendo-Switch-Lite">
          </div>
          <div class="productCaption">
            <h5>Nintendo Switch Lite</h5>
            <p>119.90$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="Nintendo-Switch.png" alt="Nintendo-Switch">
          </div>
          <div class="productCaption">
            <h5>Nintendo Switch</h5>
            <p>259.98$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="Nintendo-Wii-U.png" alt="Nintendo-Wii-U">
          </div>
          <div class="productCaption">
            <h5>Nintendo Wii U</h5>
            <p>119.90$</p>
          </div>
        </div>
      </div>
      <div class="row m-2">
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="Nintendo-Wii.png" alt="Nintendo-Wii">
          </div>
          <div class="productCaption">
            <h5>Nintendo Wii</h5>
            <p>89.95$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="Nintendo-3DS.png" alt="Nintendo-3DS">
          </div>
          <div class="productCaption">
            <h5>Nintendo 3DS</h5>
            <p>119.90$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="Nintendo-2DS.png" alt="Nintendo-2DS">
          </div>
          <div class="productCaption">
            <h5>Nintendo 2DS</h5>
            <p>125.90$</p>
          </div>
        </div>
      </div>
      <div class="row m-2">
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="Nintendo-DS-Lite.png" alt="Nintendo-DS-Lite">
          </div>
          <div class="productCaption">
            <h5>Nintendo DS Lite</h5>
            <p>69.98$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="Nintendo-GameCube.png" alt="Nintendo-GameCube">
          </div>
          <div class="productCaption">
            <h5>Nintendo Game Cube</h5>
            <p>84.50$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="/Design/Images/Nintendo-GameBoy.png" alt="Nintendo-GameBoy">
          </div>
          <div class="productCaption">
            <h5>Playstation 3</h5>
            <p>112.00$</p>
          </div>
        </div>
      </div>
    </div>
    <div id="Other">
      <h2>Other</h2>
      <hr>
      <div class="row m-2">
        <div class="col-md m-3 colItems">1</div>
        <div class="col-md m-3 colItems">2</div>
        <div class="col-md m-3 colItems">3</div>
      </div>
    </div>
  </div> -->

<div class="container containerItems mt-4 pt-4">
  <h1>Products</h1>
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