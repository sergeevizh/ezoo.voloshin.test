<?php /* Smarty version Smarty-3.1.18, created on 2021-09-09 15:34:49
         compiled from "/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/bonus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7435491786139ff696f24b0-56510546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e5040a08c474ddb013f232fd48eb467f2e1cd54' => 
    array (
      0 => '/var/www/u1332589/public_html/e-zoo.voloshin.by/www/e-zoo.by/design/e-zooby/html/bonus.tpl',
      1 => 1631004144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7435491786139ff696f24b0-56510546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'i' => 0,
    'count_bonus' => 0,
    'bonus_all' => 0,
    'user' => 0,
    'count_bonus_my' => 0,
    'bonus_my' => 0,
    'bonus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6139ff69740641_42848523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139ff69740641_42848523')) {function content_6139ff69740641_42848523($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable("Бонусная программа", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['page']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<section class="section">
	<div class="wrapper">
		<h1 data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->header, ENT_QUOTES, 'UTF-8', true);?>
</h1>
		<?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>



		<div class="align-center bonus__btns">
          <button class="btn btn__bonusAll">Все бонусы</button>
          <button class="btn btn__bonusPersonal">Мои бонусы</button>
        </div>

        <div class="bonus__all">
          <ul class="bonus__list">
		  <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['count_bonus']->value) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['count_bonus']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
			<li class="bonus__item">
			<?php if ($_smarty_tpl->tpl_vars['bonus_all']->value[$_smarty_tpl->tpl_vars['i']->value]->verst==1) {?>
              <a href="#modal__bonus-<?php echo $_smarty_tpl->tpl_vars['bonus_all']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
" class="bonus__item-img show__modal">
                <img src="<?php echo $_smarty_tpl->tpl_vars['bonus_all']->value[$_smarty_tpl->tpl_vars['i']->value]->img_preview;?>
" alt="img-<?php echo $_smarty_tpl->tpl_vars['bonus_all']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
"
                  draggable="false" loading="lazy" title="img-<?php echo $_smarty_tpl->tpl_vars['bonus_all']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
">
              </a>
			  <?php }?>
			  <?php if ($_smarty_tpl->tpl_vars['bonus_all']->value[$_smarty_tpl->tpl_vars['i']->value]->verst==2) {?>
			    <a href="#modal__bonus-<?php echo $_smarty_tpl->tpl_vars['bonus_all']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
" class="bonus__item-img show__modal">
                <img
                  src="<?php echo $_smarty_tpl->tpl_vars['bonus_all']->value[$_smarty_tpl->tpl_vars['i']->value]->img_preview;?>
"
                  alt="img-<?php echo $_smarty_tpl->tpl_vars['bonus_all']->value[$_smarty_tpl->tpl_vars['i']->value]->name;?>
" draggable="false" loading="lazy" title="img-<?php echo $_smarty_tpl->tpl_vars['bonus_all']->value[$_smarty_tpl->tpl_vars['i']->value]->name;?>
">
              </a>
			   <?php if ($_smarty_tpl->tpl_vars['i']->value+1<$_smarty_tpl->tpl_vars['count_bonus']->value) {?>
              <a href="#modal__bonus-<?php echo $_smarty_tpl->tpl_vars['bonus_all']->value[$_smarty_tpl->tpl_vars['i']->value+1]->id;?>
" class="bonus__item-img show__modal">
                <img
                  src="<?php echo $_smarty_tpl->tpl_vars['bonus_all']->value[$_smarty_tpl->tpl_vars['i']->value+1]->img_preview;?>
"
                  alt="img-<?php echo $_smarty_tpl->tpl_vars['bonus_all']->value[$_smarty_tpl->tpl_vars['i']->value+1]->name;?>
" draggable="false" loading="lazy" title="img-<?php echo $_smarty_tpl->tpl_vars['bonus_all']->value[$_smarty_tpl->tpl_vars['i']->value+1]->name;?>
">
              </a>
			  <?php } else { ?>
				<a class="bonus__item-img show__modal">
					<img src="simpla/files/bonus/white.jpg"
					alt="white.jpg" draggable="false" loading="lazy" title="white.jpg">
				</a>
			  <?php }?>
			  	<span style="display:none"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</span>
			  <?php }?>
			  </li>
		  <?php }} ?>
	    </ul>
        </div>
        <div class="bonus__personal" >
 		  <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
			 <ul class="bonus__list">

		  <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['count_bonus_my']->value) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['count_bonus_my']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
			<li class="bonus__item">
			<?php if ($_smarty_tpl->tpl_vars['bonus_my']->value[$_smarty_tpl->tpl_vars['i']->value]->verst==1) {?>
              <a href="#modal__bonus-<?php echo $_smarty_tpl->tpl_vars['bonus_my']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
-my" class="bonus__item-img show__modal">
                <img src="<?php echo $_smarty_tpl->tpl_vars['bonus_my']->value[$_smarty_tpl->tpl_vars['i']->value]->img_preview;?>
" alt="img-<?php echo $_smarty_tpl->tpl_vars['bonus_my']->value[$_smarty_tpl->tpl_vars['i']->value]->name;?>
"
                  draggable="false" loading="lazy" title="img-<?php echo $_smarty_tpl->tpl_vars['bonus_my']->value[$_smarty_tpl->tpl_vars['i']->value]->name;?>
">
              </a>
			  <?php }?>
			  <?php if ($_smarty_tpl->tpl_vars['bonus_my']->value[$_smarty_tpl->tpl_vars['i']->value]->verst==2) {?>
			    <a href="#modal__bonus-<?php echo $_smarty_tpl->tpl_vars['bonus_my']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
-my" class="bonus__item-img show__modal">
                <img src="<?php echo $_smarty_tpl->tpl_vars['bonus_my']->value[$_smarty_tpl->tpl_vars['i']->value]->img_preview;?>
"
                  alt="img-<?php echo $_smarty_tpl->tpl_vars['bonus_my']->value[$_smarty_tpl->tpl_vars['i']->value]->name;?>
" draggable="false" loading="lazy" title="img-<?php echo $_smarty_tpl->tpl_vars['bonus_my']->value[$_smarty_tpl->tpl_vars['i']->value]->name;?>
">
              </a>
			  <?php if ($_smarty_tpl->tpl_vars['i']->value+1<$_smarty_tpl->tpl_vars['count_bonus_my']->value) {?>
              <a href="#modal__bonus-<?php echo $_smarty_tpl->tpl_vars['bonus_my']->value[$_smarty_tpl->tpl_vars['i']->value+1]->id;?>
-my" class="bonus__item-img show__modal">
                <img src="<?php echo $_smarty_tpl->tpl_vars['bonus_my']->value[$_smarty_tpl->tpl_vars['i']->value+1]->img_preview;?>
"
                  alt="img-<?php echo $_smarty_tpl->tpl_vars['bonus_my']->value[$_smarty_tpl->tpl_vars['i']->value+1]->name;?>
" draggable="false" loading="lazy" title="img-<?php echo $_smarty_tpl->tpl_vars['bonus_my']->value[$_smarty_tpl->tpl_vars['i']->value+1]->name;?>
">
              </a>
			  <?php } else { ?>
			   <a class="bonus__item-img show__modal">
				<img src="simpla/files/bonus/white.jpg"
                  alt="white.jpg" draggable="false" loading="lazy" title="white.jpg">
				  </a>
			  <?php }?>
			  <span style="display:none"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</span>
			  <?php }?>
			  </li>
		  <?php }} ?>
	    </ul>

		  <?php } else { ?>
		   <div class="bonus__text align-center">
            <p>Пожалуйста, авторизуйтесь, чтобы увидеть свои бонусы.</p>
          </div>
		  <?php }?>
        </div>





	</div>
</section>
<!--Модальные окна формируем-->
<?php  $_smarty_tpl->tpl_vars['bonus'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bonus']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bonus_all']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bonus']->key => $_smarty_tpl->tpl_vars['bonus']->value) {
$_smarty_tpl->tpl_vars['bonus']->_loop = true;
?>
<div class="modal" id="modal__bonus-<?php echo $_smarty_tpl->tpl_vars['bonus']->value->id;?>
">
      <div class="modal__body __bonus">
        <div class="modal__content __bonus">
          <div class="modal__close close__modal"><span></span><span></span></div>
          <h3 class="modal__bonus-title"><?php echo $_smarty_tpl->tpl_vars['bonus']->value->name;?>
</h3>
          <div class="modal__bonus-img">
            <img src="<?php echo $_smarty_tpl->tpl_vars['bonus']->value->img_detail;?>
" alt="img-<?php echo $_smarty_tpl->tpl_vars['bonus']->value->id;?>
"
            	draggable="false" loading="lazy" title="img-<?php echo $_smarty_tpl->tpl_vars['bonus']->value->id;?>
">
          </div>
          <div class="modal__bonus-text">
			<?php echo $_smarty_tpl->tpl_vars['bonus']->value->desc_mini;?>

          </div>
        </div>
      </div>
    </div>

<?php } ?>
<!--user-->

<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
<script>
function getbonus(id){
	button = "#bonus_btn_" + id;
	divtext= "#modal__bonus-text_all_" + id;
	$(button).css('display','none');
	$(divtext).css('display','block');
}
function getsale (id,percent){
document.cookie = 'bonus='+id+';path=/';
document.cookie = 'percent='+percent+';path=/';
$("#sale-percent-" + id).css('display','block');
}
</script>

<script>
function getpromo(id,promo,user_id){
$("#sale-promo-" + id).css('display','block');
$("#sale-promo-" + id).css('display','block');
	/*если нужно ставить статус 0 запрос
	$.ajax({
		url: "./ajax/bonuspromo.php",
		type:"POST",
		data:{id_bonus: id, promo: promo, user_id:user_id},
		success:function(result){
			if(result)
				$("#sale-promo-" + id).css('display','block');

		}});*/
}
</script>

