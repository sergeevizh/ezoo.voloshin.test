$(document).ready(function() {
    $('#cart_show_information_block').on('click',function () {
    	let jsCity = $('.js-city');
    	if (jsCity.length){
    		if ((!jsCity.val()) ){
				jsCity.addClass('error');
				$('html').animate({scrollTop: jsCity.offset().top-100}, 500);
				return false;
			}
		}
        $(this).hide();
        $('.order-block__btn').show();
        $('.order-block__group').show();
    });
    // Выбор варианта продукции
    $('.product-variants__input').change(function(){
        $('.js-product-variants-block-main').find('.product-variants__item-main').html($(this).next('.product-variants__item-main').html());
        $('.product__price').html($(this).next('.product-variants__item-main').find('.product-variants__price').html());
    });
    if($(window).width()>=768) {
        setEqualHeight($(".catalog .catalog__item"));
    }
    // Скролл до отзыва
    var hash = window.location.hash;
    if(hash && hash.indexOf('comment_') >= 0){
        var clear_hash = hash.replace('#', '');
        var comment = $('a[name='+ clear_hash +']').closest('.comment');

        if(comment.length){
            comment.removeClass('comment_hidden');
            setTimeout(function(){
                if(isMobile()){
                    $('html,body').animate({scrollTop: comment.offset().top - $('.header').height() - 10}, 0);
                }else{
                    $('html,body').animate({scrollTop: comment.offset().top - $('.js-header-nav').height() - 20}, 0);
                }
            });
        }
    }

    if(hash && hash == '#comments'){
        if($('#comments-section').length){
            setTimeout(function(){
                if(isMobile()){
                    $('html,body').animate({scrollTop: $('#comments-section').offset().top - $('.header').height()}, 0);
                }else{
                    $('html,body').animate({scrollTop: $('#comments-section').offset().top - $('.js-header-nav').height()}, 0);
                }
            });
        }
    }

    // product.tpl - Описание продукта
    if($('.product__description').height() >= $('.product__description > div').height()){
        $('.product__description').addClass('is-visible');
    }

	//  index.tpl - Автозаполнитель поиска
	$(".js-search-autocomplete").autocomplete({
		serviceUrl:'ajax/search_products.php',
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

    /**
    * FancyBox
    * @see  http://fancyapps.com/fancybox/
    */
    $('.js-popup-link').click(function(e){
        e.preventDefault();
        popupOpen($(this).attr('href'));
    });

    $('.js-popup-close').click(function(e){
        e.preventDefault();
        popupClose();
    });

    /**
    * Form Styler
    * @see  http://dimox.name/jquery-form-styler/
    */
    $('.js-styler').each(function(){
        var $element = $(this);
        // if($element.is('select') && $element.find('option[value=""]'))
        //     $element.find('option[value=""]').addClass('is-empty');
        $element.styler();
    });

    $('form').bind('reset',function(){
        var form = $(this);
        setTimeout(function(){
            form.find('.input').trigger('change');
            form.find('.js-styler').trigger('refresh');
        });
    });

    /**
    * carouselTicker
    * @see  http://likeclever1.github.io/carouselTicker/
    */
    if($('.js-hits-slider').length){
        var hits_slider = $('.js-hits-slider').carouselTicker();

        $(window).on('resize', function() {
            hits_slider.reloadCarouselTicker();
        });
    }

    if($('.js-similiar-catalog').length){
        var similiar_catalog = $('.js-similiar-catalog').carouselTicker();

        $(window).on('resize', function() {
            similiar_catalog.reloadCarouselTicker();
        });
    }

    /**
    * Slick
    * @see  http://kenwheeler.github.io/slick/
    */
    $('.main-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 1500,
        swipeToSlide: true,
        responsive: [
        {
            breakpoint: 767,
            settings: {
                speed: 300,
                touchThreshold: 100
            }
        }
        ]
    }).on('beforeChange', function(event, slick, currentSlide, nextSlide){

		if(echo) {
			echo.render();
		}
	});


    $('.js-additional-catalog').slick({
        arrows: true,
        dots: false,
        slidesToShow: 4,
        swipeToSlide: true,
        responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
                arrows: false,
                touchThreshold: 100
            }
        }
        ]
    });

    $('.js-product-image-main').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.js-product-image-thumbs',
        swipeToSlide: true,
        adaptiveHeight: true,
        responsive: [
        {
            breakpoint: 767,
            settings: {
                fade: false,
                dots: true,
            }
        }
        ]
    });

    $('.js-product-image-thumbs').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.js-product-image-main',
        focusOnSelect: true,
        arrows: false,
        swipeToSlide: true,
    });

    $('.js-small-catalog').slick({
        slidesToShow: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        swipeToSlide: true,
    });

    $('.js-hits-main').slick({
        arrows: false,
        dots: true,
        slidesToShow: 3,
        infinite: false,
        swipeToSlide: true,
        responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1
            }
        }
        ]
    });

    $('.js-hits-main-mobile').slick({
        arrows: true,
        dots: false,
        slidesToShow: 3,
        infinite: true,
        swipeToSlide: true,
        responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }
        ]
    });

    $(window).resize(function(){
        if(isMobile()){
            if(!$('.js-main-catalog').hasClass('slick-slider')){
                $('.js-main-catalog').slick({
                    infinite: false,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: false,
                    dots: true,
                });
            }

            if(!$('.js-main-catalog-large').hasClass('slick-slider')){
                $('.js-main-catalog-large').slick({
                    infinite: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,
                    swipeToSlide: true,
                });
            }
        }else{
            if($('.js-main-catalog').hasClass('slick-slider')){
                $('.js-main-catalog').slick('unslick');
            }

            if($('.js-main-catalog-large').hasClass('slick-slider')){
                $('.js-main-catalog-large').slick('unslick');
            }
        }
    });

    $(window).resize(function(){
        if(isMobile()){
            if(!$('.js-actions-content').hasClass('slick-slider')){
                $('.js-actions-content').slick({
                    infinite: true,
                    slidesToShow: 1,
                    arrows: true,
                    dots: false,
                    swipeToSlide: true,
                });
            }
        }else{
            if($('.js-actions-content').hasClass('slick-slider')){
                $('.js-actions-content').slick('unslick');
            }
        }
    });

    /**
    * Sticky-Kit
    * @see  http://leafo.net/sticky-kit/
    */
    $('.js-header-nav').stick_in_parent({
        sticky_class: 'is-stuck',
        parent: 'body'
    });

    $('.js-basket-field').stick_in_parent({
        sticky_class: 'is-stuck',
        parent: 'body'
    });

    $('.js-page-sidebar').stick_in_parent({
        sticky_class: 'is-stuck',
        parent: '.js-page-wrapper',
        offset_top: 60
    });

    $('.js-product-image-field').stick_in_parent({
        sticky_class: 'is-stuck',
        offset_top: 60
    });

    $(window).load(function(){
        $('.js-product-image-field').trigger('sticky_kit:recalc');
    });

    /**
    * Placeholder IE
    * @see  https://github.com/mathiasbynens/jquery-placeholder/
    */
    $('input, textarea').placeholder();

    /**
    * Input Mask
    * @see  https://github.com/RobinHerbots/jquery.inputmask
    */
    $('.js-input-phone').inputmask({mask: "+375 99 999-99-99", "clearIncomplete": true, showMaskOnHover: false });
