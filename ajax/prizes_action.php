<?php
session_start();
require_once('../api/Simpla.php');
$_SESSION['prizes_id'] = array("id"=> 0,"text"=> "Не выбрано","background"=> "","color"=> "",);

if(isset($_POST["prizes_id"]) && empty($_SESSION['prize_status'])){
    $_SESSION['prizes_id'] = $_POST["prizes_id"];
}
if(isset($_POST["product_id"]) && empty($_SESSION['product_id'])){
    $_SESSION['product_id'] = $_POST["product_id"];
}
if(isset($_POST["cities"]) && empty($_SESSION['cities'])){
    $_SESSION['cities'] = $_POST["cities"];
}
if(isset($_POST["prize_status"]) && empty($_SESSION['prize_status'])){
    $_SESSION['prize_status'] = $_POST["prize_status"];
}
if(isset($_POST["prize_text"]) && empty($_SESSION['prize_text'])){
    $_SESSION['prize_text'] = $_POST["prize_text"];
}

//когда закроют вкладку
if(isset($_POST["prize_session"])){
    unset($_SESSION['product_id']);
    unset($_SESSION['cities']);
    unset($_SESSION['prize_status']);
    unset($_SESSION['prize_text']);
}
class PrizesActionAjax extends Simpla
{
    public function add_prize($order_id, $prize_id, $variant_id)
    {
        $query = $this->db->placehold("INSERT INTO __prizes_actions SET order_id=?, prize_id=?, variant_id=?", $order_id, $prize_id, $variant_id);
        $this->db->query($query);
    } 
}