<?php

// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
  // Prepare statement and execute, prevents SQL injection
  $stmt = $pdo->prepare('SELECT * FROM item WHERE Id = ?');
  $stmt->execute([$_GET['id']]);
  // Fetch the product from the database and return the result as an Array
  $product = $stmt->fetch(PDO::FETCH_ASSOC);
  // Check if the product exists (array is not empty)
  //     if (!$product) {
  //         // Simple error to display if the id for the product doesn't exists (array is empty)
  //         exit('Product does not exist!');
  //     }
  // } else {
  //     // Simple error to display if the id wasn't specified
  //     exit('Product does not exist!!');
}
?>

<?= template_header('Product', $Id) ?>
<div class="d-flex" style="margin-top:100px;">
  <div class="MediumContainer containerItems pt-4">
    <div class="row m-2 align-items-center">
      <div class="col-6">
        <div class="colItems">
          <img src="Images/<?//=$product['photo']?>" width="300" height="300" alt="<?//=$product['name_']?>">
        </div>
      </div>
      <div class="col-6">
        <h3>Name
          <?//=$product['name_']?>
        </h3>
        <hr>
        <h5>Description</h5>
        <br>
        <p>Description
          <?//=$product['description']?>
        </p>
        <hr>
        <div class="row m-2">
          <div class="col-6 text-center mt-3 p-3">
            <h5>Price
              <?//=$product['price']?> &dollar;
            </h5>
          </div>
          <div class="col-6">
            <form action="addcart.php?IdItem=$product['Id']&option=buyitnow">
              <button type="submit" class="btn btn-outline-primary btn-lg mt-3 p-3">Add to Cart <img src="../Design/cart.svg"></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?= template_footer() ?>