/*    $('.js-input-phone').inputmask('+375 99 999-99-99', {
        //showMaskOnHover: false,
    });*/

    $('.js-input-date').inputmask('99.99.9999', {
        showMaskOnHover: false,
    });

    /**
    * Form Validation
    * @see  http://jqueryvalidation.org/validate/
    */
    $('.js-validation-form').each(function() {
        var $form = $(this);
        $form.validate({
            ignore: '.ignore, :hidden',
            errorPlacement: function(error, element) {
                if ($(element).parents('.jq-selectbox').length) {
                    error.insertAfter($(element).parents('.jq-selectbox'));
                } else if ($(element).is(':checkbox') || $(element).is(':radio')) {
                    error.insertAfter($(element).closest('label'));
                } else if ($(element).parents('.jq-file').length) {
                    error.insertAfter($(element).parents('.jq-file'));
                } else {
                    error.insertAfter(element);
                }
            },
            invalidHandler: function() {
                setTimeout(function() {
                    $form.find('input.js-styler:not(:file), select.js-styler').trigger('refresh');
                    $form.find('.js-styler:file').each(function(){
                        if($(this).hasClass('error'))
                            $(this).closest('.jq-file').addClass('error');
                        else
                            $(this).closest('.jq-file').removeClass('error');
                    });
                }, 1);
            }
        });
    });
    $('input.js-styler.required, input.js-styler[required], select.js-styler.required, select.js-styler[required]').change(function(){
        var $this = $(this);
        setTimeout(function() {
            $this.valid();
            if(!$this.closest('.js-cart-form').length){
                if($this.is(':radio')){
                    $this.closest('form').find('input:radio[name='+ $this.attr('name') +']').trigger('refresh');
                }else if($this.is(':file')){
                    if($this.hasClass('error'))
                        $this.closest('.jq-file').addClass('error');
                    else
                        $this.closest('.jq-file').removeClass('error');
                }else{
                    $this.trigger('refresh');
                }
            }
        });
    });

    $('.js-cart-form').each(function() {
        var $form = $(this);
        $form.validate({
            ignore: '.ignore',
            errorPlacement: function(error, element) {
                if ($(element).is(':checkbox') || $(element).is(':radio')) {
                    $(element).closest('.js-order-block-row').addClass('error');
                } else {
                    error.insertAfter(element);
                }
            },
            success: function(label,element){
                $(element).removeClass('error');
                if ($(element).is(':checkbox') || $(element).is(':radio')) {
                    $(element).closest('.js-order-block-row').removeClass('error');
                }
            },
            invalidHandler: function() {
                setTimeout(function() {
                    $form.find('input.js-styler:not(:file), select.js-styler').trigger('refresh');
                }, 1);
            },
        });
    });

    /**
    * Count Input Fields
    */
    $('.js-count-field-down, .js-count-field-up').click(function(e) {
        e.preventDefault();
        var $field = $(this).parents('.js-count-field'),
        $input = $field.find('.js-count-field-val'),
        val = parseInt($input.val()) || 0;
        max = parseInt($input.attr('max')) || 9999;

        if($(this).hasClass('js-count-field-down')){
            if (val - 1 > 0)
                $input.val(val - 1);
        }else{
            console.log(max);
            if (val < max){
                $input.val(val + 1);
            }
        }
		$input.change();
    });
    $('.js-count-field-val').keypress(function(e) {
        if (e.keyCode !== 8 && e.keyCode !== 0 && (e.keyCode < 48 || e.keyCode > 57)) {
            return false;
        }
    });
    $('.js-count-field-val').keyup(function(e) {
        if (e.keyCode !== 8 && e.keyCode !== 0 && (e.keyCode < 48 || e.keyCode > 57)) {
            return false;
        }
        max = parseInt($(this).attr('max')) || 9999;
        if ($(this).val() < max){
            $(this).change();
        } else {
            $(this).val(max);
            $(this).change();
        }
    });

    $('.nav__link[data-dropdown]').mouseenter(function(){
        if(!isMobile()){
            $('.nav__link[data-dropdown]').removeClass('is-open');
            $('.subnav-block__item').removeClass('is-open');

            $(this).addClass('is-open');
            $('.subnav-block__item[data-dropdown='+ $(this).data('dropdown') +']').addClass('is-open');
        }
    });

    $('.nav__link[data-dropdown]').mouseleave(function(e){
        if(!isMobile()){
            if($(e.relatedTarget).closest('.subnav-block').length < 1){
                $('.nav__link[data-dropdown]').removeClass('is-open');
                $('.subnav-block__item').removeClass('is-open');
            }
        }
    });

    $('.subnav-block__item').mouseleave(function(e){
        if(!isMobile()){
            if(!$(e.relatedTarget).hasClass('nav__link') || !$(e.relatedTarget).data('dropdown')){
                $('.nav__link[data-dropdown]').removeClass('is-open');
                $('.subnav-block__item').removeClass('is-open');
            }
        }
    });

    /**
    * Cart
    */
    $('.js-cart-thumbs').slick({
        infinite: false,
        slidesToShow: 3
    });

    $(document).on('mouseenter', '.js-cart', function(){
        if(!isMobile()){
            //$(this).addClass('is-open');
            $(this).find('.js-cart-thumbs').slick('setPosition');
            if(echo) {
				echo.render();
			}


        }
    });

    // $(document).on('mouseleave', '.js-cart', function(){
    //     if(!isMobile()){
    //         $(this).removeClass('is-open');
    //     }
    // });

    $('.js-cart-thumb').click(function(e){
        e.preventDefault();
        if(!$(this).hasClass('is-active')){
            var cart = $(this).closest('.js-cart');
            cart.find('.js-cart-thumb').removeClass('is-active');
            $(this).addClass('is-active');

            cart.find('.js-cart-image').hide().attr('src', $(this).find('.js-cart-thumb-img').attr('src')).fadeIn();
        }
    });
	//$('.js-product-variants-select').change(function(e){

	$(document).on('change', '.js-product-variants-select', function(e){
		e.preventDefault();
		var option = $('.js-product-variants-select').find('option:selected');
		var variant = option.data();

		$('.js-price-change').text(variant.price);

		if(variant.comparePrice) {
			$('.js-compare-price-change').text(variant.comparePrice).removeClass('hidden');
			$('.js-discount-change span').text(variant.discount).parent().removeClass('hidden');
		} else {
			$('.js-compare-price-change, .js-discount-change').addClass('hidden');
		}


		var form = $(this).closest('form.js-cart-basket-submit');
		var $btn = form.find('[type=submit]');
		if(variant.inCart) {
			$btn.addClass('is-active');
		} else {
			$btn.removeClass('is-active');
		}

	});

	$(document).on('submit', '.js-cart-basket-submit', function(e) {
		e.preventDefault();

		var $btn = $(this).find('[type=submit]'),
			$img,
			variant,
            amount;

		// поиск основного рисунка сделать
		if ($btn.hasClass('js-cart-basket-btn')) {
			$img = $btn.closest('.js-cart').find('.js-cart-image');
		} else if ($btn.hasClass('js-product-basket-btn')) {
			$img = $('.js-product-image-main .slick-current .product-image__main-img');
		}

		if ($(this).find('input[name=variant]:checked').size() > 0)
			variant = $(this).find('input[name=variant]:checked').val();
		else if ($(this).find('select[name=variant]').size() > 0)
			variant = $(this).find('select').val();
		else if ($(this).find('input[name=variant]:hidden').val() > 0)
			variant = $(this).find('input[name=variant]:hidden').val();

        if ($(this).find('.js-count-field-val').size() > 0){
            amount = $(this).find('.js-count-field-val').val();
        } else {
            amount = 1;
        }

		$.ajax({
			url: 'ajax/cart.php',
			data: {variant: variant, amount: amount},
			dataType: 'json',
			success: function(data) {

				if (!$btn.hasClass('is-active')) {
					$btn.addClass('is-active');
				}
				var $temp_img = $img.clone();
				$('body').append($temp_img);
				$temp_img.css({
					position: 'absolute',
					'z-index': 10001,
					width: $img.width(),
					height: $img.height(),
					left: $img.offset().left,
					top: $img.offset().top
				}).animate({
					left: $('.js-basket-field').offset().left,
					top: $('.js-basket-field').offset().top,
					opacity: 0
				}, 600, function() {
					$temp_img.remove();

					$('.js-basket-field').html(data);
                    let resizeEvent = window.document.createEvent('UIEvents');
                    resizeEvent.initUIEvent('resize', true, false, window, 0);
                    window.dispatchEvent(resizeEvent);
					/*setTimeout(function(){
					 popupOpen('#basket-success-window');
					 }, 300);*/
				});

			}
		});

	});

    $('.js-catalog-view-grid').click(function(e){
        e.preventDefault();
        $('.js-catalog-item').removeClass('catalog__item_list catalog__item_hrz');
        $('.js-catalog .js-cart').removeClass('cart_list cart_hrz');

        $('.js-catalog-view-hrz').removeClass('is-active');
        $('.js-catalog-view-list').removeClass('is-active');
        $('.js-catalog-view-grid').addClass('is-active');
    });

    $('.js-catalog-view-hrz').click(function(e){
        e.preventDefault();
        $('.js-catalog-item').removeClass('catalog__item_list');
        $('.js-catalog-item').addClass('catalog__item_hrz');

        $('.js-catalog .js-cart').removeClass('cart_list');
        $('.js-catalog .js-cart').addClass('cart_hrz');

        $('.js-catalog-view-grid').removeClass('is-active');
        $('.js-catalog-view-list').removeClass('is-active');
        $('.js-catalog-view-hrz').addClass('is-active');
    });

    $('.js-catalog-view-list').click(function(e){
        e.preventDefault();
        $('.js-catalog-item').removeClass('catalog__item_hrz');
        $('.js-catalog-item').addClass('catalog__item_list');

        $('.js-catalog .js-cart').removeClass('cart_hrz');
        $('.js-catalog .js-cart').addClass('cart_list');

        $('.js-catalog-view-hrz').removeClass('is-active');
        $('.js-catalog-view-grid').removeClass('is-active');
        $('.js-catalog-view-list').addClass('is-active');
    });

    /*$('.js-hits-slider').on('click', '.js-cart', function(e){
        if(!$(e.target).hasClass('js-cart-basket-btn')){
            e.preventDefault();
            e.stopPropagation();

            var cart = $(this).find('.cart__inner');
            var cart_prev = $(this).closest('.hits__slider-item').prev('.hits__slider-item').find('.cart__inner');
            var cart_next = $(this).closest('.hits__slider-item').next('.hits__slider-item').find('.cart__inner');

            var hit_1 = $('.hits__main-item').eq(0).find('.js-cart');
            var hit_2 = $('.hits__main-item').eq(1).find('.js-cart');
            var hit_3 = $('.hits__main-item').eq(2).find('.js-cart');

            hit_1.empty().hide();
            hit_2.empty().hide();
            hit_3.empty().hide();

            cart_prev.clone().appendTo(hit_1);
            cart.clone().appendTo(hit_2);
            cart_next.clone().appendTo(hit_3);

            hit_1.fadeIn();
            hit_2.fadeIn();
            hit_3.fadeIn();
        }
    });*/

    $('.actions__item:last-child').mouseenter(function(){
        if(!isMobile()){
            $(this).closest('.actions').addClass('is-active');
        }
    });

    $('.actions__item:last-child').mouseleave(function(e){
        if(!isMobile()){
            if(!$(e.relatedTarget).hasClass('actions__overlay') && $(e.relatedTarget).parents('.actions__overlay').length == 0){
                $(this).closest('.actions').removeClass('is-active');
            }
        }
    });

    $('.actions__overlay').mouseleave(function(e){
        if(!isMobile()){
            if(!$(e.relatedTarget).hasClass('actions__overlay') && $(e.relatedTarget).parents('.actions__overlay').length == 0){
                $(this).closest('.actions').removeClass('is-active');
            }
        }
    });

    $('.js-top-block-target').click(function(e){
        e.preventDefault();
        $('.js-top-block').addClass('is-open');
        $('html').addClass('is-lock');
    });

    $('.js-top-block-close').click(function(e){
        e.preventDefault();
        $('.js-top-block').removeClass('is-open');
        $('html').removeClass('is-lock');
    });

    /* FILTER */

    $('.js-top-link').on('click', function(e) {
        e.preventDefault();
        $('html,body').animate({scrollTop: 0}, 700);
    });

    $('.js-expand-link').click(function(e){
        e.preventDefault();

        var $btn = $(this),
        text = $btn.text(),
        alt_text = $btn.data('alt-text');
        $btn.text(alt_text).data('alt-text', text);

        var $block = $($(this).data('expand-id')),
        default_height;

        if(!$block.hasClass('is-open')){
            default_height = $block.height();
            $block.css({'height': 'auto'});
            var block_height = $block.height();
            $block.css({'height': default_height}).data('default-height', default_height);
            $block.addClass('is-open').stop(true,false).animate({'height': block_height}, 300, function(){
                $block.css({'height': 'auto'});
                if($block.closest('.js-product').length){
                    $('.js-product-image-field').trigger('sticky_kit:recalc');
                }
            });
        } else {
            default_height = $block.data('default-height');
            $block.removeClass('is-open').animate({'height': default_height}, 300, function(){
                if($block.closest('.js-product').length){
                    $('.js-product-image-field').trigger('sticky_kit:recalc');
                }
            });
            if(isMobile()){
                $('html,body').animate({scrollTop: $block.offset().top - $('.header').height()}, 700);
            }else{
                $('html,body').animate({scrollTop: $block.offset().top - $('.js-header-nav').height()}, 700);
            }
        }
    });

	// product.tpl - TODO - подписать что ето и где
    $('.js-product-variants-block-title-link').click(function(e){
        e.preventDefault();
        if($('.js-product-variants-block-content').hasClass('is-open')){
            $(this).removeClass('is-active');
            $('.js-product-variants-block-content').removeClass('is-open');
        }else{
            $(this).addClass('is-active');
            $('.js-product-variants-block-content').addClass('is-open');
        }
        $('.js-product-image-field').trigger('sticky_kit:recalc');
    });

	// product.tpl
    $('.js-comments-more-link').click(function(e){
        e.preventDefault();
        var $btn = $(this),
        text = $btn.text(),
        alt_text = $btn.data('alt-text');
        $btn.text(alt_text).data('alt-text', text);
        if($('.comment_hidden').is(':visible')){
            if(isMobile()){
                $('html,body').animate({scrollTop: $('#comments-section').offset().top - $('.header').height()}, 700);
            }else{
                $('html,body').animate({scrollTop: $('#comments-section').offset().top - $('.js-header-nav').height()}, 700);
            }
        }
        $('.comment_hidden').slideToggle();
    });

	// TODO
    $('.js-target-link').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('href') || $(this).data('href');
        if(isMobile()){
            $('html,body').animate({scrollTop: $(id).offset().top - $('.header').height()}, 700);
        }else{
            $('html,body').animate({scrollTop: $(id).offset().top - $('.js-header-nav').height()}, 700);
        }
    });

	// TODO
    $('.js-order-block-field').click(function(e){
        e.preventDefault();
        if(!$(this).closest('.js-order-block-row').hasClass('is-open')){
            $('.js-order-block-row').removeClass('is-open');
            $(this).closest('.js-order-block-row').addClass('is-open');
            $(this).closest('.js-order-block-row').find('.js-order-block-popup input').eq(0).focus();
        }else{
            $(this).closest('.js-order-block-row').removeClass('is-open');
        }
    });

    $(document).click(function(e){
        if($(e.target).closest('.js-order-block-row').length < 1 && !$(e.target).hasClass('fancybox-close') && $(e.target).closest('.js-add-new-address').length < 1){
            $('.js-order-block-row').removeClass('is-open');
        }
        if($(e.target).closest('.js-order-block-row').length > 0 && $(e.target).is('input')){
            $('.js-order-block-row').removeClass('is-open');
        }
    });

	// TODO
    $('.js-order-block-popup').on('change', 'input.checklist__input', function(){
        $(this).closest('.js-order-block-row').children('.js-order-block-field').addClass('is-fill').html($(this).closest('.checklist__row').find('.checklist__text').html());
        $(this).closest('.js-order-block-row').removeClass('is-open');
    });

    // cart.tpl
    $('input.js-change-delivery').change(function(e) {
    	$('[data-bind-text=total_price]').text($(this).data('total-price'));
    	//var discount = parseInt($(this).data('discount-for-order'));
		//$('.js-discount .value').text($(this).data('discount-for-order'));
    	/*if(discount > 0) {
			//$('.js-discount').show();
		} else {
    		//$('.js-discount').hide();
		}*/

        var payments = $(this).data('payments'),
        paymentMethods = $('.js-payment-methods');

        if(payments.length > 0) {
            paymentMethods.find('.js-closest').addClass('hidden').hide().find('input.js-change-payment');
            $.each( payments , function( index, value ) {
                paymentMethods.find('input[value='+value+'].js-change-payment').closest('.js-closest').removeClass('hidden').show();
            });
            $('.js-payment-methods').find('.js-closest.hidden input.js-change-payment:checked').prop('checked', false).trigger('change');
            $('.js-payment-methods').find('.js-closest.hidden input.js-change-payment').addClass('ignore').prop('disabled', true);
            $('.js-payment-methods').find('.js-closest:not(.hidden) input.js-change-payment').removeClass('ignore').prop('disabled', false).trigger('refresh');
            paymentMethods.show();
        } else {
            paymentMethods.hide();
        }

        var id = parseInt($(this).val()),
			addressRow = $('[name="address"]').closest('.js-order-block-row');
        let cityAreaRow = $('[name="city_area"]').closest('.js-order-block-row');
        let selectCityId = $('.js-city').val();
        if(id === 2) {
			addressRow.hide();
			$('[name="address"]').removeAttr("required");
			$('[name="address"]').attr('prev-val',$('[name="address"]').val());
			$('[name="address"]').val('');
            if (!(!selectCityId)){
			cityAreaRow.show();
            $('[name="city_area"]').attr("required","required");
            }
            else{
                cityAreaRow.hide();
                $('[name="city_area"]').removeAttr("required");
                $('[name="city_area"]').val('');
            }
		} else {
			addressRow.show();
			$('[name="address"]').attr("required","required");
			$('[name="address"]').val($('[name="address"]').attr('prev-val'));
            cityAreaRow.hide();
            $('[name="city_area"]').removeAttr("required");
            $('[name="city_area"]').val('');
		}
    });

	// TODO - жесть
	$('.js-order-block-popup input.checklist__input:not(.js-change-payment):checked').each(function(){
		$(this).change();
	});

    $('input.order-block__field').on('keyup change blur', function(){
        if($(this).val().length){
            $(this).addClass('is-fill');
        }else{
            $(this).removeClass('is-fill');
        }
    });

    $('input.order-block__field').each(function(){
        if($(this).val().length){
            $(this).addClass('is-fill');
        }else{
            $(this).removeClass('is-fill');
        }
    });

    $('.js-add-new-address-field').click(function(e){
        e.preventDefault();
        if(!isMobile()){
            popupOpen('#add-new-address-popup');
        }else{
            $('.js-add-new-address-popup').addClass('is-open');
        }
    });

    $('.js-add-new-address-btn').click(function(e){
        e.preventDefault();
        $('#add-new-address-popup').wrap('<form />');
        if($('#add-new-address-popup input').valid()){
            var address = '';
            $('.js-add-new-address input').each(function(){
                if($(this).val() && $(this).data('preffix')){
                    if(address){
                        address += ', ';
                    }
                    address += $(this).data('preffix') + ' ' + $(this).val();
                }
            });
            var html = '<label class="checklist__row"> <input type="radio" name="delivery_address" class="checklist__input js-styler" value="'+ address +'"> <span class="checklist__text">'+ address +'</span> </label>';
            $('.js-address-checklist').append(html);
            $('.js-address-checklist input').styler().trigger('update');
            $('#add-new-address-popup').unwrap('<form />');

            if(!isMobile()){
                popupClose();
            }else{
                $('.js-add-new-address-popup').removeClass('is-open');
            }
        }
    });

    $('.js-order-block-popup-close').click(function(e){
        e.preventDefault();
        $(this).closest('.js-order-block-row').removeClass('is-open');
    });

    $('.js-add-new-address-popup-close').click(function(e){
        e.preventDefault();
        $(this).closest('.js-add-new-address-popup').removeClass('is-open');
    });

    $('.js-account-data-edit-link').click(function(e){
        e.preventDefault();
		$('.js-account').find('.editable-input').not('[readonly]').prop('disabled', false);
		$(this).hide();
		$('.js-account-save-input, .js-change-password').show();

//        if(!$(this).hasClass('is-active')){
//            $(this).addClass('is-active').text('Сохранить изменения');
//            $('.js-account').find('.editable-input').not('[readonly]').prop('disabled', false);
//        }else{
//            $(this).removeClass('is-active').text('Изменить данные');
//            $('.js-account').find('.editable-input').not('[readonly]').prop('disabled', true);
//        }
    });

    $('.contacts-map-nav__link').click(function(e){
        e.preventDefault();
        if(!$(this).hasClass('is-active')){
            $('.contacts-map-nav__link').removeClass('is-active');
            $(this).addClass('is-active');

            $('.contacts-map').hide();
            $($(this).attr('href')).show();
        }
    });


	// TODO - подписать что ето и где
    $('.js-date-nav-title').click(function(e){
        e.preventDefault();
        if(!$(this).closest('.js-date-nav').hasClass('is-open')){
            $('.js-date-nav').removeClass('is-open');
            $(this).closest('.js-date-nav').addClass('is-open');
        }else{
            $('.js-date-nav').removeClass('is-open');
        }
    });

	// TODO - подписать что ето и где
    $('.js-date-nav-link').click(function(e){
        e.preventDefault();
        $(this).closest('.js-date-nav').find('.js-date-nav-link').removeClass('is-active');
        $(this).addClass('is-active');
        $(this).closest('.js-date-nav').find('.js-date-nav-title').text($(this).text());
        $('.js-date-nav').removeClass('is-open');
    });


	// cart.tpl -  купон в корзине
	$("input[name='coupon_code']").keypress(function(event){
		if(event.keyCode == 13){
			$("input[name='name']").removeAttr('required');
			$("input[name='email']").removeAttr('required');
			document.cart.submit();
		}
	});



	$('.js-subnav-link').click(function(e){
		if(isMobile()){
			e.preventDefault();
			$('.js-subnav-block').addClass('is-open');
			$('html').addClass('is-lock');
		}
	});

    $('.js-subnav-block-close').click(function(e){
        e.preventDefault();
        $('.js-subnav-block').removeClass('is-open');
        $('html').removeClass('is-lock');
    });

    $('.js-search-field-target-btn').click(function(e){
        e.preventDefault();
        $('.js-search-field').addClass('is-open');
        $('html').addClass('is-lock');
    });

    $('.js-search-field-close').click(function(e){
        e.preventDefault();
        $('.js-search-field').removeClass('is-open');
        $('html').removeClass('is-lock');
    });
});