<?php  $_smarty_tpl->tpl_vars['bonus'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bonus']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bonus_my']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bonus']->key => $_smarty_tpl->tpl_vars['bonus']->value) {
$_smarty_tpl->tpl_vars['bonus']->_loop = true;
?>
	<div class="modal" id="modal__bonus-<?php echo $_smarty_tpl->tpl_vars['bonus']->value->id;?>
-my">
      <div class="modal__body __bonus">
        <div class="modal__content __bonus">
          <div class="modal__close close__modal"><span></span><span></span></div>
          <h3 class="modal__bonus-title"><?php echo $_smarty_tpl->tpl_vars['bonus']->value->name;?>
</h3>
          <div class="modal__bonus-img">
            <img src="<?php echo $_smarty_tpl->tpl_vars['bonus']->value->img_detail;?>
" alt="img-<?php echo $_smarty_tpl->tpl_vars['bonus']->value->id;?>
"
              draggable="false" loading="lazy" title="img-<?php echo $_smarty_tpl->tpl_vars['bonus']->value->id;?>
">
          </div>
          <div class="modal__bonus-text">
			<?php echo $_smarty_tpl->tpl_vars['bonus']->value->desc_mini;?>

          </div>
			<a id="bonus_btn_<?php echo $_smarty_tpl->tpl_vars['bonus']->value->id;?>
