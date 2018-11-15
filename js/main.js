$(document).ready(function(){

	// Animación de enlaces internos
		$(function() {
		 $('a[href*="#"]:not([href="#"])').filter(':not([data-toggle])').click(function() {
		   if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		     var target = $(this.hash);
		     target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		     if (target.length) {
		       $('html,body').animate({
		         scrollTop: target.offset().top - 100
		       }, 1000);
		       location.hash = this.hash;
		       return false;
		     }
		   }
		 });
		});


	if( cargarPlugin('datepicker') ){
				cargarRecursos([
			{tipo: 'js',  src: 'js/datepicker/bootstrap-datepicker.min.js'}

		], function(){
		
			$('#filtro-cursos .datepicker').datepicker({
			    format: "dd/mm/yyyy",
			    language: "en",
			    orientation: "bottom",
			    autoclose: true,

			});

		});
	}
	// WOW (animación)
	// https://github.com/matthieua/WOW
	if( cargarPlugin('animacion') ){
		cargarRecursos([
			{tipo: 'css',  src: 'css/animate.min.css'},
			{tipo: 'js',  src: 'js/jquery.wow/wow.min.js'},

		], function(){
			wow = new WOW({
				boxClass:     'wow',     
				animateClass: 'animated',
				offset:       0,         
				mobile:       true,      
				live:         false       
		    }).init();
		});
	}


	// Galerías (Owl Carousel)
	// http://owlcarousel2.github.io/OwlCarousel2/
	if( cargarPlugin('owlCarousel') ){
		cargarRecursos([
			{tipo: 'css', src: 'js/jquery.owl.carousel/assets/owl.carousel.css'},
			{tipo: 'css', src: 'js/jquery.owl.carousel/assets/animate.min.css'},
			{tipo: 'js',  src: 'js/jquery.owl.carousel/owl.carousel.min.js'},

		], function(){

			$('.slider-principal > ul').owlCarousel({
				autoplay: true,
				items: 1,
			    loop: true,
			    slideSpeed: 1000,
			    autoplaySpeed: 1000,
		        singleItem: true,
		        nav: false,
				dots: false,
		        dragBeforeAnimFinish: false,
		        mouseDrag: true,
		        touchDrag: false
			});

			$('.slider-interno').owlCarousel({

				autoplay: true,
				items: 1,
			    loop: true,
		        singleItem: true,
		        nav: true,
		        dots: false,
		        mouseDrag: true,
		        touchDrag: false,		        
		        navText: [
	            "<div class=\"slider-interno__controls prev\"><i class=\"fa fa-chevron-left\"></i></div>",
	            "<div class=\"slider-interno__controls next\"><i class=\"fa fa-chevron-right\"></i></div>"
	            ],
			});

			var fixOwl = function(){
			        var $stage = $('.slider-lugares .owl-stage'),
			            stageW = $stage.width(),
			            $el = $('.slider-lugares .owl-item'),
			            elW = 0;
			        $el.each(function() {
			            elW += 348
			            // console.log(elW);
			        });
			        if ( elW > stageW ) {
			            $stage.width( elW );
			            // console.log('activado');
			        };
			    };
			$('.slider-lugares').owlCarousel({
			    loop: true,
			    autoWidth: true,
			    margin: 4,
		        nav: true,
		        dots: false,
		        center: true,	
		        mouseDrag: true,
		        touchDrag: false,
		        navText: [
	            "<div class=\"slider-interno__controls prev\"><i class=\"fa fa-chevron-left\"></i></div>",
	            "<div class=\"slider-interno__controls next\"><i class=\"fa fa-chevron-right\"></i></div>"
	            ],
		        onInitialized: fixOwl,
		        onRefreshed: fixOwl
			});
			// $('.slider-lugares .owl-item').each/
		});
	}
	if( cargarPlugin('slidermarcas') ){
		cargarRecursos([
			{tipo: 'css', src: 'js/jquery.owl.carousel/assets/owl.carousel.css'},
			{tipo: 'css', src: 'js/jquery.owl.carousel/assets/animate.min.css'},
			{tipo: 'js',  src: 'js/jquery.owl.carousel/owl.carousel.min.js'},

		], function(){

			$('.empresas-carousel').owlCarousel({
				autoplay: true,
				items: 6,
			    slideSpeed: 100,
			    autoplaySpeed: 1000,
		        nav: false,
		        loop: true,
				dots: false,
		        dragBeforeAnimFinish: false,
		        mouseDrag: true,
		        slideBy: 6,
		        touchDrag: false,
				responsive: {
			  	 	0: {
			  	  		items: 1,
 			            slideBy: 1
				    },
				    // breakpoint from 480 up
				    511 : {
			  	  		items: 2,
 			            slideBy: 2

				    },
				    // breakpoint from 768 up
				    768 : {
			  	  		items: 3,
				        slideBy: 3,
				    },		 
				    // breakpoint from 768 up
				    990 : {
			  	  		items: 4,
				        slideBy: 4,
				    },		 
				    // breakpoint from 768 up
				    1200 : {
			  	  		items: 5,
				        slideBy: 5,
				    },		 
				    1300 : {	
			  	  		items: 6	
				    }		 
			  	  }
  	  			});

		});
	}

	if( cargarPlugin('slider1') ){
		cargarRecursos([
			{tipo: 'js',  src: 'js/piwi.min.js'},
			{tipo: 'css', src: 'js/jquery.owl.carousel/assets/owl.carousel.css'},
			{tipo: 'css', src: 'js/jquery.owl.carousel/assets/animate.min.css'},
			{tipo: 'js',  src: 'js/jquery.owl.carousel/owl.carousel.min.js'},

		], function(){

			  $(document).ready(function () {
				
				//https://code.google.com/p/pwi/wiki/Configuration
				var fotos = {
				  username: 'cesyteducacion',
				  mode:'album',
				  album:'home',
 	              maxResults: 24,
                  thumbSize: 370,
                  showSlideshow: false,
                  showSlideshowLink: false,
	              showPhotoCaption: false,
	              showPhotoCaptionDate: false,
                  showAlbumPhotoCount: false,
          		  photoCaptionLength: 5,
				  showAlbumDate: false,
				  showAlbumName: false,
	              thumbCss: { 'margin': '0px'},

				  labels: {
						photo:"foto",
	                    photos: "fotos",
                        albums: "",
                        slideshow: "",
                        loading: "",
                        page: "",
                        prev: "",
                        next: "",
                        devider: ""
	              },
				}

				$("#fotos").pwi(fotos);
				
				// forEach () {

				// }
				
			  });
				$(window).on("load", function() {
				    // weave your magic here.
						$('.pwi_container > div').addClass('pwi-slider');
						$('.pwi-slider').owlCarousel({
						    loop: true,
						    autoWidth: true,
						    margin: 0,
						    startPosition: 4,
						    nav: true,
					        dots: false,
					        center: true,	
					        mouseDrag: true,
					        touchDrag: false,
					        navText: [
				            "<div class=\"slider-interno__controls prev\"><img class=\"img-responsive\" src=\"images/chevron-left.png\"></div>",
				            "<div class=\"slider-interno__controls next\"><img class=\"img-responsive\" src=\"images/chevron-right.png\"></div>"
				            ]
						});
						console.log('go');

				});
			});
	}

	if( cargarPlugin('dropdowncustom') ){
		
			function DropDown(el) {
				this.dd = el;
				this.placeholder = this.dd.children('span');
				this.opts = this.dd.find('ul.dropdowncustom > li');
				this.val = '';
				this.index = -1;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						return false;
					});

					obj.opts.on('click',function(){
						var opt = $(this);
						obj.val = opt.text();
						obj.index = opt.index();
						obj.placeholder.text(obj.val);
					});
				},
				getValue : function() {
					return this.val;
				},
				getIndex : function() {
					return this.index;
					console.log(this.index);
				}
			}

			$(function() {

				var dd = new DropDown( $('.wrapper-dropdowncustom') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdowncustom').removeClass('active');
				});

			});

	}

	if( cargarPlugin('dialog') ){
	
		function closeDialog () {
			$('.dialog .dialog__head a').click(function () {
				$(this).parent().parent().parent().fadeOut();
			});
		}
		function openDialog () {

			$('.staff__img').click(function () {
				var member = '.' + $(this).data('member');

				$(member).fadeIn();
				var dialogHeight = $(member).height();
				$(member).css("line-height", dialogHeight + 'px');
			});
		}
		openDialog();
		closeDialog();
	}
	if( cargarPlugin('dialogCurso') ){
	
		function closeDialog () {
			$('.dialogCurso .dialog__head a').click(function () {
				$(this).parent().parent().parent().parent().parent().fadeOut();
			});
		}
		function openDialog () {

			$('.curso-detalle__right__price a').click(function () {

				$('.dialogCursoWrapper').fadeIn();
				var dialogHeight = $('.dialogCursoWrapper').height();
				console.log(dialogHeight);
				$('.dialogCursoWrapper').css("line-height", dialogHeight + 'px');
			});

		}
		openDialog();
		closeDialog();
	}
	//// MAP ///

	// Desplegable de idioma
	$('.js-desplegable').mouseover(function(){
		$('.js-desplegable-contenido').stop().slideDown(500);
	});
	$('.js-desplegable').mouseleave(function(){
		$('.js-desplegable-contenido').stop().slideUp(500);
	});


	/// Scroll en cabecera ///
	// Anima el menú cuando hay scroll
	$( window ).scroll(function(){
		var $cabecera = $('.cabecera');
		if( $(window).scrollTop() > 20){
			$cabecera.addClass('scroll');
		}else{
			$cabecera.removeClass('scroll');
		}
	});
	// Oculta y muestra el menú cuando hay scroll
	var $cabecera = $('.cabecera');
	var previousScroll = 0;
	$(window).scroll(function(event){
	   var scroll = $(this).scrollTop();
	   if (scroll > previousScroll && scroll > 400){
	       $cabecera.addClass('ocultar');
	       //Cierra el menú cuando hay scroll
			$(".navbar-collapse").removeClass("in").addClass("collapse");
			$(".hamburger").removeClass("is-active");
	   } else {
	      $cabecera.removeClass('ocultar');
	   }
	   previousScroll = scroll;
	});


	/// Hamburguesa ///
	$(document).ready(function(){
		$('.hamburger').click(function(){
			$(this).toggleClass('is-active');
		});
	});


	///// Helpers /////

	// Reviso si cargar un plugin JS
	// Cargo solo los plugins listados en el array jsPlugins (El array jsPlugins se genera con PHP).
	function cargarPlugin(plugin){
		return (window.jsplugins.indexOf( plugin ) !== -1);
	}

	// Cargo los recursos dinámicamente y ejecuto el callback
	// (Pueden ser CSS o JS)
	function cargarRecursos(recursos, callback) {
		var total = recursos.length;
		recursos.forEach(function(r){
			var s;
			if(r.tipo == 'css'){
				s = document.createElement( 'link' );
				s.setAttribute('rel','stylesheet');
				s.setAttribute('type','text/css');
				s.setAttribute('href',r.src);
			}
			if(r.tipo == 'js'){
				s = document.createElement( 'script' );
				s.setAttribute( 'src', r.src );
			}
			s.onload = s.onreadystatechange = function() {
			    if(!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
			        total--;
					/*console.log('Cargó ' + r.src);*/
    				if(total === 0){
    					callback();
    				}
			    }
			};
			document.body.appendChild( s );
		});
	}
});