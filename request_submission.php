<?php
    $con = mysqli_connect("localhost", "e_charge", "e_charge");
    if (!$con) {
        exit('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }
    //set the default client character set 
    mysqli_set_charset($con, 'utf-8');

    mysqli_select_db($con, "e_charge");
    $mobile_no = $_GET["mobile_no"];
    $amount = $_GET["amount"]; 
    $cus_usrname = $_GET["username"];
    $shop_id = $_GET["shop_id"];
    mysqli_query($con, "INSERT into requests values('".$cus_usrname."','" .$mobile_no."'," .$amount.",'".$shop_id."');");
    echo 'Request submitted successfully!';
