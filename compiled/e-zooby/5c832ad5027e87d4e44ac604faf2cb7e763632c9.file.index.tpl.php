<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 13:40:40
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16441173076139e4a8adc3a9-24866474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c832ad5027e87d4e44ac604faf2cb7e763632c9' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/index.tpl',
      1 => 1628361953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16441173076139e4a8adc3a9-24866474',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'meta_title' => 0,
    'current_page_num' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'canonical' => 0,
    'prev' => 0,
    'next' => 0,
    'module' => 0,
    'product' => 0,
    'settings' => 0,
    'colorsTheme' => 0,
    'colorTheme' => 0,
    'v' => 0,
    'pages' => 0,
    'p' => 0,
    'page' => 0,
    'phone_shop' => 0,
    'cities' => 0,
    'region_id' => 0,
    'city' => 0,
    'regions' => 0,
    'region' => 0,
    'region_short_name' => 0,
    'user' => 0,
    'keyword' => 0,
    'content' => 0,
    'dadata_city' => 0,
    'add_comments_block_form' => 0,
    'registration_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139e4a8c0fc85_51107901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139e4a8c0fc85_51107901')) {function content_6139e4a8c0fc85_51107901($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/Smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_fetch')) include '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/Smarty/libs/plugins/function.fetch.php';
?><!DOCTYPE HTML>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<base href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/"/>
	<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value>1) {?> | Страница №<?php echo $_smarty_tpl->tpl_vars['current_page_num']->value;?>
<?php }?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport"
		  content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1, minimum-scale=1">
	<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value>1) {?> Страница №<?php echo $_smarty_tpl->tpl_vars['current_page_num']->value;?>
<?php }?>">
	<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<?php if (isset($_smarty_tpl->tpl_vars['canonical']->value)) {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
"/><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['prev']->value)) {?>
		<link rel="prev" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php echo $_smarty_tpl->tpl_vars['prev']->value;?>
"/><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['next']->value)) {?>
		<link rel="next" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
"/><?php }?>

	<meta property="og:title" content="<?php if ($_smarty_tpl->tpl_vars['module']->value=='ProductView') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array(),$_smarty_tpl);?>
" />
	<meta property="og:image" content="<?php if ($_smarty_tpl->tpl_vars['module']->value=='ProductView') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,330,300);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/e-zooby/images/logo3.png<?php }?>" />
	<?php if ($_smarty_tpl->tpl_vars['module']->value=='ProductView') {?><meta property="og:description" content="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value->annotation);?>
" /><?php }?>


	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>

	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/fonts.min.css" rel="stylesheet" type="text/css"/>
	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/normalize.min.css" rel="stylesheet" type="text/css"/>
	<?php if (strpos($_SERVER['HTTP_USER_AGENT'],"Speed Insights")==false) {?>
		<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/jquery.fancybox/jquery.fancybox.min.css" rel="stylesheet"
			  type="text/css"/>
		<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/jquery.formstyler/jquery.formstyler.min.css"
			  rel="stylesheet" type="text/css"/>
		<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/jquery.mCustomScrollbar/jquery.mCustomScrollbar.min.css"
			  rel="stylesheet" type="text/css"/>
		<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/jquery.slick/slick.min.css" rel="stylesheet"
			  type="text/css"/>
		<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/jquery-ui-1.11.4/jquery-ui.min.css" rel="stylesheet"
			  type="text/css"/>
		<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/jquery.carouselTicker/carouselTicker.min.css"
			  rel="stylesheet" type="text/css"/>
	<?php }?>
<!--	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/libs.min.css" rel="stylesheet" type="text/css"/>-->
	<meta name="yandex-verification" content="0075d453e22714ef"/>
	<meta name="google-site-verification" content="fw6x1dqL7fxy0DrE7hXrqzyvK5mrSED07rCmb4BTakE" />
	<meta name="google-site-verification" content="mStYj6LFGHIT4DsleR1Dt11qWcTfNGC8PnTBBHP3A1c" />
	<meta content="11e74cdc0b23fc411063e4f8b9d668be" />
	<meta name="cmsmagazine" content="468f70ab91e70c908dc7b4a7dee94232"/>
	<meta name="cmsmagazine" content="11c9463b9bd5970e1f7da9649e12a0c1"/>
	<meta name="it-rating" content="it-rat-c1a5de279a1e954ecc24af76ceb0188e"/>
	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/style.css?04122020" rel="stylesheet" type="text/css"/>
	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/media.css?20112020" rel="stylesheet" type="text/css"/>
	<?php $_smarty_tpl->tpl_vars['colorsTheme'] = new Smarty_variable(array('default','green','orange','blue'), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['colorTheme'] = new Smarty_variable('green', null, 0);?>
	<?php if ($_SERVER['COLOR_THEME']&&in_array($_SERVER['COLOR_THEME'],$_smarty_tpl->tpl_vars['colorsTheme']->value)) {?>
		<?php $_smarty_tpl->tpl_vars['colorTheme'] = new Smarty_variable($_SERVER['COLOR_THEME'], null, 0);?>
	<?php }?>

	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/theme-<?php echo $_smarty_tpl->tpl_vars['colorTheme']->value;?>
.min.css" rel="stylesheet" type="text/css"/>

	<!--[if lt IE 9]>
		<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/html5shiv.min.js" type="text/javascript"></script>
		<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/respond.min.js" type="text/javascript"></script>
	<![endif]-->
	<script>
		var echo = false,
				currentHours = <?php if ($_GET['currentHours']) {?><?php echo $_GET['currentHours'];?>
<?php } else { ?><?php echo date('H');?>
<?php }?>;
	</script>

	<meta name="yandex-verification" content="3035ca30538e8aa4"/>
	
		<!-- Google Tag Manager -->
		<script>(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({
					'gtm.start':
							new Date().getTime(), event: 'gtm.js'
				});
				var f = d.getElementsByTagName(s)[0],
						j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
				j.async = true;
				j.src =
						'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, 'script', 'dataLayer', 'GTM-WK6H6MF');</script>

		<!-- pixel vk -->
		<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?168",t.onload=function(){VK.Retargeting.Init("VK-RTRG-424816-erPVE"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-424816-erPVE" style="position:fixed; left:-999px;" alt=""/></noscript>
		<!-- pixel vk end -->

		<!-- End Google Tag Manager -->
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125077442-2"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}

			gtag('js', new Date());
			gtag('config', 'UA-125077442-2');
		</script>
	
	<script src="//code.jivosite.com/widget.js" jv-id="px2s1mVaRI" async></script>
	

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
				{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
				n.callMethod.apply(n,arguments):n.queue.push(arguments)};
				if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
				n.queue=[];t=b.createElement(e);t.async=!0;
				t.src=v;s=b.getElementsByTagName(e)[0];
				s.parentNode.insertBefore(t,s)}(window, document,'script',
				'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1707249842760515');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
				   src="https://www.facebook.com/tr?id=1707249842760515&ev=PageView&noscript=1"
		/></noscript>
	<!-- End Facebook Pixel Code -->
	

	
		<!-- Facebook Pixel Code -->
		<script>
			!function (f, b, e, v, n, t, s) {
				if (f.fbq) return;
				n = f.fbq = function () {
					n.callMethod ?
							n.callMethod.apply(n, arguments) : n.queue.push(arguments)
				};
				if (!f._fbq) f._fbq = n;
				n.push = n;
				n.loaded = !0;
				n.version = '2.0';
				n.queue = [];
				t = b.createElement(e);
				t.async = !0;
				t.src = v;
				s = b.getElementsByTagName(e)[0];
				s.parentNode.insertBefore(t, s)
			}(window, document, 'script',
					'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '2289801434665407');
			fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
					   src="https://www.facebook.com/tr?id=2289801434665407&ev=PageView&noscript=1"
			/></noscript>
	
	
	<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?168",t.onload=function(){VK.Retargeting.Init("VK-RTRG-483798-a8n5Q"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-483798-a8n5Q" style="position:fixed; left:-999px;" alt=""/></noscript>
	
	
		<!-- End Facebook Pixel Code -->
		<!-- Global site tag (gtag.js) - Google Ads: 697955346 -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-697955346"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}

			gtag('js', new Date());

			gtag('config', 'AW-697955346');
		</script>
	

	<?php if ($_smarty_tpl->tpl_vars['module']->value=='ProductsView'||$_smarty_tpl->tpl_vars['module']->value=='ProductView') {?>

		<?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)>=1) {?>

			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>

				<script>

					console.log(<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
);

					gtag('event', 'view_item', {
						'send_to': 'AW-697955346',
						'value': <?php echo $_smarty_tpl->tpl_vars['v']->value->price;?>
,
						'items': [{
							'id': <?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
,
							'google_business_vertical': 'custom'
						}]
					});
				</script>

			<?php } ?>

		<?php }?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['module']->value!='ProductView') {?>
	
	<script type="application/ld+json">

		{
			"@context": "http://schema.org",
			"@type": "Organization",
			"name": "e-zoo.by",
			"address": {
				"@type": "PostalAddress",
				"addressLocality": "Минск",
				"postalCode": "220073",
				"streetAddress": "ул. Бирюзова, д.4/5, офис 2024"
			},
			"email": "infoezoo.by@gmail.com",
			"telephone": "7755",
			"aggregateRating": {
				"@type": "AggregateRating",
				"ratingValue": "4",
				"ratingCount": "20"
			}
		}

	</script>
	
	<?php } else { ?>
	
	<script type="application/ld+json">

		{
			"@context": "http://schema.org",
			"@type": "Organization",
			"name": "e-zoo.by",
			"address": {
				"@type": "PostalAddress",
				"addressLocality": "Минск",
				"postalCode": "ул. Бирюзова, д.4/5, офис 2024",
				"streetAddress": "ул. Бирюзова, д.4/5, офис 2024"
			},
			"email": "infoezoo.by@gmail.com",
			"telephone": "7755"
		}

	</script>
	
	<?php }?>
	
	<script>
        (function(d) {
            var s = d.createElement('script');
            s.defer = true;
            s.src = 'https://multisearch.io/plugin/11416';
            if (d.head) d.head.appendChild(s);
        })(document);
	</script>
	
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
	<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WK6H6MF"
			height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<!--[if lt IE 10]>
<div class="browse-happy">
	<div class="wrapper">
		<p class="browse-happy__notice">Мы обнаружили, что вы используете <strong>устаревшую версию</strong> браузера
			Internet Explorer</p>
		<p class="browse-happy__security">Из соображений безопасности этот сайт поддерживает Internet Explorer версии 10
			и выше <br>Кроме того, этот и многие другие сайты могут отображаться <strong>некорректно</strong></p>
		<p class="browse-happy__update">Пожалуйста, обновите свой браузер по этой <a href="http://browsehappy.com/"
																					 rel="nofollow" target="_blank">ссылке</a>
		</p>
		<p class="browse-happy__recommend">(мы рекомендуем <a href="http://www.google.com/chrome" rel="nofollow"
															  target="_blank">Google Chrome</a>)</p>
	</div>
</div>
<![endif]-->
<header class="header">
	<div class="header__top top-block js-top-block">
		<div class="wrapper">
			<div class="top-block__content">
				<div class="top-block__nav">
					<ul class="top-nav">
						<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
							
							<?php if ($_smarty_tpl->tpl_vars['p']->value->menu_id==1) {?>
								<li class="top-nav__item<?php if ($_smarty_tpl->tpl_vars['page']->value&&$_smarty_tpl->tpl_vars['page']->value->id==$_smarty_tpl->tpl_vars['p']->value->id) {?><?php }?>">
									<a data-page="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value->url;?>
"
									   class="top-nav__link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
								</li>
							<?php }?>
						<?php } ?>
							
							<li class="top-nav__item">
								<a data-page="" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/bonus"
									   class="top-nav__link">Бонусы</a>
							</li>

					</ul>
				</div>

				<div class="top-block__contacts">
					<div class="top-contacts">

						<a href="tel:<?php echo $_smarty_tpl->tpl_vars['phone_shop']->value;?>
