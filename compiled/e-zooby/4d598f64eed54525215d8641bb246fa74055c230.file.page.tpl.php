<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 13:40:48
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6997327676139e4b06b4fa8-44300776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d598f64eed54525215d8641bb246fa74055c230' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/page.tpl',
      1 => 1628361954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6997327676139e4b06b4fa8-44300776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139e4b06c09f4_33491688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139e4b06c09f4_33491688')) {function content_6139e4b06c09f4_33491688($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['page']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<section class="section">
	<div class="wrapper">
		<h1 data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->header, ENT_QUOTES, 'UTF-8', true);?>
</h1>
		<?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

	</div>
</section>
<?php }} ?>
