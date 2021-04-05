<?php

if (!$Id) {
  header('Location: login.html');
} else {
  $Id = $_GET['Id'];
  $IdItem = $_GET['IdItem'];

  $stmt = $pdo->prepare("SELECT * FROM item WHERE Id = $IdItem;");
  $stmt->execute();
  // Fetch the product from the database and return the result as an Array
  $pros = $stmt->fetch(PDO::FETCH_ASSOC);
  $total_products_consoles = $pdo->query("SELECT * FROM item WHERE Id = $IdItem;")->rowCount();

  $photo = $pros['Photo'];
  $name = $pros['Name_'];
  $description = $pros['Description'];
  $Price = $pros['Price'];

?>


<?= template_header('Product', $Id) ?>
<div class="d-flex" style="margin-top:100px;">
  <div class="MediumContainer containerItems pt-4">
    <div class="row m-2 align-items-center">
      <div class="col-6">
        <div class="colItems">
          <img src="Images/<?=$photo?>" width="300" height="300" alt="<?=$name?>">
        </div>
      </div>
      <div class="col-6">
        <h3>
          <?=$name?>
        </h3>
        <hr>
        <h5>Description</h5>
        <br>
        <p>
          <?=$description?>
        </p>
        <hr>
        <div class="row m-2">
          <div class="col-6 text-center mt-3 p-3">
            <h5>Price
              <?=$Price?> &dollar;
            </h5>
          </div>
          <div class="col-6">
            <form action="addcart.php?IdItem=<?=$IdItem?>&option=2&Id=<?=$Id?>">
              <a type="btn" href="addcart.php?IdItem=<?=$IdItem?>&option=2&Id=<?=$Id?>&price=<?=$Price?>" class="btn btn-outline-primary btn-lg mt-3 p-3">Add to Cart <img src="../Design/cart.svg"></a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?= template_footer(); }?>