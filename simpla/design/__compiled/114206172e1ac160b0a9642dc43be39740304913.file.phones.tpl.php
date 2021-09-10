<?php /* Smarty version Smarty-3.1.18, created on 2021-01-19 11:17:37
         compiled from "simpla/design/html/phones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1081716396600695a1b279c2-23140549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '114206172e1ac160b0a9642dc43be39740304913' => 
    array (
      0 => 'simpla/design/html/phones.tpl',
      1 => 1592315146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1081716396600695a1b279c2-23140549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager' => 0,
    'config' => 0,
    'group_id' => 0,
    'keyword' => 0,
    'sort' => 0,
    'users' => 0,
    'phones' => 0,
    'phone' => 0,
    'contr_name' => 0,
    'contr_phone' => 0,
    'registration_filter' => 0,
    'date_start' => 0,
    'date_end' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_600695a1b5b9f9_26060410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600695a1b5b9f9_26060410')) {function content_600695a1b5b9f9_26060410($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<li><a href="index.php?module=UsersAdmin">Покупатели</a></li>
	<?php if (in_array('groups',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=GroupsAdmin">Группы</a></li><?php }?>
	<?php if (in_array('coupons',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CouponsAdmin">Купоны</a></li><?php }?>
	<li class="active"><a href="index.php?module=PhonesAdmin">Номера телефонов</a></li>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Номера телефонов', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/simpla/design/js/piecon/piecon.js"></script>
<script>
	var group_id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8', true);?>
';
	var keyword='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
';
	var sort='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort']->value, ENT_QUOTES, 'UTF-8', true);?>
';

	

	$(function() {

		// On document load
		$('input#start').click(function() {

			Piecon.setOptions({fallback: 'force'});
			Piecon.setProgress(0);
			$("#progressbar").progressbar({ value: 0 });
			do_export();

		});

		function do_export(page)
		{

			page = typeof(page) != 'undefined' ? page : 1;
			var form = $('.d-filter'),
					replace = 'module=PhonesAdmin&',
					request = form.serialize().replace(replace, '');


			console.log(form.serialize());

			$.ajax({
				url: "ajax/export_phones.php?"+request,
				data: {page:page},
				dataType: 'json',
				beforeSend: function(data){
				},
				success: function(data){

					console.log(data);

					if(data.error)
					{
						$("#progressbar").hide('fast');
						alert(data.error);
					}
					else if(data && !data.end)
					{
						Piecon.setProgress(Math.round(100*data.page/data.totalpages));
						$("#progressbar").progressbar({ value: 100*data.page/data.totalpages });
						do_export(data.page*1+1);
					}
					else
					{
						Piecon.setProgress(100);
						$("#progressbar").hide('fast');
						window.location.href = 'files/export_phones/phones.csv';

					}
				},
				error:function(xhr, status, errorThrown) {
					alert(errorThrown+'\n'+xhr.responseText);
				}
			});

		}
	});
	
</script>
<style>
	.ui-progressbar-value { background-image: url(design/images/progress.gif); background-position:left; border-color: #009ae2;}
	#progressbar{ clear: both; height:29px; }
	#result{ clear: both; width:100%;}
	#download{ display:none;  clear: both; }
</style>
<script src="design/js/jquery/datepicker/jquery.ui.datepicker-ru.js"></script>
<script>



	$(document).ready(function () {

		$('input[name="date_start"]').datepicker({
			regional:'ru'
		});

		$('input[name="date_end"]').datepicker({
			regional:'ru'
		});

	});
</script>

<?php if ($_smarty_tpl->tpl_vars['users']->value||$_smarty_tpl->tpl_vars['keyword']->value) {?>
	<form method="get">
		<div id="search">
			<input type="hidden" name="module" value='UsersAdmin'>
			<input class="search" type="text" name="keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
			<input class="search_button" type="submit" value=""/>
		</div>
	</form>
<?php }?>


<div id="header">
	
	<h1>Номера телефонов</h1>


	<div id='progressbar'></div>
	<input class="button_green" id="start" type="button" name="" value="Экспортировать" />


</div>


<!-- Основная часть -->
<div id="main_list">

	<!-- Листалка страниц -->
	<?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- Листалка страниц (The End) -->

	<div id="sort_links" style='display:block;'>
		<!-- Ссылки для сортировки -->
		Упорядочить по
		<?php if ($_smarty_tpl->tpl_vars['sort']->value!='name') {?><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>'name'),$_smarty_tpl);?>
">имени</a><?php } else { ?>имени<?php }?> или
		<?php if ($_smarty_tpl->tpl_vars['sort']->value!='date') {?><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>'date'),$_smarty_tpl);?>
">дате</a><?php } else { ?>дате<?php }?>
		<!-- Ссылки для сортировки (The End) -->
	</div>

	<form id="form_list" method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'PhonesAdmin'),$_smarty_tpl);?>
">
		<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

		<div id="list" class="phones">
			<?php  $_smarty_tpl->tpl_vars['phone'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['phone']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['phones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['phone']->key => $_smarty_tpl->tpl_vars['phone']->value) {
$_smarty_tpl->tpl_vars['phone']->_loop = true;
?>
				<div class="row even">
					<div class="checkbox cell">
						<input type="checkbox" name="check[]" value="1587">
					</div>
					<div class="user_name cell">
						<?php if ($_smarty_tpl->tpl_vars['phone']->value->user) {?>
							<a href="index.php?module=UserAdmin&id=<?php echo $_smarty_tpl->tpl_vars['phone']->value->user;?>
"><?php echo $_smarty_tpl->tpl_vars['phone']->value->name;?>
</a>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['phone']->value->name;?>

						<?php }?>
					</div>
					<div class="user_phone cell">
						<a href="index.php?module=OrderAdmin&id=<?php echo $_smarty_tpl->tpl_vars['phone']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['phone']->value->phone;?>
</a>
					</div>
					<div class="user_register cell">
						<?php if ($_smarty_tpl->tpl_vars['phone']->value->user) {?>
							Зарегистрирован
						<?php } else { ?>
							Незарегистрирован
						<?php }?>
					</div>
					<div class="user_date cell">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['phone']->value->date);?>

					</div>
					<div class="icons cell">
						<a class="enable" title="Активен" href="#"></a>
						<a class="delete" title="Удалить" href="#"></a>
					</div>
					<div class="clear"></div>
				</div>
			<?php } ?>



			
		</div>

		<div id="action">
			<label id="check_all" class="dash_link">Выбрать все</label>

			<span id=select>
		<select name="action">
			<option value="disable">Заблокировать</option>
			<option value="enable">Разблокировать</option>
			<option value="delete">Удалить</option>
		</select>
		</span>

			<input id="apply_action" class="button_green" type="submit" value="Применить">
		</div>

	</form>

	<!-- Листалка страниц -->
	<?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- Листалка страниц (The End) -->

</div>


<!-- Меню -->
<div id="right_menu">
	<form class="d-filter" method="GET">
		<div class="filter-heading">Фильтр</div>
		<input type="hidden" name="module" value="PhonesAdmin">
		<ul>
			<li>
				<input name="contr_name" type="text"   value="<?php if ($_smarty_tpl->tpl_vars['contr_name']->value) {?><?php echo $_smarty_tpl->tpl_vars['contr_name']->value;?>
<?php }?>" placeholder="Введите имя контрагента"/>
			</li>
			<li>
				<input name="contr_phone" class="contr_phone" type="text"   value="<?php if ($_smarty_tpl->tpl_vars['contr_phone']->value) {?><?php echo $_smarty_tpl->tpl_vars['contr_phone']->value;?>
<?php }?>" placeholder="Введите номер телефона"/>
			</li>
			<li>

				<input type="radio" name="registration" value="registered" <?php if ($_smarty_tpl->tpl_vars['registration_filter']->value=='registered') {?>checked<?php }?>><label for="registration">Зарегистрированные</label></li>
			<li>

				<input type="radio" name="registration" value="unregistered" <?php if ($_smarty_tpl->tpl_vars['registration_filter']->value=='unregistered') {?>checked<?php }?>><label for="registration">Не зарегистрированные</label></li>
			<li>

				<input type="radio" name="registration" value="all" <?php if ($_smarty_tpl->tpl_vars['registration_filter']->value=='') {?>checked<?php }?>><label for="registration">Все</label></li>
			
			<li>
				<label>Дата от:</label>
				<input name="date_start" class="d-data" type="text"   value="<?php if ($_smarty_tpl->tpl_vars['date_start']->value) {?><?php echo $_smarty_tpl->tpl_vars['date_start']->value;?>
<?php }?>" autocomplete="off"/>
			</li>
			<li>
				<label>Дата до:</label>
				<input name="date_end" class="d-data" type="text"   value="<?php if ($_smarty_tpl->tpl_vars['date_end']->value) {?><?php echo $_smarty_tpl->tpl_vars['date_end']->value;?>
<?php }?>"  autocomplete="off"/>
			</li>
			<li>
				<input type="submit" value="Подобрать">
			</li>
		</ul>
	</form>

</div>
<!-- Меню  (The End) -->


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

		// Выделить все
		$("#check_all").click(function() {
			$('#list input[type="checkbox"][name*="check"]').attr('checked', 1-$('#list input[type="checkbox"][name*="check"]').attr('checked'));
		});

		// Удалить
		$("a.delete").click(function() {
			$('#list input[type="checkbox"][name*="check"]').attr('checked', false);
			$(this).closest(".row").find('input[type="checkbox"][name*="check"]').attr('checked', true);
			$(this).closest("form").find('select[name="action"] option[value=delete]').attr('selected', true);
			$(this).closest("form").submit();
		});

		/*	// Скрыт/Видим
			$("a.enable").click(function() {
				var icon        = $(this);
				var line        = icon.closest(".row");
				var id          = line.find('input[type="checkbox"][name*="check"]').val();
				var state       = line.hasClass('invisible')?1:0;
				icon.addClass('loading_icon');
				$.ajax({
					type: 'POST',
					url: 'ajax/update_object.php',
					data: {'object': 'user', 'id': id, 'values': {'enabled': state}, 'session_id': '<?php echo $_SESSION['id'];?>
'},
			success: function(data){
				icon.removeClass('loading_icon');
				if(state)
					line.removeClass('invisible');
				else
					line.addClass('invisible');
			},
			dataType: 'json'
		});
		return false;
	});*/

		// Подтверждение удаления
		$("form").submit(function() {
			if($('#list input[type="checkbox"][name*="check"]:checked').length>0)
				if($('select[name="action"]').val()=='delete' && !confirm('Подтвердите удаление'))
					return false;
		});
	});

</script>

<?php }} ?>
