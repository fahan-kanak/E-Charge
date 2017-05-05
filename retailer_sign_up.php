<html>
    <script type="text/javascript">
        function checker() {
            var e_mail = document.getElementById("e_mail").value;
            if ((e_mail.indexOf('@') <= -1) || (e_mail.indexOf('.') <= -1)) {
                document.getElementById("showResult").innerHTML = "Invalid email address!";
            } else {
                window.location.href = "retailer_home.php";
            }
        }
    </script>
    <body>
        <input type="text" />:Username
        <br />
        <input type="password" />:Password
        <br />
        <input type="password" />:Confirm password
        <br />
        <input type="text" />:Shop id 
        <br />
        <input id="e_mail" type="text" />:E-mail address
        <br />
        <input type="submit" onclick="checker()" value="Submit" /> 
        <br />
        <p id="showResult" style="color: red" ></p>
    </body>
</html>