$(document).on('change', '.b-rating__radio', function(e){
	if($(this).is(':checked')){
		$(this).closest('.b-rating').find('.b-rating__field').removeClass('is-active');
		$(this).closest('.b-rating__field').addClass('is-active');
	}
});
$(document).ready(function(){
    $(window).trigger('resize');
});

$(window).load(function(){
    /**
    * Custom Scrollbar
    * @see  http://manos.malihu.gr/jquery-custom-content-scroller/
    */
    $('.js-scrollbar').mCustomScrollbar();

    $('.js-scrollbar-x').mCustomScrollbar({
        axis: "x"
    });

    $('.js-nav').mCustomScrollbar({
        axis: "x",
        scrollInertia: 1000,
        advanced:{
            autoExpandHorizontalScroll: true,
            updateOnContentResize: true
        },
        callbacks:{
            whileScrolling:function(){
                if(getNavScroll() > 10){
                    $('.js-nav-left').show();
                } else {
                    $('.js-nav-left').hide();
                }

                if(getNavScroll() + $('.js-nav').outerWidth() < $('.js-nav-list').outerWidth() - 10){
                    $('.js-nav-right').show();
                } else {
                    $('.js-nav-right').hide();
                }
            }
        }
    });

    if($('.nav__link.is-active').length){
        var navActiveItem = $('.nav__link.is-active');
        var activeLeftOffset = navActiveItem.offset().left - $('.js-nav-list').offset().left;
        var activewidth = navActiveItem.outerWidth();
        var leftScroll = activeLeftOffset + activewidth / 2 - $('.js-nav').outerWidth() / 2;

        if(leftScroll > 0){
            setNavScroll(leftScroll);
        }
    }

    setTimeout(function(){
        if(getNavScroll() > 0){
            $('.js-nav-left').show();
        }

        if(getNavScroll() + $('.js-nav').outerWidth() < $('.js-nav-list').outerWidth()){
            $('.js-nav-right').show();
        }
    },100);

    var navInterval;

    $('.js-nav-right').mouseenter(function(){
        navInterval = setInterval(function(){
            setNavScroll(getNavScroll() + 3);
            if(getNavScroll() + $('.js-nav').outerWidth() >= $('.js-nav-list').outerWidth()){
                $('.js-nav-right').fadeOut();
                clearInterval(navInterval);
            }

            if(getNavScroll() > 0){
                $('.js-nav-left').fadeIn();
            }
        }, 10);
    });

    $('.js-nav-right').mouseleave(function(){
        clearInterval(navInterval);
    });

    $('.js-nav-left').mouseenter(function(){
        navInterval = setInterval(function(){
            setNavScroll(getNavScroll() - 3);
            if(getNavScroll() <= 0){
                $('.js-nav-left').fadeOut();
                clearInterval(navInterval);
            }

            if(getNavScroll() + $('.js-nav').outerWidth() < $('.js-nav-list').outerWidth()){
                $('.js-nav-right').fadeIn();
            }
        }, 10);
    });

    $('.js-nav-left').mouseleave(function(){
        clearInterval(navInterval);
    });
	if ($('.js-timedatepicker').length > 0){
		var _d = new Date(),
			//currentHours = 12,//_d.getHours(),
			start = new Date(_d.getFullYear(), _d.getMonth(), ((currentHours < 19) ? _d.getDate() : _d.getDate() +1), Math.ceil((currentHours+1)/2)*2, 0),
			prevDay;
		currentHours = currentHours || _d.getHours();
if(currentHours>=22){
            start = new Date(_d.getFullYear(), _d.getMonth(),  _d.getDate() , Math.ceil((currentHours+1)/2)*2, 0)
        }
		$('.js-timedatepicker').datepicker({
            autoClose: true,
			timepicker: false,
			startDate: start,
			minDate: start,
			minMinutes:0,
			maxMinutes:0,
			hoursStep: 4,
			hourStep: 4,
			minutesStep: 1,
			onSelect: function(fd, d, picker) {
				if (!d) return;
				$('.js-time option').prop('selected', false);
				var DeliveryID = $('input[name="delivery_id"]:checked').val();
				var day = d.getDay(),
					today = (d.getDay() === _d.getDay()),
					jsTime = [];//[10, 12, 15, 17, 19, 21];
				/*
                    10 => '10:00 - 12:00',
                    12 => '12:00 - 15:00',
                    15 => '15:00 - 17:00',
                    17 => '17:00 - 19:00',
                    19 => '19:00 - 21:00',
                    20 => '19:00 - 20:00',
                    21 => '21:00 - 23:00'
                * */
				if(today){
					if(10 > currentHours){
						jsTime = [10];
					} else if(10 <= currentHours && currentHours <= 12){
						jsTime = [10, 12];
						// 15-17, 17-19, 19-21, 21-23
					} else if(12 <= currentHours && currentHours <= 14) {
						// Для заказа с 12-15 доступна доставка 17-19, 19-21, 21-23
						jsTime = [10, 12, 15];
					} else if(15 <= currentHours && currentHours <= 16) {
						// Для заказа с 15-17 доступна доставка с 19-21, 21-23
						jsTime = [10, 12, 15, 17];
					} else if(17 <= currentHours && currentHours <= 18) {
						console.log('Для заказа с 17-19 доступна доставка с 21-23');
						// Для заказа с 17-19 доступна доставка с 21-23
						jsTime = [10, 12, 15, 17, 19];
					}

					if(jsTime){
						for (var i = 0; i < jsTime.length; i++) {
							$('.js-time option[data-key="'+jsTime[i]+'"]').prop('disabled', true);
						}
					}

				} else {
					$('.js-time option').prop('disabled', false);
				}
				if (DeliveryID==2){ // выходные дни на складе
                    $('select.js-time option[data-key="21"]').attr('disabled','disabled');
                    if (day==0||day==6){
                        $('select.js-time option[data-key="19"]').attr('disabled','disabled');
                        if(currentHours <= 16) { $('select.js-time option[data-key="20"]').removeAttr('disabled');}
                    }
                    else{
                        if(currentHours <= 16) { $('select.js-time option[data-key="19"]').removeAttr('disabled');}
                        $('select.js-time option[data-key="20"]').attr('disabled','disabled');
                    }
                }
                else{
                    if(currentHours <= 18) { $('select.js-time option[data-key="21"]').removeAttr('disabled');}
                    if(currentHours <= 16) {$('select.js-time option[data-key="19"]').removeAttr('disabled');}
                    $('select.js-time option[data-key="20"]').attr('disabled','disabled');
                }

/*
				// если сегодня, то только
				if(d.getDay() ==  _d.getDay()){
					console.log(d.getHours());
					if(d.getHours() < 19) {
						for (var i = 0; i < _d.getHours(); i++) {
							$('.js-time option[data-key="'+i+'"]').prop('disabled', true);
						}
					} else {
						for (var i = 0; i < 21; i++) {
							$('.js-time option[data-key="'+i+'"]').prop('disabled', true);
						}
					}


				} else {
					$('.js-time option').prop('disabled', false);

				}*/
				$('.js-time option:not(:disabled):eq(0)').prop('selected', true);

				if (prevDay != undefined && prevDay == day) return;
					prevDay = day;


                if (!date_sale_get()) {HappyHours();}
			}
		});
		$('.js-time').on('change', function () {

			if($(this).val().length > 0){
				$(this).addClass('is-fill');
			} else {
				$(this).removeClass('is-fill');
			}
            if (!date_sale_get()) {HappyHours();}
		});
	}
	$("form[name='cart']").submit(renderMesCity);
	$("form[name='cart']").submit(phoneCheckCode);
});