" class="top-contacts__phone">
							<div class="h5">Тел: <?php echo $_smarty_tpl->tpl_vars['phone_shop']->value;?>
</div>
						</a>

						<span class="top-contacts__schedule" style=" margin-right: 2rem;">

								<i class="icon icon-schedule"></i> Пн-Вс 09:00–21:00
							</span>

					</div>

				</div>

				<div class="top-block__account">
					<div class="account-field">

						
						<div class="account-map">
							<style>
								#regions-window ul{
									width: 100%;
									columns: 3;
									list-style: none;
								}
								#regions-window .popup-form-row {
									margin-bottom: 0.5rem;
								}

								#regions-window .popup-form-row input[type=radio] {
									margin-right: 15px;
									width: 18px;
									height: 18px;
									vertical-align: middle;
								}

								#regions-window .popup-form-row label {
									cursor: pointer;
								}

								#regions-window .popup-btn-row {
									padding-top: 1.5rem;
								}

								a.a_js-popup-link {
									text-decoration: none;
									color: #40403f;
								}

								#regions-window form{
									display: flex;
									flex-wrap: wrap;
								}

								#regions-window button{
									padding: 0 20px;
								}

								#regions-window.popup-window{
									width: 70rem;
								}

								@media (max-width: 967px){
									#regions-window ul {
										columns: 1;
									}
								}
							</style>
							<div class="hidden">
								<div class="popup-window" id="regions-window">
									<form class="js-validation-form" method="GET">
										<h2>Выберите город: </h2>



















										<ul>
										<?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
											<li class="popup-form-row">
												<label class="form-label"><input data-region_id="<?php echo $_smarty_tpl->tpl_vars['region_id']->value;?>
