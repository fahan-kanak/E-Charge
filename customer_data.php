<?php
    $con = mysqli_connect("localhost", "e_charge", "e_charge");
    if (!$con) {
        exit('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }
    //set the default client character set 
    mysqli_set_charset($con, 'utf-8');

    mysqli_select_db($con, "e_charge");
    $username = mysqli_real_escape_string($con, $_GET['username']);    
    $result = mysqli_query($con, "SELECT mobile_no, amount, pref_shop_id FROM customer WHERE username='" . $username . "'"); 
    $row = mysqli_fetch_row($result);
    mysqli_free_result($result);
    echo $row[0]." ".$row[1]." ".$row[2];
    mysqli_close($con);