$(document).on("change",'input[name="delivery_id"]',function(){
    $('.js-timedatepicker').val("");
    if (!date_sale_get()) {HappyHours();}
	nextSalePersentText();
});
let DiscountStep = $(".get-discount a").data('procent');
let DiscountStepNeed = $(".get-discount a").data('need-coast');

let DiscountStepWeek = $(".get-discount a").data('procent-week');
let DiscountStepNeedWeek = $(".get-discount a").data('need-coast-week');
function HappyHours(){
    let selCity = $('.js-city');
    let selectCity = selCity.val();
	let DeliveryID = $('input[name="delivery_id"]:checked').val();
    if ((!selectCity || selectCity==0) && DeliveryID == 1) {
        dinamicPriceDefault();
        if (DiscountStep <= 5){
			nextSalePersentText();
			return false;
		}
        var str = $(".js-timedatepicker").val(),
            parts = str.split('.'),
            year = parseInt(parts[2], 10),
            month = parseInt(parts[1], 10) - 1, // NB: month is zero-based!
            day = parseInt(parts[0], 10),
            date = new Date(year, month, day);

        //Выбранный день и дата
        var DayWeek = date.getDay();
        var CurrentHour = $('.js-time').val();

        if (DayWeek >= 1 && DayWeek <= 4 && (CurrentHour == '10:00 - 12:00' || CurrentHour == '12:00 - 15:00') && DeliveryID == 1) {
            var Discount = $("input[name='discount_hh_week']").val();
            var Price = $("input[name='price_hh_week']").val();
            if (Discount==0){
				$('.js-discount .value').text(Discount + " руб");
			}
            else{
				$('.js-discount .value').text('-'+Discount + " руб");
			}
            $(".discount-cart-info.delivery-row").find('.order-block__header-description').html(Price + " руб");
            $(".discount-cart-info.delivery-row").find('.order-block__header-title b').html("(-10%)");
            dinamicPriceSaleWeek('price_hh_week');
            $('[data-bind-text=total_price]').text(Price + " руб");
            $('.get-discount a').text('Получить скидку 20%');
            $('.get-discount a').attr('data-procent', DiscountStepWeek);
            $('.get-discount a').attr('data-need-coast', DiscountStepNeedWeek);
            //$('.get-discount a').show();
            $('.line-sale-text .percent').text('20%');
            $('.line-sale-text .summ').text(DiscountStepNeedWeek);
            console.log(Price);
			if (DiscountStepNeedWeek) {$('.line-sale-text').show();}else{$('.line-sale-text').hide();}
        } else {
            if ((DayWeek == 5 || DayWeek == 6 || DayWeek == 0) && DeliveryID == 1) {
                var Discount = $("input[name='discount_hh_ends']").val();
                var Price = $("input[name='price_hh_ends']").val();

                $(".discount-cart-info.delivery-row").find('.order-block__header-description').html(Price + " руб");
                $(".discount-cart-info.delivery-row").find('.order-block__header-title b').html("(-20%)");
                dinamicPriceSaleWeek('price_hh_ends');
                $('[data-bind-text=total_price]').text(Price + " руб");
				if (Discount==0) {
					$('.js-discount .value').text(Discount + " руб");
				}else{
					$('.js-discount .value').text('-' + Discount + " руб");
				}
                //$('.get-discount a').hide();
				$('.line-sale-text').hide();
            } else {
                $('.get-discount a').text('Получить скидку ' + DiscountStep + '%');

                $('.get-discount a').attr('data-procent', DiscountStep);
                $('.get-discount a').attr('data-need-coast', DiscountStepNeed);
                //$('.get-discount a').show();

				$('.line-sale-text .percent').text(DiscountStep + '%');
				$('.line-sale-text .summ').text(DiscountStepNeed);
				if (DiscountStepNeed) {$('.line-sale-text').show();}else{$('.line-sale-text').hide();}

                var Price = $('input[name="delivery_id"]:checked').data('total-price');
                var Precent = $('input[name="delivery_id"]:checked').data('percent');
                /*if(!Price||!Precent){
                    Price = $('input[name="delivery_id"]:first-child').data('total-price');
                     Precent = $('input[name="delivery_id"]:first-child').data('percent');
                }*/
                $('[data-bind-text=total_price]').text(Price);
                /*var discount = parseInt($('input[name="delivery_id"]:checked').data('discount-for-order'));
                $('.js-discount .value').text($('input[name="delivery_id"]:checked').data('discount-for-order'));*/
                if (DeliveryID == 1) {
                    $(".discount-cart-info.delivery-row").find('.order-block__header-description').html(Price);
                    $(".discount-cart-info.delivery-row").find('.order-block__header-title b').html("(-" + Precent + "%)");
                }
            }
        }
    }
    else{
        //$('.get-discount a').hide();
		//$('.line-sale-text').hide();
        setPriceCity();
    }
}

