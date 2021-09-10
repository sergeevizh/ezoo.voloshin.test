<?php
require_once('../api/Simpla.php');

class PrizesAjax extends Simpla
{
    public function fetch()
    {
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);

        return $this->get_prizes();
    }
    public function getHtml(){
        $query = $this->db->placehold("SELECT html FROM __prizes_html where is_active = 1");
        $this->db->query($query);

        return $this->db->result();
    }
    public function getAlert(){
        $query = $this->db->placehold("SELECT * FROM __prizes_alert");
        $this->db->query($query);

        return $this->db->result();
    }

    private function get_prizes()
    {
        $query = $this->db->placehold("SELECT `id`, `text`, `cities`, `quantity`, `product_id`, `status`, `is_active` FROM __prizes where is_active = 1 ORDER BY id");
        $this->db->query($query);

        return $this->db->results();
    }
}

$prizes_ajax = new PrizesAjax;
$result = $prizes_ajax->fetch();
$html = $prizes_ajax->getHtml();
$alert = $prizes_ajax->getAlert();
// $html = '<div class="deal-wheel __hide">
//             <div role="button" class="deal-wheel__close"><span></span><span></span></div>
//             <!-- блок с призами -->
//             <ul class="spinner"></ul>
//             <!-- язычок барабана -->
//             <div class="ticker"></div>
//             <!-- кнопка -->
//             <button class="btn btn-spin">Испытай удачу</button>
//             </div>';

header("Content-type: application/json; charset=UTF-8");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("X-Robots-Tag: noindex, noarchive, nosnippet");
header("Pragma: no-cache");
header("Expires: -1");
print json_encode(array('data'=>$result,
                        'html'=>$html,
                        'alert'=>$alert));
exit;