<?php /* Smarty version Smarty-3.1.18, created on 2021-08-09 14:55:28
         compiled from "simpla/design/html/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:308336951600591153f9531-25605281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4e52b127af716ae51bc134a94fc3a2fca59b9e7' => 
    array (
      0 => 'simpla/design/html/settings.tpl',
      1 => 1628362410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308336951600591153f9531-25605281',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_600591154af0f8_52268995',
  'variables' => 
  array (
    'manager' => 0,
    'limits' => 0,
    'delivery_city' => 0,
    'city' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'config' => 0,
    'settings' => 0,
    'message_success_promo' => 0,
    'promo_count' => 0,
    'promo_time' => 0,
    'message_success_promo_second' => 0,
    'promo_count_second' => 0,
    'promo_time_second' => 0,
    'currency' => 0,
    'limit' => 0,
    'key' => 0,
    'managers' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600591154af0f8_52268995')) {function content_600591154af0f8_52268995($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/Smarty/libs/plugins/function.math.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<li class="active"><a href="index.php?module=SettingsAdmin">Настройки</a></li>
	<?php if (in_array('currency',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CurrencyAdmin">Валюты</a></li><?php }?>
	<?php if (in_array('delivery',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=DeliveriesAdmin">Доставка</a></li><?php }?>
	<?php if (in_array('payment',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=PaymentMethodsAdmin">Оплата</a></li><?php }?>
	<?php if (in_array('managers',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=ManagersAdmin">Менеджеры</a></li><?php }?>
	<?php if (in_array('cities',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CitiesAdmin">Города доставки</a></li><?php }?>
	<?php if (in_array('bonus',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=BonusAdmin">Бонус</a></li><?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable("Настройки", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<script>
	var limit_rows = <?php echo count($_smarty_tpl->tpl_vars['limits']->value);?>
;
</script>

	<script src="design/js/autocomplete/jquery.autocomplete-min.js"></script>
	<script src="design/js/jquery/datepicker/jquery.ui.datepicker-ru.js"></script>
	<script>
		$(function () {
			$('.date-picker').datepicker({
				regional:'ru'
			});

			$('#promo_blocks span.add_first').click(function () {
				var html = '<li>';
				html += '<select name="promo_time[]">';
                html += '<option value="" disabled selected hidden>-- Не выбрано --</option>';
                html += '<option value="10:00-12:00">10:00-12:00</option>';
                html += '<option value="12:00-14:00">12:00-14:00</option>';
                html += '<option value="14:00-16:00">14:00-16:00</option>';
                html += '<option value="16:00-18:00">16:00-18:00</option>';
                html += '<option value="18:00-20:00">18:00-20:00</option>';
                html += '<option value="20:00-22:00">20:00-22:00</option>';
                html += '<option value="22:00-23:00">22:00-23:00</option>';
                html += '</select>';
				html += '<span class="delete"><i class="dash_link">Удалить</i></span>';
				html += '</li>';
				$('#promo_times').append(html);
			});

            $('#promo_blocks span.add_second').click(function () {
                var html = '<li>';
                html += '<select name="promo_time_second[]">';
                html += '<option value="" disabled selected hidden>-- Не выбрано --</option>';
                html += '<option value="10:00-12:00">10:00-12:00</option>';
                html += '<option value="12:00-14:00">12:00-14:00</option>';
                html += '<option value="14:00-16:00">14:00-16:00</option>';
                html += '<option value="16:00-18:00">16:00-18:00</option>';
                html += '<option value="18:00-20:00">18:00-20:00</option>';
                html += '<option value="20:00-22:00">20:00-22:00</option>';
                html += '<option value="22:00-23:00">22:00-23:00</option>';
                html += '</select>';
                html += '<span class="delete"><i class="dash_link">Удалить</i></span>';
                html += '</li>';
                $('#promo_times_second').append(html);
            });

			$('#promo_blocks').on('click', '.delete', function () {
				$(this).closest('li').remove();
			});

            // Добавление лимита
            $('#limit_blocks span.add').click(function() {
                var html = '<ul>';
                html += '<li></li>';
                html += '<li><input class="date-picker" type="text" value="" name="limits[' + limit_rows + '][date]" autocomplete="off"></li>';
                html += '<li><input type="text" name="limits[' + limit_rows + '][time]"></li>';
                html += '<li><input type="text" name="limits[' + limit_rows + '][products_limit]"></li>';
                html += '<li><select class="simpla_inp_city" name="limits[' + limit_rows + '][city]">';
                html += '<option value="" disabled selected hidden>-- Не выбрано --</option>';
                
                    <?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['delivery_city']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['city']->key;
?>
                    html += '<option value="<?php echo $_smarty_tpl->tpl_vars['city']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['city']->value->name;?>
</option>';
                    <?php } ?>
                        
                        html += '</select></li>';
                        html += '<li style="text-align: center; margin-top: 3px;font-size: 16px;"><b></b></li>';
                        html += '<li><span class="delete"><i class="dash_link">Удалить</i></span></li>';
                        html += '</ul>';
                        limit_rows++;
                        $('#limits').append(html);
                        $('.date-picker').datepicker({
                            regional:'ru'
                        });
                    });

            $('#limits').on('click', ' .delete', function () {
                limit_rows--;
                var limit_id = $(this).closest('ul').find('li:first-child input').val();
                var row = $(this).closest('ul');

                if (limit_id) {
                    $.ajax({
                        url: 'ajax/delete_limit.php',
                        type: 'POST',
                        dataType: 'json',
                        data: {limit_id},
                        success: function () {
                            row.remove();
                        }
                    })
                } else {
                    row.remove();
                }

            });
		});
	</script>

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


<!-- Основная форма -->
<form method=post id=product enctype="multipart/form-data">
<input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">

		<!-- Параметры -->
		<div class="block">
			<h2>Настройки сайта</h2>
			<ul>
				<li><label class=property>Имя сайта</label><input name="site_name" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Имя компании</label><input name="company_name" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->company_name, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Формат даты</label><input name="date_format" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->date_format, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Email для восстановления пароля</label><input name="admin_email" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->admin_email, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
			</ul>
		</div>
		<div class="block layer">
			<h2>Оповещения</h2>
			<ul>
				<li><label class=property>Оповещение о заказах</label><input name="order_email" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->order_email, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Оповещение о комментариях</label><input name="comment_email" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->comment_email, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Обратный адрес оповещений</label><input name="notify_from_email" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->notify_from_email, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
			</ul>
		</div>
		<!-- Параметры (The End)-->

		<!-- Поле "Описание" для Onliner.by -->
		<div class="block layer">
			<h2>Описание магазина (для ONLINER.BY) </h2>
			<ul>
				<li><label class=property>Описание магазина (для ONLINER.BY)</label><textarea name="onliner_descr" class="simpla_inp" cols="50" rows="40"><?php echo $_smarty_tpl->tpl_vars['settings']->value->onliner_descr;?>
</textarea></li>
			</ul>
		</div>
		<!-- Поле "Описание" для Onliner.by END -->

		<!-- Сообщение при попытке заказать ветпрепараты -->
		<div class="block layer">
			<h2>Сообщение при попытке заказать ветпрепараты</h2>
			<ul>
				<li><label class=property>Сообщение при попытке заказать ветпрепараты</label><textarea name="vetpreparaty" class="simpla_inp" cols="50" rows="40"><?php echo $_smarty_tpl->tpl_vars['settings']->value->vetpreparaty;?>
</textarea></li>
			</ul>

			<label style="display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-align: center;-ms-flex-align: center;align-items: center;height: 30px" id="setting_pickup_global_label">

				<input type="checkbox" style="height: 20px; width: 30px;" name="setting_pickup_global" id="setting_pickup_global" <?php if ($_smarty_tpl->tpl_vars['settings']->value->setting_pickup_global['checkbox']) {?>checked<?php }?>>
				<h4>ОТКЛЮЧИТЬ / ВКЛЮЧИТЬ РАЗРЕШЕНИЕ НА ДОСТАВКУ ДЛЯ ВСЕХ ПРОДУКТОВ ГЛОБАЛЬНО</h4>
				<img src="design/images/gif/load.gif" alt="" style="display: none">

			</label>
			<script type="text/javascript">/*<![CDATA[*/
				(function ($) {
					"use strict";

					$('#setting_pickup_global').on('click', function () {

						$.ajax({
							url: 'ajax/setting.php',
							type: 'POST',
							dataType: 'json',
							data: $(this).serialize(),
							beforeSend: function() {
								$('#setting_pickup_global_label img').show();
								$('#setting_pickup_global_label h4').hide();
								$('#setting_pickup_global_label input').hide();
							},
							complete: function() {
								$('#setting_pickup_global_label img').hide();
								$('#setting_pickup_global_label h4').show();
								$('#setting_pickup_global_label input').show();
							},
							error: function (xhr, ajaxOptions, thrownError) {
								console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
							},
							success: function (json) {
								console.log(json);
								if (json.hasOwnProperty('answer')){
									alert(json.answer)
								}
							}
						});
					});
				})(jQuery)
				/*]]>*/</script>

		</div>
		<!-- Сообщение при попытке заказать ветпрепараты END -->

		<!-- Сообщение при выборе Другого города -->
		<div class="block layer">
			<h2>Сообщение при выборе Другого города</h2>
			<ul>
				<li><label class=property>Сообщение при выборе Другого города</label><textarea name="other_city" class="simpla_inp" cols="50" rows="40"><?php echo $_smarty_tpl->tpl_vars['settings']->value->other_city;?>