"
																				 <?php if ($_smarty_tpl->tpl_vars['city']->value=="Минск") {?>
																				 data-city-region-id="1067"
																				 <?php } else { ?>
																				 <?php if ($_smarty_tpl->tpl_vars['regions']->value) {?>
																				 <?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['regions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->_loop = true;
?>
																				 <?php if (trim($_smarty_tpl->tpl_vars['region']->value->short_name)==trim($_smarty_tpl->tpl_vars['city']->value)) {?>
													data-city-region-id="<?php echo $_smarty_tpl->tpl_vars['region']->value->id;?>
"
													<?php }?>
													<?php } ?>
													<?php }?>
													<?php }?>
																				 type="radio" <?php if ($_smarty_tpl->tpl_vars['region_short_name']->value==$_smarty_tpl->tpl_vars['city']->value) {?>checked<?php }?>
																				 name="short_name"
																				 value="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['city']->value;?>
</label>
											</li>
										<?php } ?>
										</ul>
										<div class="popup-btn-row">
											<button type="submit" class="btn btn_full">Выбрать</button>
										</div>
									</form>
								</div>
							</div>
						</div>


						
						<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
							<div class="account-field__content">
								<div class="account-field__name">
									<a href="#regions-window" class=" a_js-popup-link js-popup-link" itemscope
									   itemtype="http://schema.org/ImageObject">
										<meta itemprop="name" content="map">
										<img style="width:16px;" src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/map.png"
											 alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
