<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome to E-Charge</title>

        <script type="text/javascript">
            function customer(val) {
                window.location.href = "signup_login.php?num="+val;
            }            
        </script>    
    </head>
    <body>
        <input type="button" onclick="customer(1)" value="Customer"/>
        Or,
        <input type="button" onclick="customer(2)" value="Retailer"/>
        <?php
        // put your code here
        ?>
    </body>
</html>
