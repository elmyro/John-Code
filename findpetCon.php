<?php
require ('connect.php');

if (isset($_GET)) {
    $type = mysqli_real_escape_string($con, $_GET['type']);

    $breed = mysqli_real_escape_string($con, $_GET['breed']);

    $age = mysqli_real_escape_string($con, $_GET['age']);

    $s_date = mysqli_real_escape_string($con, $_GET['s_date']);

    $e_date = mysqli_real_escape_string($con, $_GET['e_date']);
    if ($_GET['type']) {
        $sql = "SELECT * FROM pet WHERE pet_type='$type'";
        $result = mysqli_query($con, $sql);
        ?>
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
                while ($pet = mysqli_fetch_assoc($result)) {
                    $pid = $pet['pet_id'];
                    echo "<tr>";
                    echo "<td>" . $pet['pet_id'] . "</td>";
                    echo "<td>" . $pet['user_id'] . "</td>";
                    echo "<td>" . $pet['pet_type'] . "</td>";
                    echo "<td>" . $pet['pet_breed'] . "</td>";
                    echo "<td>" . $pet['pet_age'] . "</td>";
                    echo "<td>" . $pet['advert_type'] . "</td>";
                    echo "<td>" . $pet['advert_details'] . "</td>";
                    echo "<td>" . $pet['pet_photo'] . "</td>";
                    echo "<td>" . $pet['s_date'] . "</td>";
                    echo "<td>" . $pet['l_date'] . "</td>";
                    echo "<td><a href='edit.php?edit=$pid'>edit</a></td>";
                    echo "<td><a href='delete.php?edit=$pid'>delete</a></td>";
                    echo "</tr>";
                }
                ?>
        </table>
        </html>
        <?php
    } elseif ($_GET['s_date'] && $_GET['e_date']){

        $sql1 = "SELECT * FROM  pet WHERE (s_date <= '$s_date') AND (l_date >= '$e_date')";
        $result1 = mysqli_query($con, $sql1);
        if ($result1){

            ?>
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
                    while ($pet = mysqli_fetch_assoc($result1)) {
                        $pid = $pet['pet_id'];
                        echo "<tr>";
                        echo "<td>" . $pet['pet_id'] . "</td>";
                        echo "<td>" . $pet['user_id'] . "</td>";
                        echo "<td>" . $pet['pet_type'] . "</td>";
                        echo "<td>" . $pet['pet_breed'] . "</td>";
                        echo "<td>" . $pet['pet_age'] . "</td>";
                        echo "<td>" . $pet['advert_type'] . "</td>";
                        echo "<td>" . $pet['advert_details'] . "</td>";
                        echo "<td>" . $pet['pet_photo'] . "</td>";
                        echo "<td>" . $pet['s_date'] . "</td>";
                        echo "<td>" . $pet['l_date'] . "</td>";
                        echo "<td><a href='edit.php?edit=$pid'>edit</a></td>";
                        echo "<td><a href='delete.php?edit=$pid'>delete</a></td>";
                        echo "</tr>";
                    }
                    ?>
            </table>
            </html>
            <?php

        }
    } elseif ($_GET['s_date']){
        $sql2 = "SELECT * FROM pet WHERE (s_date <= '$s_date') AND (l_date>= '$s_date')";
        $result2 = mysqli_query($con, $sql2);

        ?>
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
                while ($pet = mysqli_fetch_assoc($result2)) {
                    $pid = $pet['pet_id'];
                    echo "<tr>";
                    echo "<td>" . $pet['pet_id'] . "</td>";
                    echo "<td>" . $pet['user_id'] . "</td>";
                    echo "<td>" . $pet['pet_type'] . "</td>";
                    echo "<td>" . $pet['pet_breed'] . "</td>";
                    echo "<td>" . $pet['pet_age'] . "</td>";
                    echo "<td>" . $pet['advert_type'] . "</td>";
                    echo "<td>" . $pet['advert_details'] . "</td>";
                    echo "<td>" . $pet['pet_photo'] . "</td>";
                    echo "<td>" . $pet['s_date'] . "</td>";
                    echo "<td>" . $pet['l_date'] . "</td>";
                    echo "<td><a href='edit.php?edit=$pid'>edit</a></td>";
                    echo "<td><a href='delete.php?edit=$pid'>delete</a></td>";
                    echo "</tr>";
                }
                ?>
        </table>
        </html>
        <?php


    }



}



?>

