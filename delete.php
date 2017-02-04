<?php

require_once ('connect.php');


$edit_id = $_GET['edit'];
echo "$edit_id";

?>
<form action="delete.php?edit_form=<?php echo $edit_id ?>" method="get">
    Pet_id : <input type="hidden" name="pet_id" value="<?php echo $edit_id?>" ><br>

<label>Are you sure?</label>
    <input type="submit" name="submit" value="submit">
</form>

<?php
if (ISSET($_GET['submit'])) {
    $pet_id = $_GET['pet_id'];

    $query ="DELETE FROM `pet` WHERE pet_id= $pet_id";
    $update =mysqli_query($con, $query);
    if ($update){
        $url = "Location: profile.php";
        header($url);

    }else{
        echo "not";
    }

}





?>