function date_sale_get() {
    let str =  $(".js-timedatepicker").val(),
        parts = str.split('.'),
        year = parseInt(parts[2], 10),
        month = parseInt(parts[1], 10) - 1, // NB: month is zero-based!
        day = parseInt(parts[0], 10);
    let DeliveryID = $('input[name="delivery_id"]:checked').val();
    let temp_sale = date_sale[DeliveryID];
    let index;
    let date_deliver = false;
    if (DeliveryID==1){
    for(index = 0; index<temp_sale.length; ++index){
        if (temp_sale[index][1] == year && temp_sale[index][2] == month && temp_sale[index][3] == day){
            date_deliver = true;
            break;
        }
    }
    if (date_deliver){
        $(".discount-cart-info.delivery-row").find('.order-block__header-description').html(temp_sale[index][5]+" руб");
        $(".discount-cart-info.delivery-row").find('.order-block__header-title b').html("(-"+temp_sale[index][0]+"%)");
        $(".order-block__price").html(temp_sale[index][5]+" руб");
        if (temp_sale[index][4]==0){
       		$(".js-discount .value").text((temp_sale[index][4])+' руб');}
        else {$(".js-discount .value").text('-'+(temp_sale[index][4])+' руб');}
        let monthNormalize = month+1;
        dinamicPriceSaleDate(''+year+''+monthNormalize+''+day);
		$('.line-sale-text').hide();
        return true;
    }
    else{
        $(".discount-cart-info.delivery-row").find('.order-block__header-description').html($('input[name="delivery_id"][value="1"]').attr('data-total-price'));
        $(".order-block__price").html($('input[name="delivery_id"][value="1"]').attr('data-total-price'));
		if ($('input[name="delivery_id"][value="1"]').attr('data-discount-for-order')==0){
			$(".js-discount .value").text($('input[name="delivery_id"][value="1"]').attr('data-discount-for-order'));}
		else{
			$(".js-discount .value").text('-'+$('input[name="delivery_id"][value="1"]').attr('data-discount-for-order'));}
		let tempPercent = $('.data-id-deliver-1 input.js-change-delivery').attr('data-percent');
		if (tempPercent==0) {$('.data-id-deliver-1').find('.order-block__header-title b').html('');}
		else{$('.data-id-deliver-1').find('.order-block__header-title b').html("(-"+tempPercent+"%)");}
		nextSalePersentText();
    };
    };
    return false;
}
$('.js-city').on('change', function () {
    let selCity = $('.js-city');
    let selectCity = selCity.val();
    if (!selectCity){
        $('.basket__aside .order-block__header').slideUp();
    }else {
        $('.basket__aside .order-block__header').slideDown();
    }
    if (!selectCity || selectCity==0){
        showDeliveryMetod(1);
        showDeliveryMetod(2);
        $("input.js-change-delivery[value='1']").prop('checked', true).trigger('change');
        $("input.js-change-delivery[value='2']").parent().removeClass('checked');
		nextSalePersentText();
    }
    else{
        let flagDeliv=false;
        if ($('.js-city option:selected').attr('data-active-deliver-1')=='1'){
            showDeliveryMetod(1);
            $("input.js-change-delivery[value='1']").prop('checked', true).trigger('change');
            $("input.js-change-delivery[value='2']").parent().removeClass('checked');
        }
        else{
            hideDeliveryMetod(1);
            flagDeliv=true;
        }
        if ($('.js-city option:selected').attr('data-active-deliver-2')=='1'){
            showDeliveryMetod(2);
            if (flagDeliv){
                $("input.js-change-delivery[value='2']").prop('checked', true).trigger('change');
                $("input.js-change-delivery[value='1']").parent().removeClass('checked');
            }
        }
        else {
            hideDeliveryMetod(2);
        }
        renderMesCity();
        $('.line-sale-text').hide();
    }
    showCityArea(selectCity);
    setPriceCity();
});

