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
    $password = mysqli_real_escape_string($con, $_GET['password']);
    $num = $_GET["num"];
    if ($num == 1) {
        $act_password = mysqli_query($con, "SELECT password FROM customer WHERE username='" . $username . "'");    
    } else {
        $act_password = mysqli_query($con, "SELECT password FROM retailer WHERE username='" . $username . "'");    
    }
    if (mysqli_num_rows($act_password) < 1) {
        echo 'Wrong username!';
    } else {
        $row = mysqli_fetch_row($act_password);
        mysqli_free_result($act_password);
        if (strcmp($password, $row[0]) == 0) {
            echo "Login successful!";
        } else {
            echo "Wrong password!";
        }
    }
    mysqli_close($con);

