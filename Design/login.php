<?php

$mysqli = new mysqli("localhost", "root", "", "WebMarket");


$login = $_POST['AccountMail'];
$password = $_POST['AccountPassword'];
$log = false;

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

      $id = $row['Id'];
      $log = true;

      $result2 = mysqli_query($mysqli, "SELECT * from members;");
      while ($row = mysqli_fetch_array($result2)) {
        if ($id == $row['IdSignIn']) {

          $Id = $row['Id'];
          echo "<h1> Connected </h1>";
          header("Location: index.php?Id=$Id");
        }
      }
    }
  }
  if(!$log){
    header('Location: login.html');
  }
  //header('Location: login.html');
}


mysqli_close($mysqli);
