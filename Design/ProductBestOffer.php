<?php

if (!$Id) {
  header('Location: login.html');
} else {
  $Id = $_GET['Id'];
  $IdItem = $_GET['IdItem'];
  echo "ID ITEM = $IdItem";

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

<?=template_header('Product', $Id)?>

  <div class="container containerItems pt-4" style="width: 850px; margin-top:102px; margin-bottom:102px">
    <div id="Product">
      <div class="row m-2 align-items-center">
        <div class="col-6">
          <div class="colItems">
            <img src="Images/<?=$product['photo']?>" width="300" height="300" alt="<?=$product['name_']?>">
            </div>
        </div>
        <div class="col-6">
                <h3><?=$product['name_']?></h3>
                <hr>
                <h5>Description</h5>
                <br>
                <p><?=$product['description']?></p>
                <hr>
                <div class="row m-2">
                    <div class="col-6 text-center">
                    <h5><?=$product['price']?>&dollar;</h5>
                    </div>
                    <div class="col-6">
                    <button type="submit" class="btn btn-outline-primary">Add to Cart <img src="../Design/cart.svg"></button>
                    </div>
                </div>
          </div>
    </div>  
  </div>
</div>

<?=template_footer()?>