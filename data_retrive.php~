<?php
    $con = mysqli_connect("localhost", "e_charge", "e_charge");
    if (!$con) {
        exit('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }
    //set the default client character set 
    mysqli_set_charset($con, 'utf-8');

    mysqli_select_db($con, "e_charge");
    $requests = mysqli_query($con, "SELECT mobile_no, amount FROM requests");
    while ($row = mysqli_fetch_assoc($requests)) {
        $new_array[] = $row;
    }
    mysqli_free_result($result);
    mysqli_close($con);
    
    echo json_encode($new_array);