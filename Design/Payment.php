<?php

if (isset($_GET['id'])) {

$stmt = $pdo->prepare('SELECT * FROM payement WHERE Id = ?');
$stmt->execute([$_GET['id']]);
$payment = $stmt->fetch(PDO::FETCH_ASSOC);
$stmt = $pdo->prepare('SELECT * FROM cart WHERE Id = ?');
$stmt->execute([$_GET['id']]);
$products = $stmt->fetch(PDO::FETCH_ASSOC);
// Get the total number of products
$total_products = $pdo->query('SELECT * FROM cart WHERE Id = ?')->rowCount();

$stmt = $pdo->prepare('SELECT * FROM members WHERE Id = ?');
$stmt->execute([$_GET['id']]);
$member = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<?=template_header('Payment',$Id)?>

<div style="margin-top:100px;">
    <div class="MediumContainer containerItems">
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill"><?=$total_products?></span>
                </h4>
                <ul class="list-group mb-3">
                    <? foreach $products as $product : ?>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0"><?=$product['Name_']?></h6>
                        </div>
                        <span class="text-muted"><?=$product['Price']?></span>
                    </li>

                    <? endforeach; ?>
                </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Billing Address</h4>
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
                                <div class="col-md-6 mb-3">
                                <label type="text" id="CardNum" name="CardNum" class="mb-2 mt-2"
                                    aria-label="Card Number">Card Number</label>
                                    <input class="form-control" type="text" placeholder="<?=$payment['cardnumber']?>" readonly>
                                </div>
                            </div>
                        </form>

            </div>
                
                
            </div>
            <div class="row">
                <div class="mt-4">
                    <h2>Payment Information</h2>
                    <hr> 
                    <div class="col-xs-8">
                        
                    
            </div>
            <div class="form-row">
                <div class="col-xs-8">
                    <label type="text" id="NameDisp" name="NameDisp" class="mb-2 mt-2"
                        aria-label="NameDisp">Name Displayed : <?=$member['cardname']?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-4">
                            <label type="text" class="" id="CVC" name="CVC">CVC : <?=$member['securitycode']?></label>
                        </div>
                        <div class="form-group col-4">
                            <label id="Month" name="Month" class="">MM : <?=$member['month']?>
                            </label>
                        </div>
                        <div class="form-group col-4">
                            <label type="text" class="mb-4" id="Year" name="Year">YYYY : <?=$member['year']?></label>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <a type="button" class="btn btn-outline-primary m-4" name="back" id="back" href="Index.php?page=Cart&Id=$Id">Back</a>
    </div>
</div>

<?=template_footer()?>