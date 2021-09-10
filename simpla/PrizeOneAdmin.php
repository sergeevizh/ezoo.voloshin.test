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


class PrizeOneAdmin extends Simpla
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
		$prize_id = $this->request->get('id');
        
        $this->design->assign('managers', $managers);
        $this->design->assign('promo_count', $this->promo->get_codes_count());
        $this->design->assign('promo_count_second', $this->promo_second->get_codes_count());
        $this->design->assign('delivery_city', $this->city->get_cities());
        $this->design->assign('brands', $this->brands->get_brands());
        $this->design->assign('times', $this->settings->times);
		if(isset($prize_id)){
			$prize = $this->prizes->getPrizebyId($prize_id);
			$prize->used = $this->prizes->getPrizeAction($prize_id);
			$balance = $prize->quantity - $prize->used->count;
			$prize->balance = $balance > 0 ? $balance : 0;
            
		}
        $statuses = array(1 => 'Подарок',
                        2 => 'Скидка',
                        3 => 'Промокод');
                        
        $products = $this->products->renders(array());
		// $products = $this->products->get_products(array('id' => $prize->product_id));
        $this->design->assign('prizeCity', explode(';',$prize->cities));
		$this->design->assign('prize', $prize);
        $this->design->assign('products', $products);
        $this->design->assign('statuses', $statuses);
        
		$lastPrize = $this->prizes->getLastItemPrize();
		if(isset($_GET['save']))$this->design->assign('message_success', 'saved');
		if ($this->request->method('POST')) {	
				if(isset($_POST['delete'])){
					$this->prizes->deletePrize($prize_id);
					header("Location: ".$this->config->root_url.'/simpla/index.php?module=PrizeAdmin');
					exit();
				}
				$prize = new stdClass;
				$prize->id = $this->request->get('id');
				$prize->text = $this->request->post('text');
				if($lastPrize->background === '#FF191B'){
					$prize->background = '#fff';
					$prize->color = '#3d3d3d';
				}else{
					$prize->background = '#FF191B';
					$prize->color = '#fff';
				}
				$prize->status = $this->request->post('status');
                $prize->quantity = $this->request->post('quantity');
				$prize->is_active = $this->request->post('is_active');
                $prize->product_id = $this->request->post('status') == 2 || $this->request->post('status') == 3 ? 0 : $this->request->post('product_id');
				

				if(!empty($this->request->post('city')))
					$prize->cities = implode(';',$this->request->post('city'));
				
				if(!empty($prize->id)){//если обновляем		
					// if(!empty($bonus->promokod) ){
					// 	$this->bonus->deleteBonusPromos($bonus->id);
					// }
					//update
					$this->prizes->updatePrize($prize);
					// $this->bonus->updatebonusConditionss($bonus);
					// $this->bonus->updatebonuspromos($bonus);
					
					//подумать с кодами
				}else{// или создаем новый

					$idGet = $this->prizes->addPrize($prize);
					header("Location: ".$this->config->root_url.'/simpla/index.php?module=PrizeOneAdmin&id='.$idGet.'&save');
					// exit();
					
				}
				header("Location: ".$this->config->root_url.'/simpla/index.php?' .$_SERVER['QUERY_STRING'].'&save');
				
        }     

        return $this->design->fetch('prizeOne.tpl');
    }
}
