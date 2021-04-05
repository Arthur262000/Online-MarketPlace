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
if (!$Id) {
    header('Location: login.html');
  } else {
    $Id = $_GET['Id'];
    template_header('Product', $Id);

    $photo = $product['Photo'];
    $name = $product['Name_'];
    $description = $product['Description']

echo <<<EOT
                <div class="d-flex" style="margin-top:100px;">
                <div class="MediumContainer containerItems pt-4">
                    <div class="row m-2 align-items-center">
                        <div class="col-6">
                        <div class="colItems mb-4">
                            <img src="Images/<?=$product['Photo']?>" width="300" height="300" alt="<?=$product['Name_']?>">
                            </div>
                        </div>
                        <div class="col-6">
                                <h3><?=$product['Name_']?></h3>
                                <hr>
                                <h5>Description</h5>
                                <br>
                                <p><?=$product['Description']?></p>
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

EOT;


template_footer();}?>