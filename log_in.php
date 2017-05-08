<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Log in</title>
        <script type="text/javascript">
            function check(num) {
                var username = document.getElementById("username").value;
                var password = document.getElementById("password").value;
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200) {
                        var reply = this.responseText;
                        if (reply === "Login successful!") {
                            if (num === 1) {
                                xhttp1 = new XMLHttpRequest();
                                xhttp1.onreadystatechange = function () {
                                    if (this.readyState === 4 && this.status === 200) {
                                        var answer = this.responseText;
                                        var ans = answer.split(" ");
                                        window.location.href = "customer_home.php?mobile_no=" + ans[0] + "&amount=" + ans[1] + "&username=" + username + "&shop_id=" + ans[2];
                                    }
                                };
                                xhttp1.open("GET", "customer_data.php?username=" + username, true);
                                xhttp1.send();
                            } else {
                                window.location.href = "retailer_home.php?username=" + username;
                            }
                        } else {
                            document.getElementById("showMessage").innerHTML = reply;
                        }
                    }
                };
                xhttp.open("GET", "validate.php?username=" + username + "&password=" + password + "&num=" + num, true);
                xhttp.send();
            }
        </script>
    </head>
    <body>
        Username: <input id="username" type="text"/>
        <br />
        Password: <input id="password" type="password"/>                
        <?php
        $num = $_GET["num"];
        if ($num == 1) {
            echo '<input type="submit" onclick="check(1)" value="Log in" />';
        } else {
            echo '<input type="submit" onclick="check(2)" value="Log in" />';
        }
        ?>
        <br />
        <p id="showMessage" style="color: red"></p>
    </body>
</html>

