<?php

include 'functions.php';

?>

<?=template_header('My Market')?>
<div class="container containerItems mt-4 mb-4 pt-4 pb-4">
    <ul class="nav nav-tabs">
    <li class="nav-item tabs">
        <a class="nav-link active" href="MyMarket.php">My Market</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="MyProfile.php">My Profile</a>
    </li>
    </ul>
    <div align='center' class="mb-3 mt-3"> 
                <button type="button" class="btn btn-outline-primary btn-lg" id="submit">Add a Product
                </button>
            </div>

            <?php ?>
</div>

<?=template_footer()?>