" itemprop="contentUrl">
										<meta itemprop="description" content="map">
										<?php if ($_smarty_tpl->tpl_vars['region_short_name']->value) {?><?php echo $_smarty_tpl->tpl_vars['region_short_name']->value;?>
<?php } else { ?>Ваш город<?php }?>
									</a>
								</div>

								<div class="account-field__name">
									<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/user"
									   class="account-field__name-link"><?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
</a>
								</div>

								<div class="account-field__discount">
										<span class="account-field__discount-link">
										<?php if ($_smarty_tpl->tpl_vars['user']->value->discount>0) {?>Ваша скидка &mdash; <?php echo $_smarty_tpl->tpl_vars['user']->value->discount;?>
%<?php }?>
										</span>
								</div>

								<div class="account-field__logout">
									<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/user/logout"
									   class="account-field__logout-link">Выйти</a>
								</div>
							</div>
						<?php } else { ?>
							<ul class="account-field__control">
								<li class="account-field__control-item">
									<a href="#regions-window" class=" a_js-popup-link js-popup-link" itemscope
									   itemtype="http://schema.org/ImageObject">
										<meta itemprop="name" content="map">
										<img style="width:16px;" src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/map.png"
											 alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
" itemprop="contentUrl">
										<meta itemprop="description" content="map">
										<?php if ($_smarty_tpl->tpl_vars['region_short_name']->value) {?><?php echo $_smarty_tpl->tpl_vars['region_short_name']->value;?>
<?php } else { ?>Ваш город<?php }?>
									</a>
								</li>
								<li class="account-field__control-item">
									
									
									<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/user/login"
									   class="account-field__control-link">Вход</a>
								</li>
								<li class="account-field__control-item">
									<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/user/register" class="account-field__control-link">Регистрация</a>
									
									

								</li>
							</ul>
						<?php }?>
						
					</div>
				</div>
			</div>
		</div>
		<button class="top-block__close js-top-block-close"></button>
	</div>

	<div class="header__content">
		<div class="wrapper">
			<div class="header__content-inner">
				<div class="header__top-block-target">
					<button class="top-block__target js-top-block-target"></button>
				</div>
				<div class="header__logo">
					<?php if ($_smarty_tpl->tpl_vars['module']->value=='MainView') {?>
						<div class="logo">
							<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logo3.png"
								 title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
"
								 class="logo__image">
						</div>
					<?php } else { ?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/" class="logo">
							<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logo3.png"
								 title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
"
								 class="logo__image">
						</a>
					<?php }?>
					<div class="header__mob-phone">
						<div class="top-contacts top-contacts_mob-header">
							<a href="tel:<?php echo $_smarty_tpl->tpl_vars['phone_shop']->value;?>
