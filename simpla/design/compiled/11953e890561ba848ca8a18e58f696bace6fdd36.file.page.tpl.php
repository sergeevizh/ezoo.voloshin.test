<?php /* Smarty version Smarty-3.1.18, created on 2021-09-07 13:22:11
         compiled from "simpla/design/html/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28131845761373d539f5b43-39784046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11953e890561ba848ca8a18e58f696bace6fdd36' => 
    array (
      0 => 'simpla/design/html/page.tpl',
      1 => 1628362408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28131845761373d539f5b43-39784046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager' => 0,
    'menus' => 0,
    'm' => 0,
    'menu' => 0,
    'page' => 0,
    'message_success' => 0,
    'config' => 0,
    'message_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_61373d53ab25b4_67740668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61373d53ab25b4_67740668')) {function content_61373d53ab25b4_67740668($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/Smarty/libs/plugins/modifier.replace.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<?php if (in_array('pages',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
	<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
		<li <?php if ($_smarty_tpl->tpl_vars['m']->value->id==$_smarty_tpl->tpl_vars['menu']->value->id) {?>class="active"<?php }?>><a href='index.php?module=PagesAdmin&menu_id=<?php echo $_smarty_tpl->tpl_vars['m']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['m']->value->name;?>
</a></li>
	<?php } ?>
	<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['page']->value->id) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['page']->value->name, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('?????????? ????????????????', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('tinymce_init.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<script src="design/js/jquery/jquery.js"></script>
<script src="design/js/jquery/jquery-ui.min.js"></script>


<script>
$(function() {

	// ???????????????????????????? ????????-??????????
	menu_item_name_touched = true;
	meta_title_touched = true;
	meta_keywords_touched = true;
	meta_description_touched = true;
	url_touched = true;
	
	if($('input[name="menu_item_name"]').val() == generate_menu_item_name() || $('input[name="name"]').val() == '')
		menu_item_name_touched = false;
	if($('input[name="meta_title"]').val() == generate_meta_title() || $('input[name="meta_title"]').val() == '')
		meta_title_touched = false;
	if($('input[name="meta_keywords"]').val() == generate_meta_keywords() || $('input[name="meta_keywords"]').val() == '')
		meta_keywords_touched = false;
	if($('textarea[name="meta_description"]').val() == generate_meta_description() || $('textarea[name="meta_description"]').val() == '')
		meta_description_touched = false;
	if($('input[name="url"]').val() == generate_url())
		url_touched = false;
		
	$('input[name="name"]').change(function() { menu_item_name_touched = true; });
	$('input[name="meta_title"]').change(function() { meta_title_touched = true; });
	$('input[name="meta_keywords"]').change(function() { meta_keywords_touched = true; });
	$('textarea[name="meta_description"]').change(function() { meta_description_touched = true; });
	$('input[name="url"]').change(function() { url_touched = true; });
	
	$('input[name="header"]').keyup(function() { set_meta(); });
});

function set_meta()
{
	if(!menu_item_name_touched)
		$('input[name="name"]').val(generate_menu_item_name());
	if(!meta_title_touched)
		$('input[name="meta_title"]').val(generate_meta_title());
	if(!meta_keywords_touched)
		$('input[name="meta_keywords"]').val(generate_meta_keywords());
	if(!meta_description_touched)
	{
		descr = $('textarea[name="meta_description"]');
		descr.val(generate_meta_description());
		descr.scrollTop(descr.outerHeight());
	}
	if(!url_touched)
		$('input[name="url"]').val(generate_url());
}

function generate_menu_item_name()
{
	name = $('input[name="header"]').val();
	return name;
}

function generate_meta_title()
{
	name = $('input[name="header"]').val();
	return name;
}

function generate_meta_keywords()
{
	name = $('input[name="header"]').val();
	return name;
}

function generate_meta_description()
{
	if(typeof(tinyMCE.get("body")) =='object')
	{
		description = tinyMCE.get("body").getContent().replace(/(<([^>]+)>)/ig," ").replace(/(\&nbsp;)/ig," ").replace(/^\s+|\s+$/g, '').substr(0, 512);
		return description;
	}
	else
		return $('textarea[name=body]').val().replace(/(<([^>]+)>)/ig," ").replace(/(\&nbsp;)/ig," ").replace(/^\s+|\s+$/g, '').substr(0, 512);
}

function generate_url()
{
	url = $('input[name="header"]').val();
	url = url.replace(/[\s]+/gi, '-');
	url = translit(url);
	url = url.replace(/[^0-9a-z_\-]+/gi, '').toLowerCase();	
	return url;
}

function translit(str)
{
	var ru=("??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??-??").split("-")   
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





<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
<!-- ?????????????????? ?????????????????? -->
<div class="message message_success">
	<span class="text"><?php if ($_smarty_tpl->tpl_vars['message_success']->value=='added') {?>???????????????? ??????????????????<?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value=='updated') {?>???????????????? ??????????????????<?php }?></span>
	<a class="link" target="_blank" href="../<?php echo $_smarty_tpl->tpl_vars['page']->value->url;?>
">?????????????? ???????????????? ???? ??????????</a>
	<?php if ($_GET['return']) {?>
	<a class="button" href="<?php echo $_GET['return'];?>
">??????????????????</a>
	<?php }?>
	
	<span class="share">		
		<a href="#" onClick='window.open("http://vkontakte.ru/share.php?url=<?php echo urlencode($_smarty_tpl->tpl_vars['config']->value->root_url);?>
/<?php echo urlencode($_smarty_tpl->tpl_vars['page']->value->url);?>
&title=<?php echo urlencode($_smarty_tpl->tpl_vars['page']->value->name);?>
&description=<?php echo urlencode($_smarty_tpl->tpl_vars['page']->value->body);?>
&noparse=false","displayWindow","width=700,height=400,left=250,top=170,status=no,toolbar=no,menubar=no");return false;'>
  		<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/simpla/design/images/vk_icon.png" /></a>
		<a href="#" onClick='window.open("http://www.facebook.com/sharer.php?u=<?php echo urlencode($_smarty_tpl->tpl_vars['config']->value->root_url);?>
/<?php echo urlencode($_smarty_tpl->tpl_vars['page']->value->url);?>
","displayWindow","width=700,height=400,left=250,top=170,status=no,toolbar=no,menubar=no");return false;'>
  		<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/simpla/design/images/facebook_icon.png" /></a>
		<a href="#" onClick='window.open("http://twitter.com/share?text=<?php echo urlencode($_smarty_tpl->tpl_vars['page']->value->name);?>
&url=<?php echo urlencode($_smarty_tpl->tpl_vars['config']->value->root_url);?>
/<?php echo urlencode($_smarty_tpl->tpl_vars['page']->value->url);?>
&hashtags=<?php echo urlencode(smarty_modifier_replace($_smarty_tpl->tpl_vars['page']->value->meta_keywords,' ',''));?>
","displayWindow","width=700,height=400,left=250,top=170,status=no,toolbar=no,menubar=no");return false;'>
  		<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/simpla/design/images/twitter_icon.png" /></a>
	</span>
	
</div>
<!-- ?????????????????? ?????????????????? (The End)-->
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
<!-- ?????????????????? ?????????????????? -->
<div class="message message_error">
	<span class="text"><?php if ($_smarty_tpl->tpl_vars['message_error']->value=='url_exists') {?>???????????????? ?? ?????????? ?????????????? ?????? ????????????????????<?php }?></span>
	<a class="button" href="">??????????????????</a>
</div>
<!-- ?????????????????? ?????????????????? (The End)-->
<?php }?>



<!-- ???????????????? ?????????? -->
<form method=post id=product enctype="multipart/form-data">
	<input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<div id="name">
		<input class="name" name=header type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->header, ENT_QUOTES, 'UTF-8', true);?>
"/> 
		<input name=id type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/> 
		<div class="checkbox">
			<input name=visible value='1' type="checkbox" id="active_checkbox" <?php if ($_smarty_tpl->tpl_vars['page']->value->visible) {?>checked<?php }?>/> <label for="active_checkbox">??????????????</label>
		</div>
	</div> 

		<!-- ?????????????????? ???????????????? -->
		<div class="block">
			<ul>
				<li><label class=property>???????????????? ???????????? ?? ????????</label><input name="name" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>????????</label>	
					<select name="menu_id">
				   		<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
				        	<option value='<?php echo $_smarty_tpl->tpl_vars['m']->value->id;?>
' <?php if ($_smarty_tpl->tpl_vars['page']->value->menu_id==$_smarty_tpl->tpl_vars['m']->value->id) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
				    	<?php } ?>
					</select>		
				</li>
			</ul>
		</div>
		<!-- ?????????????????? ???????????????? (The End)-->

	<!-- ?????????? ?????????????? ?????????????? ???????????? -->
	<div id="column_left">
			
		<!-- ?????????????????? ???????????????? -->
		<div class="block layer">
			<h2>?????????????????? ????????????????</h2>
			<ul>
				<li><label class=property>??????????</label><div class="page_url">/</div><input name="url" class="page_url" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>??????????????????</label><input name="meta_title" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->meta_title, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>???????????????? ??????????</label><input name="meta_keywords" class="simpla_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>????????????????</label><textarea name="meta_description" class="simpla_inp"/><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->meta_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea></li>
			</ul>
		</div>
		<!-- ?????????????????? ???????????????? (The End)-->		

			
	</div>
	<!-- ?????????? ?????????????? ?????????????? ???????????? (The End)--> 
		
	<!-- ?????????????????? ???????????? -->
	<div class="block layer">
		<h2>?????????? ????????????????</h2>
		<textarea name="body"  class="editor_large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->body, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
	</div>
	<!-- ???????????????? ???????????? (The End)-->
	<input class="button_green button_save" type="submit" name="" value="??????????????????" />
	
</form>
<!-- ???????????????? ?????????? (The End) -->

<?php }} ?>
