<?php /* Smarty version Smarty-3.1.18, created on 2020-09-11 11:01:17
         compiled from "/var/www/www-root/data/www/e-zoo.by/design/default/html/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14090496485f5b2ecd8c7cf9-26146493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d617ac618f8d037db1490117a03970f98957734' => 
    array (
      0 => '/var/www/www-root/data/www/e-zoo.by/design/default/html/index.tpl',
      1 => 1569827546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14090496485f5b2ecd8c7cf9-26146493',
  'function' => 
  array (
    'categories_tree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'config' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'canonical' => 0,
    'settings' => 0,
    'pages' => 0,
    'p' => 0,
    'page' => 0,
    'user' => 0,
    'group' => 0,
    'content' => 0,
    'keyword' => 0,
    'categories' => 0,
    'c' => 0,
    'category' => 0,
    'all_brands' => 0,
    'b' => 0,
    'currencies' => 0,
    'currency' => 0,
    'browsed_products' => 0,
    'browsed_product' => 0,
    'last_posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5f5b2ecda5ec14_08706153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5b2ecda5ec14_08706153')) {function content_5f5b2ecda5ec14_08706153($_smarty_tpl) {?><!DOCTYPE html>

<html>
<head>
	<base href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/"/>
	<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
	
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
	<meta name="keywords"    content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
	<meta name="viewport" content="width=1024"/>
	
	
	<?php if (isset($_smarty_tpl->tpl_vars['canonical']->value)) {?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
"/><?php }?>
	
	
	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/style.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/favicon.ico" rel="icon"          type="image/x-icon"/>
	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
	
	
	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/jquery.js"  type="text/javascript"></script>
	
	
	<?php if ($_SESSION['admin']=='admin') {?>
	<script src ="simpla/design/js/admintooltip/admintooltip.js" type="text/javascript"></script>
	<link   href="simpla/design/js/admintooltip/css/admintooltip.css" rel="stylesheet" type="text/css" /> 
	<?php }?>
	
	
	<script type="text/javascript" src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/ctrlnavigate.js"></script>           
	
	
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery-ui.min.js"></script>
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/ajax_cart.js"></script>

	
	<script type="text/javascript" src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/fancybox/jquery.fancybox.pack.js"></script>
	<link rel="stylesheet" href="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	
		<script>
			$(function() {
				// ?????????????????? ?????????? ??????????????????????????
				$(".features li:even").addClass('even');

				// ?????? ????????????????
				$("a.zoom").fancybox({
					prevEffect	: 'fade',
					nextEffect	: 'fade'
				});
			});
		</script>
	
	
	
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/baloon/js/baloon.js" type="text/javascript"></script>
	<link   href="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/baloon/css/baloon.css" rel="stylesheet" type="text/css" /> 
	
	
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/autocomplete/jquery.autocomplete-min.js" type="text/javascript"></script>
	
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
		//  ?????????????????????????????? ????????????
		$(".input_search").autocomplete({
			serviceUrl:'ajax/search_products.php',
			minChars:1,
			noCache: false, 
			onSelect:
				function(suggestion){
					 $(".input_search").closest('form').submit();
				},
			formatResult:
				function(suggestion, currentValue){
					var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
					var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
	  				return (suggestion.data.image?"<img align=absmiddle src='"+suggestion.data.image+"'> ":'') + suggestion.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>');
				}	
		});
	});
	</script>
	
		
			
</head>
<body>

	<!-- ?????????????? ???????????? -->
	<div id="top_background">
	<div id="top">
	
		<!-- ???????? -->
		<ul id="menu">
			<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
				
				<?php if ($_smarty_tpl->tpl_vars['p']->value->menu_id==1) {?>
				<li <?php if ($_smarty_tpl->tpl_vars['page']->value&&$_smarty_tpl->tpl_vars['page']->value->id==$_smarty_tpl->tpl_vars['p']->value->id) {?>class="selected"<?php }?>>
					<a data-page="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" href="<?php echo $_smarty_tpl->tpl_vars['p']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
				</li>
				<?php }?>
			<?php } ?>
		</ul>
		<!-- ???????? (The End) -->
	
		<!-- ?????????????? -->
		<div id="cart_informer">
			
			<?php echo $_smarty_tpl->getSubTemplate ('cart_informer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
		<!-- ?????????????? (The End)-->

		<!-- ???????? ???????????????????????? -->
		<div id="account">
			<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
				<span id="username">
					<a href="user"><?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
</a><?php if ($_smarty_tpl->tpl_vars['group']->value->discount>0) {?>,
					???????? ???????????? &mdash; <?php echo $_smarty_tpl->tpl_vars['group']->value->discount;?>
%<?php }?>
				</span>
				<a id="logout" href="user/logout">??????????</a>
			<?php } else { ?>
				<a id="register" href="user/register">??????????????????????</a>
				<a id="login" href="user/login">????????</a>
			<?php }?>
		</div>
		<!-- ???????? ???????????????????????? (The End)-->

	</div>
	</div>
	<!-- ?????????????? ???????????? (The End)-->
	
	
	<!-- ?????????? -->
	<div id="header">
		<div id="logo">
			<a href="/"><img src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logo.png" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
"/></a>
		</div>	
		<div id="contact">
			(095) <span id="phone">545-54-54</span>
			<div id="address">????????????, ?????????? ?????????????????????? 45/31, ???????? 453</div>
		</div>	
	</div>
	<!-- ?????????? (The End)--> 


	<!-- ?????? ???????????????? --> 
	<div id="main">
	
		<!-- ???????????????? ?????????? --> 
		<div id="content">
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		</div>
		<!-- ???????????????? ?????????? (The End) --> 

		<div id="left">

			<!-- ??????????-->
			<div id="search">
				<form action="products">
					<input class="input_search" type="text" name="keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="?????????? ????????????"/>
					<input class="button_search" value="" type="submit" />
				</form>
			</div>
			<!-- ?????????? (The End)-->

			
			<!-- ???????? ???????????????? -->
			<div id="catalog_menu">
					
			
			<?php if (!function_exists('smarty_template_function_categories_tree')) {
    function smarty_template_function_categories_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['categories_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
			<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
			<ul>
			<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
				
				<?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['c']->value->image) {?><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->categories_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['c']->value->image;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
						<a <?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?>class="selected"<?php }?> href="catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
						<?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories));?>

					</li>
				<?php }?>
			<?php } ?>
			</ul>
			<?php }?>
			<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

			<?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories']->value));?>

			</div>
			<!-- ???????? ???????????????? (The End)-->		
	
			
			<!-- ?????? ???????????? -->
			
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_brands'][0][0]->get_brands_plugin(array('var'=>'all_brands'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['all_brands']->value) {?>
			<div id="all_brands">
				<h2>?????? ????????????:</h2>
				<?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>	
					<?php if ($_smarty_tpl->tpl_vars['b']->value->image) {?>
					<a href="brands/<?php echo $_smarty_tpl->tpl_vars['b']->value->url;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->brands_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['b']->value->image;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"></a>
					<?php } else { ?>
					<a href="brands/<?php echo $_smarty_tpl->tpl_vars['b']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value->name;?>
</a>
					<?php }?>
				<?php } ?>
			</div>
			<?php }?>
			<!-- ?????? ???????????? (The End)-->

			<!-- ?????????? ???????????? -->
			
			<?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
			<div id="currencies">
				<h2>????????????</h2>
				<ul>
					<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['c']->value->enabled) {?> 
					<li class="<?php if ($_smarty_tpl->tpl_vars['c']->value->id==$_smarty_tpl->tpl_vars['currency']->value->id) {?>selected<?php }?>"><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('currency_id'=>$_smarty_tpl->tpl_vars['c']->value->id),$_smarty_tpl);?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
					<?php }?>
					<?php } ?>
				</ul>
			</div> 
			<?php }?>
			<!-- ?????????? ???????????? (The End) -->	

			
			<!-- ?????????????????????????? ???????????? -->
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_browsed_products'][0][0]->get_browsed_products(array('var'=>'browsed_products','limit'=>20),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['browsed_products']->value) {?>
			
				<h2>???? ??????????????????????????:</h2>
				<ul id="browsed_products">
				<?php  $_smarty_tpl->tpl_vars['browsed_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['browsed_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['browsed_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['browsed_product']->key => $_smarty_tpl->tpl_vars['browsed_product']->value) {
$_smarty_tpl->tpl_vars['browsed_product']->_loop = true;
?>
					<li>
					<a href="products/<?php echo $_smarty_tpl->tpl_vars['browsed_product']->value->url;?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['browsed_product']->value->image->filename,50,50);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"></a>
					</li>
				<?php } ?>
				</ul>
			<?php }?>
			<!-- ?????????????????????????? ???????????? (The End)-->
			
			
			<!-- ???????? ?????????? -->
			
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_posts'][0][0]->get_posts_plugin(array('var'=>'last_posts','limit'=>5),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['last_posts']->value) {?>
			<div id="blog_menu">
				<h2>?????????? ???????????? ?? <a href="blog">??????????</a></h2>
				<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['last_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
				<ul>
					<li data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['post']->value->date);?>
 <a href="blog/<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
				</ul>
				<?php } ?>
			</div>
			<?php }?>
			<!-- ???????? ??????????  (The End) -->
			
		</div>			

	</div>
	<!-- ?????? ???????????????? (The End)--> 
	
	<!-- ?????????? -->
	<div id="footer">
		<a href="http://simplacms.ru">???????????? ????????????????-???????????????? Simpla</a>
	</div>
	<!-- ?????????? (The End)--> 
	
</body>
</html><?php }} ?>
