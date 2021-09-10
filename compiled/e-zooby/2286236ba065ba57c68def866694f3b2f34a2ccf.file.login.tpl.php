<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 15:21:00
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11568177896139fc2ce50ba3-84726980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2286236ba065ba57c68def866694f3b2f34a2ccf' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/login.tpl',
      1 => 1628361953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11568177896139fc2ce50ba3-84726980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'email' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139fc2ceac321_86437470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139fc2ceac321_86437470')) {function content_6139fc2ceac321_86437470($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/user/login", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable("Вход", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<section class="section">
	<div class="wrapper">
		<h1>Вход</h1>

		<br>

		<form class="js-validation-form" method="post" style="max-width: 400px;margin: 0 auto;">
			<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
				<div class="error-message">
					<?php if ($_smarty_tpl->tpl_vars['error']->value=='login_incorrect') {?><div class="error-message__item">Неверный логин или пароль</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='user_disabled') {?><div class="error-message__item">Ваш аккаунт еще не активирован.</div>
					<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?>
				</div>
			<?php }?>

			<div class="popup-form-row">
				<label class="form-label">Email</label>
				<input type="email" name="email" class="input-border" required value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" maxlength="255">
			</div>
			<div class="popup-form-row">
				<label class="form-label">Пароль (<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/user/password_remind">восстановить</a>)</label>
				<input type="password" name="password" class="input-border" required>
			</div>
			<div class="popup-btn-row">
				<button type="submit" class="btn btn_full" name="login" value="Войти">Вход</button>

			</div>
		</form>
	</div>
</section>
<?php }} ?>
