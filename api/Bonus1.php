<?php

/**
 * Simpla CMS
 *
 * @copyright    2016 Denis Pikusov
 * @link        http://simplacms.ru
 * @author        Denis Pikusov
 *
 */


require_once('Simpla.php');

/**
 * Class Settings
 *
 *
 * Настройки сайта
 * @property string $site_name          Имя сайта
 * @property string $company_name       Имя компании
 * @property string $date_format        Формат даты
 * @property string $admin_email        Email для восстановления пароля
 * Оповещения
 * @property string $order_email - Email для оповещение о заказах
 * @property string $comment_email - Email для оповещение о комментариях
 * @property string $notify_from_email - Обратный адрес оповещений
 * Формат цены
 * @property string $decimals_point - Разделитель копеек
 * @property string $thousands_separator - Разделитель тысяч
 * Настройки каталога
 * @property string $products_num - Товаров на странице сайта
 * @property string $products_num_admin - Товаров на странице админки
 * @property string $max_order_amount - Максимум товаров в заказе
 * @property string $units - Единицы измерения товаров
 * Изображения товаров
 * @property string $watermark_offset_x - Горизонтальное положение водяного знака
 * @property string $watermark_offset_y - Вертикальное положение водяного знака
 * @property string $watermark_transparency - Прозрачность знака (больше — прозрачней)
 * @property string $images_sharpen - Резкость изображений (рекомендуется 20%)
 *
 * @property string $theme -
 * @property string $last_1c_orders_export_date -
 * @property string $license -
 *
 * @property string $pz_server
 * @property string $pz_password
 * @property string $pz_phones
 */
class Bonus extends Simpla
{
    /**
     * @var array $vars
     */
    private $vars = array();

    public function __construct()
    {
        parent::__construct();

        // Выбираем из базы настройки
        $this->db->query('SELECT name, value FROM __settings');

        // и записываем их в переменную
        foreach ($this->db->results() as $result) {
            if (!($this->vars[$result->name] = @unserialize($result->value))) {
                $this->vars[$result->name] = $result->value;
            }
        }
    }

    public function __get($name)
    {
        if (isset($this->vars[$name])) {
            return $this->vars[$name];
        } elseif ($res = parent::__get($name)) {
            return $res;
        } else {
            return null;
        }
    }

    public function __set($name, $value)
    {
        $this->vars[$name] = $value;

        if (is_array($value)) {
            $value = serialize($value);
        } else {
            $value = (string)$value;
        }

        $this->db->query('SELECT count(*) as count FROM __settings WHERE name=?', $name);

        if ($this->db->result('count') > 0) {
            $this->db->query('UPDATE __settings SET value=? WHERE name=?', $value, $name);
        } else {
            $this->db->query('INSERT INTO __settings SET value=?, name=?', $value, $name);
        }
    }
	
	
	public function getNameIdBonuses()
	{
		$query = $this->db->placehold("SELECT `name`, `id` FROM __bonuss");
        $this->db->query($query);
        return $this->db->results();
	}
	public function getBonusbyId($id)
	{
		$query = $this->db->placehold("SELECT * FROM __bonuss as `bs` inner join __bonus_conditionss as `bc` ON bs.id=bc.id_bonus where bs.id=".$id);
        $this->db->query($query);
        return $this->db->result();
	}
	public function updateSbonuss($bonus)
    {
		$sq = "UPDATE __bonuss SET `name` = '".$bonus->name."', `desc_mini` = '".$bonus->desc_mini."', `description` = '".$bonus->description.
				"', `status` = ".$bonus->status.", `percent` = ".$bonus->percent;
		if(!empty($bonus->img_detail))
			$sq.= ", `img_preview` = '".$bonus->img_preview."'";
		if(!empty($bonus->img_detail))
			$sq.= ", `img_detail` = ".$bonus->img_detail."'";
		$sq.= " WHERE `id` = ".$bonus->id;
		//$sql = $this->db->placehold($sq);
		//$this->db->query($sql);
    }
	public function updateBbonusConditionss($bonus)
    {	
		$sq = "UPDATE __bonus_conditionss SET ";
		
		
		$where = " WHERE `id_bonus` = ".$bonus->id;
		//$sql = $this->db->placehold($sq.$where);
		//$this->db->query($sql);
	}
	
	
	
	
	
	
	
    public function __isset($name)
    {
        return isset($this->vars[$name]);
    }

    public function checkPickupSetting($setting_name)
    {
        $query = $this->db->placehold("SELECT `setting_id`, `value` FROM __settings WHERE `name` = ?", htmlspecialchars(trim($setting_name)));
        $this->db->query($query);

        return $this->db->result();
    }

    public function getProductsWithPickups($pickup)
    {
        $query = $this->db->placehold("SELECT `id` as product_id FROM __products WHERE `pickup` = ?", (int)$pickup);
        $this->db->query($query);

        return $this->db->results();
    }
    public function getProductsWithLecense($lecense)
    {
        $query = $this->db->placehold("SELECT `id` as product_id FROM __products WHERE `lecense` = ?", (int)$lecense);
        $this->db->query($query);

        return $this->db->results();
    }

    public function insertSetting($setting_name, $data)
    {
        $query = $this->db->placehold("INSERT INTO __settings (`name`, `value`) VALUES (?,?)", html_entity_decode(trim($setting_name)), serialize($data));
        $this->db->query($query);
        $id = $this->db->insert_id();
        return $id;
    }
    public function insertSettingLecense($setting_name, $data)
    {
        $query = $this->db->placehold("INSERT INTO __settings (`name`, `value`) VALUES (?,?)", html_entity_decode(trim($setting_name)), serialize($data));
        $this->db->query($query);
        $id = $this->db->insert_id();
        return $id;
    }

    public function deleteSettings($name)
    {
        $query = $this->db->placehold("DELETE FROM __settings WHERE `name` = ?", htmlspecialchars(trim($name)));
        $this->db->query($query);
    }
    public function deleteSettingsLecense($name)
    {
        $query = $this->db->placehold("DELETE FROM __settings WHERE `name` = ?", htmlspecialchars(trim($name)));
        $this->db->query($query);
    }

    public function updatePickupForProductsAndSetNull()
    {
        $sql = $this->db->placehold("UPDATE __products SET `pickup` = null WHERE `pickup` = 1");
        $this->db->query($sql);
    }

    public function updatePickupForProducts($product_id)
    {
        $sql = $this->db->placehold("UPDATE __products SET `pickup` = 1 WHERE `id` = ?", (int)$product_id);
        $this->db->query($sql);
    }
    public function updateLecenseForProductsAndSetNull()
    {
        $sql = $this->db->placehold("UPDATE __products SET `lecense` = null WHERE `lecense` = 1");
        $this->db->query($sql);
    }

    public function updateLecenseForProducts($product_id)
    {
        $sql = $this->db->placehold("UPDATE __products SET `lecense` = 1 WHERE `id` = ?", (int)$product_id);
        $this->db->query($sql);
    }
}
