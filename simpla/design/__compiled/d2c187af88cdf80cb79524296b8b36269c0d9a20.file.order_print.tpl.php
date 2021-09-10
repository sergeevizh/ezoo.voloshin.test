<?php /* Smarty version Smarty-3.1.18, created on 2021-05-12 10:02:24
         compiled from "simpla/design/html/order_print.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48877866660059673996de6-90883338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2c187af88cdf80cb79524296b8b36269c0d9a20' => 
    array (
      0 => 'simpla/design/html/order_print.tpl',
      1 => 1620802912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48877866660059673996de6-90883338',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_600596739eb596_80635040',
  'variables' => 
  array (
    'config' => 0,
    'order' => 0,
    'meta_description' => 0,
    'settings' => 0,
    'delivery' => 0,
    'order_labels' => 0,
    'labels' => 0,
    'l' => 0,
    'couriers' => 0,
    'courier' => 0,
    'courier_id' => 0,
    'purchases' => 0,
    'purchase' => 0,
    'currency' => 0,
    'payment_method' => 0,
    'payment_currency' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600596739eb596_80635040')) {function content_600596739eb596_80635040($_smarty_tpl) {?><!DOCTYPE html>

<?php $_smarty_tpl->tpl_vars['wrapper'] = new Smarty_variable('', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['wrapper'] = clone $_smarty_tpl->tpl_vars['wrapper'];?>
<html>
<head>
	<base href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/"/>
	<title>Заказ №<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
    <style>
    body {
        width: 1000px;
        height: 1414px;
        /* to centre page on screen*/
        margin-left: auto;
        margin-right: auto;
        //border: 1px solid black;

		font-family: Trebuchet MS, times, arial, sans-serif;
		font-size: 10pt;
		color: black;
		background-color: white;
    }

    div#header{
    	margin-left: 50px;
    	margin-top: 50px;
    	height: 150px;
    	width: 500px;
    	float: left;
    }
    div#company{
    	margin-right: 50px;
    	margin-top: 50px;
    	height: 150px;
    	width: 400px;
    	float: right;
    	text-align: right;
    }
    div#customer{
    	margin-left: 50px;
    	min-height: 250px;
    	width: 400px;
    	float: left;
    }
    div#customer table{
        margin-bottom: 20px;
        font-size: 20px;
    }
    div#map{
    	margin-left: 50px;
    	height: 400px;
    	width: 500px;
    	float: left;
    }
    div#purchases{
    	margin-left: 50px;
    	margin-bottom: 20px;
    	min-height: 600px;
    	width: 100%;
    	float: left;

    }
    div#purchases table{
    	width: 900px;
    	border-collapse:collapse
    }
    div#purchases table th
    {
    	font-weight: normal;
    	text-align: left;
    	font-size: 25px;
    }
    div#purchases td, div#purchases th
    {
    	font-size: 18px;
    	padding-top: 10px;
    	padding-bottom: 10px;
    	margin: 0;
    }
    div#purchases td
    {
    	border-top: 1px solid black;
    }

    div#total{
    	float: right;
    	margin-right: 50px;
    	height: 100px;
    	width: 500px;
    	text-align: right;
    }
    div#total table{
    	width: 500px;
    	float: right;
    	border-collapse:collapse
    }
    div#total th
    {
    	font-weight: normal;
    	text-align: left;
    	font-size: 22px;
    	border-top: 1px solid black;
    }
    div#total td
    {
    	text-align: right;
    	border-top: 1px solid black;
    	font-size: 18px;
    	padding-top: 10px;
    	padding-bottom: 10px;
    	margin: 0;
    }
    div#total .total
    {
    	font-size: 30px;
    }
    h1{
    	margin: 0;
    	font-weight: normal;
    	font-size: 40px;
    }
    h2{
    	margin: 0;
    	font-weight: normal;
    	font-size: 24px;
    }
    p
    {
    	margin: 0;
    	font-size: 20px;
    }
    div#purchases td.align_right, div#purchases th.align_right
    {
    	text-align: right;
    }
    </style>
</head>

<body _onload="window.print();">

<div id="header">
	<h1>Заказ №<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</h1>
	<p>от <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
</p>
</div>

<div id="company">
	<h2><?php echo $_smarty_tpl->tpl_vars['settings']->value->site_name;?>
</h2>
	<p><?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
</p>
</div>


<div id="customer">
	<h2>Получатель</h2>
	<table>
		<tr>
			<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</td>
		</tr>
		<tr>
			<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
</td>
		</tr>
		<tr>
			<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->email, ENT_QUOTES, 'UTF-8', true);?>
