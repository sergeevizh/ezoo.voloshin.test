<?php /* Smarty version Smarty-3.1.18, created on 2021-08-09 10:15:39
         compiled from "simpla/design/html/bonus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174670157760dcea8d134f01-35672656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63d97c68d17c913e06828011a77a97ee5dbcee63' => 
    array (
      0 => 'simpla/design/html/bonus.tpl',
      1 => 1628362399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174670157760dcea8d134f01-35672656',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_60dcea8d1584e7_32211575',
  'variables' => 
  array (
    'manager' => 0,
    'limits' => 0,
    'bonus_count' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'config' => 0,
    'bonusall' => 0,
    'bonus' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60dcea8d1584e7_32211575')) {function content_60dcea8d1584e7_32211575($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<?php if (in_array('settings',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=SettingsAdmin">Настройки</a></li><?php }?>
	<?php if (in_array('currency',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CurrencyAdmin">Валюты</a></li><?php }?>
	<?php if (in_array('delivery',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=DeliveriesAdmin">Доставка</a></li><?php }?>
	<?php if (in_array('payment',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=PaymentMethodsAdmin">Оплата</a></li><?php }?>
	<?php if (in_array('managers',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=ManagersAdmin">Менеджеры</a></li><?php }?>
	<?php if (in_array('cities',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CitiesAdmin">Города доставки</a></li><?php }?>
	<li class="active"><a href="index.php?module=BonusAdmin">Бонус</a></li>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable("Бонус", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<script>
	var limit_rows = <?php echo count($_smarty_tpl->tpl_vars['limits']->value);?>
;
</script>
<style>
    .form-row {
        margin-bottom: 15px;
        padding-right: 15px;
    }
    .form-row label {
        display: block;
        color: #777;
        margin-bottom: 5px;
    }
    .form-row input[type="text"] {
        width: 100%;
        padding: 5px;
        box-sizing: border-box;
    }

    /* Стили для вывода превью */
    .img-item {
        display: inline-block;
        margin: 0 20px 20px 0;
        position: relative;
        user-select: none;
    }
    .img-item img {
        border: 1px solid #767676;
    }
    .img-item a {
        display: inline-block;
        background: url(/remove.png) 0 0 no-repeat;
        position: absolute;
        top: -5px;
        right: -9px;
        width: 20px;
        height: 20px;
        cursor: pointer;
    }
</style>

	<script src="design/js/autocomplete/jquery.autocomplete-min.js"></script>
	<script src="design/js/jquery/datepicker/jquery.ui.datepicker-ru.js"></script>
	



<div id="header">
	<h1><?php if ($_smarty_tpl->tpl_vars['bonus_count']->value) {?><?php echo $_smarty_tpl->tpl_vars['bonus_count']->value;?>
<?php } else { ?>Нет<?php }?> Бонус<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['bonus_count']->value,'','ов','а');?>
</h1>
	<a class="add" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'BonusOneAdmin'),$_smarty_tpl);?>
">Добавить бонус</a>
</div>


<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
<!-- Системное сообщение -->
<div class="message message_success">
	<span class="text"><?php if ($_smarty_tpl->tpl_vars['message_success']->value=='saved') {?>Настройки сохранены<?php }?></span>
	<?php if ($_GET['return']) {?>
	<a class="button" href="<?php echo $_GET['return'];?>
">Вернуться</a>
	<?php }?>
</div>
<!-- Системное сообщение (The End)-->
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
<!-- Системное сообщение -->
<div class="message message_error">
	<span class="text"><?php if ($_smarty_tpl->tpl_vars['message_error']->value=='watermark_is_not_writable') {?>Установите права на запись для файла <?php echo $_smarty_tpl->tpl_vars['config']->value->watermark_file;?>
<?php }?></span>
	<a class="button" href="">Вернуться</a>
</div>
<!-- Системное сообщение (The End)-->
<?php }?>
<!-- Спиоск всех бонусов -->
<div class="block" id="main_list">
	<?php  $_smarty_tpl->tpl_vars['bonus'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bonus']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bonusall']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bonus']->key => $_smarty_tpl->tpl_vars['bonus']->value) {
$_smarty_tpl->tpl_vars['bonus']->_loop = true;
?>
		<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['bonus']->value->id;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'BonusOneAdmin','id'=>$_tmp1,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['bonus']->value->name;?>
" class="
		<?php if ($_smarty_tpl->tpl_vars['bonus']->value->status==1) {?>green_button <?php }?> <?php if ($_smarty_tpl->tpl_vars['bonus']->value->status==0) {?>red_button <?php }?> mybonus"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
	<?php } ?>
</div>

<!-- Меню -->
<div id="right_menu">
	<div class="all">Всего бонусов:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus_count']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
</div>
<!-- Меню  (The End) --><?php }} ?>
