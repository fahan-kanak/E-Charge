<?php
    $con = mysqli_connect("localhost", "e_charge", "e_charge");
    if (!$con) {
        exit('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }
    //set the default client character set 
    mysqli_set_charset($con, 'utf-8');

    mysqli_select_db($con, "e_charge");
    $username = $_GET["username"];
    $result = mysqli_query($con, "SELECT shop_id FROM retailer WHERE username='" . $username . "'");    
    $res = mysqli_fetch_row($result);
    mysqli_free_result($result);
    $requests = mysqli_query($con, "SELECT mobile_no, amount FROM requests WHERE shop_id='".$res[0]."'");
    while ($row = mysqli_fetch_assoc($requests)) {
        $new_array[] = $row;
    }
    mysqli_free_result($requests);
    mysqli_close($con);
    
    echo json_encode($new_array);
