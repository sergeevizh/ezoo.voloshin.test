<?php /* Smarty version Smarty-3.1.18, created on 2021-02-04 07:00:27
         compiled from "simpla/design/html/export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:217470622601b715b995ef7-11311057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feba405a492a9c18d68d54c02ae980932450374e' => 
    array (
      0 => 'simpla/design/html/export.tpl',
      1 => 1549370506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217470622601b715b995ef7-11311057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager' => 0,
    'message_error' => 0,
    'export_files_dir' => 0,
    'exports' => 0,
    'export' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_601b715b9c9f29_81549721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_601b715b9c9f29_81549721')) {function content_601b715b9c9f29_81549721($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<?php if (in_array('import',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=ImportAdmin">Импорт</a></li><?php }?>
	<li class="active"><a href="index.php?module=ExportAdmin">Экспорт</a></li>
	<?php if (in_array('backup',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=BackupAdmin">Бекап</a></li><?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Экспорт товаров', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
	<!-- Системное сообщение -->
	<div class="message message_error">
	<span class="text">
		<?php if ($_smarty_tpl->tpl_vars['message_error']->value=='no_permission') {?>
			Установите права на запись в папку <?php echo $_smarty_tpl->tpl_vars['export_files_dir']->value;?>

		<?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='iconv_or_mb_convert_encoding') {?>
			Отсутствует iconv или mb_convert_encoding
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['message_error']->value;?>

		<?php }?>
	</span>
	</div>
	<!-- Системное сообщение (The End)-->
<?php }?>


<div id="main_list">
	<h1>Экспорт товаров</h1>
	<?php if ($_smarty_tpl->tpl_vars['message_error']->value!='no_permission') {?>
		<div id='progressbar'></div>
		<input class="button_green" id="start" type="button" name="" value="Экспортировать"/>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['exports']->value) {?>
		<form id="list_form" method="post">
			<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
			<div id="list">
				<?php  $_smarty_tpl->tpl_vars['export'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['export']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['exports']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['export']->key => $_smarty_tpl->tpl_vars['export']->value) {
$_smarty_tpl->tpl_vars['export']->_loop = true;
?>
					<div class="row">
						<?php if ($_smarty_tpl->tpl_vars['message_error']->value!='no_permission') {?>
							<div class="checkbox cell">
								<input title="выбрать" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['export']->value->name;?>
"/>
							</div>
						<?php }?>
						<div class="name cell">
							<a href="files/backup/<?php echo $_smarty_tpl->tpl_vars['export']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['export']->value->name;?>
</a>
							(<?php if ($_smarty_tpl->tpl_vars['export']->value->size>1024*1024) {?><?php echo round(($_smarty_tpl->tpl_vars['export']->value->size/1024/1024),2);?>
 МБ<?php } else { ?><?php echo round(($_smarty_tpl->tpl_vars['export']->value->size/1024),2);?>
 КБ<?php }?>
							)
						</div>
						<div class="icons cell">
							<?php if ($_smarty_tpl->tpl_vars['message_error']->value!='no_permission') {?>
								<a class="delete" title="Удалить" href="#"></a>
							<?php }?>
						</div>
						<div class="clear"></div>
					</div>
				<?php } ?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['message_error']->value!='no_permission') {?>
				<div id="action">
					<label id="check_all" class="dash_link">Выбрать все</label>

					<span id="select">
						<select title="Выбрать действие" name="action">
							<option value="delete">Удалить</option>
						</select>
					</span>

					<input id="apply_action" class="button_green" type="submit" value="Применить">
				</div>
			<?php }?>
		</form>
	<?php }?>
</div>
<script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/simpla/design/js/piecon/piecon.js"></script>
<script>
	var filename = 'export_<?php echo trim($_smarty_tpl->tpl_vars['manager']->value->login);?>
_<?php echo date("Y_m_d_G_i_s");?>
.csv';
	
	$(function () {

		// On document load
		$('input#start').click(function () {

			Piecon.setOptions({
				fallback: 'force'
			});
			Piecon.setProgress(0);
			$("#progressbar").progressbar({value: 0});

			$("#start, #list_form").hide('fast');
			do_export();

		});

		function do_export(page) {
			page = typeof(page) != 'undefined' ? page : 1;

			$.ajax({
				url: "ajax/export.php",
				data: {page: page, filename: filename},
				dataType: 'json',
				success: function (data) {
					if (data.error)
					{
						$("#progressbar").hide('fast');
						alert(data.error);
					}
					else if (data && !data.end) {
						Piecon.setProgress(Math.round(100 * data.page / data.totalpages));
						$("#progressbar").progressbar({value: 100 * data.page / data.totalpages});
						do_export(data.page * 1 + 1);
					}
					else {
						if (data && data.end) {
							Piecon.setProgress(100);
							$("#progressbar").hide('fast');
							window.location.href = 'files/export/' + filename;
						}
					}
				},
				error: function (xhr, status, errorThrown) {
					alert(errorThrown + '\n' + xhr.responseText);
				}

			});

		}

		// Раскраска строк
		function colorize() {
			$("#list div.row:even").addClass('even');
			$("#list div.row:odd").removeClass('even');
		}

		// Раскрасить строки сразу
		colorize();

		// Выделить все
		$("#check_all").click(function () {
			$('#list input[type="checkbox"][name*="check"]').attr('checked', $('#list input[type="checkbox"][name*="check"]:not(:checked)').length > 0);
		});

		// Удалить
		$("a.delete").click(function () {
			$('#list input[type="checkbox"][name*="check"]').attr('checked', false);
			$(this).closest(".row").find('input[type="checkbox"][name*="check"]').attr('checked', true);
			$(this).closest("form").find('select[name="action"] option[value=delete]').attr('selected', true);
			$(this).closest("form").submit();
		});

		$("form#list_form").submit(function () {
			if ($('select[name="action"]').val() == 'delete' && !confirm('Подтвердите удаление'))
				return false;
		});
	});
	
</script>

<style>
	#list { margin-top: 20px; }
	.ui-progressbar-value { background-image: url(design/images/progress.gif); background-position:left; border-color: #009ae2;}
	#progressbar{ clear: both; height:29px; }
	#result{ clear: both; width:100%;}
	#download{ display:none;  clear: both; }
</style>
<?php }} ?>
