<?php

require_once ('connect.php');

function emailExists($email){

    /** Prepare Insert Query*/
    $query = "SELECT user_id FROM users WHERE email ='$email' LIMIT 1";
    //$con = DatabaseConnection::getInstance(); apo allo project
    $result = $con->query($query);
    if ($result->num_rows > 0) {
        return true;
    } else {
        false;
    }
    $con->close();
}

function activate($email, $email_code){
    $query = "SELECT user_id FROM users WHERE email ='$email' AND email_code ='$email_code' AND active = 0";
    //$con = DatabaseConnection::getInstance(); apo allo project
    $result = $con->query($query);
    if ($result->num_rows > 0) {
        $query = "UPDATE users SET active = 1 where email ='$email'";
        $result = $conn->query($query);
        if ($result->num_rows > 0 )
            return true;
    } else {
        false;
    }

    $con->close();
    return false;

}

?>