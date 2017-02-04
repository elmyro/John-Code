<?php

require_once ('connect.php');

$edit_u = $_GET['editu'];
echo "$edit_u";

$runu =("select * from `user` where username='$edit_u' ");
$dou = mysqli_query($con, $runu);
while ($row = mysqli_fetch_array($dou)) {
    $user_id = $row[0];
    $firstname = $row[1];
    $lastname = $row[2];
    $username = $row[3];
    $email = $row[4];
    $email_code = $row[5];
    $password = $row[6];
    $user_name_photo = $row[7];
    $user_photo = $row[8];
    $accounttype = $row[9];
    $active = $row[10];

}
?>
<form action="edit_u.php" method="get">
    <br>
    User id : <input type="hidden" name="user_id" value="<?php echo $user_id?>"> <br>
    First Name : <input type="text" name="firstname"> <br>
    Last Name : <input type="text" name="lastname"><br>
    Username : <input type="text" name="username"  ><br>
    email : <input type="text" name="email"><br>



    <br>
    <input type="submit" name="submit" value="submit">
</form>

<?php



if (ISSET($_GET['submit'])) {

    $user_id = $_GET['user_id'];
    echo $user_id;
    $firstname = $_GET['firstname'];
    echo $firstname;
    $lastname = $_GET['lastname'];
    echo $lastname;
    $username = $_GET['username'];
    echo $username;
    $email = $_GET['email'];
    echo $email;




    $query1 ="UPDATE `user` SET firstname = '$firstname', lastname = '$lastname', username = '$username', email = '$email' WHERE user_id= $user_id";
    $update1 =mysqli_query($con, $query1);
    if ($update1){
        $url = "Location: profile.php";
        header($url);

    }else{
        echo "not";
    }

}

?>