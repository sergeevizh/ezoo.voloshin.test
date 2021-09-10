{* Шаблон страницы зарегистрированного пользователя *}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<section class="section section_order">
    <div class="wrapper">
        <h1>Профиль</h1>
        <div class="account-block">
            <div class="account-block__content">
                <section class="account js-account">
                    {if $group->image}
                        <div class="account__image-field"
                            style="background-image: url('{$config->groups_images_dir}{$group->image}');">
                            <img src="{$config->groups_images_dir}{$group->image}" alt="{$user->group_name|escape}"
                                class="account__image">
                        </div>
                    {/if}

                    <div class="account__content" {if !$group->image} style="margin-left: 0" {/if}>
                        <div class="error_head" {if empty($error)} style="display: none" {/if}>Ошибка сохранения данных
                            пользователя!!!</div>
                        <form method="post">
                            <div class="account__header">
                                <input name="name" type="text" required class="editable-input account__title"
                                    value="{$name|escape}" />
                                <div class="error" {if $error!='empty_name'} style="display: none" {/if}>Ошибка в имени
                                    пользователя!</div>
                                {if $user->group_name}
                                    <input type="text" class="editable-input account__status"
                                        value="{$user->group_name|escape}" disabled readonly>
                                {/if}
                            </div>
                            <div class="account__data">
                                {*	<pre>{var_dump($this->db->query('SELECT * FROM __users'))}</pre>*}
                                <input name="phone" type="text" class="editable-input account__data__row"
                                    value="{$phone|escape}" placeholder="Номер телефона">
                                <input name="email" type="text" class="editable-input account__data__row"
                                    value="{$email|escape}" placeholder="Ваш email">
                                <div class="error" {if $error!='empty_email'} style="display: none"
                                    {elseif $error=='empty_email'} style="display: block"
                                    {/if}>Ошибка в адресе
                                    электронной почты!</div>
                                <label for="date_birthday">Дата рождения:</label><input name="date_birthday" type="date"
                                    class="editable-input account__data__row" value="{$date_birthday|escape}"
                                    placeholder="Дата рождения">
                                <div class="error" {if $error!='empty_date_birthday'} style="display: none"
                                    {elseif $error=='empty_date_birthday'} style="display: block"
                                    {/if}>Дата рождения
                                    введена не правильно!</div>
                                <br><label for="address">Адрес: </label><input name="address" type="text"
                                    class="editable-input account__data__row" value="{$address|escape}"
                                    placeholder="Ваш адрес">
                                {*<input id="password" class="editable-input account__data__row" value="" name="password" type="password" style="display:block;" placeholder="укажите новый пароль">*}
                            </div>
                            <div class="account__control">
                                <div class="account__control-field">
                                    {*<a href="#" class="account__control-link js-change-password" onclick="$('#password').show();return false;" style="display:block;">Изменить пароль</a>*}
                                    {*<a href="#" class="account__control-link js-account-data-edit-link">Изменить данные</a>*}
                                </div>
                                <div class="account__control-field">
                                    <input class="btn js-account-save-input" type="submit" value="Сохранить"
                                        style="display: block">
                                </div>
                                {*<div class="account__control-field"><a href="#password-window" class="account__control-link js-popup-link">Изменить пароль</a></div>*}
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            <div class="account-block__aside">
                {if $user->discount > 0}
                    <div class="discount-info">
                        <div class="discount-info__val">{$user->discount}%</div>
                        <div class="discount-info__content">ваша персональная скидка</div>
                    </div>
                {/if}
            </div>
        </div>
        {if $orders}
            <div class="histori_order_info">
                <h2>Статистика заказов</h2>
                <div class="info_block">
                    <h4>Количество оформленных и выполненных заказов: <span class="number_info">{$count_orders}</span>;</h4>
                </div>
                <div class="info_block">
                    <h4>Сумма всех заказов: <span class="number_info">{$sum_price|convert} {$currency->sign}</span>;</h4>
                </div>
                {if $sum_sale>0 }<div class="info_block">
                        <h4>Общая суммма скидки по всем заказам: <span class="number_info">{$sum_sale|convert}
                                {$currency->sign}</span>;</h4>
                </div>{/if}
            </div>

            <h2>Список последних заказов</h2>

            <div class="archive">
                <div class="archive__inner">
                    {foreach $orders as $order}
                        <div class="archive__grid">
                            <a href="{$config->root_url}/order/{$order->url}"
                                class="archive__item{if $order->status == 2} archive__item_success{/if}">
                                <div class="archive__header">
                                    <div class="archive__title">
                                        <span class="archive__title-link">Заказ №{$order->id} </span>
                                        {if $order->paid == 1}
                                            <span class="archive__status-icon">
                                                <span class="archive-status-icon archive-status-icon_success"></span>
                                            </span>
                                        {/if}
                                    </div>
                                    <div class="archive__date">{$order->date|date}</div>
                                    <div class="archive__status">
                                        {if $order->status == 0}В обработке
                                        {elseif $order->status == 1}Принят
                                        {elseif $order->status == 2}Выполнен
                                        {/if}
                                        {if $order->paid == 1}, оплачен{/if}
                                        {$order->comment}
                                        {*Отправлен почтой, трек-код: <b class="cl-highlight archive__track-code">RA038346151FI</b>*}
                                    </div>
                                </div>
                                <div class="archive__content">
                                    {$total_products = 0}
                                    {api module=orders method=get_purchases var=purchases _=['order_id' => $order->id]}
                                    {$total_products = $purchases|count}
									{* {print_r($purchases)} *}
                                    {foreach $purchases as $purchase}
                                        {$total_products = $total_products + $purchase->amount - 1}
                                    {/foreach}
                                    {if $total_products > 0}
                                        <div class="archive__count">{$total_products}
                                            {$total_products|plural:'товар':'товаров':'товара'}</div>
                                    {/if}
                                    <div class="archive__total">{$order->total_price|convert}&nbsp;{$currency->sign}</div>
									{api module=products method=get_product var=product _= (int)$purchase->product_id}
									{api module=variants method=get_variants var=products _= ['product_id' => (int)$purchase->product_id]}
									<form action="{$config->root_url}/cart" class="product__variant js-cart-basket-submit-array-{$order->id}"
										data-variant-name="{$purchase->variant_name|truncate:10}"
										data-variant-price-pickup="{$purchase->price|convert}"
										data-variant-price-delivery="{$purchase->price|convert}">
										{foreach $purchases as $purchase}
											<input type="hidden" class="variant_array_ids" name="variant[]" value="{$purchase->variant_id}">
										{/foreach}
										<div class="product__variant-cell product__variant-submit">
											<button type="submit" class="btn btn_small basket-btn product__basket-btn js-cart-basket-btn">
                                                Повторить заказ
											</button>
										</div>
										<div class="product__variant-cell product__variant-amount">
											<div class="count-field js-count-field">
											{foreach $purchases as $purchase}
												<input type="hidden" class="amount_array" name="amount" value="{(int)$purchase->amount}"
													max="{$product->stock}">
											{/foreach}
											</div>
										</div>
									</form>

									<script>
										$(document).on("submit", ".js-cart-basket-submit-array-{$order->id}", function (e) {
											e.preventDefault();

											var $btn = $(this).find("[type=submit]"),
											$img,
											variant,
											amount;

											var variant_ids = $('.js-cart-basket-submit-array-{$order->id}').find('.variant_array_ids');
											var variant_array = [];
											variant_ids.each(function(){
												variant_array.push(this.value);
											});

											var amounts = $('.js-cart-basket-submit-array-{$order->id}').find('.amount_array');
											var amount_array = [];
											amounts.each(function(){
												amount_array.push(this.value);
											});

											// поиск основного рисунка сделать
											if ($btn.hasClass("js-cart-basket-btn")) {
												$img = $btn.closest(".js-cart").find(".js-cart-image");
											} else if ($btn.hasClass("js-product-basket-btn")) {
												$img = $(
													".js-product-image-main .slick-current .product-image__main-img"
												);
											}

											/*if ($(this).find("input[name=variant]:checked").size() > 0)
												variant = $(this).find("input[name=variant]:checked").val();
											else if ($(this).find("select[name=variant]").size() > 0)
												variant = $(this).find("select").val();
											else if ($(this).find("input[name=variant]:hidden").val() > 0)
												variant = $(this).find("input[name=variant]:hidden").val();

											if ($(this).find(".js-count-field-val").size() > 0) {
												amount = $(this).find(".js-count-field-val").val();
											} else {
												amount = 1;
											}*/

											$.ajax({
											url: "../../../ajax/cart_array.php",
											data: { variant: variant_array.join(','), amount: amount_array.join(',') },
											dataType: "json",
											success: function (data, response) {
												console.log(response);

												if (!$btn.hasClass("is-active")) {
													$btn.addClass("is-active");
												}
												var $temp_img = $img.clone();
												$("body").append($temp_img);
												$(".js-basket-field").html(data);
												$(".js-basket-field").css('width', '224px');
												/*$temp_img
												.css({
													position: "absolute",
													"z-index": 10001,
													width: $img.width(),
													height: $img.height(),
													left: $img.offset().left,
													top: $img.offset().top,
												})
												.animate(
													{
														left: $(".js-basket-field").offset().left,
														top: $(".js-basket-field").offset().top,
														opacity: 0,
														},
														600,
														function () {
														$temp_img.remove();

														$(".js-basket-field").html(data);
														let resizeEvent = window.document.createEvent("UIEvents");
														resizeEvent.initUIEvent("resize", true, false, window, 0);
														window.dispatchEvent(resizeEvent);
													}
												);*/

												gtag("event", "add_to_cart ", {
												send_to: "AW-697955346",
												value: $btn
													.closest("form")
													.find(".product__variant-price span:first-child")
													.text(),
												items: [
													{
														id: $btn.closest("form").find("input[name=variant]").val(),
														location_id: "replace with value",
														google_business_vertical: "custom",
													},
												],
												});
											},
											});
										});
									</script>
                                </div>
                            </a>
                        </div>
                    {/foreach}
                </div>
            </div>

            {if $count_orders > 6}
                <a href="/user/orders" class="border-link all-archive-link">Просмотреть список всех заказов</a>
            {/if}
        {/if}
    </div>
</section>
