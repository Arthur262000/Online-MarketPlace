<?php

$mysqli = new mysqli("localhost", "root", "", "projet1");
$query = "";

if(!$mysqli){
    echo"Database Connection Error...".mysqli_connect_error();



    


} else{
    echo"<h3>Database Connection Success....</h3>";
    
    if($result = mysqli_query($mysqli, "SELECT * from log")){
        echo mysqli_num_rows($result);  
        //echo $result;

        $row = mysqli_fetch_array($result);
        echo $row[0][0];
    }

}

//header('Location: index.html');
?>