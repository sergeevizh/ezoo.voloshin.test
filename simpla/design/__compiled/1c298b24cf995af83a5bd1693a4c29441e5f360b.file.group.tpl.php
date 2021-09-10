<?php /* Smarty version Smarty-3.1.18, created on 2021-05-19 07:00:08
         compiled from "simpla/design/html/group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166363076860a48d48b93337-07453316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c298b24cf995af83a5bd1693a4c29441e5f360b' => 
    array (
      0 => 'simpla/design/html/group.tpl',
      1 => 1549370506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166363076860a48d48b93337-07453316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager' => 0,
    'group' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_60a48d48bc6f42_03963652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60a48d48bc6f42_03963652')) {function content_60a48d48bc6f42_03963652($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<?php if (in_array('users',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=UsersAdmin">Покупатели</a></li><?php }?>
	<li class="active"><a href="index.php?module=GroupsAdmin">Группы</a></li>
	<?php if (in_array('coupons',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CouponsAdmin">Купоны</a></li><?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['group']->value->id) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['group']->value->name, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Новая группа', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
<!-- Системное сообщение -->
<div class="message message_success">
	<span class="text"><?php if ($_smarty_tpl->tpl_vars['message_success']->value=='added') {?>Группа добавлена<?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value=='updated') {?>Группа изменена<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_success']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
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
	<span class="text"><?php if ($_smarty_tpl->tpl_vars['message_error']->value=='empty_name') {?>Название группы не может быть пустым<?php }?></span>
	<a class="button" href="">Вернуться</a>
</div>
<!-- Системное сообщение (The End)-->
<?php }?>


<!-- Основная форма -->
<form method=post id=product enctype="multipart/form-data">
<input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<div id="name">
		<input class="name" name=name type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
		<input name=id type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
	</div>

	<!-- Левая колонка свойств товара -->
	<div id="column_left">

		<!-- Параметры страницы -->
		<div class="block">
			<ul>
				<li><label class=property>Скидка</label><input name="discount" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->discount, ENT_QUOTES, 'UTF-8', true);?>
" />%</li>
			</ul>
		</div>
		<!-- Параметры страницы (The End)-->



	</div>
	<!-- Левая колонка свойств товара (The End)-->
	<div id="column_right">

		<!-- Изображение категории -->
		<div class="block layer images">
			<h2>Изображение</h2>
			<input class='upload_image' name=image type=file>
			<input type=hidden name="delete_image" value="">
			<?php if ($_smarty_tpl->tpl_vars['group']->value->image) {?>
				<ul>
					<li>
						<a href='#' class="delete"><img src='design/images/cross-circle-frame.png'></a>
						<img src="../<?php echo $_smarty_tpl->tpl_vars['config']->value->groups_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['group']->value->image;?>
" alt="" />
					</li>
				</ul>
			<?php }?>
		</div>

	</div>

	<input class="button_green button_save" type="submit" name="" value="Сохранить" />

</form>
<!-- Основная форма (The End) -->

<script>
	$(function() {

		// Удаление изображений
		$(".images a.delete").click(function () {
			$("input[name='delete_image']").val('1');
			$(this).closest("ul").fadeOut(200, function () {
				$(this).remove();
			});
			return false;
		});

	})

</script>
<?php }} ?>
