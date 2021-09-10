<?php /* Smarty version Smarty-3.1.18, created on 2021-08-11 11:31:47
         compiled from "simpla/design/html/delivery_area.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8769016846093e7c4b5af51-23310255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f9a25e3b921b707423f6dd71ce66fc33fe97682' => 
    array (
      0 => 'simpla/design/html/delivery_area.tpl',
      1 => 1628362402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8769016846093e7c4b5af51-23310255',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6093e7c4b812b4_08239035',
  'variables' => 
  array (
    'manager' => 0,
    'keyword' => 0,
    'delivery_areas' => 0,
    'polygons' => 0,
    'delivery_area' => 0,
    'couriers' => 0,
    'courier' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6093e7c4b812b4_08239035')) {function content_6093e7c4b812b4_08239035($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
<?php if (in_array('orders',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
<li><a href="index.php?module=OrdersAdmin&status=0">Новые</a></li>
<li><a href="index.php?module=OrdersAdmin&status=1">Приняты</a></li>
<li><a href="index.php?module=OrdersAdmin&status=2">Выполнены</a></li>
<li><a href="index.php?module=OrdersAdmin&status=3">Удалены</a></li>
<?php if ($_smarty_tpl->tpl_vars['keyword']->value) {?>
<li class="active"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersAdmin','keyword'=>$_smarty_tpl->tpl_vars['keyword']->value,'id'=>null,'label'=>null),$_smarty_tpl);?>
">Поиск</a></li>
<?php }?>
<?php }?>
<?php if (in_array('labels',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersLabelsAdmin','keyword'=>null,'id'=>null,'page'=>null,'label'=>null),$_smarty_tpl);?>
">Метки</a></li>
<?php }?>
<?php if (in_array('couriers',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersCouriersAdmin','keyword'=>null,'id'=>null,'page'=>null,'label'=>null),$_smarty_tpl);?>
">Курьеры</a></li>
<?php }?>
<?php if (in_array('delivery_area',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
<li class="active"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersDeliveryArea','keyword'=>null,'id'=>null,'page'=>null,'label'=>null),$_smarty_tpl);?>
">Области
		доставки</a></li>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=60445215-6d3a-4f88-87fe-8d52b72e5bc9"></script>

<script>
    var delivery_count = <?php echo count($_smarty_tpl->tpl_vars['delivery_areas']->value);?>
;
    var areas = <?php echo $_smarty_tpl->tpl_vars['polygons']->value;?>
;
</script>

<script type="text/javascript">

    ymaps.ready(function () {
        var myPolygon,
            isDrawing = false;

        var map = new ymaps.Map("map", {
            center: [53.902284, 27.561831],
            zoom: 10,
            behaviors: ["default", "scrollZoom"],
            type: 'yandex#map',
            controls: []
        });

        document.addEventListener('click', function (event) {
            switch (event.target.id) {
                case "startDrawing" :
                    createPolygon();
                    break;
                case "stopDrawing":
                    stopPolygon();
                    break;
            }
        });

        renderMapControls();

        var BalloonContentLayout = ymaps.templateLayoutFactory.createClass(
            '<b>{% if properties.id %}Номер области: {{ properties.id }}{% endif %}</b><br>' +
            '<b>{% if properties.courier %}Курьер: {{ properties.courier }}{% else %}Курьер не выбран{% endif %}</b><br><br>' +
            '<button class="delete-polygon"> Удалить область </button>', {
                build: function () {
                    BalloonContentLayout.superclass.build.call(this);
                    $('.delete-polygon').bind('click', this.onButtonClick);
                },
                clear: function () {
                    $('.delete-polygon').unbind('click', this.onButtonClick);
                    BalloonContentLayout.superclass.clear.call(this);
                },
                onButtonClick: function () {

                    var areas = ymaps.geoQuery(map.geoObjects);
                    areas.each(function (item) {
                        if (item.balloon.isOpen()) {
                            ymaps.geoQuery(item).removeFromMap(map);
						}
                    })

                }
            });

        function createPolygon() {

            isDrawing = true;
            myPolygon = new ymaps.Polygon([], {}, {
                editorDrawingCursor: "crosshair",
                balloonContentLayout: BalloonContentLayout,
                balloonPanelMaxMapArea: 0,
                draggable: true
            });
            map.geoObjects.add(myPolygon);

            myPolygon.editor.startDrawing();
            myPolygon.editor.events.add("drawingstop", function () {
                isDrawing = false;
                renderMapControls();
            });
            renderMapControls();
        }

        drawExistingAreas();

        function drawExistingAreas() {
            for (let area of areas) {
                var polygonGeometry = new ymaps.geometry.Polygon([JSON.parse(area.polygon)[0]]),
                    polygonGeoObject = new ymaps.GeoObject({geometry: polygonGeometry, properties: {courier: area.courier ,id: area.id}}, {
                        draggable: isDrawing,
                        balloonContentLayout: BalloonContentLayout,
                        balloonPanelMaxMapArea: 0
                    });
                map.geoObjects.add(polygonGeoObject);
                polygonGeoObject.editor.startEditing();
            }
        }

        function stopPolygon() {
            myPolygon.editor.stopDrawing();
        }

        function renderMapControls() {
            var startDrawingButton = '<button id="startDrawing">Начать редактирование</button>',
                controlsContainer = document.getElementById('map-controls'),
                stopDrawingButton = '<button id="stopDrawing">Завершить редактирование</button>';

            controlsContainer.innerHTML = isDrawing ? stopDrawingButton : startDrawingButton;
        }

        $('#save-drawing').click(function () {
            $('.polygon_input').remove();
            delivery_count = 0;
            var delivery_areas = ymaps.geoQuery(map.geoObjects);
            delivery_areas.each(function (item) {
                if (item.geometry.getCoordinates()[0].length > 0) {
                    delivery_count++;
                    var id = item.properties.get('id') ? item.properties.get('id') : '';
                    var html = '<input type="hidden" name=polygons[' + delivery_count + '][area] value=' + JSON.stringify(item.geometry.getCoordinates()) + '>';
                    html += '<input type="hidden" name=polygons[' + delivery_count + '][id] value=' + id + '>';
                    $('#delivery_area').append(html);
				}
            });
        });
    });
</script>

<div id="header">
	<h1>Области доставки</h1>
</div>

<h2>Редактирование областей доставки</h2>
<form method=post enctype="multipart/form-data" id=delivery_area>
	<input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<input class="button_green button_save" id="save-drawing" type="submit" value="Сохранить области доставки"/>
</form>


<div id="map-controls">
</div>
<div id="map" style="width: 100%; height: 650px;margin-top: 12px;"></div>
<hr>
<?php if (!$_smarty_tpl->tpl_vars['delivery_areas']->value) {?>
<h2>На карте не выделены области</h2>
<?php } else { ?>
<h2>Выбор курьера для области доставки</h2>
<form method=post enctype="multipart/form-data">
	<input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<table id="couriers-polygons">
		<thead>
		<td><b>Номер области</b></td>
		<td><b>Курьер</b></td>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['delivery_area'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['delivery_area']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['delivery_areas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['delivery_area']->key => $_smarty_tpl->tpl_vars['delivery_area']->value) {
$_smarty_tpl->tpl_vars['delivery_area']->_loop = true;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['delivery_area']->value->id;?>
</td>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['couriers']->value) {?>
				<select name="couriers[<?php echo $_smarty_tpl->tpl_vars['delivery_area']->value->id;?>
]">
					<option value="" <?php if ($_smarty_tpl->tpl_vars['delivery_area']->value->courier=='') {?> selected <?php }?> >--Выберите курьера--</option>
					<?php  $_smarty_tpl->tpl_vars['courier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['courier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['couriers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['courier']->key => $_smarty_tpl->tpl_vars['courier']->value) {
$_smarty_tpl->tpl_vars['courier']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['courier']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['courier']->value->id==$_smarty_tpl->tpl_vars['delivery_area']->value->courier_id) {?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['courier']->value->name;?>
</option>
					<?php } ?>
				</select>
				<?php }?>
			</td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
	<input class="button_green button_save" type="submit" value="Сохранить"/>
</form>
<?php }?>





<?php }} ?>
