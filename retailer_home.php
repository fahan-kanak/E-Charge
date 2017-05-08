<?php
$username = $_GET["username"];
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Retailer home</title>
        <style>
            h1 {
                text-align: right;
                margin-right: 0;
            }
        </style>
        <script type="text/javascript">
            function test() {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200) {
                        var myarr = JSON.parse(this.responseText);
                        var myTable = "<table border='black'><tr><th>Mobile no.</th><th>Recharge amount</th><th></th></tr>\n";
                        var i;
                        for (i = 0; i < myarr.length; i++) {
                            myTable += "<tr><td>" + myarr[i]['mobile_no'] + "</td>";
                            myTable += "<td>" + myarr[i]['amount'] + "</td>";
                            myTable += "<td><button id='" + i + "'>Send</button></td></tr>\n";
                        }
                        myTable += "</table>";
                        document.getElementById("tble").innerHTML = myTable;
                        getTuple(myarr);
                    }
                };
                var username = <?php echo json_encode($username); ?>;
                xmlhttp.open("GET", "data_retrive.php?username=" + username, true);
                xmlhttp.send();
            }

            function getTuple(myarr) {
                var buttons = document.getElementsByTagName('button');
                for (var i = 0; i < buttons.length; i++) {
                    var button = buttons[i];
                    button.onclick = function (event) {
                        var id = event.currentTarget.id;
                        var mob_no = myarr[id]['mobile_no'];
                        var amount = myarr[id]['amount'];
                        window.location.href = "sms:01649782547?body=Recharge "+amount+"tk in "+mob_no;
                    };
                }
            }

            function logout() {
                window.location.href = "index.php";
            }
        </script>
    </head>
    <body onload="test()">
        <h1><input type="button" onclick="logout()" value="Log out" /></h1>
        Flexiload requests list:
        <br />                 
        <div id="tble"></div>   
    </body>
</html>
