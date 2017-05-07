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
    $mob_no = $_GET["mobile_no"];
    $amunt = $_GET["amount"];
    $pref_shop_id = $_GET["pref_shop_id"];    
    mysqli_query($con, "INSERT into customer values('".$usr_name."','".$password."','" .$mob_no."'," .$amunt.",'".$pref_shop_id."');");    