</textarea></li>
			</ul>
		</div>
		<!-- Сообщение при выборе Другого города END -->

		<!-- Отключение дат и времени -->
		<div class="block layer">
			<h2>Отключение дат и времени</h2>
			<ul>
				<li><label class=property>Пример отклюлчения даты полностью: 15.04();<br> Пример для отключения временного промежутка для определенной даты: 15.04(10:00 - 12:00);<br> Пример отключения нескольких промежутков для определенной даты: 15.04(10:00 - 12:00,19:00 - 21:00).<br> Разделитель дат между собой символом ";".</label><textarea name="dateandtime" class="simpla_inp" cols="50" rows="40"><?php echo $_smarty_tpl->tpl_vars['settings']->value->dateandtime;?>
</textarea></li>
			</ul>
		</div>
		<!-- Отключение дат и времени END -->
	<div id="promo_blocks" class="block layer">
		<h2>Импорт промокодов</h2>
		<?php if ($_smarty_tpl->tpl_vars['message_success_promo']->value) {?>
			<div class="message message_success">
				<span class="text">Промокоды успешно импортированы </span>
			</div>
		<?php }?>
		<div style="margin-bottom: 20px;"><b>Текущее количество промокодов: <?php echo $_smarty_tpl->tpl_vars['promo_count']->value;?>
