<?php

//model.php

function open_database_connection() {
    $servername = "10.16.16.1";
    $username = "bench-hu1-u-109501";
    $password = "nDfMr^hnK";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    $db_found = mysqli_select_db($conn, $username);
    
    
    if (!$conn) {
       die("Connection failed : " . mysqli_error());
    }
    
    
    if (!$db_found) {
       die("Database connection failed : " . mysqli_error());
    }
    
    return $conn;
}

function close_database_connection($link) {
    $link = null;
}



function get_all_surveys() {

    $conn = open_database_connection();

    $SQL = "SELECT * FROM surveys";
    $result = mysqli_query($conn, $SQL);
    
    $surveys = array(); // create a new array
    
    
    while ( $db_field = mysqli_fetch_assoc($result) ) {
      array_push($surveys, $db_field);
    }
    close_database_connection($conn);
    
    return $surveys;
}


function get_survey_by_id($id) {
    $conn = open_database_connection();
    
    $SQL = "SELECT * FROM surveys WHERE id='$id'";
    $result = mysqli_query($conn, $SQL);


    while ($row = mysqli_fetch_array($result)) { 
        $survey= $row; 
    } 

    
    close_database_connection($conn);
    
    return $survey;
}


function create_new_survey() {
  $conn = open_database_connection();

  $Question = $_POST["survey-title"];
  $Opt1 = $_POST["opt-1"];
  $Opt2 = $_POST["opt-2"];
  $Opt3 = $_POST["opt-3"];

  $SQL = "INSERT INTO surveys (Question, OptionA, OptionB, OptionC)
  VALUES ('$Question', '$Opt1', '$Opt2', '$Opt3')";

  if (mysqli_query($conn, $SQL)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  close_database_connection($conn);
}


function cast_vote() {
  //add 1 to $_POST["vote"] in $_POST["ID"]
  $vote = $_POST["vote"];
  $ID =  $_POST["ID"];
  $conn = open_database_connection();

  $SQL = "UPDATE surveys SET " . $vote . " = " . $vote . " + 1 WHERE ID='$ID'"; 

  if ($conn->query($SQL) === TRUE) {
      $response = get_survey_by_id($ID);
  } else {
      $response = "Error updating record: " . $conn->error;
  }

 
  close_database_connection($conn);

  echo json_encode($response);
}

function logout() {
  echo "logout running";
  unset($_SESSION['user']);
  session_unset();
  session_destroy();
  header("Location: /mvc/login");
  exit;
}

?>

