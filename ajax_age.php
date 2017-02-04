<?php

require_once ('connect.php');

$input = $_REQUEST['input'];
$input = mysqli_real_escape_string($con, $input);
$sql = "SELECT * FROM `pet` WHERE pet_age LIKE '%".$input."%'";
$data = mysqli_query($con, $sql);
$arrcnt = -1;
$dataArray = array();

while ($temp = mysqli_fetch_assoc($data)){

    foreach ($temp as $key=>$val){

        $temp[$key] = stripslashes($val);
        $arrcnt++;
    }
    $dataArray[$arrcnt] = $temp;
}
$list = "<ul class='lista'>";
foreach ($dataArray as $val){
    $list .= "<li>".$val['pet_breed']."</li>";
}
$list .= "</ul>";
echo $list;



?>