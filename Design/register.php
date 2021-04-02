<?php

$mysqli = new mysqli("localhost", "root", "", "WebMarket");


$name = $_POST['Name'];
$surname = $_POST['Surname'];
$adress1 = $_POST['Adress1'];
$adress2 = $_POST['Adress2'];
$city = $_POST['City'];
$country = $_POST['Country'];
$zipcode = $_POST['Zip'];
$password = $_POST['AccountPassword'];
$phone = $_POST['tel'];
$email = $_POST['AccountMail'];

$query = "INSERT INTO signin (Admin, login, pass) values (false, '$email', '$password');";

if (!$mysqli) {
    echo "Database Connection Error..." . mysqli_connect_error();
} else {
    echo "<h3>Database Connection Success....</h3>";
    echo $query;
    if (mysqli_query($mysqli, $query)) {
        echo "New record created successfully";
        $result1 = mysqli_query($mysqli, "SELECT * from `signin`;");

        while ($row = mysqli_fetch_array($result1)) {
            if ($row['login'] == $email && $row['pass'] == $password) {
                $id = $row['Id'];
                $query2 = "INSERT INTO members (IdSignIn, name_, surname, address1, address2, city, postalcode, country, phone)
             values ('$id', '$name', '$surname', '$adress1', '$adress2', '$city', '$zipcode', '$country', '$phone');";
                if (mysqli_query($mysqli, $query2)) {
                    header('Location: index.html');
                }
            }
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($mysqli);

?>
<?=template_header('Register')?>

<section class="Form text-center">

        <div class="AccountContainer">
            <div class="Accountrow containerItems justify-content-center">
                <h2>Register</h2>
                <strong>Please enter your coordinates</strong>
                <form action="register.php" method="POST">
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
                    <div class="form-row">
                        <div class=" col-xs-8">
                            <button type="submit" class="btn btn-outline-primary m-4">
                                Create your Account
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
        </div>
    </section>

<?=template_footer()?>
