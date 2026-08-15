<?php
$username = "progearhub";
$password = "password"; 
//create connection 
$connection = mysqli_connect("db", $username, $password, "ProgearHub");
// check if conection is successful
if (!$connection) {
    echo "<h1 style='color: red;'> Database connection error! </h1>";    
}
else{
    //echo "all good";
}
?>
