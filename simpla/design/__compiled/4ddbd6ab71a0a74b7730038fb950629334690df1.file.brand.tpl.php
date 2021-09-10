<?php /* Smarty version Smarty-3.1.18, created on 2021-01-22 16:21:11
         compiled from "simpla/design/html/brand.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76744287360081e1eeab2a7-04579156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ddbd6ab71a0a74b7730038fb950629334690df1' => 
    array (
      0 => 'simpla/design/html/brand.tpl',
      1 => 1611321512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76744287360081e1eeab2a7-04579156',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_60081e1ef1b8d5_45972089',
  'variables' => 
  array (
    'manager' => 0,
    'brand' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'config' => 0,
    'supply_dates' => 0,
    'regions' => 0,
    'region' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60081e1ef1b8d5_45972089')) {function content_60081e1ef1b8d5_45972089($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/www-root/data/www/e-zoo.by/Smarty/libs/plugins/modifier.replace.php';
?>
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

<?php if ($_smarty_tpl->tpl_vars['brand']->value->id) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['brand']->value->name, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Новый бренд', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('tinymce_init.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>





<script src="design/js/autocomplete/jquery.autocomplete-min.js"></script>
<script src="design/js/jquery/datepicker/jquery.ui.datepicker-ru.js"></script>
<script>
$(function() {

    $('.supply_date_input').datepicker({
        regional:'ru'
    })

    // Удаление баннера
    $(".banners a.delete").click(function () {
        $("input[name='delete_banner']").val('1');
        $(this).closest("ul").fadeOut(200, function () {
            $(this).remove();
        });
        return false;
    });

    // Удаление фонового изображения
    $(".background-image a.delete").click(function () {
        $("input[name='delete_background']").val('1');
        $(this).closest("ul").fadeOut(200, function () {
            $(this).remove();
        });
        return false;
    });

	// Удаление изображений
	$(".images a.delete").click( function() {
		$("input[name='delete_image']").val('1');
		$(this).closest("ul").fadeOut(200, function() { $(this).remove(); });
		return false;
	});

	// Автозаполнение мета-тегов
	meta_title_touched = true;
	meta_keywords_touched = true;
	meta_description_touched = true;
	url_touched = true;

	if($('input[name="meta_title"]').val() == generate_meta_title() || $('input[name="meta_title"]').val() == '')
		meta_title_touched = false;
	if($('input[name="meta_keywords"]').val() == generate_meta_keywords() || $('input[name="meta_keywords"]').val() == '')
		meta_keywords_touched = false;
	if($('textarea[name="meta_description"]').val() == generate_meta_description() || $('textarea[name="meta_description"]').val() == '')
		meta_description_touched = false;
	if($('input[name="url"]').val() == generate_url() || $('input[name="url"]').val() == '')
		url_touched = false;

	$('input[name="meta_title"]').change(function() { meta_title_touched = true; });
	$('input[name="meta_keywords"]').change(function() { meta_keywords_touched = true; });
	$('input[textarea="meta_description"]').change(function() { meta_description_touched = true; });
	$('input[name="url"]').change(function() { url_touched = true; });

	$('input[name="name"]').keyup(function() { set_meta(); });

	function set_meta()
	{
		if(!meta_title_touched)
			$('input[name="meta_title"]').val(generate_meta_title());
		if(!meta_keywords_touched)
			$('input[name="meta_keywords"]').val(generate_meta_keywords());
		if(!meta_description_touched)
			$('textarea[name="meta_description"]').val(generate_meta_description());
		if(!url_touched)
			$('input[name="url"]').val(generate_url());
	}

	function generate_meta_title()
	{
		name = $('input[name="name"]').val();
		return name;
	}

	function generate_meta_keywords()
	{
		name = $('input[name="name"]').val();
		return name;
	}

	function generate_meta_description()
	{
		name = $('input[name="name"]').val();
		return name;
	}

	function generate_url()
	{
		url = $('input[name="name"]').val();
		url = url.replace(/[\s]+/gi, '-');
		url = translit(url);
		url = url.replace(/[^0-9a-z_\-]+/gi, '').toLowerCase();
		return url;
	}

	function translit(str)
	{
		var ru=("А-а-Б-б-В-в-Ґ-ґ-Г-г-Д-д-Е-е-Ё-ё-Є-є-Ж-ж-З-з-И-и-І-і-Ї-ї-Й-й-К-к-Л-л-М-м-Н-н-О-о-П-п-Р-р-С-с-Т-т-У-у-Ф-ф-Х-х-Ц-ц-Ч-ч-Ш-ш-Щ-щ-Ъ-ъ-Ы-ы-Ь-ь-Э-э-Ю-ю-Я-я").split("-")
		var en=("A-a-B-b-V-v-G-g-G-g-D-d-E-e-E-e-E-e-ZH-zh-Z-z-I-i-I-i-I-i-J-j-K-k-L-l-M-m-N-n-O-o-P-p-R-r-S-s-T-t-U-u-F-f-H-h-TS-ts-CH-ch-SH-sh-SCH-sch-'-'-Y-y-'-'-E-e-YU-yu-YA-ya").split("-")
	 	var res = '';
		for(var i=0, l=str.length; i<l; i++)
		{
			var s = str.charAt(i), n = ru.indexOf(s);
			if(n >= 0) { res += en[n]; }
			else { res += s; }
	    }
	    return res;
	}

});

</script>
<link rel="stylesheet" media="screen" type="text/css" href="design/js/colorpicker/css/colorpicker.css"/>
<script type="text/javascript" src="design/js/colorpicker/js/colorpicker.js"></script>
<script>
    $(function () {
        $('#color_icon, #color_link').ColorPicker({
            color: $('#color_input').val(),
            onShow: function (colpkr) {
                $(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                $(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                $('#color_icon').css('backgroundColor', '#' + hex);
                $('#color_input').val(hex);
                $('#color_input').ColorPickerHide();
            }
        });
    });
</script>


<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
<!-- Системное сообщение -->
<div class="message message_success">
	<span class="text"><?php if ($_smarty_tpl->tpl_vars['message_error']->value=='url_exists') {?>Бренд с таким адресом уже существует<?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='name_empty') {?>У бренда должно быть название<?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='url_empty') {?>URl адрес не может быть пустым<?php }?></span>
	<a class="link" target="_blank" href="../brands/<?php echo $_smarty_tpl->tpl_vars['brand']->value->url;?>
">Открыть бренд на сайте</a>
	<?php if ($_GET['return']) {?>
	<a class="button" href="<?php echo $_GET['return'];?>
">Вернуться</a>
	<?php }?>

	<span class="share">
		<a href="#" onClick='window.open("http://vkontakte.ru/share.php?url=<?php echo urlencode($_smarty_tpl->tpl_vars['config']->value->root_url);?>
/brands/<?php echo urlencode($_smarty_tpl->tpl_vars['brand']->value->url);?>
&title=<?php echo urlencode($_smarty_tpl->tpl_vars['brand']->value->name);?>
&description=<?php echo urlencode($_smarty_tpl->tpl_vars['brand']->value->description);?>
&image=<?php echo urlencode($_smarty_tpl->tpl_vars['config']->value->root_url);?>
/files/brands/<?php echo urlencode($_smarty_tpl->tpl_vars['brand']->value->image);?>
&noparse=true","displayWindow","width=700,height=400,left=250,top=170,status=no,toolbar=no,menubar=no");return false;'>
  		<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/simpla/design/images/vk_icon.png" /></a>
		<a href="#" onClick='window.open("http://www.facebook.com/sharer.php?u=<?php echo urlencode($_smarty_tpl->tpl_vars['config']->value->root_url);?>
/brands/<?php echo urlencode($_smarty_tpl->tpl_vars['brand']->value->url);?>
","displayWindow","width=700,height=400,left=250,top=170,status=no,toolbar=no,menubar=no");return false;'>
  		<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/simpla/design/images/facebook_icon.png" /></a>
		<a href="#" onClick='window.open("http://twitter.com/share?text=<?php echo urlencode($_smarty_tpl->tpl_vars['brand']->value->name);?>
&url=<?php echo urlencode($_smarty_tpl->tpl_vars['config']->value->root_url);?>
/brands/<?php echo urlencode($_smarty_tpl->tpl_vars['brand']->value->url);?>
&hashtags=<?php echo urlencode(smarty_modifier_replace($_smarty_tpl->tpl_vars['brand']->value->meta_keywords,' ',''));?>
","displayWindow","width=700,height=400,left=250,top=170,status=no,toolbar=no,menubar=no");return false;'>
  		<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/simpla/design/images/twitter_icon.png" /></a>
	</span>

</div>
<!-- Системное сообщение (The End)-->
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
<!-- Системное сообщение -->
<div class="message message_error">
	<span class="text"><?php if ($_smarty_tpl->tpl_vars['message_error']->value=='url_exists') {?>Бренд с таким адресом уже существует<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['message_error']->value;?>
<?php }?></span>
	<a class="button" href="<?php echo $_GET['return'];?>
">Вернуться</a>
</div>
<!-- Системное сообщение (The End)-->
<?php }?>


<!-- Основная форма -->
<form method=post id=product enctype="multipart/form-data">
<input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<div id="name">
		<input class="name" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
		<input name=id type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
		<div class="checkbox">
			<input name="label_new" value='1' type="checkbox" id="label_new_checkbox" <?php if ($_smarty_tpl->tpl_vars['brand']->value->label_new) {?>checked<?php }?>/> <label for="label_new_checkbox">new</label>
		</div>
	</div>
	<div>
		<div>
			<input name="visible_is_main" value="1" type="checkbox" id="visible_is_main_checkbox" <?php if ($_smarty_tpl->tpl_vars['brand']->value->visible_is_main) {?>checked<?php }?>/> <label for="visible_is_main_checkbox">Показать в слайдере на главной</label>
		</div>
		<br>
		<div><label class="property">Сортировка в слайдере на главной:  </label> <input name="sort" min="0" class="simpla_inp" type="number" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->sort, ENT_QUOTES, 'UTF-8', true);?>
" /></div>
	</div>
	<br>
	<div class="layer">Параметры для выгрузки в маркет</div><br>
	<div>
		<div>
			<label class="property">Наименование чистое:  </label><input name="clear-name" size="80" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->clear_name, ENT_QUOTES, 'UTF-8', true);?>
"/>
		</div>
	</div><br>
	<div>
		<div>
			<label class="property">Изготовитель:  </label><input name="manufacturer" size="80" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->manufacturer, ENT_QUOTES, 'UTF-8', true);?>
"/>
		</div>
	</div><br>
	<div>
		<div>
			<label class="property">Импортёр:  </label><input name="importer" size="80" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->importer, ENT_QUOTES, 'UTF-8', true);?>
"/>
		</div>
	</div><br>


	<!-- Левая колонка свойств товара -->
	<div id="column_left">

		<!-- Параметры страницы -->
		<div class="block layer">
			<h2>Параметры страницы</h2>
			<ul>
				<li><label class=property>Адрес</label><div class="page_url"> /brands/</div><input name="url" class="page_url" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Заголовок</label><input name="meta_title" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->meta_title, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Ключевые слова</label><input name="meta_keywords" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Описание</label><textarea name="meta_description" class="simpla_inp" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->meta_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea></li>
				<li><label class=property>H1</label><input name="h1_head" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->h1_head, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
			</ul>
		</div>
		<!-- Параметры страницы (The End)-->

 		

	<input class="button_green button_save" type="submit" name="" value="Сохранить" />
	</div>
	<!-- Левая колонка свойств товара (The End)-->

	<!-- Правая колонка свойств товара -->
	<div id="column_right">

		<!-- Изображение категории -->
		<div class="block layer images">
			<h2>Изображение бренда</h2>
			<input class='upload_image' name=image type=file>
			<input type=hidden name="delete_image" value="">
			<?php if ($_smarty_tpl->tpl_vars['brand']->value->image) {?>
			<ul>
				<li>
					<a href='#' class="delete"><img src='design/images/cross-circle-frame.png'></a>
					<img src="../<?php echo $_smarty_tpl->tpl_vars['config']->value->brands_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['brand']->value->image;?>
" alt="" />
				</li>
			</ul>
			<?php }?>
		</div>

	</div>
	<!-- Правая колонка свойств товара (The End)-->
	<div class="block layer">
		<h2>Лицензия</h2>
		<ul>
			<li><label class=property>Ссылка на лицензию</label><input type="text" name="license_link" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->license_link;?>
"></li>
		</ul>
	</div>
	<!-- Параметры страницы -->
	<div class="block layer">
		<h2>Кастомизация страницы бренда</h2>
		<div style="display: flex">
			<label style="width: 300px;">Цвет фона</label>
			<div class="checkbox" style="padding-left: 0;">
				<span id="color_icon" class="brand-color"  style="width: 300px;border-radius:50px;background-color:#<?php echo $_smarty_tpl->tpl_vars['brand']->value->color;?>
;"></span>
				<input id="color_input" name="color" class="simpla_inp" type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['brand']->value->color) {?><?php echo $_smarty_tpl->tpl_vars['brand']->value->color;?>
<?php }?>">
			</div>
		</div>
		<div class="background-image" style="display: flex;margin-top: 40px;">
			<label style="width: 300px;">Картинка для фона</label>
			<input class="upload_image" name="background" type="file">
			<input type="hidden" name="delete_background" value="">
			<?php if ($_smarty_tpl->tpl_vars['brand']->value->background) {?>
			<ul>
				<li>
					<a href='#' class="delete"><img src='design/images/cross-circle-frame.png'></a>
					<img src="../<?php echo $_smarty_tpl->tpl_vars['config']->value->brands_background_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['brand']->value->background;?>
" alt=""/>
				</li>
			</ul>
			<?php }?>
		</div>
		<div class="banners" style="display: flex;margin-top: 40px;">
			<label style="width: 300px;">Баннер</label>
			<input class="upload_image" name="banner" type="file">
			<input type="hidden" name="delete_banner" value="">
			<?php if ($_smarty_tpl->tpl_vars['brand']->value->banner) {?>
			<ul>
				<li>
					<a href='#' class="delete"><img src='design/images/cross-circle-frame.png'></a>
					<img src="../<?php echo $_smarty_tpl->tpl_vars['config']->value->brands_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['brand']->value->banner;?>
" alt=""/>
				</li>
			</ul>
			<?php }?>
		</div>

	</div>
	<!-- Параметры страницы (The End)-->

	<div class="block layer">
		<h2>Дата поставки на склад</h2>
		<div class="supply_dates_row">
			<label for="supply_dates[0]">Основной склад</label>
			<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['supply_dates']->value[0];?>
" placeholder="Введите дату поставки" name="supply_dates[0]" class="supply_date_input" autocomplete="off">
		</div>
		<?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['regions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->_loop = true;
?>
		<div class="supply_dates_row">
			<label for="supply_dates[<?php echo $_smarty_tpl->tpl_vars['region']->value->id;?>
]"><?php echo $_smarty_tpl->tpl_vars['region']->value->name;?>
</label>
			<input type="text" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['region']->value->id;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['supply_dates']->value[$_tmp1];?>
" placeholder="Введите дату поставки" name="supply_dates[<?php echo $_smarty_tpl->tpl_vars['region']->value->id;?>
]" class="supply_date_input" autocomplete="off">
		</div>
		<?php } ?>
	</div>


	<!-- Описагние бренда -->
	<div class="block layer">
		<h2>Описание</h2>
		<textarea name="description" class="editor_large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
	</div>
	<!-- Описание бренда (The End)-->
	<input class="button_green button_save" type="submit" name="" value="Сохранить" />


</form>
<!-- Основная форма (The End) -->

<?php }} ?>
