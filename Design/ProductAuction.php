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

    $origin = new DateTime(date("Y-m-d"));
    $target = new DateTime($pros['Date_Added']);
    $interval = date_diff($origin, $target);
    $timeremaining =  $interval->format('%R%a days');

?>

    <?= template_header('Product', $Id) ?>
    <div class="d-flex" style="margin-top:100px;">
        <div class="MediumContainer containerItems pt-2">
            <div class="row m-2 align-items-center">
                <div class="col-6">
                    <div class="row">
                        <strong for="RemainingTime" class="mb-4">Remaining Time : <?=$timeremaining?></strong>
                    </div>
                    <div class="colItems mb-4">
                        <img src="Images/<?= $photo ?>" width="300" height="300" alt="<?= $name ?>">
                    </div>
                </div>
                <div class="col-6">
                    <h3><?= $name ?></h3>
                    <hr>
                    <h5>Description</h5>
                    <br>
                    <p><?= $description ?></p>
                    <hr>
                    <div class="row m-2">
                        <div class="col-6 text-center">
                            <h5>Price<?= $Price ?> &dollar;</h5>
                            <form action="addcart.php?IdItem=<?=$IdItem?>&option=1&Id=<?=$Id?>" method="POST">
                                <input type="text" class="form-control mt-3" name="bid" id="bid" placeholder="Bid"></input>
                                <input type="text" class="form-control mt-3" name="AutoMaxbid" id="AutoMaxbid" placeholder="Maximum Bid"></input>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-outline-primary btn-lg mt-3 p-3">Add to Cart <img src="../Design/cart.svg"></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= template_footer();
} ?>