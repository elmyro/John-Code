<?php

ob_start();
require_once ('connect.php');
session_start();

//storing session
$user_check=$_SESSION['username'];
//sql query to fetch complete information of user

$sqlu="select user_id from `user` where username='$user_check'";
$ses_sqlu=mysqli_query($con, $sqlu);
$rowu=mysqli_fetch_assoc($ses_sqlu);
$u=$rowu['user_id'];





if (isset ($_GET) & !empty($_GET) ) {
    echo $user_check;
    echo $u;
    echo $_GET['pet_type'];
    echo $_GET['pet_breed'];
    echo $_GET['pet_age'];
    echo $_GET['advert_type'];


    $uid = mysqli_real_escape_string ($con, $u);
    $pettype = mysqli_real_escape_string ($con, $_GET['pet_type']);
    $petbreed = mysqli_real_escape_string ($con, $_GET['pet_breed']);
    $petage = mysqli_real_escape_string ($con, $_GET['pet_age']);
    $advtype = mysqli_real_escape_string ($con, $_GET['advert_type']);
    $sdate = mysqli_real_escape_string ($con, $_GET['s_date'] );
    $ldate = mysqli_real_escape_string ($con, $_GET['l_date'] );

    $sqlp = "INSERT INTO `pet` (user_id,pet_type,pet_breed,pet_age,advert_type,s_date,l_date) VALUES ('$uid','$pettype','$petbreed','$petage','$advtype','$sdate','$ldate') ";
    $resultp = mysqli_query($con, $sqlp);

    if ($resultp) {
        echo "pet registration sucessful";
        ob_end_flush();
    } else {
        echo "pet registration failed";
    }


}
/*
 //if upload button is pressed
if (ISSET($_POST['upload'])){
    //the path to store the upload image
    $target = "images/".basename($_FILES['image']['name']);



    //Get all the submitted data from the form
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    //store the submitted data into the database table: images2
    $sql = "INSERT INTO `pet` (....,pet_photo,text_photo,....) VALUES (...,'$image','$text',...)";
    mysqli_query($con, $sql);

    //move the uploaded image into the folder images
    if (move_uploaded_file($_FILES['image']['tmp_name'].$target)){
        echo "image uploaded successfully";
    } else{
        echo "not uploaded";
    }

}

*/
?>

