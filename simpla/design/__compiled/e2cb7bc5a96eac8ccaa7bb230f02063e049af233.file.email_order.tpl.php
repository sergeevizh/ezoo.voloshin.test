<?php /* Smarty version Smarty-3.1.18, created on 2021-07-01 09:51:09
         compiled from "/var/www/www-root/data/www/e-zoo.by/design/e-zooby/html/email_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5172565676006b0ff400f98-37946735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2cb7bc5a96eac8ccaa7bb230f02063e049af233' => 
    array (
      0 => '/var/www/www-root/data/www/e-zoo.by/design/e-zooby/html/email_order.tpl',
      1 => 1625086535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5172565676006b0ff400f98-37946735',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6006b0ff44a047_63609453',
  'variables' => 
  array (
    'order' => 0,
    'config' => 0,
    'settings' => 0,
    'purchases' => 0,
    'total_products' => 0,
    'purchase' => 0,
    'currency' => 0,
    'image' => 0,
    'delivery' => 0,
    'payment_method' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6006b0ff44a047_63609453')) {function content_6006b0ff44a047_63609453($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['subject'] = new Smarty_variable("Заказ №".((string)$_smarty_tpl->tpl_vars['order']->value->id), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['subject'] = clone $_smarty_tpl->tpl_vars['subject'];?>

<div style="margin:0; background-color: #eaebec;" bgcolor="#eaebec">
	<div style="background-color: #eaebec;">
		<div style="width:600px; margin-left: auto; margin-right: auto; font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; line-height: 1.2; color: #000000;">
			<table width="100%" cellspacing="0" cellpadding="38">
				<tr>
					<td style="padding-top: 62px; padding-bottom: 27px;" align="center">
						<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/" style="color: #6db46d;">
							<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logo.png" height="60" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
						</a>
					</td>
				</tr>
				<tr>
					<td style="padding-top: 71px; padding-bottom: 90px; border-radius: 5px;" bgcolor="#fff">
						<div style="font-size: 24px; line-height: 1.2; margin-bottom: 29px;">Здравствуйте, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>
!</div>
						<div style="font-size: 36px; line-height: 1.2; margin-bottom: 40px;">
							Ваш заказ
							<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/order/<?php echo $_smarty_tpl->tpl_vars['order']->value->url;?>
" style="color: #6db46d;">№<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</a>
							<?php if ($_smarty_tpl->tpl_vars['order']->value->status==0) {?>ждет обработки<?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status==1) {?>в обработке<?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status==2) {?>выполнен<?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status==3) {?>отменен<?php }?>.
						</div>
						<?php $_smarty_tpl->tpl_vars['total_products'] = new Smarty_variable(0, null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['purchases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->_loop = true;
?>
							<?php $_smarty_tpl->tpl_vars['total_products'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_products']->value+$_smarty_tpl->tpl_vars['purchase']->value->amount, null, 0);?>
						<?php } ?>
						<div style="font-size: 24px; line-height: 1.2; margin-bottom: 30px;">Вы заказали <?php echo $_smarty_tpl->tpl_vars['total_products']->value;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['total_products']->value,'товар','товаров','товара');?>
  на <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->total_price,$_smarty_tpl->tpl_vars['currency']->value->id);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
.</div>


						<table width="100%" cellspacing="0" cellpadding="15" style="margin-bottom: 20px;">
							<?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['purchases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->_loop = true;
?>
								<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['purchase']->value->product->images[0], null, 0);?>
								<tr>
									<td style="border-bottom: 1px solid #e5e5e5; padding-left: 0;" valign="top">
										<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['purchase']->value->product->images[0], null, 0);?>
										<?php if ($_smarty_tpl->tpl_vars['image']->value) {?>
											<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->url;?>
" style="color: #6db46d;">
												<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,100,100);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product_name;?>
">
											</a>
										<?php }?>
									</td>
									<td style="border-bottom: 1px solid #e5e5e5;" valign="top">
										<div style="font-size: 17px; line-height: 1; margin-bottom: 10px;">
											<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->url;?>
" style="color: #6db46d;"><?php echo $_smarty_tpl->tpl_vars['purchase']->value->product_name;?>
</a>
										</div>
										
										
										
										<div style="font-size: 13px; line-height: 1.2; margin-bottom: 21px;"><?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant_name;?>
</div>
									</td>
									<td style="border-bottom: 1px solid #e5e5e5; padding-right: 0;" valign="top" align="right">
										<div style="font-size: 17px; line-height: 1.2; margin-bottom: 10px; color: #6db46d;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['purchase']->value->price,$_smarty_tpl->tpl_vars['currency']->value->id);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</div>
										
										<div style="font-size: 14px; line-height: 1.2; margin-bottom: 19px;"><?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
 <?php echo $_smarty_tpl->tpl_vars['settings']->value->units;?>
</div>
									</td>
								</tr>
							<?php } ?>
						</table>

						
						<div style="font-size: 17px; line-height: 1.2; margin-bottom: 13px;">Данные заказа:</div>
						<table width="380" cellspacing="0" cellpadding="7">
							<tr>
								<td style="color: #808080; padding-left: 0;" valign="top" width="120">Телефон</td>
								<td valign="top"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
</td>
							</tr>
							<tr>
								<td style="color: #808080; padding-left: 0;" valign="top" width="120">Email</td>
								<td valign="top"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->email, ENT_QUOTES, 'UTF-8', true);?>
</td>
							</tr>
							<tr>
								<td style="color: #808080; padding-left: 0;" valign="top" width="120">Дата и время</td>
								<td valign="top"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->self_discharge_time, ENT_QUOTES, 'UTF-8', true);?>
</td>
							</tr>
							<tr>
								<td style="color: #808080; padding-left: 0;" valign="top" width="120">Доставка за 1 час</td>
								<td valign="top"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->express, ENT_QUOTES, 'UTF-8', true);?>
</td>
							</tr>
							
							
							
							
							
							
							
							<?php if ($_smarty_tpl->tpl_vars['delivery']->value) {?>
								<tr>
									<td style="color: #808080; padding-left: 0;" valign="top">Способ доставки</td>
									<td valign="top"><?php echo $_smarty_tpl->tpl_vars['delivery']->value->name;?>
</td>
								</tr>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['delivery']->value&&!$_smarty_tpl->tpl_vars['order']->value->separate_delivery) {?>
								<tr>
									<td style="color: #808080;  padding-left: 0;" valign="top"><?php echo $_smarty_tpl->tpl_vars['delivery']->value->name;?>
</td>
									<td valign="top"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->delivery_price,$_smarty_tpl->tpl_vars['currency']->value->id);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</td>
								</tr>
							<?php }?>
							<tr>
								<td style="color: #808080;  padding-left: 0;" valign="top">Адрес доставки</td>
								<td valign="top"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->address, ENT_QUOTES, 'UTF-8', true);?>
</td>
							</tr>
							<?php if ($_smarty_tpl->tpl_vars['payment_method']->value) {?>
								<tr>
									<td style="color: #808080;  padding-left: 0;" valign="top">Способы оплаты</td>
									<td valign="top"><?php echo $_smarty_tpl->tpl_vars['payment_method']->value->name;?>
</td>
								</tr>
							<?php }?>
							<tr>
								<td style="color: #808080;  padding-left: 0;" valign="top">Имя и фамилия</td>
								<td valign="top"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</td>
							</tr>

							<?php if ($_smarty_tpl->tpl_vars['order']->value->discount) {?>
								
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['order']->value->coupon_discount>0) {?>
								<tr>
									<td style="color: #808080;  padding-left: 0;" valign="top">
										Скидка <?php echo $_smarty_tpl->tpl_vars['order']->value->coupon_code;?>

									</td>
									<td valign="top">
										&minus;<?php echo $_smarty_tpl->tpl_vars['order']->value->coupon_discount;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

									</td>
								</tr>
							<?php }?>

						</table>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
			</table>
		</div>
	</div>
</div>



<?php }} ?>