" class="top-contacts__phone" itemscope itemtype="http://schema.org/ImageObject">
								<meta itemprop="name" content="phone">
								<img height="20" src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/tel-1.png" itemprop="contentUrl" alt="phone"> <?php echo $_smarty_tpl->tpl_vars['phone_shop']->value;?>

								<meta itemprop="description" content="phone">
							</a>
							<!--<span class="top-contacts__schedule">10:00–22:00 / Без выходных</span>-->
						</div>
					</div>
				</div>
				<div class="header__search">
					<button type="button" class="header__search-btn js-search-field-target-btn">Поиск</button>
					<div class="search-field js-search-field">
						<button type="button" class="search-field__close js-search-field-close"></button>
						<script type="application/ld+json">
							{
								"@context" : "https://schema.org",
								"@type" : "WebSite",
								"url" : "<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/",
								"potentialAction" : {
									"@type" : "SearchAction",
									"target" : "<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/products?keyword={search_term}",
									"query-input" : "required name=search_term"
								}
							}


						</script>
						<form class="search-field__form js-validation-form" action="products">
							<input type="text" class="search-field__input js-search-autocomplete"
								   placeholder="Введите точное название товара" name="keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
"
								   required>
							<button type="submit" class="search-field__btn"></button>
						</form>
					</div>
				</div>
				<div class="header__basket">
					<div class="basket-field js-basket-field">
						<?php echo $_smarty_tpl->getSubTemplate ('cart_informer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("_header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</header>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<div class="top-mob">
	<button type="button" class="top-mob__link a js-top-link">Наверх</button>
</div>
<div class="chPopUp-custom late-courier-popup">
	<div class="close"></div>
	<div class="inner">
		<form class="late-courier__form" id="late-courier" method="post">
			<div class="popup-input-section" style="margin-bottom: 30px;">Номер Вашего заказа:
				<span>
					<input class="popup-input-section__input order-late__number" type="text" name="lateOrder" placeholder="№ Заказа" style="margin-bottom: 0;"/>
				</span>
			</div>
			<div class="popup-input-section" style="margin-bottom: 30px;">Укажите время, в которое был доставлен заказ:
				<span>
					<input class="popup-input-section__input order-late__time" type="text" name="lateTime" placeholder="Время получения товара" style="margin-bottom: 0;"/>
				</span>
			</div>
			<button type="submit" class="late-courier-btn_style send-late-courier account-field__control-link">Отправить</button>
		</form>
	</div>
</div>
<footer class="footer">
	<div class="wrapper">
		<div class="footer__content">
			<div class="footer__col footer__col_1">
				<ul class="footer-nav">
					<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
						
						<?php if ($_smarty_tpl->tpl_vars['p']->value->menu_id==1||$_smarty_tpl->tpl_vars['p']->value->menu_id==3) {?>
							<li class="footer-nav__item<?php if ($_smarty_tpl->tpl_vars['page']->value&&$_smarty_tpl->tpl_vars['page']->value->id==$_smarty_tpl->tpl_vars['p']->value->id) {?><?php }?>">
								<a data-page="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value->url;?>
"
								   class="footer-nav__link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
							</li>
						<?php }?>
					<?php } ?>
					<li class="footer-nav__item"><a href="/brands" class="footer-nav__link">Бренды</a></li>
				</ul>
			</div>

			<div class="footer__col footer__col_2">
				<a href="tel:<?php echo $_smarty_tpl->tpl_vars['phone_shop']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['phone_shop']->value;?>
 Звоните!</a><br>
				Пн-Вс:&nbsp;09:00-&nbsp;21:00
				<div class="social contacts__social">
					<a href="https://vk.com/ezooby" class="social__link social__link_vk"></a>
					<a href="https://m.facebook.com/e-zooby-Интернет-зоомагазин-709671376046323/"
					   class="social__link social__link_fb"></a>
					<a href="https://www.instagram.com/ezoo.by/" class="social__link social__link_tw"></a>
					<a href="https://ok.ru/group/59858431377442" class="social__link social__link_ok"></a>
					<a href="https://play.google.com/store/apps/details?id=by.ezoo.android" class="social__link social__link_pm"></a>
				</div>
			</div>

			<div class="footer__col footer__col_2">

				Частное предприятие «ЗООХАУЗ»<br>
				УНП 190942323
				<br>г. Минск, ул. Бирюзова, д.4/5, офис 2024
				<br>Дата регистрации в Торговом реестре РБ: 13.04.2018
				<br><a href="https://e-zoo.by/dogovor-publichnoj-oferty" class="link">
					Договор публичной оферты
					</a>
				<input type="hidden" id="test" value="region_short_name :<?php echo $_smarty_tpl->tpl_vars['region_short_name']->value;?>
 and cities: <?php echo $_smarty_tpl->tpl_vars['cities']->value[$_smarty_tpl->tpl_vars['dadata_city']->value];?>
 and dadata_city: <?php echo $_smarty_tpl->tpl_vars['dadata_city']->value;?>