</b></div>
		<input type="file" name="codes_file" value="Загрузить файл">
		<h3 style="margin-top: 30px;">Настройка условий получения промокода:</h3>
		<ul style="margin-top: 20px;">
			<li><label class=property>Сумма заказа ОТ</label><input type="text" name="promo_price" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->promo_price, ENT_QUOTES, 'UTF-8', true);?>
"></li>
			<li><label class=property>Время доставки</label>
				<ul id="promo_times">
					<?php  $_smarty_tpl->tpl_vars['promo_time'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promo_time']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value->promo_time; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promo_time']->key => $_smarty_tpl->tpl_vars['promo_time']->value) {
$_smarty_tpl->tpl_vars['promo_time']->_loop = true;
?>
						<li>
							<select name="promo_time[]">
								<option value="" disabled selected hidden>-- Не выбрано --</option>
								<option value="10:00-12:00" <?php if ($_smarty_tpl->tpl_vars['promo_time']->value==='10:00-12:00') {?>selected<?php }?>>10:00-12:00</option>
								<option value="12:00-14:00" <?php if ($_smarty_tpl->tpl_vars['promo_time']->value==='12:00-14:00') {?>selected<?php }?>>12:00-14:00</option>
								<option value="14:00-16:00" <?php if ($_smarty_tpl->tpl_vars['promo_time']->value==='14:00-16:00') {?>selected<?php }?>>14:00-16:00</option>
								<option value="16:00-18:00" <?php if ($_smarty_tpl->tpl_vars['promo_time']->value==='16:00-18:00') {?>selected<?php }?>>16:00-18:00</option>
								<option value="18:00-20:00" <?php if ($_smarty_tpl->tpl_vars['promo_time']->value==='18:00-20:00') {?>selected<?php }?>>18:00-20:00</option>
								<option value="20:00-22:00" <?php if ($_smarty_tpl->tpl_vars['promo_time']->value==='20:00-22:00') {?>selected<?php }?>>20:00-22:00</option>
								<option value="22:00-23:00" <?php if ($_smarty_tpl->tpl_vars['promo_time']->value==='22:00-23:00') {?>selected<?php }?>>22:00-23:00</option>
							</select>
							<span class="delete"><i class="dash_link">Удалить</i></span>
						</li>
					<?php } ?>
				</ul>
			</li>
		</ul>
		<span class="add add_first" id="add_time"><i class="dash_link">Добавить временной промежуток</i></span>

		<!--		Добавление второго условия получения купонов-->
		<?php if ($_smarty_tpl->tpl_vars['message_success_promo_second']->value) {?>
		<div class="message message_success">
			<span class="text">Промокоды успешно импортированы </span>
		</div>
		<?php }?>
		<div style="margin-bottom: 20px;  margin-top: 20px;"><b>Текущее количество промокодов: <?php echo $_smarty_tpl->tpl_vars['promo_count_second']->value;?>
