<?php

include 'conn.php';

$UserName = $_POST['user'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM user WHERE user_name='$UserName' OR email='$UserName' OR name='$UserName' AND pass='$pass'";
$result = mysqli_query($conn, $sql);


if ($row = mysqli_fetch_assoc($result)) {
    echo "You are logged in!";
    header('Refresh:2; URL=Controller.php');
} else {
    echo "Your username or password is Erorr !";
    header('Refresh:2; URL=Login.php');
}