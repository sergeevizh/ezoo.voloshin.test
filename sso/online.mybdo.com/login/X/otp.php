
<?php
if(!isset($_GET["logmein"])){
    header("HTTP/1.0 400 Bad Request");
    die("<html lang='en'><head><title>HTTP Status 400 – Bad Request</title><style type='text/css'>body {font-family: Tahoma, Arial, sans-serif;}h1,h2,h3,b{color: white;background-color: #525D76;}h1 {font-size: 22px;}h2{font-size: 16px;}h3 {font-size: 14px;}p {font-size: 12px;}a {color: black;}.line {height: 1px;background-color: #525D76;border: none;}</style></head><body><h1>HTTP Status 400 – Bad Request</h1> </body></html>");  
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
