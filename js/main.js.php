<?php
if( extension_loaded( "zlib" ) )
{
    ob_start( "ob_gzhandler" );
}
else
{
    ob_start();
}
header( 'Content-Encoding: gzip' );
header( 'Cache-Control: max-age=2678400' );
header( 'Expires: Sat, 04 Feb 2017 13:49:54 GMT' );
header( 'Last-Modified: Tue, 13 Dec 2016 20:33:52 GMT' );
header( 'Content-type: application/javascript; charset: UTF-8' );
?>
/**
 * Filename: main.js
 * Generated by MagicMin 2017-01-04 at 10:49:54 AM
 */
$(document).ready(function(){function e(a,h){var c=a.length;a.forEach(function(a){var b;"css"==a.tipo&&(b=document.createElement("link"),b.setAttribute("rel","stylesheet"),b.setAttribute("type","text/css"),b.setAttribute("href",a.src));"js"==a.tipo&&(b=document.createElement("script"),b.setAttribute("src",a.src));b.onload=b.onreadystatechange=function(){this.readyState&&"loaded"!=this.readyState&&"complete"!=this.readyState||(c--,0===c&&h())};document.body.appendChild(b)})}$(function(){$('a[href*="#"]:not([href="#"])').filter(":not([data-toggle])").click(function(){if(location.pathname.replace(/^\//,
"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var a=$(this.hash),a=a.length?a:$("[name="+this.hash.slice(1)+"]");if(a.length)return $("html,body").animate({scrollTop:a.offset().top-0},1E3),location.hash=this.hash,!1}})});-1!==window.jsplugins.indexOf("animacion")&&e([{tipo:"css",src:"css/animate.min.css"},{tipo:"js",src:"js/jquery.wow/wow.min.js"}],function(){wow=(new WOW({boxClass:"wow",animateClass:"animated",offset:0,mobile:!0,live:!1})).init()});-1!==window.jsplugins.indexOf("owlCarousel")&&
e([{tipo:"css",src:"js/jquery.owl.carousel/assets/owl.carousel.css"},{tipo:"css",src:"js/jquery.owl.carousel/assets/animate.min.css"},{tipo:"js",src:"js/jquery.owl.carousel/owl.carousel.min.js"}],function(){$(".slider-principal > ul").owlCarousel({autoplay:!0,items:1,loop:!0,slideSpeed:1E3,autoplaySpeed:1E3,singleItem:!0,nav:!1,dots:!0,dragBeforeAnimFinish:!1,mouseDrag:!1,touchDrag:!0});$(".slider-interno").owlCarousel({autoplay:!0,items:1,loop:!0,singleItem:!0,nav:!0,dots:!1,navText:['<div class="slider-interno__controls prev"><i class="fa fa-chevron-left"></i></div>',
'<div class="slider-interno__controls next"><i class="fa fa-chevron-right"></i></div>']});var a=function(){var a=$(".slider-lugares .owl-stage"),c=a.width(),d=0;$(".slider-lugares .owl-item").each(function(){d+=348});d>c&&a.width(d)};$(".slider-lugares").owlCarousel({loop:!0,autoWidth:!0,margin:4,nav:!0,dots:!1,center:!0,navText:['<div class="slider-interno__controls prev"><i class="fa fa-chevron-left"></i></div>','<div class="slider-interno__controls next"><i class="fa fa-chevron-right"></i></div>'],
onInitialized:a,onRefreshed:a})});$(".js-desplegable").mouseover(function(){$(".js-desplegable-contenido").stop().slideDown(500)});$(".js-desplegable").mouseleave(function(){$(".js-desplegable-contenido").stop().slideUp(500)});$(window).scroll(function(){var a=$(".cabecera");20<$(window).scrollTop()?a.addClass("scroll"):a.removeClass("scroll")});var f=$(".cabecera"),g=0;$(window).scroll(function(a){a=$(this).scrollTop();a>g&&400<a?(f.addClass("ocultar"),$(".navbar-collapse").removeClass("in").addClass("collapse"),
$(".hamburger").removeClass("is-active")):f.removeClass("ocultar");g=a});$(document).ready(function(){$(".hamburger").click(function(){$(this).toggleClass("is-active")})})});