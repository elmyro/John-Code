<?php

require_once ('session_prof.php');


require_once('connect.php');
if (isset($_SESSION['username'])) {
    ?><a href="index.php">MAIN</a>
    <?php
    echo "<a href='edit_u.php?editu=$login_session'>.Edit User</a>";
    ?>
    <br><br><?php
    echo "USER DETAILS";
    ?><br><br>

    <?php
    echo "NAME:  ". $f;
    ?> <br> <?php
    echo "LAST NAME:  ". $l;
    ?> <br> <?php
    echo "USERNAME:  ". $login_session;
    ?> <br> <?php
    echo "EMAIL:  ". $e;
    ?> <br> <?php


    echo "<tr>";
    echo "<td>"; ?> <img src="<?php echo $p; ?> height="100" width="100"> <?php echo "</td>";
    echo "</tr>";


    ?><br><br><br>
<html>
<body>
<table width="600" border="1">
    <tr>
        <th>pet_id</th>
        <th>user_id</th>
        <th>pet_type</th>
        <th>pet_breed</th>
        <th>pet_age</th>
        <th>advert_type</th>
        <th>advert_details</th>
        <th>pet_photo</th>
        <th>s_date</th>
        <th>l_date</th>
    <?php

    while($pet=mysqli_fetch_assoc($result)){
        $pid =  $pet['pet_id'];
        echo "<tr>";
        echo "<td>".$pet['pet_id']."</td>";
        echo "<td>".$pet['user_id']."</td>";
        echo "<td>".$pet['pet_type']."</td>";
        echo "<td>".$pet['pet_breed']."</td>";
        echo "<td>".$pet['pet_age']."</td>";
        echo "<td>".$pet['advert_type']."</td>";
        echo "<td>".$pet['advert_details']."</td>";
        echo "<td>".$pet['pet_photo']."</td>";
        echo "<td>".$pet['s_date']."</td>";
        echo "<td>".$pet['l_date']."</td>";
        echo "<td><a href='edit.php?edit=$pid'>edit</a></td>";
        echo "<td><a href='delete.php?edit=$pid'>delete</a></td>";
        echo "</tr>";

    }

    ?>

</table>


<?php


} else {
    echo "no user";
}




?>