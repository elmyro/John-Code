<?php
session_start();
require_once('connect.php');
if (isset ($_GET) & !empty($_GET) ) {
    $username = mysqli_real_escape_string($con, $_GET['username']);
    $password = md5($_GET['password']);

    $sql = "SELECT * FROM  `user` WHERE username='$username' AND password='$password' AND active='1'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['username'] = $username;
        $url = "Location: profile.php";
        header($url);


    } else {
        echo "invalid username/password";
    }
    if (isset($_SESSION['username'])) {
        echo "user already logged in";


    }


}

?>