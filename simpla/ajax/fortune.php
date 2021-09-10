<?php
session_start();
require_once('../../api/Simpla.php');

// $_SESSION['checking'] = $_POST['checked'];

$simpla = new Simpla();
// $_SESSION['checking'] = $simpla->request->post('checked');
$alert = $simpla->prizes->getAlert();
$html = $simpla->prizes->getHtml();
print_r(json_encode(array(
            'alert' => $alert,
            'html' => $html
        )));
exit;