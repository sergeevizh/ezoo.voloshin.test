<?php

/**
 * Simpla CMS
 *
 * @copyright    2021
 * @link        
 * @author        
 *
 */

require_once('api/Simpla.php');
require 'vendor/autoload.php';
$_SESSION['checking'] = $_POST['checked'];
// use PHPExcel;
// use PHPExcel_IOFactory;

// use PHPExcel as PE;
// use PHPExcel_IOFactory as PEO;
// $_SESSION['checked'] = $_POST['checked'];

class PrizeAdmin extends Simpla
{
    private $allowed_image_extentions = array('png', 'gif', 'jpg', 'jpeg', 'ico');
    private $passwd_file;
    private $htaccess_file;
	
    public function fetch()
    {
		$prize = new stdClass;
        $this->passwd_file = $this->config->root_dir . '/simpla/.passwd';
        $this->htaccess_file = $this->config->root_dir . '/simpla/.htaccess';

        $managers = $this->managers->get_managers();
        $this->design->assign('managers', $managers);
        $this->design->assign('promo_count', $this->promo->get_codes_count());
        $this->design->assign('promo_count_second', $this->promo_second->get_codes_count());
        $this->design->assign('promo_count_second', $this->promo_second->get_codes_count());
        $this->design->assign('delivery_city', $this->city->get_cities());
		$this->design->assign('times', $this->settings->times);
        
		// $prize->cities = $this->city->get_cities();
        $prize->prizes = $this->prizes->get_prizes();
        $prize->alert = $this->prizes->getAlert();
        $prize->html = $this->prizes->getHtml();
		$this->design->assign('alert', $prize->alert);
        $this->design->assign('html', $prize->html);
		$this->design->assign('prizes', $prize->prizes);
		$this->design->assign('prizes_count', count($prize->prizes));
        // $_SESSION['checking'] = $_POST['checked'];
        if(isset($_GET['save']))$this->design->assign('message_success', 'saved');
        if(isset($_GET['checked'])){
            $prize->checked = $_GET['checked'];
            $this->prizes->updateHtml($prize);
        }
        if ($this->request->method('POST')) {	
            // $_SESSION['checking'] = $this->request->post('checked');
            $prize->checked = $this->request->post('is_active');
            $prize->alert_id = $prize->alert->id;
            // if(!empty($this->request->post('text'))){
                $prize->alert_text = $this->request->post('alert');
                $this->prizes->updateHtml($prize);
                $this->prizes->updateAlert($prize);
                // header("Location: ".$this->config->root_url.'/simpla/index.php?module=PrizeAdmin&save');
            // }
        }
        return $this->design->fetch('prize.tpl');
    }
}
