<?php /* Smarty version Smarty-3.1.18, created on 2021-09-01 07:48:41
         compiled from "simpla/design/html/prize.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18566918256124ba958c1ea7-22892741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99166affa029e198e3f46afeca88e3770b2160a3' => 
    array (
      0 => 'simpla/design/html/prize.tpl',
      1 => 1630471718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18566918256124ba958c1ea7-22892741',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6124ba95968142_50367370',
  'variables' => 
  array (
    'manager' => 0,
    'limits' => 0,
    'prizes_count' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'config' => 0,
    'prizes' => 0,
    'prize' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6124ba95968142_50367370')) {function content_6124ba95968142_50367370($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
<?php if (in_array('settings',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=SettingsAdmin">Настройки</a></li><?php }?>
<?php if (in_array('currency',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CurrencyAdmin">Валюты</a></li><?php }?>
<?php if (in_array('delivery',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=DeliveriesAdmin">Доставка</a></li><?php }?>
<?php if (in_array('payment',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=PaymentMethodsAdmin">Оплата</a></li><?php }?>
<?php if (in_array('managers',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=ManagersAdmin">Менеджеры</a></li><?php }?>
<?php if (in_array('cities',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CitiesAdmin">Города доставки</a></li><?php }?>
<?php if (in_array('prizes',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li class="active"><a href="index.php?module=BonusAdmin">Бонус</a></li><?php }?>
<li class="active"><a href="index.php?module=PrizeAdmin">Призы</a></li>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable("Призы", null, 1);
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

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.switch{
    position: absolute;
    margin-left: 93px;
}
.switch p{
    margin-left: 92px;
}
</style>

<script src="design/js/autocomplete/jquery.autocomplete-min.js"></script>
<script src="design/js/jquery/datepicker/jquery.ui.datepicker-ru.js"></script>

<script>
function changing(){
    let ch = $("#is_active");
    let checked = ch.is(":checked");
     if (checked) {
    //ON
    // $.ajax({
		// 	type: 'POST',
		// 	url: 'ajax/fortune.php',
		// 	data: { checked:'true'},
		// 	success: function(data){
       
		// 	},
		// 	dataType: 'json'
		// });	
    // window.location.href = 'https://ezo.voloshin.by/simpla/index.php?module=PrizeAdmin&checked='+1
      
    console.log('true');
    } else {
    //   $.ajax({
		// 	type: 'POST',
		// 	url: 'ajax/fortune.php',
		// 	data: { checked :'false'},
		// 	success: function(data){
        
		// 	},
		// 	dataType: 'json'
		// });
    // window.location.href = 'https://ezo.voloshin.by/simpla/index.php?module=PrizeAdmin&checked='+0
    // console.log(window.location);
    console.log('false');
    }
}
$.get( "ajax/fortune.php", function( data ) {
  let result = JSON.parse(data)
  $("textarea#alert").attr("value", result.alert.text);
  if(result.html.is_active == 1){
    $("input#is_active").attr('checked','checked');
  }
  
  console.log( result.html.is_active);
});
  

</script>




<div id="header">
<h1><?php if ($_smarty_tpl->tpl_vars['prizes_count']->value) {?><?php echo $_smarty_tpl->tpl_vars['prizes_count']->value;?>
<?php } else { ?>Нет<?php }?> Приз<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['prizes_count']->value,'','ов','а');?>
</h1>
<a class="add" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'PrizeOneAdmin'),$_smarty_tpl);?>
">Добавить приз</a>
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
<div class="block">
		<h2>Текст</h2>
    <form method="POST">
		<textarea name="alert" id="alert" class="editor_small"></textarea>
    <input class="button_green button_save" type="submit" name="save" value="Сохранить" />
    <div class="switch">
        <p>Вкл.Выкл</p>
        <label class="switch">
        <input type="checkbox" name="is_active" id="is_active" class="is_active" value="1">
        <span class="slider round"></span>
        </label>
    </div>
    </form>
</div>
<div class="block">
</div>
<!-- Спиоск всех бонусов -->
<div class="block" id="main_list">
<?php  $_smarty_tpl->tpl_vars['prize'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prize']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prizes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prize']->key => $_smarty_tpl->tpl_vars['prize']->value) {
$_smarty_tpl->tpl_vars['prize']->_loop = true;
?>
    <a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['prize']->value->id;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'PrizeOneAdmin','id'=>$_tmp1,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['prize']->value->text;?>
" class="
    <?php if ($_smarty_tpl->tpl_vars['prize']->value->is_active==1) {?>green_button <?php }?> <?php if ($_smarty_tpl->tpl_vars['prize']->value->is_active==0) {?>red_button <?php }?> mybonus"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prize']->value->text, ENT_QUOTES, 'UTF-8', true);?>
</a>
<?php } ?>
</div>

<!-- Меню -->
<div id="right_menu">
<div class="all">Всего бонусов:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prizes_count']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>

</div>
<!-- Меню  (The End) --><?php }} ?>
