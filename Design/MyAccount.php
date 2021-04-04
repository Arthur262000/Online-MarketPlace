<?php
//include 'functions.php';

if (!$Id) {
    header('Location: login.html');
} else {
    $a = $_GET['Id'];
    $stmt = $pdo->prepare("SELECT * FROM members where `Id`=$a;");
    $stmt->execute();
    $members = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($members as $member){
        $name = $member['name_'];
        $surname = $member['surname'];
        $address1 = $member['address1'];
        $address2 = $member['address2'];
        $city = $member['city'];
        $country = $member['country'];
        $zip = $member['postalcode'];
        $phone = $member['phone'];
    }

 template_header('My Market', $a); 

echo <<<EOT
                
                <div class="container containerItems mt-4 mb-4 pt-4 pb-4">
                    <ul class="nav nav-tabs">
                    <li class="nav-item tabs">
                        <a class="nav-link active" href="Index.php?page=MyAccount&Id=$a">My Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Index.php?page=MyCard&Id=$a">My Card</a>
                    </li>
                    </ul>
                        <div class="col-6">
                        <div class="profile mt-4">
                            <h2>Information</h2>
                            <hr>
                            <div class="form-row">
                                        <div class="col-xs-8">
                                            <input type="text" id="Name" name="Name" class="form-control mb-4 mt-4" value=$name
                                                aria-label="Name"></input>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xs-8">
                                            <input type="text" id="Surname" name="Surname" class="form-control mb-4 mt-4" value=$surname
                                                aria-label="Surname"></input>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xs-8">
                                            <input type="text" id="Adress1" name="Adress1" class="form-control mb-4 mt-4" value=$address1
                                                aria-label="Address Line"></input>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xs-8">
                                            <input type="text" id="Adress2" name="Adress2" class="form-control mb-4 mt-4" value=$address2
                                                aria-label="Address Line 2"></input>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <input type="text" class="form-control" id="City" name="City" value=$city ></input>
                                        </div>
                                        <div class="form-group col-4">
                                            <input id="Country" name="Country" class="form-control" value=$country >
                                            </input>
                                        </div>
                                        <div class="form-group col-3">
                                            <input type="text" class="form-control" id="Zip" name="Zip" value=$zip ></input>
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
                                            <input type="tel" id="tel" name="tel" class="form-control mb-4 mt-4" value=$phone
                                                aria-label="Telephone"></input>
                                        </div>
                                    </div>
                                    <div align="center"> 
                                <button type="button" class="btn btn-outline-primary btn-lg" id="submit">Save
                                </button>
                            </div>
                                </div>
                            </div>
                        </div>
        EOT;

template_footer();

}
