<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 13:41:29
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/main-actions-section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5670469016139e4d90f02d6-47708091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38ac00058f93276f097599bb57c0bfb0d0ab8abd' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/main-actions-section.tpl',
      1 => 1628361953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5670469016139e4d90f02d6-47708091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'discounted_products' => 0,
    'discounted_product' => 0,
    'discounted_count_products' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139e4d90fc3f4_55073360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139e4d90fc3f4_55073360')) {function content_6139e4d90fc3f4_55073360($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_discounted_products'][0][0]->get_discounted_products_plugin(array('var'=>'discounted_products','limit'=>4),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['discounted_products']->value) {?>
    <section class="section actions-section section-add">
        <div class="wrapper">
            <h2 class="section__title actions-section__title">Акции</h2>
        </div>
        <div class="actions">
            <div class="wrapper">
                <div class="actions__content js-actions-content">
                    <?php  $_smarty_tpl->tpl_vars['discounted_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discounted_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discounted_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['discounted_product']->key => $_smarty_tpl->tpl_vars['discounted_product']->value) {
$_smarty_tpl->tpl_vars['discounted_product']->_loop = true;
?>
                        <div class="actions__item">
                            <?php echo $_smarty_tpl->getSubTemplate ("_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('addclass'=>"cart_large",'product'=>$_smarty_tpl->tpl_vars['discounted_product']->value,'imageLazyLoad'=>true), 0);?>

                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['api'][0][0]->api_plugin(array('module'=>'products','method'=>'count_products','_'=>array('visible'=>1,'discounted'=>1),'var'=>'discounted_count_products'),$_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['discounted_count_products']->value>4) {?>
                
                <div class="actions__overlay-block">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/actions" class="actions__overlay"><span class="actions__overlay-content">Еще <?php echo $_smarty_tpl->tpl_vars['discounted_count_products']->value-4;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier(($_smarty_tpl->tpl_vars['discounted_count_products']->value-4),'товар','товаров','товара');?>
</span></a>
                </div>
            <?php }?>
        </div>
    </section>
<?php }?>
<?php }} ?>
