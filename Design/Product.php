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

<?=template_header('Product')?>
<div class="d-flex" style="margin-top:100px;">
  <div class="MediumContainer containerItems pt-4">
      <div class="row m-2 align-items-center">
        <div class="col-6">
          <div class="colItems mb-4">
             <img src="Images/<?//=$product['photo']?>" width="300" height="300" alt="<?//=$product['name_']?>">
            </div>
        </div>
        <div class="col-6">
                <h3>Name<?//=$product['name_']?></h3>
                <hr>
                <h5>Description</h5>
                <br>
                <p>Description<?//=$product['description']?></p>
                <hr>
                <div class="form-row mt-4">
                    <button type="submit" class="btn btn-outline-primary p-2 m-2 btn-lg" disabled>Buy It Now</button>
                    <button type="submit" class="btn btn-outline-primary p-2 m-2 btn-lg">Auction</button>
                    <button type="submit" class="btn btn-outline-primary p-2 m-2 btn-lg">Best Offer</button>
                    </div>
                </div>
          </div>
    </div>  
</div>


<?=template_footer()?>