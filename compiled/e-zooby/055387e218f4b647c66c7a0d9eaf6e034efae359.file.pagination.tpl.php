<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 13:43:38
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10293514586139e55a5a4949-37161785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '055387e218f4b647c66c7a0d9eaf6e034efae359' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/pagination.tpl',
      1 => 1628361954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10293514586139e55a5a4949-37161785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_pages_num' => 0,
    'current_page_num' => 0,
    'visible_pages' => 0,
    'page_from' => 0,
    'page_to' => 0,
    'p' => 0,
    'items_per_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139e55a5ce402_70189861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139e55a5ce402_70189861')) {function content_6139e55a5ce402_70189861($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['total_pages_num']->value>1) {?>



	<div class="pagination">

		
		<?php $_smarty_tpl->tpl_vars['visible_pages'] = new Smarty_variable(11, null, 0);?>

		
		<?php $_smarty_tpl->tpl_vars['page_from'] = new Smarty_variable(1, null, 0);?>

		
		<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value>floor($_smarty_tpl->tpl_vars['visible_pages']->value/2)) {?>
			<?php $_smarty_tpl->tpl_vars['page_from'] = new Smarty_variable(max(1,$_smarty_tpl->tpl_vars['current_page_num']->value-floor($_smarty_tpl->tpl_vars['visible_pages']->value/2)-1), null, 0);?>
		<?php }?>

		
		<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value>$_smarty_tpl->tpl_vars['total_pages_num']->value-ceil($_smarty_tpl->tpl_vars['visible_pages']->value/2)) {?>
			<?php $_smarty_tpl->tpl_vars['page_from'] = new Smarty_variable(max(1,$_smarty_tpl->tpl_vars['total_pages_num']->value-$_smarty_tpl->tpl_vars['visible_pages']->value-1), null, 0);?>
		<?php }?>

		
		<?php $_smarty_tpl->tpl_vars['page_to'] = new Smarty_variable(min($_smarty_tpl->tpl_vars['page_from']->value+$_smarty_tpl->tpl_vars['visible_pages']->value,$_smarty_tpl->tpl_vars['total_pages_num']->value-1), null, 0);?>

		<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==2) {?>
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null),$_smarty_tpl);?>
" class="pagination__link pagination__link_prev prev_page_link"></a>
			<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['prev'] = new Smarty_variable($_tmp2, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['prev'] = clone $_smarty_tpl->tpl_vars['prev']; $_ptr = $_ptr->parent; }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value>2) {?>
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl);?>
" class="pagination__link pagination__link_prev prev_page_link"></a>
			<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['prev'] = new Smarty_variable($_tmp3, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['prev'] = clone $_smarty_tpl->tpl_vars['prev']; $_ptr = $_ptr->parent; }?>
		<?php }?>

		
		<a class="pagination__link<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==1) {?> is-active<?php }?>" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null),$_smarty_tpl);?>
">1</a>

		
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['name'] = 'pages';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['page_to']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = (int) $_smarty_tpl->tpl_vars['page_from']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total']);
?>
			
			<?php $_smarty_tpl->tpl_vars['p'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['pages']['index']+1, null, 0);?>
			
			<?php if (($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['page_from']->value+1&&$_smarty_tpl->tpl_vars['p']->value!=2)||($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['page_to']->value&&$_smarty_tpl->tpl_vars['p']->value!=$_smarty_tpl->tpl_vars['total_pages_num']->value-1)) {?>
				
				<span class="pagination__dott">...</span>
			<?php } else { ?>
				<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['p']->value),$_smarty_tpl);?>
" class="pagination__link<?php if ($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['current_page_num']->value) {?> is-active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a>
			<?php }?>
		<?php endfor; endif; ?>

		
		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['total_pages_num']->value),$_smarty_tpl);?>
" class="pagination__link<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==$_smarty_tpl->tpl_vars['total_pages_num']->value) {?> is-active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['total_pages_num']->value;?>
</a>

		
		<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value<$_smarty_tpl->tpl_vars['total_pages_num']->value) {?>
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value+1),$_smarty_tpl);?>
" class="pagination__link pagination__link_next"></a>
			<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value+1),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['next'] = new Smarty_variable($_tmp4, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['next'] = clone $_smarty_tpl->tpl_vars['next']; $_ptr = $_ptr->parent; }?>
		<?php }?>

	</div>
	<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value<$_smarty_tpl->tpl_vars['total_pages_num']->value) {?>
	<div class="pagination-mob">
		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value+1),$_smarty_tpl);?>
" class="pagination-mob__link">Следующие <?php echo $_smarty_tpl->tpl_vars['items_per_page']->value;?>
</a>
	</div>
	<?php }?>
<?php }?>
<?php }} ?>
