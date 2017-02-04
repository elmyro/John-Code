
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Log in</title>


</head>
<body>
<?php
session_start();
require_once('connect.php');

?>

<form action="loginCon.php" method="GET">


    <label for="username">Username </label><input type="text" name="username" id="username">
    <br>

    <label for="password">Password </label><input type="password" name="password" id="password">

    <button type="submit" >Log in </button>

</form>

<a href="logout.php">Log out</a>



</body>
</html>