">
			</div>

			<div class="footer__col footer__col_4">
				<div class="social">
					<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logo1-1.png" alt="logo">
					<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logo-2.png" alt="logo">
				</div>
			</div>
		</div>
	</div>
</footer>

<div class="popup-window" id="login-window">
	<form class="js-validation-form">
		<div class="popup-form-row">
			<label class="form-label">Логин</label>
			<input type="text" name="login" class="input-border" required>
		</div>
		<div class="popup-form-row">
			<label class="form-label">Пароль</label>
			<input type="password" name="password" class="input-border" required>
		</div>
		<div class="popup-btn-row">
			<button type="submit" class="btn btn_full">Вход</button>
		</div>
	</form>
</div>



<!-- <div class="popup-window" id="basket-success-window">
	<h3 style="align-center">Товар добавлен в корзину.</h3>
	<br>

	<a href="#" class="btn btn_full" style="margin-bottom: 1rem;">Перейти в корзину</a>
	<button type="button" class="btn btn_full js-popup-close">Закрыть</button>
</div> -->


<input type="hidden" name="currentTime" value="<?php echo smarty_modifier_date_format(time(),'%H:%M:%S');?>
">

<?php if ($_smarty_tpl->tpl_vars['settings']->value->hide_welcome) {?>
	<div id="hidden-mess">

	</div>
<?php } else { ?>
	<div class="chPopUp-custom" id="welcome">
		<div class="close"></div>
		<div class="inner">
			<div class="need-coast"><?php echo $_smarty_tpl->tpl_vars['settings']->value->welcome;?>
</div>
		</div>
	</div>
<?php }?>
<script type="text/javascript">
	<?php echo smarty_function_fetch(array('file'=>((string)$_smarty_tpl->tpl_vars['config']->value->root_dir)."/design/".((string)$_smarty_tpl->tpl_vars['settings']->value->theme)."/js/echo.min.js"),$_smarty_tpl);?>

	echo.init({
		offset: 100,
		throttle: 250,
		debounce: false,
		unload: false,
		callback: function (element, op) {
			//console.log(element, 'has been', op + 'ed')
		}
	});
