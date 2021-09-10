<?php /* Smarty version Smarty-3.1.18, created on 2021-01-18 18:15:07
         compiled from "simpla/design/html/brands.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101625056005a5fbac5ab4-49143035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94f12a226f69f1db93dc9417d21fafab407d23a3' => 
    array (
      0 => 'simpla/design/html/brands.tpl',
      1 => 1597313118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101625056005a5fbac5ab4-49143035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager' => 0,
    'brands' => 0,
    'brand' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6005a5fbaf8d59_41482532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6005a5fbaf8d59_41482532')) {function content_6005a5fbaf8d59_41482532($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<?php if (in_array('products',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=ProductsAdmin">Товары</a></li><?php }?>
	<?php if (in_array('categories',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CategoriesAdmin">Категории</a></li><?php }?>
	<li class="active"><a href="index.php?module=BrandsAdmin">Бренды</a></li>
	<?php if (in_array('features',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=FeaturesAdmin">Свойства</a></li><?php }?>
	<?php if (in_array('colors',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=ColorsAdmin">Цвета</a></li><?php }?>
	<?php if (in_array('regions',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=RegionsAdmin">Магазины</a></li><?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Бренды', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div id="header">
	<h1>Бренды</h1>
	<a class="add" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'BrandAdmin','return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">Добавить бренд</a>
</div>

<?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>
<div id="main_list" class="brands">

	<form id="list_form" method="post">
	<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

		<div id="list" class="brands">
			<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
			<div class="row<?php if ($_smarty_tpl->tpl_vars['brand']->value->visible_is_main) {?> visible_is_main<?php }?><?php if ($_smarty_tpl->tpl_vars['brand']->value->label_new) {?> label_new<?php }?>">
		 		<div class="checkbox cell">
					<input type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
" />
				</div>
				<div class="cell">
					<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'BrandAdmin','id'=>$_smarty_tpl->tpl_vars['brand']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
				</div>
				<div class="icons cell">
					<a class="label_new" title="new" href="#"></a>
					<a class="visible_is_main" title="Показать на главной" href="#"></a>
					<a class="preview" title="Предпросмотр в новом окне" href="../brands/<?php echo $_smarty_tpl->tpl_vars['brand']->value->url;?>
" target="_blank"></a>
					<a class="delete"  title="Удалить" href="#"></a>
				</div>
				<div class="clear"></div>
			</div>
			<?php } ?>
		</div>

		<div id="action">
			<label id="check_all" class="dash_link">Выбрать все</label>

			<span id="select">
			<select name="action">
				<option value="delete">Удалить</option>
			</select>
			</span>
			<input id="apply_action" class="button_green" type="submit" value="Применить">
		</div>

	</form>
</div>
<?php } else { ?>
Нет брендов
<?php }?>


	<style>

		.icons a.label_new {
			background-image: url(design/images/new.png);

		}
		.icons a.visible_is_main {
			background-image: url(design/images/star.png);

		}

		.label_new .icons a.label_new, .visible_is_main .icons a.visible_is_main {
			-webkit-filter: none;
			-moz-filter: none;
			-ms-filter: none;
			-o-filter: none;
			filter: none;
		}

		.icons a.label_new, .icons a.visible_is_main {
			-webkit-filter: grayscale(100%);
			-moz-filter: grayscale(100%);
			-ms-filter: grayscale(100%);
			-o-filter: grayscale(100%);
			filter: grayscale(100%);
			filter: gray; /* IE 6-9 */
		}

	</style>
<script>
$(function() {

	// Раскраска строк
	function colorize()
	{
		$("#list div.row:even").addClass('even');
		$("#list div.row:odd").removeClass('even');
	}
	// Раскрасить строки сразу
	colorize();

	// Показать label new
	$("a.label_new").click(function() {
		var icon        = $(this);
		var line        = icon.closest("div.row");
		var id          = line.find('input[type="checkbox"][name*="check"]').val();
		var state       = line.hasClass('label_new')?0:1;
		icon.addClass('loading_icon');
		$.ajax({
			type: 'POST',
			url: 'ajax/update_object.php',
			data: {'object': 'brands', 'id': id, 'values': {'label_new': state}, 'session_id': '<?php echo $_SESSION['id'];?>
'},
			success: function(data){
				icon.removeClass('loading_icon');
				if(state)
					line.addClass('label_new');
				else
					line.removeClass('label_new');

			},
			dataType: 'json'
		});
		return false;
	});
	// показать на главной
	$("a.visible_is_main").click(function() {
		var icon        = $(this);
		var line        = icon.closest("div.row");
		var id          = line.find('input[type="checkbox"][name*="check"]').val();
		var state       = line.hasClass('visible_is_main')?0:1;
		icon.addClass('loading_icon');
		$.ajax({
			type: 'POST',
			url: 'ajax/update_object.php',
			data: {'object': 'brands', 'id': id, 'values': {'visible_is_main': state}, 'session_id': '<?php echo $_SESSION['id'];?>
'},
			success: function(data){
				icon.removeClass('loading_icon');
				if(state)
					line.addClass('visible_is_main');
				else
					line.removeClass('visible_is_main');

			},
			dataType: 'json'
		});
		return false;
	});


	// Выделить все
	$("#check_all").click(function() {
		$('#list input[type="checkbox"][name*="check"]').attr('checked', $('#list input[type="checkbox"][name*="check"]:not(:checked)').length>0);
	});

	// Удалить
	$("a.delete").click(function() {
		$('#list input[type="checkbox"][name*="check"]').attr('checked', false);
		$(this).closest("div.row").find('input[type="checkbox"][name*="check"]').attr('checked', true);
		$(this).closest("form").find('select[name="action"] option[value=delete]').attr('selected', true);
		$(this).closest("form").submit();
	});

	// Подтверждение удаления
	$("form").submit(function() {
		if($('#list input[type="checkbox"][name*="check"]:checked').length>0)
			if($('select[name="action"]').val()=='delete' && !confirm('Подтвердите удаление'))
				return false;
	});

});
</script>

<?php }} ?>
