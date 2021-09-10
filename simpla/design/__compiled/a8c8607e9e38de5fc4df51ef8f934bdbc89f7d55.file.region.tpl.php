<?php /* Smarty version Smarty-3.1.18, created on 2021-06-07 19:51:26
         compiled from "simpla/design/html/region.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70627051960be4e8e2ec350-05564295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8c8607e9e38de5fc4df51ef8f934bdbc89f7d55' => 
    array (
      0 => 'simpla/design/html/region.tpl',
      1 => 1595339597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70627051960be4e8e2ec350-05564295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager' => 0,
    'region' => 0,
    'message_success' => 0,
    'message_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_60be4e8e326c11_61132011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60be4e8e326c11_61132011')) {function content_60be4e8e326c11_61132011($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<?php if (in_array('products',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'ProductsAdmin','keyword'=>null,'category_id'=>null,'brand_id'=>null,'filter'=>null,'page'=>null),$_smarty_tpl);?>
">Товары</a></li><?php }?>
	<?php if (in_array('categories',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CategoriesAdmin">Категории</a></li><?php }?>
	<?php if (in_array('brands',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=BrandsAdmin">Бренды</a></li><?php }?>
	<?php if (in_array('features',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=FeaturesAdmin">Свойства</a></li><?php }?>
	<?php if (in_array('colors',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=ColorsAdmin">Цвета</a></li><?php }?>
	<li class="active"><a href="index.php?module=RegionsAdmin">Магазины</a></li>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['region']->value->id) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['region']->value->name, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Новый магазин', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('tinymce_init.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 

<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
<!-- Системное сообщение -->
<div class="message message_success">
	<span><?php if ($_smarty_tpl->tpl_vars['message_success']->value=='added') {?>Магазин добавлен<?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value=='updated') {?>Магазин обновлен<?php }?></span>
	<?php if ($_GET['return']) {?>
	<a class="button" href="<?php echo $_GET['return'];?>
">Назад</a>
	<?php }?>
</div>
<!-- Системное сообщение (The End)-->
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
<!-- Системное сообщение -->
<div class="message message_error">
	<span><?php if ($_smarty_tpl->tpl_vars['message_error']->value=='empty_name') {?>Введите полное название<?php }?></span>
	<span><?php if ($_smarty_tpl->tpl_vars['message_error']->value=='empty_short_name') {?>Введите точное название города<?php }?></span>
	<span><?php if ($_smarty_tpl->tpl_vars['message_error']->value=='empty_code_is') {?>Введите код склада из 1С<?php }?></span>
	<a class="button" href="">Назад</a>
</div>
<!-- Системное сообщение (The End)-->
<?php }?>



<!-- Основная форма -->
<form method=post id=product enctype="multipart/form-data">
	<input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<div id="name">
		Полное название<input class="name" required name=name type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['region']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/> 
		<input name='id' type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['region']->value->id;?>
"/> 
		<div class="checkbox">
			<input name=enabled value='1' type="checkbox" id="active_checkbox" <?php if ($_smarty_tpl->tpl_vars['region']->value->enabled) {?>checked<?php }?>/> <label for="active_checkbox">Активна</label>
		</div>
	</div> 
    <div id="name">
        Точное название города<input class="name" required name=short_name type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['region']->value->short_name, ENT_QUOTES, 'UTF-8', true);?>
"/>
    </div> 
    <div id="name">
        Код склада из 1C<input class="name" name=code_is required type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['region']->value->code_is, ENT_QUOTES, 'UTF-8', true);?>
"/>
    </div> 
 
	<!-- Описание товара (The End)-->
	<input class="button_green button_save" type="submit" name="" value="Сохранить" />
	
</form>
<!-- Основная форма (The End) --><?php }} ?>