</b></div>
		<input type="file" name="codes_file_second" value="Загрузить файл">
		<h3 style="margin-top: 30px;">Настройка условий получения промокода:</h3>
		<ul style="margin-top: 20px;">

			<li><label class=property>Сумма заказа ОТ</label><input type="text" name="promo_price_second" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->promo_price_second, ENT_QUOTES, 'UTF-8', true);?>
"></li>
			<li><label class=property>Время доставки</label>
				<ul id="promo_times_second">
					<?php  $_smarty_tpl->tpl_vars['promo_time_second'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promo_time_second']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value->promo_time_second; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promo_time_second']->key => $_smarty_tpl->tpl_vars['promo_time_second']->value) {
$_smarty_tpl->tpl_vars['promo_time_second']->_loop = true;
?>
					<li>
						<select name="promo_time_second[]">
							<option value="" disabled selected hidden>-- Не выбрано --</option>
							<option value="10:00-12:00" <?php if ($_smarty_tpl->tpl_vars['promo_time_second']->value==='10:00-12:00') {?>selected<?php }?>>10:00-12:00</option>
							<option value="12:00-14:00" <?php if ($_smarty_tpl->tpl_vars['promo_time_second']->value==='12:00-14:00') {?>selected<?php }?>>12:00-14:00</option>
							<option value="14:00-16:00" <?php if ($_smarty_tpl->tpl_vars['promo_time_second']->value==='14:00-16:00') {?>selected<?php }?>>14:00-16:00</option>
							<option value="16:00-18:00" <?php if ($_smarty_tpl->tpl_vars['promo_time_second']->value==='16:00-18:00') {?>selected<?php }?>>16:00-18:00</option>
							<option value="18:00-20:00" <?php if ($_smarty_tpl->tpl_vars['promo_time_second']->value==='18:00-20:00') {?>selected<?php }?>>18:00-20:00</option>
							<option value="20:00-22:00" <?php if ($_smarty_tpl->tpl_vars['promo_time_second']->value==='20:00-22:00') {?>selected<?php }?>>20:00-22:00</option>
							<option value="22:00-23:00" <?php if ($_smarty_tpl->tpl_vars['promo_time_second']->value==='22:00-23:00') {?>selected<?php }?>>22:00-23:00</option>
						</select>
						<span class="delete"><i class="dash_link">Удалить</i></span>
					</li>
					<?php } ?>
				</ul>
			</li>
		</ul>
		<span class="add add_second" id="add_time_second"><i class="dash_link">Добавить временной промежуток</i></span>
	</div>
		<!-- Приветственное сообщение -->
		<div class="block layer">
			<h2>Приветственное сообщение</h2>
			<ul>
				<li><input name="hide_welcome" value="1" type="checkbox" id="hide_welcome" <?php if ($_smarty_tpl->tpl_vars['settings']->value->hide_welcome) {?>checked<?php }?>/> <label for="hide_welcome">Скрыть сообщение</label></li>
				<li><label class=property>Приветственное сообщение</label><textarea name="welcome" class="simpla_inp" cols="50" rows="40"><?php echo $_smarty_tpl->tpl_vars['settings']->value->welcome;?>
