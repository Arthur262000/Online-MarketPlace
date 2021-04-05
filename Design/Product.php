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
    $option = $pros['SellOption'];

    template_header('Product', $Id);
    echo <<<EOT
                <div class="d-flex" style="margin-top:100px;">
                <div class="MediumContainer containerItems pt-4">
                    <div class="row m-2 align-items-center">
                        <div class="col-6">
                        <div class="colItems mb-4">
                            <img src="Images/$photo" width="300" height="300" alt="$name">
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
            echo '<a type="btn" href="Index.php?page=ProductBuyItNow&Id=' . $Id . '&IdItem=' . $IdItem . '" class="btn btn-outline-primary p-2 m-2 btn-lg" >Buy It Now</a>';
            break;
        case  3:
            echo '<a type="btn" href="Index.php?page=ProductBestOffer&Id=' . $Id . '&IdItem=' . $IdItem . '" class="btn btn-outline-primary p-2 m-2 btn-lg">Best Offer</a>';
            break;
        case  4:
            echo '<a type="btn" href="Index.php?page=ProductAuction&Id=' . $Id . '&IdItem=' . $IdItem . '" class="btn btn-outline-primary p-2 m-2 btn-lg">Auction</a>
            <a type="btn" href="Index.php?page=ProductBuyItNow&Id=' . $Id . '&IdItem=' . $IdItem . '" class="btn btn-outline-primary p-2 m-2 btn-lg" >Buy It Now</a>';
            break;
        case  5:
            echo '<a type="btn" href="Index.php?page=ProductBuyItNow&Id=' . $Id . '&IdItem=' . $IdItem . '" class="btn btn-outline-primary p-2 m-2 btn-lg" >Buy It Now</a>
            <a type="btn" href="Index.php?page=ProductAuction&Id=' . $Id . '&IdItem=' . $IdItem . '" class="btn btn-outline-primary p-2 m-2 btn-lg">Auction</a>';
            break;
        case  6:
            echo '<a type="btn" href="Index.php?page=ProductBuyItNow&Id=' . $Id . '&IdItem=' . $IdItem . '" class="btn btn-outline-primary p-2 m-2 btn-lg" >Buy It Now</a>
            <a type="btn" href="Index.php?page=ProductBestOffer&Id=' . $Id . '&IdItem=' . $IdItem . '" class="btn btn-outline-primary p-2 m-2 btn-lg">Best Offer</a>';
            break;
        case  7:
            echo '<a type="btn" href="Index.php?page=ProductBestOffer&Id=' . $Id . '&IdItem=' . $IdItem . '" class="btn btn-outline-primary p-2 m-2 btn-lg">Best Offer</a>
            <a type="btn" href="Index.php?page=ProductBuyItNow&Id=' . $Id . '&IdItem=' . $IdItem . '" class="btn btn-outline-primary p-2 m-2 btn-lg">Buy It Now</a>';
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
