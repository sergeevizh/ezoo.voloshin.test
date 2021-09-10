<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 13:41:29
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/_main-catalog-section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18066342326139e4d960d5b2-50839008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31096c0ccf7c7394ce9402b4a02d4f9873480adc' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/_main-catalog-section.tpl',
      1 => 1628361959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18066342326139e4d960d5b2-50839008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main_categories' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139e4d9617184_06127008',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139e4d9617184_06127008')) {function content_6139e4d9617184_06127008($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['api'][0][0]->api_plugin(array('module'=>'db','method'=>'query','_'=>"SELECT * FROM __categories WHERE visible_is_main=1 AND visible=1 ORDER BY position"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['api'][0][0]->api_plugin(array('module'=>'db','method'=>'results','var'=>"main_categories"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['main_categories']->value) {?>
<section class="section section_bg main-catalog-section for-desktop">
	<div class="wrapper">
		<div class="main-catalog js-main-catalog">

			<div class="main-catalog__grid">
				<a href="catalog/koshki-suhoj-korm" class="main-catalog__item main-catalog__item_bg" data-echo-background="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/catalog1-11.png">
					<div class="main-catalog__item-content">
						<div class="main-catalog__item-title">
							<p><span>Сухой корм для кошек</span></p>
						</div>
                     <div class="main-catalog__item-count"><span>Огромный выбор</span></div>
					</div>
				</a>
			</div>

			<div class="main-catalog__grid main-catalog__grid_hrz">
				<div class="main-catalog__grid main-catalog__grid_small">
					<a href="catalog/koshki-igrushki" class="main-catalog__item main-catalog__item_small main-catalog__item_bg" data-echo-background="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/catalog1-222.png">
						<div class="main-catalog__item-content">
							<div class="main-catalog__item-title">
								<p><span>Игрушки</span></p>
							</div>
							<div class="main-catalog__item-count"><span>и дразнилки</span></div>
						</div>
					</a>
				</div>

				<div class="main-catalog__grid main-catalog__grid_small">
					<a href="catalog/sobaki-igrushki" class="main-catalog__item main-catalog__item_small main-catalog__item_bg" data-echo-background="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/catalog1-333.png">
						<div class="main-catalog__item-content">
							<div class="main-catalog__item-title">
								<p><span>Развлеченье для собак</span></p>
							</div>
                         <div class="main-catalog__item-count"><span>Игрушки</span></div>
						</div>
					</a>
				</div>
			</div>

			<div class="main-catalog__grid main-catalog__grid_right">
				<a href="catalog/sobaki-suhie-korma" class="main-catalog__item main-catalog__item_bg" data-echo-background="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/catalog1-111.png">
					<div class="main-catalog__item-content">
						<div class="main-catalog__item-title">
							<p><span>Сухие корма для собак</span></p>
						</div>
						<div class="main-catalog__item-count"><span>То что нужно верному другу!</span></div>
					</div>
				</a>
			</div>

			<div class="main-catalog__grid main-catalog__grid_hrz">
				<a href="catalog/koshki-transportirovka-perenoski" class="main-catalog__item main-catalog__item_hrz">
					<div class="main-catalog__item-content">
						<div class="main-catalog__item-title">
							<p><span>Переноски</span></p>
						</div>
						<div class="main-catalog__item-count"><span>Практично и удобно!</span></div>
					</div>
					<div class="main-catalog__item-image-field">
						<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-echo="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/catalog1-5555.png" alt="" class="main-catalog__item-image">
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<?php }?>
<?php }} ?>
