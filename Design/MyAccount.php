<?php
//include 'functions.php';

if(!$Id){
    header('Location: login.html');
}

?>

<?=template_header('My Market', $Id)?>
<div class="container containerItems mt-4 mb-4 pt-4 pb-4">
    <ul class="nav nav-tabs">
    <li class="nav-item tabs">
        <a class="nav-link active" href="Index.php?page=MyAccount">My Account</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Index.php?page=MyCard">My Card</a>
    </li>
    </ul>
        <div class="col-6">
        <div class="profile mt-4">
            <h2>Information</h2>
            <hr>
            <div class="form-row">
                        <div class="col-xs-8">
                            <input type="text" id="Name" name="Name" class="form-control mb-4 mt-4" placeholder="Name"
                                aria-label="Name"></input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-xs-8">
                            <input type="text" id="Surname" name="Surname" class="form-control mb-4 mt-4" placeholder="Surname"
                                aria-label="Surname"></input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-xs-8">
                            <input type="text" id="Adress1" name="Adress1" class="form-control mb-4 mt-4" placeholder="Address Line 1"
                                aria-label="Address Line"></input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-xs-8">
                            <input type="text" id="Adress2" name="Adress2" class="form-control mb-4 mt-4" placeholder="Address Line 2"
                                aria-label="Address Line 2"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-4">
                            <input type="text" class="form-control" id="City" name="City" placeholder="City"></input>
                        </div>
                        <div class="form-group col-4">
                            <input id="Country" name="Country" class="form-control" placeholder="Country">
                            </input>
                        </div>
                        <div class="form-group col-3">
                            <input type="text" class="form-control" id="Zip" name="Zip" placeholder="Zip Code"></input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-xs-8">
                            <input type="email" id="AccountMail" name="AccountMail" class="form-control mb-4 mt-4"
                                placeholder="Email Address" aria-label="Email address"></input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-xs-8">
                            <input type="password" id="AccountPassword" name="AccountPassword" class="form-control mb-4 mt-4"
                                placeholder="Password" aria-label="Password"></input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-xs-8">
                            <input type="tel" id="tel" name="tel" class="form-control mb-4 mt-4" placeholder="Telephone"
                                aria-label="Telephone"></input>
                        </div>
                    </div>
                    <div align='center'> 
                <button type="button" class="btn btn-outline-primary btn-lg" id="submit">Save
                </button>
            </div>
                </div>
            </div>
        </div>

<?=template_footer()?>