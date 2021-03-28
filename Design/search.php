<?php

$mysqli = new mysqli("localhost", "root", "", "projet1");
$query = "SELECT * from log WHERE login LIKE '% $login %' ;";

$search = $_POST['search'];

if(!$mysqli){
    echo"Database Connection Error...".mysqli_connect_error();

} else{
    echo"<h3>Database Connection Success....</h3>";
    echo $query;
    if($result = mysqli_query($mysqli, $query)){
        echo mysqli_num_rows($result);  
        //echo $result;

 
        $row = mysqli_fetch_array($result);
        echo $row[0];
    }
    else{
        echo "<br>pas vu ";
    }

}


mysqli_close($mysqli);
?>