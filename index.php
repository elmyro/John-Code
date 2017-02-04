<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Central</title>




</head>
<body>

<?php
session_start();
require_once('connect.php');

if (isset($_SESSION['username'])) {
    $u = $_SESSION['username'];
    echo "user already logged in";
    ?><br>

    <?php

    $sqlt = "SELECT accounttype FROM user WHERE (username='$u')";
    $resultt = mysqli_query($con, $sqlt);
    if ($resultt) {
        $row = mysqli_fetch_assoc($resultt);
        $ac = $row["accounttype"];
        if ($ac == 0){
            ?><ul>
                <li><a href="addpet.php">Add Pet</a></li>
              </ul>
<?php
        } elseif ($ac == 1){
            ?><ul>
                <li><a href="findpet.php">Find Pet</a></li>
            </ul>
<?php
        }elseif ($ac == 2){
            ?><ul>
                <li><a href="addpet.php">Add Pet</a></li>
                <li><a href="findpet.php">Find Pets</a></li>
              </ul>
<?php


}
    }
}


?>

<nav>
    <ul>
        <li>Home</li>
        <li>News</li>
        <li><a href="login.php">Log In</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="profile.php">Profile</a></li>

    </ul>
</nav>
<h1>A new world comes out!!</h1>
<img src="Pet.jpg" alt="HTML5 Icon" style="width:300px;height:250;">
<h2>Recent uploads</h2>
<img src="cat.jpg" alt="HTML5 Icon"  style="width:125px;height:120px;">
<img src="dog.jpg" alt="HTML5 Icon" style="width:125px;height:120px;">


</body>
</html>