function hideDeliveryMetod(id) {
    $('.checklist__row.data-id-deliver-'+id).hide();
}
function showDeliveryMetod(id) {
    $('.checklist__row.data-id-deliver-'+id).show();
}

function showCityArea(id) {
    $('.city_area option').prop('selected', false);
    $('.city_area option').prop('disabled', true);
    $('.city_area option:first-child').prop('disabled', false);
    if (id || id == '0'){
        $(".city_area option[data-id-city='"+id+"']").prop('disabled', false);
    }
    if ($(".city_area option[data-id-city='"+id+"']").length==1){
		$(".city_area option[data-id-city='"+id+"']").prop('selected', true);
		$(".city_area_text").text($(".city_area option[data-id-city='"+id+"']").text());
		$(".city_area").hide();
		$(".city_area_text").show();
	}
    else{
		$(".city_area_text").text('');
		$(".city_area_text").hide();
		$(".city_area").show();
	}
}
function renderMesCity() {
    let selectCityData = $('.js-city option:selected');
    let delivIdSel = $("input[name='delivery_id']:checked").val();
    if (Number(selectCityData.attr('data-city-min-'+ delivIdSel))>Number($("input[name='delivery_id']:checked").attr('data-price-sum'))){
        showMessCity(selectCityData.attr('data-city-min-'+ delivIdSel), selectCityData.text());
        return false;
    }
    return true;
}

function showMessCity(sum,cityname) {
    ShowMessage('<div class="need-coast">Необходимая сумма заказа для доставки в город '+cityname+' '+sum+' руб.' + '</div>');
}

function setPriceCity() {
    let selCity = $('.js-city');
    let selectCity = selCity.val();
    if (!selectCity || selectCity==0){
        let tempTotalPrice = $('.data-id-deliver-1 input.js-change-delivery').attr('data-total-price');
        $('.data-id-deliver-1').find('.order-block__header-description').html(tempTotalPrice);
		let tempPercent = $('.data-id-deliver-1 input.js-change-delivery').attr('data-percent');
        if (tempPercent==0) {$('.data-id-deliver-1').find('.order-block__header-title b').html('');}
        else{$('.data-id-deliver-1').find('.order-block__header-title b').html("(-"+tempPercent+"%)");}
        let tempPercent_2 = $('.data-id-deliver-2 input.js-change-delivery').attr('data-percent');
        let tempTotalPrice_2 = $('.data-id-deliver-2 input.js-change-delivery').attr('data-total-price');
        $('.data-id-deliver-2').find('.order-block__header-description').html(tempTotalPrice_2);
        if (tempPercent_2==0){	$('.data-id-deliver-2').find('.order-block__header-title b').html("");	}
        else{$('.data-id-deliver-2').find('.order-block__header-title b').html("(-"+tempPercent_2+"%)"); }
		//$('.data-id-deliver-2').find('.order-block__header-title b').html("");
        $(".order-block__price").html($('input[name="delivery_id"]:checked').attr('data-total-price'));
        dinamicPriceDefault();
    }
    else{
        if($('.js-city option:selected').attr('data-active-deliver-1')=='1'){
            let tempPercent = $('.data-id-deliver-1 input.js-change-delivery').attr('data-city-percent-'+selectCity);
            let tempTotalPrice = $('.data-id-deliver-1 input.js-change-delivery').attr('data-city-total_price-'+selectCity);
            $('.data-id-deliver-1').find('.order-block__header-description').html(tempTotalPrice);
            if (!!tempPercent) $('.data-id-deliver-1').find('.order-block__header-title b').html("(-"+tempPercent+"%)");
        };
        if($('.js-city option:selected').attr('data-active-deliver-2')=='1'){
            let tempPercent = $('.data-id-deliver-2 input.js-change-delivery').attr('data-city-percent-'+selectCity);
            let tempTotalPrice = $('.data-id-deliver-2 input.js-change-delivery').attr('data-city-total_price-'+selectCity);
            $('.data-id-deliver-2').find('.order-block__header-description').html(tempTotalPrice);
            if (!!tempPercent && tempPercent!=0) {
            	$('.data-id-deliver-2').find('.order-block__header-title b').html("(-"+tempPercent+"%)");
			}
            else{
				$('.data-id-deliver-2').find('.order-block__header-title b').html("");
			}
         };
        $(".order-block__price").html($('input[name="delivery_id"]:checked').attr('data-city-total_price-'+selectCity)+' руб');
        dinamicPriceSaleCity();
    }
}