</script>
<div class="mobile-test"></div>

	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/jquery.fancybox.min.js" type="text/javascript"></script>
	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/jquery.formstyler.min.js" type="text/javascript"></script>
	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/jquery.inputmask/jquery.inputmask.bundle.js"
			type="text/javascript"></script>
	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"
			type="text/javascript"></script>
	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/jquery.placeholder/jquery.placeholder.min.js"
			type="text/javascript"></script>
	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/jquery.slick/slick.min.js" type="text/javascript"></script>
	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/jquery.sticky-kit/jquery.sticky-kit.min.js"
			type="text/javascript"></script>
	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/jquery.validate/jquery.validate.min.js"
			type="text/javascript"></script>
	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/jquery-ui-1.11.4/jquery-ui.min.js"
			type="text/javascript"></script>
	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"
			type="text/javascript"></script>
	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/jquery.carouselTicker/jquery.carouselTicker.min.js"
			type="text/javascript"></script>
	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/jquery.autocomplete/jquery.autocomplete.min.js"
			type="text/javascript"></script>
	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/air-datepicker/datepicker.min.js"
			type="text/javascript"></script>
	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/air-datepicker/datepicker.css" rel="stylesheet"
		  type="text/css"/>
<!--	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lib/libs.min.js" type="text/javascript"></script>-->
	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/filter.js?2" type="text/javascript"></script>
	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/scripts.js?12032021" type="text/javascript"></script>
<script>
    var region_id = '';
    $('.zoom').fancybox({
        openEffect  : "fade",
        closeEffect : "fade",
        type : "image"
    });
</script>
<?php if ($_smarty_tpl->tpl_vars['region_id']->value) {?>
<script>
    var region_id = '?region_id=<?php echo $_smarty_tpl->tpl_vars['region_id']->value;?>
';
</script>
<?php }?>

<script>
    $(".js-search-autocomplete").autocomplete({
        serviceUrl:'ajax/search_products.php'+region_id,
        minChars:1,
        noCache: false,
        onSelect: function(){
            $(".js-search-autocomplete").closest('form').submit();
        },
        formatResult: function(suggestion, currentValue){
            var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
            var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
            return (suggestion.data.image?"<img align=absmiddle src='"+suggestion.data.image+"'> ":'') + suggestion.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>');
        }
    });
</script>

<style>
	.btn_border.js-sidebar-filter-tooltip br {
		content: "";
	}

	@media only screen and (max-width: 767px) {
		.filter-check-list {
			display: block;
			width: auto;
			padding: 0;
			border-radius: 0;
			background: none;
			max-height: 100%;
			overflow: initial;
		}

		.sidebar-filter [type=submit], .submit-link {
			display: none;
		}
	}

	.hits__main-item .cart.is-open .cart__imgae-slider-field {
		display: none;
	}

