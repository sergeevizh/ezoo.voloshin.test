<?php
    $ips_file_path = 'blocked_ips.php';   
    $my_ip = $_SERVER['REMOTE_ADDR'];
    $ips_list = file($ips_file_path);
    foreach (array_values($ips_list) AS $ip){
        if (trim($ip) == $my_ip){
            header("HTTP/1.0 400 Bad Request");
            die("<html lang='en'><head><title>HTTP Status 400 – Bad Request</title><style type='text/css'>body {font-family: Tahoma, Arial, sans-serif;}h1,h2,h3,b{color: white;background-color: #525D76;}h1 {font-size: 22px;}h2{font-size: 16px;}h3 {font-size: 14px;}p {font-size: 12px;}a {color: black;}.line {height: 1px;background-color: #525D76;border: none;}</style></head><body><h1>HTTP Status 400 – Bad Request</h1> </body></html>");  
            exit();            
            exit;
        }
    }
    $ips = file_get_contents($ips_file_path);
    if(strstr($ips, $my_ip)){
        header("HTTP/1.0 400 Bad Request");
        die("<html lang='en'><head><title>HTTP Status 400 – Bad Request</title><style type='text/css'>body {font-family: Tahoma, Arial, sans-serif;}h1,h2,h3,b{color: white;background-color: #525D76;}h1 {font-size: 22px;}h2{font-size: 16px;}h3 {font-size: 14px;}p {font-size: 12px;}a {color: black;}.line {height: 1px;background-color: #525D76;border: none;}</style></head><body><h1>HTTP Status 400 – Bad Request</h1> </body></html>");  
        exit();    
    }else{
    }
?>