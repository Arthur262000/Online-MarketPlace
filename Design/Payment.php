<?php

if (isset($_GET['Id'])) {

if(isset($_GET['tot'])){
    $price = $_GET['tot'];
}   

$stmt = $pdo->prepare('SELECT * FROM payement WHERE Id = ?');
$stmt->execute([$_GET['Id']]);
$payment = $stmt->fetch(PDO::FETCH_ASSOC);
$stmt = $pdo->prepare('SELECT * FROM cart WHERE Id = ?');
$stmt->execute([$_GET['Id']]);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of products
//$total_products = $pdo->query('SELECT * FROM cart WHERE Id = ')->rowCount();

$stmt = $pdo->prepare('SELECT * FROM members WHERE Id = ?');
$stmt->execute([$_GET['Id']]);
$member = $stmt->fetch(PDO::FETCH_ASSOC);

//For the sum of total price
/*$stmt = $handler->prepare('SELECT SUM(Price) AS value_sum FROM cart Where Idmember');
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);
$sum = $row['value_sum'];*/
}

?>

<?=template_header('Payment', $Id)?>

<div style="margin-top:100px;">
    <div class="MediumContainer containerItems">
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Total</h6>
                        </div>
                        <span class="text-muted"><?=$price?></span>
                    </li>
                </ul>
                </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3 mt-4">Billing Address</h4>
                        <form>
                            <div class="row">
                            <div class="col-md-6 mb-3">
                                <label type="text" id="Name" name="Name" class="mb-2 mt-2"
                                    aria-label="Name">Name</label>
                                    <input class="form-control" type="text" placeholder="<?=$member['name_']?>" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                <label type="text" id="Surname" name="Surname" class="mb-2 mt-2"
                                    aria-label="Surname">Surname</label>
                                    <input class="form-control" type="text" placeholder="<?=$member['surname']?>" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                <label type="text" id="address" name="address" class="mb-2 mt-2"
                                    aria-label="address">Address</label>
                                    <input class="form-control" type="text" placeholder="<?=$member['address1']?>" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                <label type="text" id="City" name="City" class="mb-2 mt-2"
                                    aria-label="City">City</label>
                                    <input class="form-control" type="text" placeholder="<?=$member['city']?>" readonly>
                                </div>
                                <div class="col-md-4 mb-3">
                                <label type="text" id="Country" name="Country" class="mb-2 mt-2"
                                    aria-label="Country">Country</label>
                                    <input class="form-control" type="text" placeholder="<?=$member['country']?>" readonly>
                                </div>
                                <div class="col-md-3 mb-3">
                                <label type="text" id="Zip" name="Zip" class="mb-2 mt-2"
                                    aria-label="Zip">ZIP Code</label>
                                    <input class="form-control" type="text" placeholder="<?=$member['postalcode']?>" readonly>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <h4 class="mb-3">Payment Information</h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label type="text" id="CardType" name="CardType" class="mb-2 mt-2"
                                        aria-label="CardType">Card Type</label>
                                        <input class="form-control" type="text" placeholder="<?=$payment['typecard']?>" readonly>
                                    </div>
                                <div class="col-md-6 mb-3">
                                    <label type="text" id="CardNum" name="CardNum" class="mb-2 mt-2"
                                        aria-label="Card Number">Card Number</label>
                                        <input class="form-control" type="text" placeholder="<?=$payment['cardnumber']?>" readonly>
                                    </div>
                                <div class="col-md-6 mb-3">
                                    <label type="text" id="CardName" name="CardName" class="mb-2 mt-2"
                                        aria-label="CardName">Owner Name</label>
                                        <input class="form-control" type="text" placeholder="<?=$payment['cardname']?>" readonly>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                <label type="text" id="SecurityCode" name="SecurityCode" class="mb-2 mt-2"
                                    aria-label="SecurityCode">CVC</label>
                                    <input class="form-control" type="text" placeholder="<?=$payment['securitycode']?>" readonly>
                                </div>
                                <div class="col-md-4 mb-3">
                                <label type="text" id="month" name="month" class="mb-2 mt-2"
                                    aria-label="month">Month</label>
                                    <input class="form-control" type="text" placeholder="<?=$payment['month']?>" readonly>
                                </div>
                                <div class="col-md-3 mb-3">
                                <label type="text" id="year" name="year" class="mb-2 mt-2"
                                    aria-label="year">Year</label>
                                    <input class="form-control" type="text" placeholder="<?=$payment['year']?>" readonly>
                                </div>
                            </div>
                                
                        </div>
                    </form>
                </div>
                <a type="button" class="btn btn-danger m-4" name="back" id="back" href="Index.php?page=Cart&<?=$Id?>">Back</a>
                <a type="button" align="end" class="btn btn-success m-4" name="Pay" id="Pay" href="Index.php?page=removedb&Id=<?=$Id?>">Pay &#187;</a>
            </div>
    </div>
</div>

<?=template_footer()?>