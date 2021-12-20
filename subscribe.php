<?php

// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect("localhost", "root", "", "login");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)

$email = $_REQUEST['email'];


// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO subscription VALUES (
    '$email')";

if(mysqli_query($conn, $sql)){
    header("Location: index(logged).php");


} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