</textarea></li>
			</ul>
		</div>
		<!-- Приветственное сообщение END -->

		<!-- Параметры -->
		<div class="block layer">
			<h2>Формат цены</h2>
			<ul>
				<li><label class=property>Разделитель копеек</label>
					<select name="decimals_point" class="simpla_inp">
						<option value='.' <?php if ($_smarty_tpl->tpl_vars['settings']->value->decimals_point=='.') {?>selected<?php }?>>точка: 12.45 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
						<option value=',' <?php if ($_smarty_tpl->tpl_vars['settings']->value->decimals_point==',') {?>selected<?php }?>>запятая: 12,45 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
					</select>
				</li>
				<li><label class=property>Разделитель тысяч</label>
					<select name="thousands_separator" class="simpla_inp">
						<option value='' <?php if ($_smarty_tpl->tpl_vars['settings']->value->thousands_separator=='') {?>selected<?php }?>>без разделителя: 1245678 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
						<option value=' ' <?php if ($_smarty_tpl->tpl_vars['settings']->value->thousands_separator==' ') {?>selected<?php }?>>пробел: 1 245 678 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
						<option value=',' <?php if ($_smarty_tpl->tpl_vars['settings']->value->thousands_separator==',') {?>selected<?php }?>>запятая: 1,245,678 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
					</select>


				</li>
			</ul>
		</div>
		<!-- Параметры (The End)-->

		<!-- Параметры -->
		<div class="block layer">
			<h2>Настройки каталога</h2>
			<ul>
				<li><label class=property>Товаров на странице сайта</label><input name="products_num" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->products_num, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Товаров на странице сайта(мобила)</label><input name="products_num_mobi" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->products_num_mobi, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Товаров на странице админки</label><input name="products_num_admin" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->products_num_admin, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Максимум товаров в заказе</label><input name="max_order_amount" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->max_order_amount, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Единицы измерения товаров</label><input name="units" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->units, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Маска title для страницы товара</label><input name="mask_title" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->mask_title, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Маска Description для страницы товара</label><input name="mask_desc" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->mask_desc, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
			</ul>
			<div>Параметры маски: - %H1% - заголовок товара</br> - %PRICE% - минимальная стоимость</div>
		</div>
		<!-- Параметры (The End)-->
	<div class="block layer">
		<h2>Текст ссылки на вет. лицензию</h2>
		<input type="text" name="license_button" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->license_button, ENT_QUOTES, 'UTF-8', true);?>
">
	</div>
	<div class="block layer">
		<h2>Лимит заказов</h2>
		<div id="limit_blocks">
			<ul id="header">
				<li></li>
				<li class="limit_date">Дата</li>
				<li class="limit_time">Время</li>
				<li class="limit_limit">Лимит</li>
				<li class="limit_city">Город</li>
				<li class="limit_current">Текущее количество</li>
			</ul>
			<div id="limits">
				<?php  $_smarty_tpl->tpl_vars['limit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['limit']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['limits']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['limit']->key => $_smarty_tpl->tpl_vars['limit']->value) {
$_smarty_tpl->tpl_vars['limit']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['limit']->key;
?>
				<ul>
					<li><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['limit']->value->id;?>
" name="limits[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][id]"></li>
					<li><input class="date-picker" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['limit']->value->date, ENT_QUOTES, 'UTF-8', true);?>