function popupOpen(popupId){
    $.fancybox.open(popupId, {
        padding: 0,
        wrapCSS: 'fancybox-popup',
        afterLoad: function(){
            $('html').addClass('fancybox-margin fancybox-lock');
            $('.fancybox-wrap').appendTo('.fancybox-overlay');
        }
    });
}

function popupClose(){
    $.fancybox.close();
}

function getNavScroll(){
    //return $('.js-nav').scrollLeft();
    return $('.js-nav').offset().left - $('.js-nav-list').offset().left;
}

function setNavScroll(leftScroll){
    //$('.js-nav').scrollLeft(leftScroll);
    $('.js-nav').mCustomScrollbar("scrollTo", leftScroll, {
        scrollInertia: 0,
        timeout: 0
    });
}



function isMobile(){
    return $('.mobile-test').is(':visible');
}

/**
* Русификатор Form Validation
*/
jQuery.extend(jQuery.validator.messages, {
    required: "Обязательное поле",
    remote: "Исправьте это поле",
    email: "Некорректный e-mail",
    url: "Некорректный url",
    date: "Некорректная дата",
    dateISO: "Некорректная дата (ISO)",
    number: "Некорректное число",
    digits: "Cимволы 0-9",
    creditcard: "Некорректный номер карты",
    equalTo: "Не совпадает с предыдущим значением",
    accept: "Недопустимое расширение",
    maxlength: jQuery.validator.format("Максимум {0} символов"),
    minlength: jQuery.validator.format("Минимум {0} символов"),
    rangelength: jQuery.validator.format("Минимум {0} и максимумт {1} символов"),
    range: jQuery.validator.format("Допустимо знаечение между {0} и {1}"),
    max: jQuery.validator.format("Допустимо значение меньше или равное {0}"),
    min: jQuery.validator.format("Допустимо значение больше или равное {0}")
});

function setEqualHeight(columns){
    var tallestcolumn = 0;
    columns.each(
        function(){
            currentHeight = $(this).height();
            if(currentHeight > tallestcolumn){
                tallestcolumn = currentHeight;
            }
        });
    columns.height(tallestcolumn);
}

$(window).resize(function(){
    if($(window).width()>=768){
    $(".catalog .catalog__item").height('auto');
    setEqualHeight($(".catalog .catalog__item"));
    }
});

$(document).on("click",".show-all-price",function(){
    var Object = $(this).parent("div").parent("div").find('.product__variant-table');
    var ToTable = '';
    var Title =  $(this).parent("div").parent("div").find('.cart__title-link').text();
    var ShowName = false;


    Object.find("form").each(function(){
        var Name = $(this).attr('data-variant-name');
        var PricePickup = $(this).attr('data-variant-price-pickup');
        var PriceDelivery = $(this).attr('data-variant-price-delivery');
        ToTable +="<div class='pt-row price'><div>"+Name+"</div><div>"+PricePickup+"</div><div>"+PriceDelivery+"</div></div>";

        if(Name){
            ShowName = true;
        }
    });

    if(ShowName==false){
        var ClassWindow = "no-size";
    }else{
        var ClassWindow = "";
    }


    ShowMessage("" +
        "<div class='price-window "+ClassWindow+"'>" +
        "<div class='pw-title'>"+Title+"</div>" +
        "" +
        "<div class='price-table'>" +
        "<div class='pt-row head'>" +
        "<div>Вес</div>" +
        "<div>Цена руб." +
        "<small>(доставка курьером)</small></div>" +
        "<div>Цена руб." +
        "<small>(самовывоз)</small></div>" +
        "" +
        "</div>" +ToTable+
        "" +
        "" +

        "" +
        "" +
        "</div>" +
        "" +
        "</div>");

});


$(document).on("submit","#form-subscribe",function(){
    var Email = $(this).find("input[name='email']").val();
    if(!ValidEmail(Email)){
        ShowMessage("<div class='need-coast'>Введите корректный E-mail</div>");
    }else{

        dataString = {sendsubscribe:1,email:Email};
        $.ajax({
            type: "POST",
            async:false,
            dataType:'json',
            url: "/ajax/send.php",
            data:dataString,
            cache:false,
            success:function(html)
            {
                ShowMessage("<div class='need-coast'>Вы успешно подписались на нашу рассылку!</div>");
                $("#form-subscribe").find("input[name='email']").val("");
                gtag('event', 'subscribe', {'event_category': 'mailing'});
                yaCounter50329477.reachGoal('subscribe_mailing');
                return true;
            }
        });
    }
    return false;
});
$(document).on("click",".get-discount a",function(){

    var NeedPrice = $(this).attr("data-need-coast");
    var Procent = $(this).attr("data-procent");
    ShowMessage("<div class='need-coast'>Для получения скидки в <b>"+Procent+"%</b> вам необходимо добавить товар на сумму <b>"+NeedPrice+"</b> руб.</div>");
});

$(document).on("click",".chPopUp .close",function(){
    $(".chPopUp").remove();
    $("#overlay").remove();
});

$(document).on("click","#overlay",function(){
    $(".chPopUp").remove();
    $("#overlay").remove();
});

$(window).resize(function(){
    ResizeWindow();
});

function ShowMessage(message)
{
    $("body").append('<div id="chPopUp-Append" class="chPopUp"><div class="close"></div><div class="inner">'+message+'</div></div>');

    var Height = $("#chPopUp-Append").innerHeight();
    var Width = $("#chPopUp-Append").innerWidth();

    var WWidth = $(window).width();
    var WHeight = $(window).height();
    $("#chPopUp-Append").css("top", (WHeight - Height) / 2 + "px");
    $("#chPopUp-Append").css("left", (WWidth - Width) / 2 + "px");
    $("#chPopUp-Append").show();

    if(!$("#overlay").length)
        $("body").append("<div id='overlay'></div>");
}

function CloseWindow()
{
    $(".chPopUp").remove();
    $("#overlay").remove();
}

function CloseWindowLite()
{
    $(".chPopUp").remove();
}

function ResizeWindow()
{
    var Height = $(".chPopUp").innerHeight();
    var Width = $(".chPopUp").innerWidth();

    var WWidth = $(window).width();
    var WHeight = document.body.clientHeight;

    $(".chPopUp").css("top", (WHeight - Height) / 2 + "px");
    $(".chPopUp").css("left", (WWidth - Width) / 2 + "px");
}


function ValidEmail(email, strict)
{
	if ( !strict ) email = email.replace(/^\s+|\s+$/g, '');
	return (/^([a-z0-9_\-]+\.)*[a-z0-9_\-]+@([a-z0-9][a-z0-9\-]*[a-z0-9]\.)+[a-z]{2,4}$/i).test(email);
}

function TimeDeliverMessage(){
timePresent = PeriodTimePresent(currentHours);
timeNext = PeriodTimeNext(currentHours);
if (!timePresent) {return false;}
if (!timeNext) {return false;}
$('#deliver_message .time_do_dev').text(timePresent);
$('#deliver_message .time_to_dev').text(timeNext);
return true;
}
function PeriodTimePresent(time_current){
    if(time_current < 10){ return '10:00';}
   else if(10 <= time_current && time_current <= 12){ return '13:00';}
   else if(12 <= time_current && time_current <= 14) {return '15:00';}
   else if(15 <= time_current && time_current <= 16) {return '17:00';}
   else if(17 <= time_current && time_current <= 18) {return '19:00';}
   return false;
}
function PeriodTimeNext(time_current){
   if(time_current < 10){ return '15:00';}
   else if(10 <= time_current && time_current <= 12){ return '17:00';}
   else if(12 <= time_current && time_current <= 14) {return '19:00';}
   else if(15 <= time_current && time_current <= 16) {return '21:00';}
   else if(17 <= time_current && time_current <= 18) {return '23:00';}
   return false;
}
function TimeDeliverMessageShow(){
    hideMessageDeliver = getCookie('hideMessageDeliver');
    if (hideMessageDeliver && hideMessageDeliver == "Y"){
        return false;
    }
    if (TimeDeliverMessage()){
    $('#deliver_message').show();
    }
    else{return false;}
    return true;
}
function TimeDeliverMessageClose(){
    $('#deliver_message').hide();
    document.cookie = "hideMessageDeliver=Y";
}
function getCookie(name) {
  let matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}
