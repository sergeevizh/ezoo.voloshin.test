{capture name=tabs}
{if in_array('settings', $manager->permissions)}<li><a href="index.php?module=SettingsAdmin">Настройки</a></li>{/if}
{if in_array('currency', $manager->permissions)}<li><a href="index.php?module=CurrencyAdmin">Валюты</a></li>{/if}
{if in_array('delivery', $manager->permissions)}<li><a href="index.php?module=DeliveriesAdmin">Доставка</a></li>{/if}
{if in_array('payment', $manager->permissions)}<li><a href="index.php?module=PaymentMethodsAdmin">Оплата</a></li>{/if}
{if in_array('managers', $manager->permissions)}<li><a href="index.php?module=ManagersAdmin">Менеджеры</a></li>{/if}
{if in_array('cities', $manager->permissions)}<li><a href="index.php?module=CitiesAdmin">Города доставки</a></li>{/if}
{if in_array('prizes', $manager->permissions)}<li class="active"><a href="index.php?module=BonusAdmin">Бонус</a></li>{/if}
<li class="active"><a href="index.php?module=PrizeAdmin">Призы</a></li>

{/capture}

{$meta_title = "Призы" scope=parent}
<script>
var limit_rows = {$limits|@count};
</script>
<style>
.form-row {
    margin-bottom: 15px;
    padding-right: 15px;
}
.form-row label {
    display: block;
    color: #777;
    margin-bottom: 5px;
}
.form-row input[type="text"] {
    width: 100%;
    padding: 5px;
    box-sizing: border-box;
}

/* Стили для вывода превью */
.img-item {
    display: inline-block;
    margin: 0 20px 20px 0;
    position: relative;
    user-select: none;
}
.img-item img {
    border: 1px solid #767676;
}
.img-item a {
    display: inline-block;
    background: url(/remove.png) 0 0 no-repeat;
    position: absolute;
    top: -5px;
    right: -9px;
    width: 20px;
    height: 20px;
    cursor: pointer;
}

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.switch{
    position: absolute;
    margin-left: 93px;
}
.switch p{
    margin-left: 92px;
}
</style>
{literal}
<script src="design/js/autocomplete/jquery.autocomplete-min.js"></script>
<script src="design/js/jquery/datepicker/jquery.ui.datepicker-ru.js"></script>

<script>
function changing(){
    let ch = $("#is_active");
    let checked = ch.is(":checked");
     if (checked) {
    //ON
    // $.ajax({
		// 	type: 'POST',
		// 	url: 'ajax/fortune.php',
		// 	data: { checked:'true'},
		// 	success: function(data){
       
		// 	},
		// 	dataType: 'json'
		// });	
    // window.location.href = 'https://ezo.voloshin.by/simpla/index.php?module=PrizeAdmin&checked='+1
      
    console.log('true');
    } else {
    //   $.ajax({
		// 	type: 'POST',
		// 	url: 'ajax/fortune.php',
		// 	data: { checked :'false'},
		// 	success: function(data){
        
		// 	},
		// 	dataType: 'json'
		// });
    // window.location.href = 'https://ezo.voloshin.by/simpla/index.php?module=PrizeAdmin&checked='+0
    // console.log(window.location);
    console.log('false');
    }
}
$.get( "ajax/fortune.php", function( data ) {
  let result = JSON.parse(data)
  $("textarea#alert").attr("value", result.alert.text);
  if(result.html.is_active == 1){
    $("input#is_active").attr('checked','checked');
  }
  
  console.log( result.html.is_active);
});
  

</script>

{/literal}

{* Заголовок *}
<div id="header">
<h1>{if $prizes_count}{$prizes_count}{else}Нет{/if} Приз{$prizes_count|plural:'':'ов':'а'}</h1>
<a class="add" href="{url module=PrizeOneAdmin}">Добавить приз</a>
</div>


{if $message_success}
<!-- Системное сообщение -->
<div class="message message_success">
<span class="text">{if $message_success == 'saved'}Настройки сохранены{/if}</span>
{if $smarty.get.return}
<a class="button" href="{$smarty.get.return}">Вернуться</a>
{/if}
</div>
<!-- Системное сообщение (The End)-->
{/if}

{if $message_error}
<!-- Системное сообщение -->
<div class="message message_error">
<span class="text">{if $message_error == 'watermark_is_not_writable'}Установите права на запись для файла {$config->watermark_file}{/if}</span>
<a class="button" href="">Вернуться</a>
</div>
<!-- Системное сообщение (The End)-->
{/if}
<div class="block">
		<h2>Текст</h2>
    <form method="POST">
		<textarea name="alert" id="alert" class="editor_small"></textarea>
    <input class="button_green button_save" type="submit" name="save" value="Сохранить" />
    <div class="switch">
        <p>Вкл.Выкл</p>
        <label class="switch">
        <input type="checkbox" name="is_active" id="is_active" class="is_active" value="1">
        <span class="slider round"></span>
        </label>
    </div>
    </form>
</div>
<div class="block">
</div>
<!-- Спиоск всех бонусов -->
<div class="block" id="main_list">
{foreach $prizes as $prize}
    <a href="{url module=PrizeOneAdmin id={$prize->id} return=$smarty.server.REQUEST_URI}" title="{$prize->text}" class="
    {if $prize->is_active == 1 }green_button {/if} {if $prize->is_active == 0 }red_button {/if} mybonus">{$prize->text|escape}</a>
{/foreach}
</div>

<!-- Меню -->
<div id="right_menu">
<div class="all">Всего бонусов:{$prizes_count|escape}</div>
{* <form method="post" action="" enctype='multipart/form-data' id="product"> *}
</div>
<!-- Меню  (The End) -->