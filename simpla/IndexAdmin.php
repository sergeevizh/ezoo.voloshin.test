<?php

/**
 * Simpla CMS
 *
 * @copyright	2016 Denis Pikusov
 * @link		http://simplacms.ru
 * @author		Denis Pikusov
 *
 */

require_once('api/Simpla.php');

// Этот класс выбирает модуль в зависимости от параметра Section и выводит его на экран
class IndexAdmin extends Simpla
{
    // Соответсвие модулей и названий соответствующих прав
    private $modules_permissions = array(
        'ProductsAdmin'       => 'products',
        'ProductAdmin'        => 'products',
        'CategoriesAdmin'     => 'categories',
        'CategoryAdmin'       => 'categories',
        'BrandsAdmin'         => 'brands',
        'BrandAdmin'          => 'brands',
        'FeaturesAdmin'       => 'features',
        'FeatureAdmin'        => 'features',
        'ColorsAdmin'         => 'colors',
        'ColorAdmin'          => 'colors',
        'OrdersAdmin'         => 'orders',
        'OrderAdmin'          => 'orders',
        'OrdersLabelsAdmin'   => 'labels',
        'OrdersLabelAdmin'    => 'labels',
        'OrdersCouriersAdmin'   => 'couriers',
        'OrdersCourierAdmin'    => 'couriers',
        'UsersAdmin'          => 'users',
        'UserAdmin'           => 'users',
        'ExportUsersAdmin'    => 'users',
        'GroupsAdmin'         => 'groups',
        'GroupAdmin'          => 'groups',
        'CouponsAdmin'        => 'coupons',
        'CouponAdmin'         => 'coupons',
        'PagesAdmin'          => 'pages',
        'PageAdmin'           => 'pages',
        'BlogAdmin'           => 'blog',
        'PostAdmin'           => 'blog',
        'CommentsAdmin'       => 'comments',
        'FeedbacksAdmin'      => 'feedbacks',
        'ImportAdmin'         => 'import',
        'ExportAdmin'         => 'export',
        'BackupAdmin'         => 'backup',
        'StatsAdmin'          => 'stats',
        'ThemeAdmin'          => 'design',
        'StylesAdmin'         => 'design',
        'TemplatesAdmin'      => 'design',
        'ImagesAdmin'         => 'design',
        'SettingsAdmin'       => 'settings',
        'BonusAdmin'  	      => 'bonus',
        'BonusOneAdmin'  	  => 'bonus',
        'PrizeAdmin'  	      => 'prizes',
        'PrizeOneAdmin'  	      => 'prizes',
        'CurrencyAdmin'       => 'currency',
        'DeliveriesAdmin'     => 'delivery',
        'DeliveryAdmin'       => 'delivery',
        'PaymentMethodAdmin'  => 'payment',
        'PaymentMethodsAdmin' => 'payment',
        'ManagersAdmin'       => 'managers',
        'ManagerAdmin'        => 'managers',
        'LicenseAdmin'        => 'license',
        'CitiesAdmin'       => 'cities',
        'CityAdmin'        => 'cities',
        'PhonesAdmin'      => 'phones',
        'OrdersDeliveryArea' => 'delivery_area',
        'ExportPhonesAdmin' => 'phones'
        /*regions*/
        ,'RegionAdmin'         => 'regions'
        ,'RegionsAdmin'        => 'regions'
        /*/regions*/
    );

    // Конструктор
    public function __construct()
    {
        // Вызываем конструктор базового класса
        parent::__construct();

        $this->design->set_templates_dir('simpla/design/html');

        if (!is_dir($this->config->root_dir . '/compiled')) {
            mkdir($this->config->root_dir . 'simpla/design/compiled', 0777);
        }

        $this->design->set_compiled_dir('simpla/design/compiled');

        $this->design->assign('settings', $this->settings);
        $this->design->assign('config', $this->config);

        // Администратор
        $this->manager = $this->managers->get_manager();
        $this->design->assign('manager', $this->manager);

        // Берем название модуля из get-запроса
        $module = $this->request->get('module', 'string');
        $module = preg_replace("/[^A-Za-z0-9]+/", "", $module);

        // Если не запросили модуль - используем модуль первый из разрешенных
        if (empty($module) || !is_file('simpla/' . $module . '.php')) {
            foreach ($this->modules_permissions as $m => $p) {
                if ($this->managers->access($p)) {
                    $module = $m;
                    break;
                }
            }
        }
        if (empty($module)) {
            $module = 'ProductsAdmin';
        }

        // Подключаем файл с необходимым модулем
        require_once('simpla/' . $module . '.php');

        // Создаем соответствующий модуль
        if (class_exists($module)) {
            $this->module = new $module();
        } else {
            die("Error creating $module class");
        }
    }

    public function fetch()
    {
        $currency = $this->money->get_currency();
        $this->design->assign("currency", $currency);

        // Проверка прав доступа к модулю
        if (isset($this->modules_permissions[get_class($this->module)])
            && $this->managers->access($this->modules_permissions[get_class($this->module)])
        ) {
            $content = $this->module->fetch();
            $this->design->assign("content", $content);
        } else {
            $this->design->assign("content", "Permission denied");
        }

        // Счетчики для верхнего меню
        $new_orders_counter = $this->orders->count_orders(array('status' => 0));
        $this->design->assign("new_orders_counter", $new_orders_counter);

        $new_comments_counter = $this->comments->count_comments(array('approved' => 0));
        $this->design->assign("new_comments_counter", $new_comments_counter);

        // Создаем текущую обертку сайта (обычно index.tpl)
        $wrapper = $this->design->smarty->getTemplateVars('wrapper');
        if (is_null($wrapper)) {
            $wrapper = 'index.tpl';
        }

        if (!empty($wrapper)) {
            return $this->body = $this->design->fetch($wrapper);
        } else {
            return $this->body = $content;
        }
    }
}