" onclick="getbonus(<?php echo $_smarty_tpl->tpl_vars['bonus']->value->id;?>
)" class=" modal__bonus-btn btn">Получить бонус</a>
		   <div id="modal__bonus-text_all_<?php echo $_smarty_tpl->tpl_vars['bonus']->value->id;?>
" style="display:none;" class="modal__bonus-text">
			<div class="bonus__text align-center">Как получить бонус</div>
			<?php echo $_smarty_tpl->tpl_vars['bonus']->value->description;?>

			<a class="modal__bonus-btn btn bonus__text align-center"
				<?php if ($_smarty_tpl->tpl_vars['bonus']->value->percent&&$_smarty_tpl->tpl_vars['bonus']->value->percent!=0) {?>
					onclick="getsale(<?php echo $_smarty_tpl->tpl_vars['bonus']->value->id;?>
,<?php echo $_smarty_tpl->tpl_vars['bonus']->value->percent;?>
);"
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['bonus']->value->promo&&!empty($_smarty_tpl->tpl_vars['bonus']->value->promo)) {?>
					onclick="getpromo(<?php echo $_smarty_tpl->tpl_vars['bonus']->value->id;?>
,'<?php echo $_smarty_tpl->tpl_vars['bonus']->value->promo;?>
',<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
);"
				<?php }?>
					>Активировать бонус</a>
			<div style="display:block" id="my_sale_bonus">
			<?php if ($_smarty_tpl->tpl_vars['bonus']->value->percent&&$_smarty_tpl->tpl_vars['bonus']->value->percent!=0) {?>
				<div id="sale-percent-<?php echo $_smarty_tpl->tpl_vars['bonus']->value->id;?>
" style="display:none">Ваша скидка <?php echo $_smarty_tpl->tpl_vars['bonus']->value->percent;?>
 % будет применена в <a href="/cart/">корзине</a> при оформлении заказа.</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['bonus']->value->promo&&!empty($_smarty_tpl->tpl_vars['bonus']->value->promo)) {?>
				<div id="sale-promo-<?php echo $_smarty_tpl->tpl_vars['bonus']->value->id;?>
" style="display:none">Ваш промокод <?php echo $_smarty_tpl->tpl_vars['bonus']->value->promo;?>
 можете применить на сайте <?php echo $_smarty_tpl->tpl_vars['bonus']->value->service;?>
.</div>
			<?php }?>

			</div>


          </div>

        </div>

      </div>
    </div>

<?php } ?>

<?php }?>

<?php }} ?>
