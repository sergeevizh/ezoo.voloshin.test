<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 13:41:29
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17815307086139e4d90cc236-61242641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e1f439835184bfe53975751e05d17cda4ea31af' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/main.tpl',
      1 => 1628361954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17815307086139e4d90cc236-61242641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139e4d90d75a8_62970568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139e4d90d75a8_62970568')) {function content_6139e4d90d75a8_62970568($_smarty_tpl) {?>



<?php $_smarty_tpl->tpl_vars['wrapper'] = new Smarty_variable('index.tpl', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['wrapper'] = clone $_smarty_tpl->tpl_vars['wrapper'];?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable('', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<?php echo $_smarty_tpl->getSubTemplate ("_main-slider-block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("main-actions-section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="index-form-late-courier">
	<div class="wrapper wrapper-late-content">
		<div class="late_courier_block">
			<p>Если к Вам опоздал курьер, нажмите <span><button class="late_courier_btn show-late_courier_btn">сюда</button></span></p>
		</div>
	</div>
</div>
<div class="index-form-subscribe">
    <div class="wrapper">
        <form method="post" id="form-subscribe">
            <div class="form-text">Хотите узнавать о новых скидках
                и специальных предложениях?</div>

            <input type="text" name="email" placeholder="Ваш e-mail"/>
            <input type="submit" name="send" value="Подписаться"/>
        </form>
    </div>


</div>
<?php echo $_smarty_tpl->getSubTemplate ("_main-hits-section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("_main-catalog-section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("_main-brands-section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>





<div class="wrapper home-description">
	<br>
    <h1><?php echo $_smarty_tpl->tpl_vars['page']->value->header;?>
</h1>

    <?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

	<button class="btn btn_border btn_small product__expand-link js-more-description"><span>Читать далее</span><span>Скрыть</span></button>
</div>
<div class="chPopUp-custom" id="other">
	<div class="close"></div>
	<div class="inner">
		<div class="need-coast"><?php echo $_smarty_tpl->tpl_vars['settings']->value->other_city;?>
</div>
	</div>
	<div class="continue">OK</div>
</div>
<?php }} ?>
