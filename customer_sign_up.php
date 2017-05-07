<html>
    <script type="text/javascript">
        function checker() {
            var mobile_no = document.getElementById("mobile_no").value;
            var usr_name = document.getElementById("usr_nme").value;
            var password = document.getElementById("pass_word").value;
            var con_pass = document.getElementById("con_pass").value;
            var amount = document.getElementById("amount").value;
            var shop_id = document.getElementById("shop_id").value;
            if ((mobile_no.length === 0) || (usr_name.length === 0) || (password.length === 0) || (amount.length === 0) || (shop_id.length === 0)) {
                document.getElementById("showResult").innerHTML = "Blank input!";
            } else {
                if (mobile_no.length !== 11) {
                    document.getElementById("showResult").innerHTML = "Invalid mobile no.";
                } else {
                    if (password === con_pass) {
                        xhttp = new XMLHttpRequest();
                        xhttp.open("GET", "insert_data_customer.php?usr_name="+usr_name+"&password="+password+"&mobile_no="+mobile_no+"&amount="+amount+"&pref_shop_id="+shop_id, true);
                        xhttp.send();                        
                        window.location.href = "customer_home.php?mobile_no="+mobile_no+"&amount="+amount+"&username="+usr_name+"&shop_id="+shop_id;
                    } else {
                        document.getElementById("showResult").innerHTML = "Wrong password typed in Confirm password box!";
                    }
                }
            }
        }
    </script>
    <body>
        <input id="usr_nme" type="text" />:Username
        <br />
        <input id="pass_word" type="password" />:Password
        <br />
        <input id="con_pass" type="password" />:Confirm password
        <br />
        <input id="mobile_no" type="text" />:Mobile no.
        <br />
        <input id="amount" type="text" />:Default recharge amount
        <br />
        <input id="shop_id" type="text" />:Preferred shop id 
        <br />
        <input type="submit" onclick="checker()" value="Submit" /> 
        <br />
        <p id="showResult" style="color: red" ></p>
    </body>
</html>

