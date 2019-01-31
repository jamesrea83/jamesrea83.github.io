<?php

require_once 'dbconnect.php';



$survey = $_GET["survey"];


// Create connection
$conn = mysqli_connect($servername, $username, $password);

$db_found = mysqli_select_db($conn, $username);



$SQL = "SELECT * FROM surveys";
$result = mysqli_query($conn, $SQL);

$surveys = array(); // create a new array


while ( $db_field = mysqli_fetch_assoc($result) ) {

  array_push($surveys, $db_field);

}

$json_data = json_encode($surveys);
 
echo $json_data;



?>