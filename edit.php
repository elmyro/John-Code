<?php

require_once ('connect.php');


$edit_id = $_GET['edit'];
echo "$edit_id";
$run =("select * from `pet` where pet_id='$edit_id' ");
$do = mysqli_query($con, $run);
while ($row = mysqli_fetch_array($do)) {
    $pet_id = $row[0];
    $user_id = $row[1];
    $pet_type = $row[2];
    $pet_breed = $row[3];
    $pet_age = $row[4];
    $advert_type = $row[5];
    $advert_details = $row[6];
    $pet_photo = $row[7];
    $s_date = $row[8];
    $l_date = $row[9];
}
?>
<form action="edit.php?edit_form=<?php echo $edit_id ?>" method="get">
    Pet_id : <input type="hidden" name="pet_id" value="<?php echo $edit_id?>" ><br>
    User_id : <input type="text" name="user_id" disabled><br>
    Pet_type : <input type="text" name="pet_type"><br>
    Pet_breed : <input type="text" name="pet_breed"><br>
    Pet_age : <input type="text" name="pet_age"><br>
    Advert_type P: <input type="radio" name="advert_type" id="sell" value="0">For Sale
    <input type="radio" name="advert_type" id="donation" value="1">Donation
    <br>
    Advert_details : <input type="text" name="advert_details"><br>
    Pet_photo : <input type="file" name="pet_photo"><br>
    Sub_date : <input type="text" name="s_date"><br>
    l_date : <input type="text" name="l_date"><br>
    <input type="submit" name="submit" value="submit">
</form>

<?php
if (ISSET($_GET['submit'])) {
    $pet_id = $_GET['pet_id'];
    $pet_type = $_GET['pet_type'];
    $pet_breed = $_GET['pet_breed'];
    $pet_age = $_GET['pet_age'];
    $advert_type = $_GET['advert_type'];
    $advert_details = $_GET['advert_details'];
    $s_date = $_GET['s_date'];
    $l_date = $_GET['l_date'];
    $query ="UPDATE `pet` SET pet_type = '$pet_type', pet_breed = '$pet_breed', pet_age = '$pet_age', advert_type = '$advert_type', advert_details = '$advert_details', s_date = '$s_date', l_date = '$l_date' WHERE pet_id= $pet_id";
    $update =mysqli_query($con, $query);
    if ($update){
        $url = "Location: profile.php";
        header($url);

    }else{
        echo "not";
    }

}





?>