</style>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function (m, e, t, r, i, k, a) {
			m[i] = m[i] || function () {
				(m[i].a = m[i].a || []).push(arguments)
			};
			m[i].l = 1 * new Date();
			k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
		})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(50329477, "init", {
			clickmap: true,
			trackLinks: true,
			accurateTrackBounce: true,
			webvisor: true,
			ecommerce: "dataLayer"
		});
	</script>
	<noscript>
		<div><img src="https://mc.yandex.ru/watch/50329477" style="position:absolute; left:-9999px;" alt=""/></div>
	</noscript>
	<!-- /Yandex.Metrika counter -->
<?php if (isset($_smarty_tpl->tpl_vars['add_comments_block_form']->value)) {?>

	<script>
		gtag('event', 'send', {'event_category': 'write_us'});
		setTimeout(function () {
			yaCounter50329477.reachGoal('write_us');
		}, 3000);
	</script>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['registration_form']->value)) {?>

	<script>
		gtag('event', 'send', {'event_category': 'register'});
		setTimeout(function () {
			yaCounter50329477.reachGoal('register');
		}, 3000);
	</script>

<?php }?>
<div id="deliver_message" style="display:none">
	<div class="close_deliver"></div>
	<div class="title-text">Закажите до <span class="time_do_dev"></span>,</div>
	<div>получите до <span class="time_to_dev"></span></div>
	<div class="image-dev"></div>
</div>
<?php if ($_smarty_tpl->tpl_vars['settings']->value->manager_contacts_text) {?>
	<div id="manager-contacts">
		<div>
			<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->manager_contacts_text, ENT_QUOTES, 'UTF-8', true);?>
</span>
			<div class="links">
				<?php if (($_smarty_tpl->tpl_vars['settings']->value->manager_contacts_phone_1&&$_smarty_tpl->tpl_vars['settings']->value->manager_contacts_operator_1)) {?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->manager_contacts_phone_1, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->manager_contacts_operator_1, ENT_QUOTES, 'UTF-8', true);?>
</a>
				<?php }?>
				<?php if (($_smarty_tpl->tpl_vars['settings']->value->manager_contacts_phone_2&&$_smarty_tpl->tpl_vars['settings']->value->manager_contacts_operator_2)) {?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->manager_contacts_phone_2, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->manager_contacts_operator_2, ENT_QUOTES, 'UTF-8', true);?>
</a>
				<?php }?>
				<?php if (($_smarty_tpl->tpl_vars['settings']->value->manager_contacts_chat&&$_smarty_tpl->tpl_vars['settings']->value->manager_contacts_chat_text)) {?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->manager_contacts_chat, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->manager_contacts_chat_text, ENT_QUOTES, 'UTF-8', true);?>
</a>
				<?php }?>
			</div>

		</div>
	</div>
<?php }?>

<input type="hidden" id="test" value="region_short_name :<?php echo $_smarty_tpl->tpl_vars['region_short_name']->value;?>
 and cities: <?php echo $_smarty_tpl->tpl_vars['cities']->value[$_smarty_tpl->tpl_vars['dadata_city']->value];?>
">
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['cities']->value[$_smarty_tpl->tpl_vars['dadata_city']->value];?>
<?php $_tmp1=ob_get_clean();?><?php if (!$_smarty_tpl->tpl_vars['region_short_name']->value&&$_tmp1) {?>
	<script>
		setTimeout(function () {
			popupOpen('#your_city-window');
		}, 300);
	</script>
	<div class="popup-window" id="your_city-window" style="width: 310px;padding: 26px 20px;">
		<form class="js-validation-form tex-center center" style="text-align: center;">
			<h4>Ваш город <?php echo $_smarty_tpl->tpl_vars['cities']->value[$_smarty_tpl->tpl_vars['dadata_city']->value];?>
?</h4>
			<input type="hidden" name="short_name" value="<?php echo $_smarty_tpl->tpl_vars['cities']->value[$_smarty_tpl->tpl_vars['dadata_city']->value];?>
">
			<button type="submit" class="btn ">Да</button>
			<button onclick="popupClose();popupOpen('#regions-window');return false;" class="btn ">НЕТ</button>
		</form>
	</div>
	
<?php }?>
<style>
	a.link{
		color: black;
	}
</style>
</body>
</html>
<?php }} ?>
