<?php
include('conn.php');


$UserName = $_POST['UserName'];
$name = $_POST['Name'];
$email = $_POST['Email'];
$pass =  $_POST['Password'];



$sql = "INSERT INTO user (user_name, name, email ,pass ) 
        VALUES ('$UserName', '$name', '$email','$pass')";
if (mysqli_query($conn, $sql)) {
    echo "Records inserted successfully.";
    header('Refresh:2; URL=Login.php');
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);