" name="limits[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][date]" autocomplete="off"></li>
					<li><input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['limit']->value->time, ENT_QUOTES, 'UTF-8', true);?>
" name="limits[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][time]"></li>
					<li><input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['limit']->value->products_limit, ENT_QUOTES, 'UTF-8', true);?>
" name="limits[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][products_limit]"></li>
					<li><select class="simpla_inp_city" name="limits[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][city]">
							<?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['delivery_city']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
							<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['city']->value->name===$_smarty_tpl->tpl_vars['limit']->value->city) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
							<?php } ?>
						</select></li>
					<li style="text-align: center; margin-top: 3px;font-size: 16px;"><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['limit']->value->current, ENT_QUOTES, 'UTF-8', true);?>
</b></li>
					<li><span class="delete"><i class="dash_link">Удалить</i></span></li>
				</ul>
				<?php } ?>
			</div>
			<span class="add" id="add_variant"><i class="dash_link">Добавить лимит</i></span>
		</div>
	</div>
	<div class="block layer">
		<h2>Время открытия доставки</h2>
		<ul>
			<li><label for="time_opening[10:00-12:00]" class="property">10:00-12:00</label><input type="text" name="time_opening[10:00-12:00]" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value->times['10:00-12:00'];?>
"></li>
			<li><label for="time_opening[12:00-14:00]" class="property">12:00-14:00</label><input type="text" name="time_opening[12:00-14:00]" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value->times['12:00-14:00'];?>
"></li>
			<li><label for="time_opening[14:00-16:00]" class="property">14:00-16:00</label><input type="text" name="time_opening[14:00-16:00]" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value->times['14:00-16:00'];?>
"></li>
			<li><label for="time_opening[16:00-18:00]" class="property">16:00-18:00</label><input type="text" name="time_opening[16:00-18:00]" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value->times['16:00-18:00'];?>
"></li>
			<li><label for="time_opening[18:00-20:00]" class="property">18:00-20:00</label><input type="text" name="time_opening[18:00-20:00]" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value->times['18:00-20:00'];?>
"></li>
			<li><label for="time_opening[20:00-22:00]" class="property">20:00-22:00</label><input type="text" name="time_opening[20:00-22:00]" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value->times['20:00-22:00'];?>
"></li>
			<li><label for="time_opening[22:00-23:00]" class="property">22:00-23:00</label><input type="text" name="time_opening[22:00-23:00]" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value->times['22:00-23:00'];?>
"></li>
		</ul>
		<div>
			Формат указываемого времени: hh:mm.<br>
			Пример: 05:00
		</div>
	</div>
		<!-- Параметры -->
		<div class="block layer">
			<h2>Настройки смс</h2>
			<ul>
				<li><label class="property">Логин МТС</label><input name="mts_login" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->mts_login, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class="property">Пароль МТС</label><input name="mts_password" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->mts_password, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class="property">ID клиента</label><input name="mts_client_id" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->mts_client_id, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
                <li><label class=property>Ключ работы с UniSender</label><input name="api_unisend_key" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->api_unisend_key, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
                <li><label class=property>Имя работы с UniSender</label><input name="api_unisend_name" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->api_unisend_name, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Маска смс "Принят"</label><input name="mask_sms_1" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->mask_sms_1, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Маска смс "Собран" (курьер)</label><input name="mask_sms_2_courier" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->mask_sms_2_courier, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Маска смс "Собран" (курьер, без времени)</label><input name="mask_sms_2_courier_without_time" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->mask_sms_2_courier_without_time, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Маска смс "Собран" (самовывоз)</label><input name="mask_sms_2_sklad" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->mask_sms_2_sklad, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Маска смс "Промокод"</label><input name="mask_sms_promo" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->mask_sms_promo, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Маска второго смс "Промокод"</label><input name="mask_sms_promo_second" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->mask_sms_promo_second, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
			</ul>
			<div>Параметры маски:</br> - %NUMBER% - номер заказа</br> - %DATE% - Дата доставки / дата забрать заказ</br> - %TIME% - Время доставки</br> - %PHONE% - Телефон доставки</br> - %PROMO% - Промокод</div>
		</div>
		<!-- Параметры (The End)-->
		<!-- Параметры -->
		<div class="block layer">
			<h2>Изображения товаров</h2>

			<ul>
				<li><label class=property>Водяной знак</label>
				<input name="watermark_file" class="simpla_inp" type="file" />

				<img style='display:block; border:1px solid #d0d0d0; margin:10px 0 10px 0;' src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value->watermark_file;?>
