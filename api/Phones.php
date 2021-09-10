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
 * API Номера телефонов
 *
 * Class Phones
 */
class Phones extends Simpla
{

    /**
     * @param  array $filter
     * @return array
     */



    public function get_phones($filter = array())
    {
        $limit = 1000;
        $page = 1;

        $date_start_filter = '';
        $date_end_filter = '';
        $registration_filter = '';
        $contr_name = '';
        $contr_phone = '';



        if (!empty($filter['sort'])) {
            switch ($filter['sort']) {
                case 'name':
                    $order = 'ORDER BY o.name ASC';
                    break;

                case 'date':
                    $order = 'ORDER BY date';
                    break;
            }
        }

        if (isset($filter['contr_name'])){
            if (!empty($filter['contr_name'])){
                $contr_name = $this->db->placehold('AND o.name like ?', trim($filter['contr_name']));
            }


        }

        if (isset($filter['contr_phone'])){
            if (!empty($filter['contr_phone'])){
                $contr_phone = $this->db->placehold('AND o.phone like ?', trim($filter['contr_phone']));
            }

        }



        if (isset($filter['date_start'])){
            $date_start_filter = $this->db->placehold('AND DATE(date) >= ?', date('Y-m-d',strtotime($filter['date_start'])));
        }

        if (isset($filter['date_end'])){
            $date_end_filter = $this->db->placehold('AND DATE(date) <= ?', date('Y-m-d',strtotime($filter['date_end'])));
        }

        if (isset($filter['registration'])){
            switch ($filter['registration']){
                case 'registered': {
                    $registration_filter = $this->db->placehold("AND o.user_id != ''");
                }
                    break;
                case 'unregistered': {
                    $registration_filter = $this->db->placehold("AND o.user_id = ''");
                }
                    break;
                case 'all': {
                    $registration_filter = '';
                }
                    break;
                default: {
                    $registration_filter = '';
                }
                break;
            }
        }

        $group_id_filter = '';
        $keyword_filter = '';

        if (isset($filter['limit'])) {
            $limit = max(1, intval($filter['limit']));
        }

        if (isset($filter['page'])) {
            $page = max(1, intval($filter['page']));
        }




        /*        if (isset($filter['group_id'])) {
                    $group_id_filter = $this->db->placehold('AND u.group_id in(?@)', (array)$filter['group_id']);
                }

                if (isset($filter['keyword'])) {
                    $keywords = explode(' ', $filter['keyword']);
                    foreach ($keywords as $keyword) {
                        $keyword_filter .= $this->db->placehold('AND (u.name LIKE "%' . $this->db->escape(trim($keyword)) . '%" OR u.email LIKE "%' . $this->db->escape(trim($keyword)) . '%"  OR u.last_ip LIKE "%' . $this->db->escape(trim($keyword)) . '%")');
                    }
                }*/

        $sql_limit = $this->db->placehold(' LIMIT ?, ? ', ($page - 1) * $limit, $limit);

        $select = $this->db->placehold("o.name,
                                        o.email,
                                        o.phone,
                                        DATE_FORMAT(o.date, '%d.%m.%Y') as date,
                                        o.id,
                                        o.total_price,
                                        o.user_id as user,
                                        o.status,
                                        GROUP_CONCAT(DISTINCT l.name ORDER BY l.name SEPARATOR '; ') as labels,
                                        GROUP_CONCAT(concat(p.product_name, ', ', p.variant_name) SEPARATOR '; ') as product");

        $query = $this->db->placehold("SELECT $select FROM __orders o
                                       LEFT JOIN __purchases p ON o.id = p.order_id
                                       LEFT JOIN __orders_labels sol ON o.id = sol.order_id
                                       LEFT JOIN __labels l ON sol.label_id = l.id
                                       WHERE 1
                                       $date_start_filter
                                       $date_end_filter
                                       $registration_filter
                                       $contr_name
                                       $contr_phone
                                       GROUP BY o.id $order $sql_limit");
        $this->db->query($query);
        return $this->db->results();



        /*





         $sql_limit = $this->db->placehold(' LIMIT ?, ? ', ($page - 1) * $limit, $limit);
         // Выбираем пользователей
         $query = $this->db->placehold("SELECT u.id,
                                             u.email,
                                             u.password,
                                             u.name,
                                             u.phone,
                                             u.address,
                                             u.group_id,
                                             u.enabled,
                                             u.last_ip,
                                             u.created,
                                             g.discount,
                                             g.name as group_name
                                         FROM __users u
                                         LEFT JOIN __groups g ON u.group_id=g.id
                                         WHERE 1
                                             $group_id_filter
                                             $keyword_filter
                                         ORDER BY $order
                                         $sql_limit");
         $this->db->query($query);
         return $this->db->results();*/
    }

    /**
     * @param  array $filter
     * @return int
     */
    public function count_phones($filter = array())
    {


        $date_start_filter = '';
        $date_end_filter = '';
        $registration_filter = '';


        if (isset($filter['contr_name'])){
            if (!empty($filter['contr_name'])){
                $contr_name = $this->db->placehold('AND o.name like ?', trim($filter['contr_name']));
            }


        }

        if (isset($filter['contr_phone'])){
            if (!empty($filter['contr_phone'])){
                $contr_phone = $this->db->placehold('AND o.phone = ?', trim($filter['contr_phone']));
            }

        }

        if (isset($filter['registration'])){
            switch ($filter['registration']){
                case 'registered': {
                    $registration_filter = $this->db->placehold("AND o.user_id != ''");
                }
                    break;
                case 'unregistered': {
                    $registration_filter = $this->db->placehold("AND o.user_id = ''");
                }
                    break;
                case 'all': {
                    $registration_filter = '';
                }
                    break;
                default: {
                    $registration_filter = '';
                }
            }
        }



        if (isset($filter['date_start'])){
            $date_start_filter = $this->db->placehold('AND DATE(date) >= ?', date('Y-m-d',strtotime($filter['date_start'])));
        }

        if (isset($filter['date_end'])){
            $date_end_filter = $this->db->placehold('AND DATE(date) <= ?', date('Y-m-d',strtotime($filter['date_end'])));
        }

        /*        $group_id_filter = '';
                $keyword_filter = '';

                if (isset($filter['group_id'])) {
                    $group_id_filter = $this->db->placehold('AND u.group_id in(?@)', (array)$filter['group_id']);
                }

                if (isset($filter['keyword'])) {
                    $keywords = explode(' ', $filter['keyword']);
                    foreach ($keywords as $keyword) {
                        $keyword_filter .= $this->db->placehold('AND (u.name LIKE "%' . $this->db->escape(trim($keyword)) . '%" OR u.email LIKE "%' . $this->db->escape(trim($keyword)) . '%"  OR u.last_ip LIKE "%' . $this->db->escape(trim($keyword)) . '%")');
                    }
                }

                // Выбираем пользователей
                $query = $this->db->placehold("SELECT count(*) as count
                                                FROM __users u
                                                LEFT JOIN __groups g ON u.group_id=g.id
                                                WHERE 1
                                                    $group_id_filter
                                                    $keyword_filter");
                $this->db->query($query);
                return $this->db->result('count');*/

        $query = $this->db->placehold("SELECT GROUP_CONCAT(concat(p.product_name, ', ', p.variant_name) SEPARATOR '; '), count(distinct  o.id) as count FROM __orders o LEFT JOIN __purchases p ON o.id = p.order_id WHERE 1 $date_start_filter $date_end_filter $registration_filter $contr_name $contr_phone");
        $this->db->query($query);

        return $this->db->result('count');




    }

    public function get_sum_phones($filter = array())
    {

        $date_start_filter = '';
        $date_end_filter = '';
        $registration_filter = '';
        $contr_name = '';
        $contr_phone = '';

        if (isset($filter['contr_name'])){
            if (!empty($filter['contr_name'])){
                $contr_name = $this->db->placehold('AND o.name like ?', trim($filter['contr_name']));
            }


        }

        if (isset($filter['contr_phone'])){
            if (!empty($filter['contr_phone'])){
                $contr_phone = $this->db->placehold('AND o.phone = ?', trim($filter['contr_phone']));
            }

        }

        if (isset($filter['registration'])){
            switch ($filter['registration']){
                case 'registered': {
                    $registration_filter = $this->db->placehold("AND o.user_id != ''");
                }
                    break;
                case 'unregistered': {
                    $registration_filter = $this->db->placehold("AND o.user_id = ''");
                }
                    break;
                case 'all': {
                    $registration_filter = '';
                }
                    break;
                default: {
                    $registration_filter = '';
                }
            }
        }



        if (isset($filter['date_start'])){
            $date_start_filter = $this->db->placehold('AND DATE(date) >= ?', date('Y-m-d',strtotime($filter['date_start'])));
        }

        if (isset($filter['date_end'])){
            $date_end_filter = $this->db->placehold('AND DATE(date) <= ?', date('Y-m-d',strtotime($filter['date_end'])));
        }

        $select = $this->db->placehold("DATE_FORMAT(o.date, '%d.%m.%Y') as date,
                                        ROUND(SUM(o.total_price), 2) as sum");

        $query = $this->db->placehold("SELECT $select FROM __orders o WHERE 1 $date_start_filter $date_end_filter $registration_filter $contr_name $contr_phone");
        $this->db->query($query);
        return $this->db->results('sum');
    }

    /**
     * @param  int $id
     * @return bool|object
     */
    public function get_user($id)
    {
        if (gettype($id) == 'string') {
            $where = $this->db->placehold(' WHERE u.email=? ', $id);
        } else {
            $where = $this->db->placehold(' WHERE u.id=? ', intval($id));
        }

        // Выбираем пользователя
        $query = $this->db->placehold("SELECT u.id, u.email, u.password, u.name, u.phone, u.address, u.date_birthday, u.group_id, u.enabled, u.last_ip, u.created, g.discount, g.name as group_name
										FROM __users u
										LEFT JOIN __groups g ON u.group_id=g.id
											$where
										LIMIT 1", $id);
        $this->db->query($query);
        $user = $this->db->result();
        if (empty($user)) {
            return false;
        }
        $user->discount *= 1; // Убираем лишние нули, чтобы было 5 вместо 5.00
        return $user;
    }

    /**
     * @param  object|array $user
     * @return bool|int
     */
    public function add_user($user)
    {
        $user = (array)$user;
        if (isset($user['password'])) {
            $user['password'] = md5($this->salt . $user['password'] . md5($user['password']));
        }

        $query = $this->db->placehold("SELECT count(*) as count
										FROM __users
										WHERE email=?", $user['email']);
        $this->db->query($query);

        if ($this->db->result('count') > 0) {
            return false;
        }

        $query = $this->db->placehold("INSERT INTO __users SET ?%", $user);
        $this->db->query($query);
        return $this->db->insert_id();
    }

    /**
     * @param  int $id
     * @param  object|array $user
     * @return int
     */
    public function update_user($id, $user)
    {
        $user = (array)$user;
        if (isset($user['password'])) {
            $user['password'] = md5($this->salt . $user['password'] . md5($user['password']));
        }
        $query = $this->db->placehold("UPDATE __users SET ?% WHERE id=? LIMIT 1", $user, intval($id));
        $this->db->query($query);
        return $id;
    }

    /**
     * @param  int $id
     * @return bool
     */
    public function delete_user($id)
    {
        if (!empty($id)) {
            $query = $this->db->placehold("UPDATE __orders SET user_id=NULL WHERE user_id=?", intval($id));
            $this->db->query($query);

            $query = $this->db->placehold("DELETE FROM __users WHERE id=? LIMIT 1", intval($id));
            if ($this->db->query($query)) {
                return true;
            }
        }
        return false;
    }

    /**
     * @return array
     */
    public function get_groups()
    {
        // Выбираем группы
        $query = $this->db->placehold("SELECT g.id, g.name, g.discount, g.image
										FROM __groups AS g
										ORDER BY g.discount");
        $this->db->query($query);
        return $this->db->results();
    }

    /**
     * @param  int $id
     * @return object
     */
    public function get_group($id)
    {
        // Выбираем группу
        $query = $this->db->placehold("SELECT g.*
										FROM __groups AS g
										WHERE g.id=?
										LIMIT 1", $id);
        $this->db->query($query);
        $group = $this->db->result();

        return $group;
    }

    /**
     * @param  $group
     * @return int
     */
    public function add_group($group)
    {
        $query = $this->db->placehold("INSERT INTO __groups SET ?%", $group);
        $this->db->query($query);
        return $this->db->insert_id();
    }

    /**
     * @param  $id
     * @param  $group
     * @return int
     */
    public function update_group($id, $group)
    {
        $query = $this->db->placehold("UPDATE __groups SET ?% WHERE id=? LIMIT 1", $group, intval($id));
        $this->db->query($query);
        return $id;
    }

    /**
     * @param  $id
     * @return bool
     */
    public function delete_group($id)
    {
        if (!empty($id)) {
            $this->delete_image_group($id);

            $query = $this->db->placehold("UPDATE __users SET group_id=NULL WHERE group_id=? LIMIT 1", intval($id));
            $this->db->query($query);

            $query = $this->db->placehold("DELETE FROM __groups WHERE id=? LIMIT 1", intval($id));
            if ($this->db->query($query)) {
                return true;
            }
        }
        return false;
    }

    public function delete_image_group($id)
    {
        $query = $this->db->placehold('SELECT image FROM __groups WHERE id=?', intval($id));
        $this->db->query($query);
        $filename = $this->db->result('image');

        if (!empty($filename)) {
            $query = $this->db->placehold('UPDATE __groups SET image=NULL WHERE id=?', $id);
            $this->db->query($query);

            $query = $this->db->placehold('SELECT COUNT(*) as count FROM __groups WHERE image=? LIMIT 1', $filename);
            $this->db->query($query);
            $count = $this->db->result('count');

            if ($count == 0) {
                @unlink($this->config->root_dir . $this->config->groups_images_dir . $filename);
            }
        }
    }

    /**
     * @param  $email
     * @param  $password
     * @return bool|int
     */
    public function check_password($email, $password)
    {
        $encpassword = md5($this->salt . $password . md5($password));
        $query = $this->db->placehold("SELECT id FROM __users WHERE email=? AND password=? LIMIT 1", $email, $encpassword);
        $this->db->query($query);
        if ($id = $this->db->result('id')) {
            return $id;
        }

        return false;
    }
    /*Проверка кода смены пароля и времени её существования и возвращение пользователя*/
    public function get_user_check_remind($code, $timestampnew)
    {
        // Выбираем пользователя
        $query = $this->db->placehold("SELECT u.id, u.email, u.password, u.name, u.phone, u.address, u.group_id, u.enabled, u.last_ip, u.created, u.date_time_remind,  g.discount, g.name as group_name
										FROM __users u
										LEFT JOIN __groups g ON u.group_id=g.id
											 WHERE u.code_remind=?
										LIMIT 1", $code);
        $this->db->query($query);
        $user = $this->db->result();
        if (empty($user)) {
            return false;
        };
        if (($user->date_time_remind+43200<$timestampnew)||($user->date_time_remind>$timestampnew)){
            $this->users->update_user($user->id, array('code_remind' => null));
            $this->users->update_user($user->id, array('date_time_remind' => null));
            return false;
        }
        $user->discount *= 1; // Убираем лишние нули, чтобы было 5 вместо 5.00
        return $user;
    }
}
