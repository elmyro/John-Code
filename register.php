

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>


</head>
<body>
<form action="registerCon.php" method="GET" enctype="multipart/form-data">

    <label for="firstname">Firstname </label><input type="text" name="firstname" id="firstname">
    <br>

    <label for="lastname">Lastname </label><input type="text" name="lastname" id="lastname">
    <br>

    <label for="username">Username </label><input type="text" name="username" id="username">
    <br>

    <label for="email">Email </label><input type="email" name="email" id="email" title="email">
    <br>

    <label for="password">Password </label><input type="password" name="password" id="password">
    <br>

    <label for="user_photo">Photo </label><input type="file" name="user_photo" id="user_photo">
    <br>

    <label for="Accounttype">Account Type </label>
    <div>
    <input type="radio" name="accounttype" id="petter" value="0">Petter
    <input type="radio" name="accounttype" id="getter" value="1">Getter
    <input type="radio" name="accounttype" id="both" value="2">Both
    </div>

    <button type="submit"  >Register </button>

</form>




</body>
</html>