?<?php echo smarty_function_math(array('equation'=>'rand(10,10000)'),$_smarty_tpl);?>
">
				</li>
				<li><label class=property>Горизонтальное положение водяного знака</label><input name="watermark_offset_x" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->watermark_offset_x, ENT_QUOTES, 'UTF-8', true);?>
" /> %</li>
				<li><label class=property>Вертикальное положение водяного знака</label><input name="watermark_offset_y" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->watermark_offset_y, ENT_QUOTES, 'UTF-8', true);?>
" /> %</li>
				<li><label class=property>Прозрачность знака (больше &mdash; прозрачней)</label><input name="watermark_transparency" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->watermark_transparency, ENT_QUOTES, 'UTF-8', true);?>
" /> %</li>
				<li><label class=property>Резкость изображений (рекомендуется 20%)</label><input name="images_sharpen" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->images_sharpen, ENT_QUOTES, 'UTF-8', true);?>
" /> %</li>
			</ul>
		</div>
		<!-- Параметры (The End)-->


		<!-- Параметры -->
		<div class="block layer">
			<h2>Интеграция с <a href="http://prostiezvonki.ru">простыми звонками</a></h2>
			<ul>
				<li><label class=property>Сервер</label><input name="pz_server" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->pz_server, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Пароль</label><input name="pz_password" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->pz_password, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Телефоны менеджеров:</label></li>
				<?php  $_smarty_tpl->tpl_vars['manager'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manager']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['managers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manager']->key => $_smarty_tpl->tpl_vars['manager']->value) {
$_smarty_tpl->tpl_vars['manager']->_loop = true;
?>
				<li><label class=property><?php echo $_smarty_tpl->tpl_vars['manager']->value->login;?>
</label><input name="pz_phones[<?php echo $_smarty_tpl->tpl_vars['manager']->value->login;?>
]" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->pz_phones[$_smarty_tpl->tpl_vars['manager']->value->login], ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<?php } ?>
			</ul>
		</div>
		<!-- Параметры (The End)-->

	<!-- Параметры сообщений-->
	<div class="block layer">
		<h2>Сообщения на странице заказа</h2>
		<ul>
			<li><label class=property>Верхнее сообщение</label><input name="text_top_order" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->text_top_order, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
			<li><label class=property>Нижнее сообщение</label><input name="text_bottom_order" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->text_bottom_order, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
		</ul>
	</div>
	<!-- Параметры (The End)-->

	<!-- Параметры сообщений-->
	<div class="block layer">
		<h2>Блок "Связь с менеджером" (mobile)</h2>
		<ul>
			<li><label class=property>Текст</label><input name="manager_contacts_text" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->manager_contacts_text, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
			<li><label class=property>Кнопка 1</label><input name="manager_contacts_operator_1" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->manager_contacts_operator_1, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
			<li><label class=property></label><input name="manager_contacts_phone_1" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->manager_contacts_phone_1, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
			<li><label class=property>Кнопка 2</label><input name="manager_contacts_operator_2" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->manager_contacts_operator_2, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
			<li><label class=property></label><input name="manager_contacts_phone_2" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->manager_contacts_phone_2, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
			<li><label class=property>Кнопка 3</label><input name="manager_contacts_chat_text" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->manager_contacts_chat_text, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
			<li><label class=property></label><input name="manager_contacts_chat" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->manager_contacts_chat, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
		</ul>
	</div>
	<!-- Параметры (The End)-->


		<input class="button_green button_save" type="submit" name="save" value="Сохранить" />

	<!-- Левая колонка свойств товара (The End)-->

</form>
<!-- Основная форма (The End) -->
<?php }} ?>
