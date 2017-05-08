<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign up or log in</title>
    <script type="text/javascript">
        function signup_login(val2) {
            if (val2 === 3) {
                window.location.href = "<?php $num = $_GET["num"]; if ($num == 1) {
          echo 'customer_sign_up.php';} else {
    echo 'retailer_sign_up.php';
}?>";
            } else {
                window.location.href = "log_in.php?num=<?php $num = $_GET["num"]; echo ($num);?>";
            }
        }
    </script>
    </head>
    <body>
        <input type="button" onclick="signup_login(3)" value="Sign up"/>
        Or,
        <input type="button" onclick="signup_login(4)" value="Log in"/>
        <?php
            
        ?>
    </body>
</html>



