<?php

require_once ('connect.php');

session_start();

//storing session
$user_check=$_SESSION['username'];

//sql query to fetch complete information of user

$sqlf="select firstname from `user` where username='$user_check'";
$ses_sqlf=mysqli_query($con, $sqlf);
$rowf=mysqli_fetch_assoc($ses_sqlf);
$f=$rowf['firstname'];

$sqll="select lastname from `user` where username='$user_check'";
$ses_sqll=mysqli_query($con, $sqll);
$rowl=mysqli_fetch_assoc($ses_sqll);
$l=$rowl['lastname'];

$sql="select username from `user` where username='$user_check'";
$ses_sql=mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($ses_sql);
$login_session=$row['username'];


$sqle="select email from `user` where username='$user_check'";
$ses_sqle=mysqli_query($con, $sqle);
$rowe=mysqli_fetch_assoc($ses_sqle);
$e=$rowe['email'];


$sqlp="select user_photo from `user` where username='$user_check'";
$ses_sqlp=mysqli_query($con, $sqlp);
$rowp=mysqli_fetch_assoc($ses_sqlp);
$p=$rowp['user_photo'];

//briskw to koino stoixeio twn duo table,to  user_id
$sqlu="select user_id from `user` where username='$user_check'";
$ses_sqlu=mysqli_query($con, $sqlu);
$rowu=mysqli_fetch_assoc($ses_sqlu);
$u=$rowu['user_id'];




$sqlpet = "SELECT * FROM `pet` WHERE user_id='$u'";
$result = mysqli_query($con, $sqlpet);





if(!ISSET($login_session)) {
    $mysqli_close($con);
    $url = "Location: index.php";
    header('$url');

}




?>