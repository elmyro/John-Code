<?php

ob_start();

require_once('connect.php');
require_once ('SendEMail.php');

if (isset ($_GET) & !empty($_GET) ) {
    $firstname = mysqli_real_escape_string ($con, $_GET['firstname']);
    $lastname = mysqli_real_escape_string ($con, $_GET['lastname']);
    $username = mysqli_real_escape_string ($con, $_GET['username']);
    $email = mysqli_real_escape_string ($con,$_GET['email']);
    $email_code = md5($_GET['password'] + microtime());
    $password = md5($_GET['password']);

    $user_name_photo = mysqli_real_escape_string ($_FILES['user_photo']['name']);
    $user_photo= mysqli_real_escape_string (file_get_contents($_FILES['user_photo']['temp_name']));

    $accounttype = mysqli_real_escape_string ($con, $_GET['accounttype']);

    $sql="INSERT INTO `user` (firstname,lastname,username,email,email_code,password,user_name_photo,user_photo,accounttype) VALUES ('$firstname','$lastname','$username','$email','$email_code','$password','$user_name_photo','$user_photo','$accounttype') ";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "user registration successful";

        //sending  mail
        //$sendMail = new SendEMail($email, $email_code);
        //$sendMail->sendMail();
        $url = "Location: preActivate.php";
        header($url);
        ob_end_flush();



    }else {
        echo "user registration failed";
    }


}

?>