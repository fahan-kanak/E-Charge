<html>
    <body>
        Username: <input type="text"/>
        <br />
        Password: <input type="password"/>
        <input type="submit" value="Log in" />
        <?php
            $num = $_GET["num"];
            if ($num == 1) {
                echo 'Customer log in';
            } else {
                echo 'Retailer log in';
            }
        ?>
    </body>
</html>

