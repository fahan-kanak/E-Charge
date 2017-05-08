<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Retailer sign up</title>
        <script type="text/javascript">
            function checker() {
                var e_mail = document.getElementById("e_mail").value;
                var usr_name = document.getElementById("usr_nme").value;
                var password = document.getElementById("pass_word").value;
                var con_pass = document.getElementById("con_pass").value;
                var shop_id = document.getElementById("shop_id").value;
                if ((e_mail.length === 0) || (usr_name.length === 0) || (password.length === 0) || (shop_id.length === 0)) {
                    document.getElementById("showResult").innerHTML = "Blank input!";
                } else {
                    if ((e_mail.indexOf('@') <= -1) || (e_mail.indexOf('.') <= -1)) {
                        document.getElementById("showResult").innerHTML = "Invalid email address!";
                    } else {
                        if (password === con_pass) {
                            xhttp = new XMLHttpRequest();
                            xhttp.open("GET", "insert_data_retailer.php?usr_name=" + usr_name + "&password=" + password + "&shop_id=" + shop_id + "&e_mail_id=" + e_mail, true);
                            xhttp.send();
                            window.location.href = "retailer_home.php?username=" + usr_name;
                        } else {
                            document.getElementById("showResult").innerHTML = "Wrong password typed in Confirm password box!";
                        }
                    }
                }
            }
        </script>
    </head>
    <body>
        <input id="usr_nme" type="text" />:Username
        <br />
        <input id="pass_word" type="password" />:Password
        <br />
        <input id="con_pass" type="password" />:Confirm password
        <br />
        <input id="shop_id" type="text" />:Shop id 
        <br />
        <input id="e_mail" type="text" />:E-mail address
        <br />
        <input type="submit" onclick="checker()" value="Submit" /> 
        <br />
        <p id="showResult" style="color: red" ></p>
    </body>
</html>

