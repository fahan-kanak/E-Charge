<html>
    <script type="text/javascript">
        function checker() {
            var mobile_no = document.getElementById("mobile_no").value;
            if (mobile_no.length !== 11) {
                document.getElementById("showResult").innerHTML = "Invalid mobile no.";
            } else {
                window.location.href = "customer_home.php?mobile_no="+mobile_no+"&amount="+document.getElementById("amount").value;
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
        <input id="mobile_no" type="text" />:Mobile no.
        <br />
        <input id="amount" type="text" />:Default recharge amount
        <br />
        <input type="text" />:Preferred shop id 
        <br />
        <input type="submit" onclick="checker()" value="Submit" /> 
        <br />
        <p id="showResult" style="color: red" ></p>
    </body>
</html>

