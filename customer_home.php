<?php
$mobile_no = $_GET["mobile_no"];
$amount = $_GET["amount"];
$username = $_GET["username"];
$shop_id = $_GET["shop_id"];
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer home</title>
        <script language="JavaScript">
            function highlight(field) {
                field.focus();
                field.select();
            }

            function snd_req() {
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    console.log(this.readyState + " " + this.status + " " + xhttp.responseText);
                    if (this.readyState === 4 && this.status === 200) {
                        document.getElementById("showMessage").innerHTML = xhttp.responseText;

                    }
                };

                var mobile_no = document.getElementById("mobile_no").value;
                var amount = document.getElementById("amount").value;
                var cus_usrname = <?php echo json_encode($username); ?>;
                var shop_id = <?php echo json_encode($shop_id); ?>;
                xhttp.open("GET", "request_submission.php?mobile_no=" + mobile_no + "&amount=" + amount + "&username=" + cus_usrname + "&shop_id=" + shop_id, true);
                xhttp.send();
            }

            function log_out() {
                window.location.href = "index.php";
            }
        </script>
    </head>
    <body>
        <input id="mobile_no" type="text" maxlength="11" onclick="highlight(this);" value="<?php echo ($mobile_no); ?>" />:Mobile no.
        <br />
        <input id="amount" type="text" onclick="highlight(this);" value="<?php echo ($amount); ?>" />:Recharge amount
        <br />
        <input type="checkbox" />:Urgent
        <br />
        <input type="submit" onclick="snd_req()" value="Send" />        
        <br />
        <input type="button" onclick="log_out()" value="Log out" />
        <br />
        <p id="showMessage" style="color: green"></p>
    </body>
</html>


