<?php /* Smarty version Smarty-3.1.18, created on 2021-02-12 12:44:27
         compiled from "simpla/design/html/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106530700660264dfb3489f8-87605685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1d2f1f7c0afe45a0417048bcfb9fed2ccc9dc7e' => 
    array (
      0 => 'simpla/design/html/category.tpl',
      1 => 1602682001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106530700660264dfb3489f8-87605685',
  'function' => 
  array (
    'category_select' => 
    array (
      'parameter' => 
      array (
        'level' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'manager' => 0,
    'category' => 0,
    'message_success' => 0,
    'config' => 0,
    'message_error' => 0,
    'cats' => 0,
    'cat' => 0,
    'level' => 0,
    'categories' => 0,
    'related_categories' => 0,
    'related_category' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_60264dfb3d8a25_33225223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60264dfb3d8a25_33225223')) {function content_60264dfb3d8a25_33225223($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/www-root/data/www/e-zoo.by/Smarty/libs/plugins/modifier.replace.php';
?>
<?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<?php if (in_array('products',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=ProductsAdmin">Товары</a></li><?php }?>
	<li class="active"><a href="index.php?module=CategoriesAdmin">Категории</a></li>
	<?php if (in_array('brands',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=BrandsAdmin">Бренды</a></li><?php }?>
	<?php if (in_array('features',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=FeaturesAdmin">Свойства</a></li><?php }?>
	<?php if (in_array('colors',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=ColorsAdmin">Цвета</a></li><?php }?>
	<?php if (in_array('regions',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=RegionsAdmin">Магазины</a></li><?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['category']->value->id) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value->name, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Новая категория', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('tinymce_init.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<script src="design/js/jquery/jquery.js"></script>
<script src="design/js/jquery/jquery-ui.min.js"></script>
<script src="design/js/autocomplete/jquery.autocomplete-min.js"></script>
<style>
.autocomplete-w1 { background:url(img/shadow.png) no-repeat bottom right; position:absolute; top:0px; left:0px; margin:6px 0 0 6px; /* IE6 fix: */ _background:none; _margin:1px 0 0 0; }
.autocomplete { border:1px solid #999; background:#FFF; cursor:default; text-align:left; overflow-x:auto; min-width: 300px; overflow-y: auto; margin:-6px 6px 6px -6px; /* IE6 specific: */ _height:350px;  _margin:0; _overflow-x:hidden; }
.autocomplete .selected { background:#F0F0F0; }
.autocomplete div { padding:2px 5px; white-space:nowrap; }
.autocomplete strong { font-weight:normal; color:#3399FF; }
</style>
	<style>
		.autocomplete-suggestions{
			background-color: #ffffff;
			overflow: hidden;
			border: 1px solid #e0e0e0;
			overflow-y: auto;
		}
		.autocomplete-suggestions .autocomplete-suggestion{cursor: default;}
		.autocomplete-suggestions .selected { background:#F0F0F0; }
		.autocomplete-suggestions div { padding:2px 5px; white-space:nowrap; }
		.autocomplete-suggestions strong { font-weight:normal; color:#3399FF; }
	</style>
<script>
$(function() {


	// Сортировка связанных товаров
	$(".sortable").sortable({
		items: "div.row",
		tolerance:"pointer",
		scrollSensitivity:40,
		opacity:0.7,
		handle: '.move_zone'
	});

	// Удаление связанного товара
	$(".related_categories a.delete").live('click', function() {
		$(this).closest("div.row").fadeOut(200, function() { $(this).remove(); });
		return false;
	});

	// Добавление связанного товара
	var new_related_category = $('#new_related_category').clone(true);
	$('#new_related_category').remove().removeAttr('id');

	$("input#related_categories").autocomplete({
		serviceUrl:'ajax/search_categories.php',
		minChars:0,
		noCache: false,
		onSelect:
			function(suggestion){
				$("input#related_categories").val('').focus().blur();
				new_item = new_related_category.clone().appendTo('.related_categories');
				new_item.removeAttr('id');
				new_item.find('a.related_category_name').html(suggestion.data.name);
				new_item.find('a.related_category_name').attr('href', 'index.php?module=CategoryAdmin&id='+suggestion.data.id);
				new_item.find('input[name*="related_categories"]').val(suggestion.data.id);
				if(suggestion.data.image)
					new_item.find('img.product_icon').attr("src", suggestion.data.image);
				else
					new_item.find('img.product_icon').remove();
				new_item.show();
			},
		formatResult:
			function(suggestions, currentValue){
				var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
				var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
				return (suggestions.data.image?"<img align=absmiddle src='"+suggestions.data.image+"'> ":'') + suggestions.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>');
			}

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
	$('textarea[name="meta_description"]').change(function() { meta_description_touched = true; });
	$('input[name="url"]').change(function() { url_touched = true; });

	$('input[name="name"]').keyup(function() { set_meta(); });

});

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
	if(typeof(tinyMCE.get("description")) =='object')
	{
		description = tinyMCE.get("description").getContent().replace(/(<([^>]+)>)/ig," ").replace(/(\&nbsp;)/ig," ").replace(/^\s+|\s+$/g, '').substr(0, 512);
		return description;
	}
	else
		return $('textarea[name=description]').val().replace(/(<([^>]+)>)/ig," ").replace(/(\&nbsp;)/ig," ").replace(/^\s+|\s+$/g, '').substr(0, 512);
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
</script>

<link rel="stylesheet" media="screen" type="text/css" href="design/js/colorpicker/css/colorpicker.css"/>
<script type="text/javascript" src="design/js/colorpicker/js/colorpicker.js"></script>
<script>
    $(function () {


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
	<span class="text"><?php if ($_smarty_tpl->tpl_vars['message_success']->value=='added') {?>Категория добавлена<?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value=='updated') {?>Категория обновлена<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['message_success']->value;?>
<?php }?></span>
	<a class="link" target="_blank" href="../catalog/<?php echo $_smarty_tpl->tpl_vars['category']->value->url;?>
">Открыть категорию на сайте</a>
	<?php if ($_GET['return']) {?>
	<a class="button" href="<?php echo $_GET['return'];?>
">Вернуться</a>
	<?php }?>

	<span class="share">
		<a href="#" onClick='window.open("http://vkontakte.ru/share.php?url=<?php echo urlencode($_smarty_tpl->tpl_vars['config']->value->root_url);?>
/catalog/<?php echo urlencode($_smarty_tpl->tpl_vars['category']->value->url);?>
&title=<?php echo urlencode($_smarty_tpl->tpl_vars['category']->value->name);?>
&description=<?php echo urlencode($_smarty_tpl->tpl_vars['category']->value->description);?>
&image=<?php echo urlencode($_smarty_tpl->tpl_vars['config']->value->root_url);?>
/files/categories/<?php echo urlencode($_smarty_tpl->tpl_vars['category']->value->image);?>
&noparse=true","displayWindow","width=700,height=400,left=250,top=170,status=no,toolbar=no,menubar=no");return false;'>
  		<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/simpla/design/images/vk_icon.png" /></a>
		<a href="#" onClick='window.open("http://www.facebook.com/sharer.php?u=<?php echo urlencode($_smarty_tpl->tpl_vars['config']->value->root_url);?>
/catalog/<?php echo urlencode($_smarty_tpl->tpl_vars['category']->value->url);?>
","displayWindow","width=700,height=400,left=250,top=170,status=no,toolbar=no,menubar=no");return false;'>
  		<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/simpla/design/images/facebook_icon.png" /></a>
		<a href="#" onClick='window.open("http://twitter.com/share?text=<?php echo urlencode($_smarty_tpl->tpl_vars['category']->value->name);?>
&url=<?php echo urlencode($_smarty_tpl->tpl_vars['config']->value->root_url);?>
/catalog/<?php echo urlencode($_smarty_tpl->tpl_vars['category']->value->url);?>
&hashtags=<?php echo urlencode(smarty_modifier_replace($_smarty_tpl->tpl_vars['category']->value->meta_keywords,' ',''));?>
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
	<span class="text"><?php if ($_smarty_tpl->tpl_vars['message_error']->value=='url_exists') {?>Категория с таким адресом уже существует<?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='name_empty') {?>У категории должно быть название<?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='url_empty') {?>URl адрес не может быть пустым<?php }?></span>
	<a class="button" href="">Вернуться</a>
</div>
<!-- Системное сообщение (The End)-->
<?php }?>


<!-- Основная форма -->
<form method=post id=product enctype="multipart/form-data">
<input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<div id="name">
		<input class="name" name=name type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
		<input name=id type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
		<div class="checkbox">
			<input name=visible value='1' type="checkbox" id="active_checkbox" <?php if ($_smarty_tpl->tpl_vars['category']->value->visible) {?>checked<?php }?>/> <label for="active_checkbox">Активна</label>
		</div>
		<div class="checkbox">
			<input name=visible_is_main value='1' type="checkbox" id="visible_is_main_checkbox" <?php if ($_smarty_tpl->tpl_vars['category']->value->visible_is_main) {?>checked<?php }?>/> <label for="visible_is_main_checkbox">На главной</label>
		</div>
		<div class="checkbox">
			<input name=visible_childs value='1' type="checkbox" id="visible_childs_checkbox" <?php if ($_smarty_tpl->tpl_vars['category']->value->visible_childs) {?>checked<?php }?>/> <label for="visible_childs_checkbox">Выводить как раздел</label>
		</div>
	</div>
	<div class="setting_cat_page">
		<div class="checkbox">
			<input name=visible_cat_page value='1' type="checkbox" id="visible_cat_page_checkbox" <?php if ($_smarty_tpl->tpl_vars['category']->value->visible_cat_page) {?>checked<?php }?>/> <label for="visible_cat_page_checkbox">Выводить категорию на странице разделов</label>
		</div>
		<div class="checkbox">
			<label for="name_cat_page">Название на странице раздела</label>
			<input class="name_cat_page" name=name_cat_page type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name_cat_page, ENT_QUOTES, 'UTF-8', true);?>
"/>
		</div>
		<div class="checkbox">
			<input id="hide" name=hide type="checkbox" value='1' <?php if ($_smarty_tpl->tpl_vars['category']->value->hide) {?>checked<?php }?>/><label for="visible_cat_page_checkbox">Скрыть категорию</label>
		</div>
		<hr>
	</div>
	<br>
	<div>Параметры для выгрузки в маркет</div><br>
	<div>
		<div>
			<label class="property">Тип товара яндекс:  </label><input name="name_cat_market" size="80" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name_cat_market, ENT_QUOTES, 'UTF-8', true);?>
"/>
		</div>
	</div><br>
	<div>
		<!--<div>
			<label class="property">Название кат. на маркете:  </label><input name="name_cat_yan_market" size="80" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name_cat_yan_market, ENT_QUOTES, 'UTF-8', true);?>
"/>
		</div>-->
		<br>
		<div>
			<label class="property">Название кат. на онлайнер:  </label><input name="name_cat_market_onliner" size="80" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name_cat_market_onliner, ENT_QUOTES, 'UTF-8', true);?>
"/>
		</div>
	</div><br>
	<hr>
	<div id="product_categories">
			<select name="parent_id">
				<option value='0'>Корневая категория</option>
				<?php if (!function_exists('smarty_template_function_category_select')) {
    function smarty_template_function_category_select($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['category_select']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
				<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['category']->value->id!=$_smarty_tpl->tpl_vars['cat']->value->id) {?>
						<option value='<?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
' <?php if ($_smarty_tpl->tpl_vars['category']->value->parent_id==$_smarty_tpl->tpl_vars['cat']->value->id) {?>selected<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['name'] = 'sp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['level']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total']);
?>&nbsp;&nbsp;&nbsp;&nbsp;<?php endfor; endif; ?><?php echo $_smarty_tpl->tpl_vars['cat']->value->name;?>
</option>
						<?php smarty_template_function_category_select($_smarty_tpl,array('cats'=>$_smarty_tpl->tpl_vars['cat']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

					<?php }?>
				<?php } ?>
				<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

				<?php smarty_template_function_category_select($_smarty_tpl,array('cats'=>$_smarty_tpl->tpl_vars['categories']->value));?>

			</select>
	</div>

	<!-- Левая колонка свойств товара -->
	<div id="column_left">

		<!-- Параметры страницы -->
		<div class="block layer">
			<h2>Параметры страницы</h2>
			<ul>
				<li><label class=property>Адрес</label><div class="page_url">/catalog/</div><input name="url" class="page_url" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Заголовок</label><input name="meta_title" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->meta_title, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Ключевые слова</label><input name="meta_keywords" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Описание</label><textarea name="meta_description" class="simpla_inp"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->meta_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea></li>
				<li><label class=property>H1</label><input name="h1_head" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->h1_head, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
			</ul>
		</div>
		<!-- Параметры страницы (The End)-->

 		

	</div>
	<!-- Левая колонка свойств товара (The End)-->

	<!-- Правая колонка свойств товара -->
	<div id="column_right">

		<!-- Изображение категории -->
		<div class="block layer images">
			<h2>Изображение категории</h2>
			<input class='upload_image' name=image type=file>
			<input type=hidden name="delete_image" value="">
			<?php if ($_smarty_tpl->tpl_vars['category']->value->image) {?>
			<ul>
				<li>
					<a href='#' class="delete"><img src='design/images/cross-circle-frame.png'></a>
					<img src="../<?php echo $_smarty_tpl->tpl_vars['config']->value->categories_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['category']->value->image;?>
" alt="" />
				</li>
			</ul>
			<?php }?>
		</div>

		<div class="block layer">
			<h2>Связанные категории:</h2>
			<div id=list class="sortable related_products related_categories">
				<?php  $_smarty_tpl->tpl_vars['related_category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['related_category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['related_category']->key => $_smarty_tpl->tpl_vars['related_category']->value) {
$_smarty_tpl->tpl_vars['related_category']->_loop = true;
?>
					<div class="row">
						<div class="move cell">
							<div class="move_zone"></div>
						</div>
						<div class="image cell">
							<input type="hidden" name="related_categories[]" value='<?php echo $_smarty_tpl->tpl_vars['related_category']->value->id;?>
'>
							<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('id'=>$_smarty_tpl->tpl_vars['related_category']->value->id),$_smarty_tpl);?>
">
								<?php if ($_smarty_tpl->tpl_vars['related_category']->value->image) {?>
									<img class=product_icon src='../<?php echo $_smarty_tpl->tpl_vars['config']->value->categories_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['related_category']->value->image;?>
?<?php echo rand(1,99999);?>
'>
								<?php }?>
							</a>
						</div>
						<div class="name cell">
							<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('id'=>$_smarty_tpl->tpl_vars['related_category']->value->id),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['related_category']->value->name;?>
</a>
						</div>
						<div class="icons cell">
							<a href='#' class="delete"></a>
						</div>
						<div class="clear"></div>
					</div>
				<?php } ?>
				<div id="new_related_category" class="row" style='display:none;'>
					<div class="move cell">
						<div class="move_zone"></div>
					</div>
					<div class="image cell">
						<input type=hidden name=related_categories[] value=''>
						<img class=product_icon src=''>
					</div>
					<div class="name cell">
						<a class="related_product_name related_category_name" href=""></a>
					</div>
					<div class="icons cell">
						<a href='#' class="delete"></a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<input type=text name=related id='related_categories' class="input_autocomplete" placeholder='Выберите название'>
		</div>
	</div>
	<!-- Правая колонка свойств товара (The End)-->

	<!-- Параметры страницы -->
	<div class="block layer">
		<h2>Кастомизация страницы категории</h2>
		<div style="display: flex">
			<label style="width: 300px;">Цвет фона</label>
			<div class="checkbox" style="padding-left: 0;">
				<span id="color_icon" class="brand-color"  style="width: 300px;border-radius:50px;background-color:#<?php echo $_smarty_tpl->tpl_vars['category']->value->color;?>
;"></span>
				<input id="color_input" name="color" class="simpla_inp" type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['category']->value->color) {?><?php echo $_smarty_tpl->tpl_vars['category']->value->color;?>
<?php }?>">
			</div>
		</div>
		<div class="background-image" style="display: flex;margin-top: 40px;">
			<label style="width: 300px;">Картинка для фона</label>
			<input class="upload_image" name="background" type="file">
			<input type="hidden" name="delete_background" value="">
			<?php if ($_smarty_tpl->tpl_vars['category']->value->background) {?>
			<ul>
				<li>
					<a href='#' class="delete"><img src='design/images/cross-circle-frame.png'></a>
					<img src="../<?php echo $_smarty_tpl->tpl_vars['config']->value->categories_background_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['category']->value->background;?>
" alt=""/>
				</li>
			</ul>
			<?php }?>
		</div>
		<div class="banners" style="display: flex;margin-top: 40px;">
			<label style="width: 300px;">Баннер</label>
			<input class="upload_image" name="banner" type="file">
			<input type="hidden" name="delete_banner" value="">
			<?php if ($_smarty_tpl->tpl_vars['category']->value->banner) {?>
			<ul>
				<li>
					<a href='#' class="delete"><img src='design/images/cross-circle-frame.png'></a>
					<img src="../<?php echo $_smarty_tpl->tpl_vars['config']->value->categories_banners_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['category']->value->banner;?>
" alt=""/>
				</li>
			</ul>
			<?php }?>
		</div>

	</div>
	<!-- Параметры страницы (The End)-->

	<!-- Описагние категории -->
	<div class="block layer">
		<h2>Описание</h2>
		<textarea name="description" class="editor_large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
	</div>
	<!-- Описание категории (The End)-->
	<input class="button_green button_save" type="submit" name="" value="Сохранить" />

</form>
<!-- Основная форма (The End) -->

<?php }} ?>
