'use strict';
var map_point = $('.map-point, .point');
var content_residences = $('.content-info-residences');
var content_offices = $('.content-info-offices');
var point_1 = $('.point-1');
var point_2 = $('.point-2');
var content_shadow = $('.content-shadow');
var point_shadow_1 = $('#point-shadow-1');
var point_shadow_2 = $('#point-shadow-2');
var close_floorplans = $('.close-floorplans');
var title_offices = $('.title-building');
$('#title-residences').html('<h3>Residences Availability</h3>');
$('#title-offices').html('<h3>Offices Availability</h3>');

var app = (function(document, $) {
	var docElem = document.documentElement,
		_userAgentInit = function() {
			docElem.setAttribute('data-useragent', navigator.userAgent);

		},
		_bg_home = function(){
			//background image home resize

			var windowHeight = $(window).height();

			$('.bg-home').css('height', windowHeight);


		},

		_content_availability = function(){

			var heightAvailability = $('#img-availability').height();
			var windowWidth = $(window).width();

			$('.availability .content-right').css('height', heightAvailability);

			if(windowWidth <= 1016){

				$('.content-info-offices .content-right').css('height', heightAvailability);
				$('.content-info-residences .content-right').css('height', heightAvailability);
			}
		},
		_resize = function () {

			// Throttled resize function
				$(window).on('resize', Foundation.utils.throttle(function(e){

					_bg_home();
					_content_availability();

				}, 300));
				//function resize
		},
		_over_livework = function(){

			var _this = $('.over-livework');

			_this.on('mouseenter touchstart', function(){
				$(this).find('.over').addClass('visible');
				if ($('.visible').is(':visible')) {
					$('.visible').on('mouseenter touchstart', function(){
						$('.over').removeClass('visible');
					});
				}
			});
			_this.on('mouseleave touchend', function(){
				$(_this).find('.over').removeClass('visible');
			});
		},
		_effect_project = function(){
			var project_features = $('.project-features');
			var project_home = $('.project-home');
			var content_scroll_project = $('.content-scroll-project');

			$('.view-features').click(function(event) {
				event.preventDefault();
				project_features.addClass('open-features');
				project_home.addClass('close-project');
				content_scroll_project.addClass('view');
			});

			$('.close-features').click(function(event) {
				event.preventDefault();
				project_features.removeClass('open-features');
				project_home.removeClass('close-project');
				content_scroll_project.removeClass('view');

			});
		},
		_link_scroll = function(){

			//scroll down

			$('a[href*=#]').mPageScroll2id();

		},
		_style_scroll = function(){
			$('.content-scroll-project, .selectric-scroll, .list-floorplan').mCustomScrollbar();
		},
		_disclaimer = function (){
			$('#legal, #legal-1').click(function (event) {
				event.preventDefault();
				$('.disclaimer').addClass('visible');
				$('html').css('overflow', 'hidden');
			});
			$('.close-disclaimer').click(function (event) {
				event.preventDefault();
				$('.disclaimer').removeClass('visible');
				$('html').css('overflow', 'auto');
			});
		},
		_slider = function(){
			$('.slider').slick({
			  speed: 1500,
			  fade: true,
			  cssEase: 'ease',
			  autoplay: true
			});
		},
		_style_select = function(){
			$('select').selectric({
				width: '100%',
				disableOnMobile: false,
			});
		},
		_validate = function (){

			$('#contact-form').validate({
				rules: {
					email: {
						required: true,
						email: true
					}
				},
				messages: {
					email: {
						required: 'This field is required.',
						email: 'Format invalid.'
					}
				},
				submitHandler: function(form) {

        var $thank = $('.thank');

				$thank.addClass('open-thank');
				$('html').css('overflow', 'hidden');

				$.ajax({
						type: 'POST',
						url: $('#contact-form').attr('action'),
						data: $('#contact-form').serialize(),
						success: function() {

								$('.close-thank').click(function () {

									$thank.removeClass('open-thank');
									$('html').css('overflow', 'auto');
								});

								form.reset();
								$('select').selectric('refresh');
							}
					});
				}
			});
		},
		_map = function(){

			if($('.map').length){
					_initialize();
			}else if($('.map-neighbor').length){
					_initialize_neighbor();
			}
		},
		_effect_home = function(){

			//menu sticky
				var bg_nav = $('.bg-nav');

			bg_nav.removeClass('menu-sticky');

				$(window).scroll(function() {

						var scroll = $(window).scrollTop();

						if (scroll >= 118) {

							bg_nav.addClass('menu-sticky');

						}else{

							bg_nav.removeClass('menu-sticky');
						}
				});
		},
		_mapping = function(){
			$('img[usemap]').rwdImageMaps();
		},
		////// OVER IMAGE AVAILABILITY ///////////

		_over_mapping = function(){

			map_point.on('mouseenter touchstart', function(){

        var point_availability = $(this).attr('id');

				switch(point_availability){
					case 'map-1':
					case 'point-1':
						point_1.addClass('hover-point');
						point_2.removeClass('hover-point');
						content_shadow.addClass('hover-shadow');
						point_shadow_2.css({overflow: 'hidden',opacity:'0'});
						point_shadow_1.css({overflow: 'visible',opacity:'1', transition: 'all 400ms cubic-bezier(0.785, 0.135, 0.15, 0.86)'});
					break;

					case 'map-2':
					case 'point-2':
						point_2.addClass('hover-point');
						point_1.removeClass('hover-point');
						content_shadow.addClass('hover-shadow');
						point_shadow_1.css({overflow: 'hidden',opacity:'0'});
						point_shadow_2.css({overflow: 'visible',opacity:'1', transition: 'all 400ms cubic-bezier(0.785, 0.135, 0.15, 0.86)'});
					break;
				}
			});
			map_point.on('mouseleave touchend', function(){
				point_2.removeClass('hover-point');
				point_1.removeClass('hover-point');
				content_shadow.removeClass('hover-shadow');
			});
		},
		////// END OVER IMAGE AVAILABILITY ///////////

		//////// LOAD BUILDING AVAILABILITY ////////////
		_load_building = function(){

			var map_point = $('.map-point, .point');

			close_floorplans.on('click', function(event){
				event.preventDefault();
				content_residences.removeClass('visible_building');
				content_offices.removeClass('visible_building');
				$('.see-all').delay(400).removeClass('visible_see_all');
				$('#title-residences').html('<h3>Residences Availability</h3>');
				$('#title-offices').html('<h3>Offices Availability</h3>');
			});

			map_point.on('touchstart mouseenter', function(){

        var point_availability = $(this).attr('id');

				switch(point_availability){
					case 'map-1':
					case 'point-1':
						$(this).on('click', function(){
							content_residences.addClass('visible_building');
						});

					break;

					case 'map-2':
					case 'point-2':
						$(this).on('click', function(){
							content_offices.addClass('visible_building');
						});
					break;
				}
			});
		},
		//////// LOAD BUILDING AVAILABILITY MOBILE////////////
		_load_select_floor = function(){
			// $('.floor-buttons a')[optionSelected]);

			$('.btn-residences, .btn-offices').on('click', function(event){
				event.preventDefault();

				var floor_availability_mobile = $(this).attr('id');
				$('.content-search').addClass('show_search');

				switch(floor_availability_mobile){
					case 'btn-residences':
							$('.list-residences-mobile').addClass('visible_select_floor');
							$('.btn-residences, .btn-offices').addClass('hide_availability_buttons');
					break;

					case 'btn-offices':
							$('.list-offices-mobile').addClass('visible_select_floor');
							$('.btn-residences, .btn-offices').addClass('hide_availability_buttons');
					break;
				}
			});
			$('.search-again').on('click', function(event){
				event.preventDefault();

				wll_init();
				wll_update();

				var lists = $('.list-residences-mobile, .list-offices-mobile');
				var btns = $('.btn-residences, .btn-offices');
				var cont_search = $('.list-floorplan, .list-floorplan-res, .list-floorplan-off, .content-search');
				var floors = $('.view-floorplan, .floorplans-residences-mobile, .floorplans-offices-mobile');
				var availability =  $('.availability');

				lists.removeClass('visible_select_floor').show();
				btns.removeClass('hide_availability_buttons');
				$('.floor').css('opacity', '1');
				cont_search.removeClass('show_search').show();
				floors.removeClass('visible_floorplan');
				availability.removeClass('visible_floorplan');
			});
		},
		_activeFloor = function(piso){
			$('.floor').css('opacity', '0');
			$('text, line').css('opacity', '0');
			$('.floor').filter('.f'+piso).css('opacity', '.65');
			$('.text-'+piso).css('opacity', '1');
		},
		//////////////HOVER MAP BUILDING HOME////////////////
		_hover_building_home = function(){

			var building_point = $('.building-area, .box-info');

			building_point.on('mouseenter touchstart', function(event){
				 event.stopPropagation();
				var data_main_shadow = $(this).attr('data-box-area');
				var data_main_info = $(this).attr('data-box-info');

				$('.building-shadow').each(function(){

					var _this = $(this);
					var data_box_shadow = _this.attr('data-box-shadow');
					if(data_box_shadow === data_main_shadow || data_main_info === data_box_shadow){
						_this.css({overflow: 'hidden',opacity:'0', transition: 'all 400ms cubic-bezier(0.785, 0.135, 0.15, 0.86)'});
						$('.content-shadow-building').addClass('hover-shadow');
						$('.box-info-'+data_box_shadow).addClass('hover-point');
					}
					else{
							_this.css({overflow: 'visible',opacity:'1', transition: 'all 400ms cubic-bezier(0.785, 0.135, 0.15, 0.86)'});
							$('.box-info-'+data_box_shadow).removeClass('hover-point');
					}
				});
			});
			building_point.on('mouseleave touchend', function(event){
			 	event.stopPropagation();
				$('.content-shadow-building').removeClass('hover-shadow');
				$('.box-info').removeClass('hover-point');
			});
		},
		_show_floorplan_offices = function(){
			$('.floor-button-offices').on('click', function(event){
				event.stopPropagation();
				$('.floor-button-offices a')[optionSelected-1]
				var data_building = ($('.floor-button-offices a')[optionSelected-1].dataset['building']);

				$('.item').each(function(){

					var $this = $(this);
					var data_floor = $this.attr('data-floor');

					if(data_floor === data_building){
						$('.floorplans-offices-mobile').addClass('visible_floorplan');
						$this.addClass('isOn').parent().show();
					}
					else{
						$this.removeClass('isOn').parent().hide();
					}
				});
				//cierra each

				//-->cambia el titulo por el piso que se clickeo
				if(data_building === '1'){title_offices.html('<h3>'+data_building+'st Floor Availability</h3>');}
				else if(data_building === '2'){title_offices.html('<h3>'+data_building+'nd Floor Availability</h3>');}
				else if(data_building === '3'){title_offices.html('<h3>'+data_building+'rd Floor Availability</h3>');}
				else{title_offices.html('<h3>'+data_building+'th Floor Availability</h3>');}


				//-->si no hay ninguna disponible mensajito...
				var floor_exist = $('.isOn').size();

				if(floor_exist === 0){
					$('.not-result').html('<h5>Not available</h5>');
					$('.floorplans-offices-mobile').addClass('visible_floorplan').find('list-floorplan').hide();
				}else{
					$('.not-result').html('<h5></h5>');
				}
			});
		},
		_show_floorplan_residences = function(){
			$('.floor-button-residences').on('click', function(event){
				event.stopPropagation();
				$('.floor-button-residences a')[optionSelected-1]
				var data_building = ($('.floor-button-residences a')[optionSelected-1].dataset['building']);

				$('.item').each(function(){

					var $this = $(this);
					var data_floor = $this.attr('data-floor');

					if(data_floor === data_building){
						$('.floorplans-residences-mobile').addClass('visible_floorplan');
						$this.addClass('isOn').parent().show();
					}
					else{
						$this.removeClass('isOn').parent().hide();
					}
				});
				//cierra each

				//-->cambia el titulo por el piso que se clickeo
				if(data_building === '1'){title_offices.html('<h3>'+data_building+'st Floor Availability</h3>');}
				else if(data_building === '2'){title_offices.html('<h3>'+data_building+'nd Floor Availability</h3>');}
				else if(data_building === '3'){title_offices.html('<h3>'+data_building+'rd Floor Availability</h3>');}
				else{title_offices.html('<h3>'+data_building+'th Floor Availability</h3>');}


				//-->si no hay ninguna disponible mensajito...
				var floor_exist = $('.isOn').size();

				if(floor_exist === 0){
					$('.not-result').html('<h5>Not available</h5>');
					$('.floorplans-residences-mobile').addClass('visible_floorplan').find('list-floorplan').hide();
				}else{
					$('.not-result').html('<h5></h5>');
				}
			});
		},
		_show_info_building = function(){

			$('.floor').on('mouseenter touchstart', function(event){
				event.stopPropagation();

				$('.list-floorplan, .mCSB_container').show();

				var data_building = $(this).attr('data-building');
				$('.view-floorplan').removeClass('visible_floorplan').find('.floorplan img').attr('src', '');

				_activeFloor(data_building);

				$('.see-all').addClass('visible_see_all');

				$('.item').each(function(){

					var $this = $(this);
					var data_floor = $this.attr('data-floor');

					if(data_floor === data_building){
						$this.addClass('isOn').parent().show();
						$('.content-info-residences .content-right, .content-info-offices .content-right').addClass('visible-floor');
					}
					else{
						$this.removeClass('isOn').parent().hide();
					}
				});
				//cierra each

				//-->cambia el titulo por el piso que se clickeo
				if(data_building === '1'){title_offices.html('<h3>'+data_building+'st Floor Availability</h3>');}
				else if(data_building === '2'){title_offices.html('<h3>'+data_building+'nd Floor Availability</h3>');}
				else if(data_building === '3'){title_offices.html('<h3>'+data_building+'rd Floor Availability</h3>');}
				else{title_offices.html('<h3>'+data_building+'th Floor Availability</h3>');}


				//-->si no hay ninguna disponible mensajito...
				var floor_exist = $('.isOn').size();

				if(floor_exist === 0){
					$('.not-result').html('<h5>Not available</h5>');
				}else{
					$('.not-result').html('<h5></h5>');
				}
			});

			var width = $(window).width();

			if(width >= 1016){
					//-->click al view all
					$('.see-all').on('click', function(event){
						event.preventDefault();
						$('.content-info-residences .content-right, .content-info-offices .content-right').removeClass('visible-floor');
						$('.list-floorplan, .mCSB_container').show();
						if($('.content-info-offices').hasClass('visible_building')){
							title_offices.delay(400).html('<h3>Offices Availability</h3>');
						}
						if($('.content-info-residences').hasClass('visible_building')){
							title_offices.delay(400).html('<h3>Residences Availability</h3>');
						}
						$('.item').parent().delay(400).show();
						$('.floor, text, line').delay(400).css('opacity', '0');
						$('.not-result').delay(400).html('<h5></h5>');
						$(this).delay(400).removeClass('visible_see_all');
					});
			}else{
				//-->click al view all
				$('.see-all, .close-floor-tablet').on('click', function(event){
					event.preventDefault();
					$('.content-info-residences .content-right, .content-info-offices .content-right').removeClass('visible-floor');
					if($('.content-info-offices').hasClass('visible_building')){
						title_offices.delay(400).html('<h3>Offices Availability</h3>');
					}
					if($('.content-info-residences').hasClass('visible_building')){
						title_offices.delay(400).html('<h3>Residences Availability</h3>');
					}
					$('.floor, text, line').delay(400).css('opacity', '0');
					$('.not-result').delay(400).html('<h5></h5>');
					$(this).delay(400).removeClass('visible_see_all');
				});
			}
		},
		_onclick_list_floor = function (){
		///////callback onclick item list floorplan availability//////////

			//-->click al item
			$('.list-floorplan').on('click','.item', function(){
				var $this = $(this);
				var itemFloor = $this.attr('data-floor');
				var itemUnit = $this.attr('data-unit');
				$('.list-residences-mobile, .list-offices-mobile ').removeClass('visible_select_floor');
				$('.download-mobile').attr({href:'img/availability/floorplan-'+itemFloor+itemUnit+'.png', download: 'img/availability/floorplan-'+itemFloor+itemUnit+'.png'});
				$('.view-floorplan').addClass('visible_floorplan').find('.floorplan img').attr('src', 'img/availability/floorplan-'+itemFloor+itemUnit+'.png');
				$this.parent().parent().hide();

				$.get('img/availability/floorplan-'+itemFloor+itemUnit+'.png')
			    .done(function() {
			        // exists code
								$('.floorplan img').attr('src', 'img/availability/floorplan-'+itemFloor+itemUnit+'.png');
								$('.floorplan img').show();
			    }).fail(function() {
			        // not exists code
							$('.floorplan img').hide();
							$('.not-result').html('<h5>Image Not Available</h5>');
			    });

				if(itemFloor === '1'){title_offices.html('<h3>'+itemFloor+'st Floor Unit '+itemUnit+'</h3>');}
				else if(itemFloor === '2'){title_offices.html('<h3>'+itemFloor+'nd Floor Unit '+itemUnit+'</h3>');}
				else if(itemFloor === '3'){title_offices.html('<h3>'+itemFloor+'rd Floor Unit '+itemUnit+'</h3>');}
				else{title_offices.html('<h3>'+itemFloor+'th Floor Unit'+itemUnit+'</h3>');}
				//activar el piso
				_activeFloor(itemFloor);

				$('.btnBack').addClass('visible_see_all').data('floor',itemFloor);
				$('.see-all').hide().css('opacity','0');
			});
		},
		///////boton back en floorplan availability//////////
		_btn_back_floor_plan = function (){

			$('.btnBack').click(function(){

				var floor = $(this).data('floor');
				var filterExist = $('.isOn').size();

				if(filterExist === 0){
					if($('.content-info-offices').hasClass('visible_building')){
						title_offices.html('<h3>Offices Availability</h3>');
					}
					if($('.content-info-residences').hasClass('visible_building')){
						title_offices.html('<h3>Residences Availability</h3>');
					}
					$('.floor, text, line').delay(400).css('opacity', '0');
				}else{
					if(floor === '1'){title_offices.html('<h3>'+floor+'st Floor Availability</h3>');}
					else if(floor === '2'){title_offices.html('<h3>'+floor+'nd Floor Availability</h3>');}
					else if(floor === '3'){title_offices.html('<h3>'+floor+'rd Floor Availability</h3>');}
					else{title_offices.html('<h3>'+floor+'th Floor Availability</h3>');}
				}

				$('.view-floorplan').removeClass('visible_floorplan').find('.floorplan img').attr('src', '');

				$('.list-floorplan, .mCSB_container').show();
				$('.btnBack').removeClass('visible_see_all');
				$('.see-all').show().css('opacity','1');
				$('.not-result').html('<h5></h5>');
			});
		},
		_load_data_floor = function(){

			$.ajax({
				url: 'js/bd.xml',
				cache: false,
				contentType: 'application/json',
			})
			.done( function( data ) {

				var units_updates = [];
				var XMLDATA = $(data);
				var units = [];
				XMLDATA.find('unit').each(function(){
						var floor = parseInt($(this).find('floor').text());
						var tmpname = $(this).find('name').text();
						var available = $(this).find('available').text();

						var alphanumeric = tmpname.split(/[^a-zA-Z\d:]/g)[0];
						var name = alphanumeric.slice(-1);
						if( !isNaN(parseInt(name)) ){
							name = parseInt(alphanumeric.slice(0,4)).toString();
						}

					var type;
					if(isNaN(parseInt(name))) {
						type = 'residence';
					}else {
						type = 'office';
					}

					if(floor < 10) {
						floor = '0'+floor;
					}
					var group = type+'--'+floor+'--'+name+'--'+available;
					units.push(group);
				});
				units.sort();
				var newContentOff='';
				var newContentRes='';
				for( var i in units){
					units[i] = units[i].split('--');
					var t = units[i][0];
					var f = parseInt(units[i][1]);
					var u = units[i][2];
					var a = units[i][3];

					if(a==='1'){
						if(t === 'office'){
						newContentOff += '<li><a href=\'#\' class=\'item\' data-floor=\''+f+'\' data-unit=\''+u+'\'><i></i><h4>'+f+'th Floor Unit. '+u+'</h4>2,800 SQ. FT.<br><span>View Floorplan</span></a></li>';
						}else{
							newContentRes += '<li><a href=\'#\' class=\'item\' data-floor=\''+f+'\' data-unit=\''+u+'\'><i></i><h4>'+f+'th Floor Unit. '+u+'</h4>2,800 SQ. FT.<br><span>View Floorplan</span></a></li>';
						}
					}
				}

				$('.list-floorplan-off').empty().append(newContentOff);
				$('.list-floorplan-res').empty().append(newContentRes);

			});
		},
		//////// END LOAD FLOORS AND PLANS ////////////
		_init = function() {
			///hide scroll onload
			$('html, body').css({'overflow':'hidden', 'height':'100%'});

			// Preloader
	    $(window).load(function(){

	        $('.preloader').fadeOut('slow',function(){
						$(this).remove();
						$('html, body').css({'overflow':'auto', 'height':'auto'});
					});

	    }),

			$(document).foundation({
				offcanvas : {
					// Sets method in which offcanvas opens.
					// [ move | overlap_single | overlap ]
					open_method: 'overlap',
					// Should the menu close when a menu link is clicked?
					// [ true | false ]
					close_on_click : false
				}
			});
			$(document)
			.on('open.fndtn.offcanvas', '[data-offcanvas]', function() {
				$('html').css('overflow', 'hidden');
			})
			.on('close.fndtn.offcanvas', '[data-offcanvas]', function() {
				$('html').css('overflow', 'auto');
			});

			_userAgentInit();
			_bg_home();
			_resize();
			_over_livework();
			_disclaimer();
			_slider();
			_style_select();
			_style_scroll();
			_link_scroll();
			_effect_project();
			_validate();
			_effect_home();
			_mapping();
			_over_mapping();
			_content_availability();
			_load_building();
			_show_info_building();
			_load_data_floor();
			_map();
			_hover_building_home();
			_onclick_list_floor();
			_btn_back_floor_plan();
			_load_select_floor();
			_show_floorplan_residences();
			_show_floorplan_offices();
		};
	return {
		init: _init
	};
})(document, jQuery);

(function() {
	//var WOW = WOW;
	app.init();
	new WOW().init();
	wll_init();
	wll_update();
})();
