<?php

require_once('Simpla.php');

class Prizes extends Simpla
{
    public function get_prizes() {
        $query = $this->db->placehold("SELECT * FROM __prizes ORDER BY id");
        $this->db->query($query);
        return $this->db->results();
    }

    public function get_first_prize() {
        $query = $this->db->placehold("SELECT * FROM __prizes ORDER BY id ASC LIMIT 1");
        $this->db->query($query);
        return $this->db->result();
    }

    public function getPrizebyId($id)
	{
		$query = $this->db->placehold("SELECT * FROM __prizes where id=".$id);
        $this->db->query($query);
        return $this->db->result();
	}
    public function getPrizeAction($id)
	{
		$query = $this->db->placehold("SELECT count(id) as count FROM __prizes_actions where prize_id=".$id);
        $this->db->query($query);
        return $this->db->result();
	}

    public function addPrize($prize) {
        $query = $this->db->placehold("INSERT INTO __prizes (`text`, `background`, `color`, `cities`, `quantity`, `product_id`, `status`, `is_active`) 
                                        VALUES ('".$prize->text."','".$prize->background."','".$prize->color."','".$prize->cities."','".$prize->quantity."','".$prize->product_id."','".$prize->status."','".$prize->is_active."')");
        $this->db->query($query);
        return $this->db->insert_id();
    }

    public function deletePrize($prize_id) {
        $query = $this->db->placehold("DELETE FROM __prizes WHERE id=?", $prize_id);
        $this->db->query($query);
    }

    public function updatePrize($prize)
    {
		$sq = "UPDATE __prizes SET `text` = '".$prize->text."', `cities` = '".$prize->cities."', `quantity` = '".$prize->quantity."', `product_id` = '".$prize->product_id."', `status` = '".$prize->status."', `is_active` = '".$prize->is_active."'";
		// if(!empty($bonus->img_preview))
		// 	$sq.=", `img_preview` = '".$bonus->img_preview."'";	
		// if(!empty($bonus->img_detail))
		// 	$sq.=", `img_detail` = '".$bonus->img_detail."'";	
		$where = " WHERE `id` = '".$prize->id."'";
		$sql = $this->db->placehold($sq.$where);
		$this->db->query($sql);
    }

    public function getLastItemPrize()
    {
		$query = "SELECT id, background, color FROM __prizes WHERE  ID = (SELECT MAX(ID) FROM __prizes)";
		$this->db->query($query);
		$item = $this->db->result();
		return $item;
	}
    // public function clear_codes() {
    //     $query = $this->db->placehold("TRUNCATE TABLE __prizes_action");
    //     $this->db->query($query);
    // }

    // public function get_codes_count() {
    //     $query = $this->db->placehold("SELECT count(distinct id) as count FROM __prizes");
    //     $this->db->query($query);
    //     return $this->db->result('count');
    // }

    public function getAlert() {
        $query = $this->db->placehold("SELECT * FROM __prizes_alert");
        $this->db->query($query);
        return $this->db->result();
    }
    public function updateAlert($prize)
    {
		$sq = "UPDATE __prizes_alert SET `text` = '".$prize->alert_text."'";
		// if(!empty($bonus->img_preview))
		// 	$sq.=", `img_preview` = '".$bonus->img_preview."'";	
		// if(!empty($bonus->img_detail))
		// 	$sq.=", `img_detail` = '".$bonus->img_detail."'";	
		$where = " WHERE `id` = 1";
		$sql = $this->db->placehold($sq.$where);
		$this->db->query($sql);
    }
    public function getHtml() {
        $query = $this->db->placehold("SELECT is_active FROM __prizes_html");
        $this->db->query($query);
        return $this->db->result();
    }
    public function updateHtml($prize)
    {
		$sq = "UPDATE __prizes_html SET `is_active` = '".$prize->checked."'";
		// if(!empty($bonus->img_preview))
		// 	$sq.=", `img_preview` = '".$bonus->img_preview."'";	
		// if(!empty($bonus->img_detail))
		// 	$sq.=", `img_detail` = '".$bonus->img_detail."'";	
		$where = " WHERE `id` = 1";
		$sql = $this->db->placehold($sq.$where);
		$this->db->query($sql);
    }
    public function getPrizesAction($order_id) {
        $query = $this->db->placehold("SELECT pa.order_id, pa.prize_id, p.text FROM __prizes_actions AS `pa` LEFT JOIN __prizes AS `p` ON pa.prize_id = p.id WHERE pa.order_id =".$order_id);
        $this->db->query($query);
        return $this->db->result();
    }

}
