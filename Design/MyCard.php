<?=template_header('My Market')?>
<div class="container containerItems mt-4 mb-4 pt-4 pb-4">
    <ul class="nav nav-tabs">
    <li class="nav-item tabs">
        <a class="nav-link" href="MyAccount.php">My Account</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="MyCard.php">My Card</a>
    </li>
    </ul>
        <div class="col-6">
        <div class="profile mt-4">
            <h2>Information</h2>
            <hr>
            <div class="form-row">
            <strong>Select Your Payment Method</strong>
                        <div class="form-row mt-2">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Visa" value="option1">
                                <label class="form-check-label" for="Visa">Visa</label>
                                    </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Master-Card" value="option2">
                                <label class="form-check-label" for="Master-Card">Master-Card</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="American Express" value="option3">
                                <label class="form-check-label" for="American Express">American Express</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Paypal" value="option4">
                                <label class="form-check-label" for="Paypal">Paypal</label>
                                    </div>
					        </div>  
                        </div>
                        <hr> 
                        <div class="col-xs-8">
                            <input type="text" id="CardNum" name="CardNum" class="form-control mb-4 mt-4" placeholder="Card Number"
                                aria-label="Card Number"></input>
                        </div>
                    <div class="form-row">
                        <div class="col-xs-8">
                            <input type="text" id="NameDisp" name="NameDisp" class="form-control mb-4 mt-4" placeholder="Name Displayed"
                                aria-label="NameDisp"></input>
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
                            <button type="button" class="btn btn-outline-primary btn-lg" id="submit">Save
                            </button>
                        </div>
                    </div>
        </div>
    </div>
</div>

<?=template_footer()?>