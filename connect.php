<?php
$con = mysqli_connect('localhost','root','root');
if(!$con) {
    die("database connection failed" . mysqli_error($con));

}
$select_db = mysqli_select_db($con,'part2');
if (!$select_db) {
    die("database selection failed" . mysqli_error($con));
}


?>