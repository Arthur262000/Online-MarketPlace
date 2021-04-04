<?= template_header('My Card') ?>
<div class="container containerItems mt-4 mb-4 pt-4 pb-4">
    <ul class="nav nav-tabs">
        <li class="nav-item tabs">
            <a class="nav-link" href="Index.php?page=MyAccount">My Account</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="Index.php?page=MyCard">My Card</a>
        </li>
    </ul>
    <div class="col-6">
        <div class="profile mt-4">
            <h2>Information</h2>
            <hr>
            <form action="insertcard.php" method="POST">
                <div class="form-row">

                    <strong>Select Your Payment Method</strong>
                    <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                        <label class="btn paymentMethod active">
                            <div class="method visa"></div>
                            <input type="radio" name="options" id="Visa" value="Visa" checked> Visa
                        </label>
                        <label class="btn paymentMethod">
                            <div class="method master-card"></div>
                            <input type="radio" name="options" id="MasterCard" value="MasterCard"> Master-Card
                        </label>
                        <label class="btn paymentMethod">
                            <div class="method amex"></div>
                            <input type="radio" name="options" id="AmericanExpress" value="AmericanExpress"> American Express
                        </label>
                        <label class="btn paymentMethod">
                            <div class="method Paypal"></div>
                            <input type="radio" name="options" id="Paypal" value="Paypal"> Paypal
                        </label>
                    </div>
                </div>
                <hr>
                <div class="col-xs-8">
                    <input type="text" id="CardNum" name="CardNum" class="form-control mb-4 mt-4" placeholder="Card Number" aria-label="Card Number"></input>
                </div>
                <div class="form-row">
                    <div class="col-xs-8">
                        <input type="text" id="NameDisp" name="NameDisp" class="form-control mb-4 mt-4" placeholder="Name Displayed" aria-label="NameDisp"></input>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-4">
                        <input type="text" class="form-control" id="CVC" name="CVC" placeholder="CVC"></input>
                    </div>
                    <div class="form-group col-4">
                        <input id="Month" name="Month" class="form-control" placeholder="MM">
                        </input>
                    </div>
                    <div class="form-group col-4">
                        <input type="text" class="form-control mb-4" id="Year" name="Year" placeholder="YYYY"></input>
                    </div>
                    <div align='center'>
                        <button type="submit" class="btn btn-outline-primary btn-lg" id="submit">Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= template_footer() ?>