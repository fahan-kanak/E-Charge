<?php
    $con = mysqli_connect("localhost", "root", "password");
    if (!$con) {
        exit('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }
    //set the default client character set 
    mysqli_set_charset($con, 'utf-8');

    mysqli_select_db($con, "E_charge");
    $mobile_no = $_GET["mobile_no"];
    $amount = $_GET["amount"];    
    mysqli_query($con, "INSERT into requests values(null,'" .$mobile_no."'," .$amount.", null);");
    echo 'Request submitted successfully!';
