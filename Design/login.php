<?php

$mysqli = new mysqli("localhost", "root", "", "WebMarket");


$login = $_POST['AccountMail'];
$password = $_POST['AccountPassword'];

$query = "SELECT * FROM `signin`;";

if (!$mysqli) {
    echo "Database Connection Error..." . mysqli_connect_error();
} else {
    echo "<h3>Database Connection Success....</h3>";
    echo $query;
    $result1 = mysqli_query($mysqli, $query);
    echo mysqli_num_rows($result1);

    while ($row = mysqli_fetch_array($result1)) {
        if ($row['login'] == $login && $row['pass'] == $password) {
            echo "<h1> Connected </h1>";
            header('Location: index.html');
        }
    }
}


mysqli_close($mysqli);
?>

<section class="Form text-center">
  <div class="AccountContainer">
      <div class="Accountrow containerItems justify-content-center">
          <h2>Hello!</h2>
          <strong>Please enter your coordinates</strong>
          <form>
            <div class="form-row">
              <div class="col-xs-8">
                <input type="email" id="AccountMail" class="form-control mb-4 mt-4" placeholder="Email Address"
                  aria-label="Email address"></input>
            </div>
          </div>
            <div class="form-row">
              <div class="col-xs-8">
                <input type="password" id="AccountPassword" class="form-control" placeholder="Password"
                  aria-label="Password"></input>
              </div>
                </div>
            <div class="form-row"">
              <div class="col-xs-8">
                <button type="submit" class="btn btn-outline-primary m-4">
                    Connexion
                </button>
              </div>
            </div>
                <a href="#">Forgot Password?</a>
                <p>Don't have an account? <a href="register.php">Register here</a></p>
          </form>
          </div>
      </div>
    </div>
  </div>
</section>

<?=template_footer()?>
