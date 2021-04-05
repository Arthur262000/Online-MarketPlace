<?php
// Check to make sure the id parameter is specified in the URL
/*if (isset($_GET['IdItem'])) {
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
}*/
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
    $option = $pros['SellOption'];

    template_header('Product', $Id);
    echo <<<EOT
                <div class="d-flex" style="margin-top:100px;">
                <div class="MediumContainer containerItems pt-4">
                    <div class="row m-2 align-items-center">
                        <div class="col-6">
                        <div class="colItems mb-4">
                            <img src="Images/" width="300" height="300" alt="$name">
                            </div>
                        </div>
                        <div class="col-6">
                                <h3>$name</h3>
                                <hr>
                                <h5>Description</h5>
                                <br>
                                <p>$description</p>
                                <hr>
                                <div class="form-row mt-4">
        EOT;
    switch ($option) {
        case  1:
            echo '<a type="btn" href="Index.php?page=ProductAuction&Id=' . $Id . '&IdItem=' . $IdItem . '" class="btn btn-outline-primary p-2 m-2 btn-lg">Auction</a>';
            break;
        case  2:
            echo '<button type="submit" class="btn btn-outline-primary p-2 m-2 btn-lg" >Buy It Now</button>';
            break;
        case  3:
            echo '<button type="submit" class="btn btn-outline-primary p-2 m-2 btn-lg">Best Offer</button>';
            break;
        case  4:
            echo '<button type="submit" class="btn btn-outline-primary p-2 m-2 btn-lg">Auction</button>
                      <button type="submit" class="btn btn-outline-primary p-2 m-2 btn-lg" >Buy It Now</button>';
            break;
        case  5:
            echo '<button type="submit" class="btn btn-outline-primary p-2 m-2 btn-lg" >Buy It Now</button>
                      <button type="submit" class="btn btn-outline-primary p-2 m-2 btn-lg">Auction</button>';
            break;
        case  6:
            echo '<button type="submit" class="btn btn-outline-primary p-2 m-2 btn-lg" >Buy It Now</button>
                      <button type="submit" class="btn btn-outline-primary p-2 m-2 btn-lg">Best Offer</button>';
            break;
        case  7:
            echo '<button type="submit" class="btn btn-outline-primary p-2 m-2 btn-lg">Best Offer</button>
                      <button type="submit" class="btn btn-outline-primary p-2 m-2 btn-lg">Buy It Now</button>';
            break;
    }
    echo <<<EOT
                                    </div>
                                </div>
                        </div>
                    </div>  
                </div>

EOT;


    template_footer();
}
