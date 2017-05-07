<?php
    $con = mysqli_connect("localhost", "e_charge", "e_charge");
    if (!$con) {
        exit('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }
    //set the default client character set 
    mysqli_set_charset($con, 'utf-8');

    mysqli_select_db($con, "e_charge");
    $usr_name = $_GET["usr_name"];
    $password = $_GET["password"];
    $shop_id = $_GET["shop_id"];
    $e_mail = $_GET["e_mail_id"];   
    mysqli_query($con, "INSERT into retailer values('".$usr_name."','".$password."','" .$shop_id. "','".$e_mail."');");