$(document).ready(function() {
    $('#deliver_message .close_deliver').on("click",TimeDeliverMessageClose);
    TimeDeliverMessageShow();
    dinamicPriceDefault();
	nextSalePersentText();
});
jQuery('.slider-brands').slick({
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    speed: 600,
    autoplay:true,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 778,
            settings: {
                autoplay:false
            }
        }
    ]
});

/* изменение цен списка товаров*/
function dinamicPriceDefault() {
    let productsPrice = $('.p-list .dinamic_price');
    let deliveryId = $('input[name="delivery_id"]:checked').val();
    productsPrice.each(function() {
    	let idProd = $( this ).attr('data-id-product');
        $( this ).find('.sale_value').text( product_sale_price[deliveryId][idProd]['base_price']+' руб');
        $( this ).find('.sale-percent').text( 'Моя скидка: -' + product_sale_price[deliveryId][idProd]['percent']+'%');
		dinamicPriceFinaliSumm(this,product_sale_price[deliveryId][idProd]['base_price'],product_sale_price[deliveryId][idProd]['percent']);
    });
	if ($('input[name="delivery_id"]:checked').attr('data-discount-for-order-not')==0) {
		$(".js-discount .value").html($('input[name="delivery_id"]:checked').attr('data-discount-for-order'));}
	else {
		$(".js-discount .value").html('-'+$('input[name="delivery_id"]:checked').attr('data-discount-for-order'));
	}
};
function dinamicPriceSaleCity() {
    let productsPrice = $('.p-list .dinamic_price');
    let deliveryId = $('input[name="delivery_id"]:checked').val();
    let selectCityId = $('.js-city').val();
        if (!(!selectCityId || selectCityId==0)) {
            productsPrice.each(function () {
				let idProd = $(this).attr('data-id-product');
                if (product_sale_price[deliveryId][idProd]['sale']!=1 || product_sale_price[deliveryId][idProd][Number(selectCityId)]['sale_other_not']==1) {
                    $(this).find('.sale_value').text(product_sale_price[deliveryId][idProd][Number(selectCityId)]['value'] + ' руб');
                    $(this).find('.sale-percent').text('Моя скидка: -'+product_sale_price[deliveryId][idProd][Number(selectCityId)]['percent'] + '%');
					dinamicPriceFinaliSumm(this,product_sale_price[deliveryId][idProd][Number(selectCityId)]['value'],product_sale_price[deliveryId][idProd][Number(selectCityId)]['percent']);
                }
                else{
                    $( this ).find('.sale_value').text( product_sale_price[deliveryId][idProd]['base_price']+' руб');
					$( this ).find('.sale-percent').text( 'Моя скидка: -'+product_sale_price[deliveryId][idProd]['percent']+'%');
					dinamicPriceFinaliSumm(this,product_sale_price[deliveryId][idProd]['base_price'],product_sale_price[deliveryId][idProd]['percent']);
                }
            });
			if ($('input[name="delivery_id"]:checked').attr('data-city-sale-'+selectCityId)==0) {
				$(".js-discount .value").html($('input[name="delivery_id"]:checked').attr('data-city-sale-'+selectCityId)+' руб');}
			else {$(".js-discount .value").html('-'+$('input[name="delivery_id"]:checked').attr('data-city-sale-'+selectCityId)+' руб');}
        }
        else {
            dinamicPriceDefault();
        }
};
function dinamicPriceSaleWeek(codePrice){
    let productsPrice = $('.p-list .dinamic_price');
    let selectCityId = $('.js-city').val();
    if (!(!selectCityId || selectCityId==0)) {}
    else {
        productsPrice.each(function () {
        	let idProd = $(this).attr('data-id-product');
            if (product_sale_price[1][idProd]['sale']!=1) {
                $(this).find('.sale_value').text(product_sale_price[1][idProd][codePrice]['value'] + ' руб');
				$(this).find('.sale-percent').text('Моя скидка: -'+product_sale_price[1][idProd][codePrice]['percent'] + '%');
				dinamicPriceFinaliSumm(this,product_sale_price[1][idProd][codePrice]['value'],product_sale_price[1][idProd][codePrice]['percent']);
            }
            else{
                $( this ).find('.sale_value').text( product_sale_price[1][idProd]['base_price']+' руб');
				$( this ).find('.sale-percent').text( 'Моя скидка: -'+product_sale_price[1][idProd]['percent']+'%');
				dinamicPriceFinaliSumm(this,product_sale_price[1][idProd]['base_price'],product_sale_price[1][idProd]['percent']);
            }
        });
    }
};
function dinamicPriceSaleDate(dateSale){
    let productsPrice = $('.p-list .dinamic_price');
    let deliveryId = $('input[name="delivery_id"]:checked').val();
    productsPrice.each(function () {
    	let idProd = $(this).attr('data-id-product');
        if (('date' in product_sale_price[1][idProd])&&(dateSale in product_sale_price[1][idProd]['date'])) {
            $(this).find('.sale_value').text(product_sale_price[deliveryId][idProd]['date'][dateSale]['value'] + ' руб');
            $(this).find('.sale-percent').text('Моя скидка: -'+product_sale_price[deliveryId][idProd]['date'][dateSale]['percent'] + '%');
			dinamicPriceFinaliSumm(this,product_sale_price[deliveryId][idProd]['date'][dateSale]['value'],product_sale_price[deliveryId][idProd]['date'][dateSale]['percent']);
        }else{
            $( this ).find('.sale_value').text( product_sale_price[deliveryId][idProd]['base_price']+' руб');
			$( this ).find('.sale-percent').text( 'Моя скидка: -'+product_sale_price[deliveryId][idProd]['percent']+'%');
			dinamicPriceFinaliSumm(this,product_sale_price[deliveryId][idProd]['base_price'],product_sale_price[deliveryId][idProd]['percent']);
        }
    });
};

function dinamicPriceFinaliSumm(prodElem, valuePrice, valuePercent) {
	let countProd = $(prodElem).find('.js-count-field-val').val();
	let summProd = Math.round((valuePrice * countProd)*100)/100;
	$(prodElem).find('.final-summ').text(summProd+' руб');
	if (valuePercent==0){
		$(prodElem).find('.default-price').removeClass('text-delete');
		$(prodElem).find('.panel-percent').hide();
		$(prodElem).find('.sale-price-product').hide();
	}else{
		$(prodElem).find('.default-price').addClass('text-delete');
		$(prodElem).find('.panel-percent').show();
		$(prodElem).find('.sale-price-product').show();
	}
}

function phoneCheckCode() {
    let mobileNumber = $(".js-input-phone").val();
    if (mobileNumber=='') return false;
    let checkNumberBy = false;
    if (mobileNumber.indexOf('+375 25',0) == 0) checkNumberBy = true;
    if (mobileNumber.indexOf('+375 29',0) == 0) checkNumberBy = true;
    if (mobileNumber.indexOf('+375 33',0) == 0) checkNumberBy = true;
    if (mobileNumber.indexOf('+375 44',0) == 0) checkNumberBy = true;
    if (!checkNumberBy){
        ShowMessage("<div class='need-coast'>Введите корректный номер телефона.<br>На ваш номер будет выслана информация о статусе заказа.</div>");
        return false;
    }
    return true;
}

function nextSalePersentText(){
	let nextPercent = $('input[name="delivery_id"]:checked').attr('data-next-percent');
	let nextPrice = $('input[name="delivery_id"]:checked').attr('data-next-price');
	$('.line-sale-text .percent').text(nextPercent + '%');
	$('.line-sale-text .summ').text(nextPrice);
	if (nextPrice!=0) {$('.line-sale-text').show();}else {$('.line-sale-text').hide();}
}

/* функции оцистки поля ввода количества в корзине*/
$('.basket .js-count-field-val').on('focus',inputCountGetValClick);//функция при клике по элементу количества очищает старое значение.
function inputCountGetValClick() {
	$(this).attr('defaultVal',$(this).val());
	$(this).val('');
}
$('.basket .js-count-field-val').on('blur',inputCountSetValClick);
function inputCountSetValClick() {//функция при клике по элементу количества очищает старое значение.
	if (!$(this).val()){
		$(this).val($(this).attr('defaultVal'));
	}
}
$('.basket .js-count-field-val').on('keydown',function(event){
		if (event.key=='Enter'){
			document.cart.submit();
		}
});
/* функции оцистки поля ввода количества в корзине*/