</td>
		</tr>
		<tr>
			<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->address, ENT_QUOTES, 'UTF-8', true);?>
</td>
		</tr>
		<tr>
			<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</td>
		</tr>
		<tr>
			<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->self_discharge_time, ENT_QUOTES, 'UTF-8', true);?>
</td>
		</tr>
		<tr>
			<td><i><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->comment, ENT_QUOTES, 'UTF-8', true));?>
</i></td>
		</tr>

	</table>

	<?php if ($_smarty_tpl->tpl_vars['order_labels']->value) {?>
		<h2>Метки</h2>
		<table>
			<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['labels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
			<?php if (in_array($_smarty_tpl->tpl_vars['l']->value->id,$_smarty_tpl->tpl_vars['order_labels']->value)) {?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['l']->value->name;?>
</td>
			</tr>
			<?php }?>
			<?php } ?>
		</table>
	<?php }?>

	

	<?php if ($_smarty_tpl->tpl_vars['order']->value->courier_id) {?>
	<h2>Курьер</h2>
	<table>
		<?php  $_smarty_tpl->tpl_vars['courier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['courier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['couriers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['courier']->key => $_smarty_tpl->tpl_vars['courier']->value) {
$_smarty_tpl->tpl_vars['courier']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['courier']->value->id==$_smarty_tpl->tpl_vars['courier_id']->value) {?>
		<tr>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['courier']->value->name;?>
 (<a href="<?php echo $_smarty_tpl->tpl_vars['courier']->value->phone_courier;?>
"><?php echo $_smarty_tpl->tpl_vars['courier']->value->phone_courier;?>
</a>)
			</td>
		</tr>
		<?php }?>
		<?php } ?>
	</table>
	<?php }?>

</div>

<div id="purchases">
	<table>
		<tr>
			<th>Товар</th>
			<th class="align_right">Цена</th>
			<th class="align_right">Количество</th>
			<th class="align_right">Всего</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['purchases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->_loop = true;
?>
		<tr>
			<td>
				<span class=view_purchase>
					<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product_name;?>
 <?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant_name;?>
 <?php if ($_smarty_tpl->tpl_vars['purchase']->value->sku) {?> (артикул <?php echo $_smarty_tpl->tpl_vars['purchase']->value->sku;?>
)<?php }?>
				</span>
			</td>
			<td class="align_right">
				<span class=view_purchase><?php echo $_smarty_tpl->tpl_vars['purchase']->value->price;?>
</span> <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

			</td>
			<td class="align_right">
				<span class=view_purchase>
					<?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
 <?php echo $_smarty_tpl->tpl_vars['settings']->value->units;?>

				</span>
			</td>
			<td class="align_right">
				<span class=view_purchase><?php echo $_smarty_tpl->tpl_vars['purchase']->value->price*$_smarty_tpl->tpl_vars['purchase']->value->amount;?>
</span> <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

			</td>
		</tr>
		<?php } ?>
		
		<?php if ($_smarty_tpl->tpl_vars['order']->value->delivery_price>0) {?>
		<tr>
			<td colspan=3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['order']->value->separate_delivery) {?> (оплачивается отдельно)<?php }?></td>
			<td class="align_right"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->delivery_price);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</td>
		</tr>
		<?php }?>

	</table>
</div>


<div id="total">
	<table>
		<?php if ($_smarty_tpl->tpl_vars['order']->value->discount>0) {?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['order']->value->coupon_discount>0) {?>
		<tr>
			<th>Скидка<?php if ($_smarty_tpl->tpl_vars['order']->value->coupon_code) {?> (<?php echo $_smarty_tpl->tpl_vars['order']->value->coupon_code;?>
)<?php }?></th>
			<td><?php echo $_smarty_tpl->tpl_vars['order']->value->coupon_discount;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</td>
		</tr>
		<?php }?>
		<tr>
			<th>Итого</th>
			<td class="total"><?php echo $_smarty_tpl->tpl_vars['order']->value->total_price;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</td>
		</tr>
		<?php if ($_smarty_tpl->tpl_vars['payment_method']->value) {?>
		<tr>
			<td colspan="2">Способ оплаты: <?php echo $_smarty_tpl->tpl_vars['payment_method']->value->name;?>
</td>
		</tr>
		<tr>
			<th>К оплате</th>
			<td class="total"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->total_price,$_smarty_tpl->tpl_vars['payment_method']->value->currency_id);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['payment_currency']->value->sign;?>
</td>
		</tr>
		<?php }?>
	</table>
</div>

</body>
</html>

<?php }} ?>
