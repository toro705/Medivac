<?php

//Defino la URL actual
if(! defined('URL_SECCION')){
  define('URL_SECCION', url(SECCION));
}

include('metas.php');

?>
<!DOCTYPE html>
  <html lang="<?= IDIOMA ?>">
    <head>
      <meta charset="utf-8">

      <title><?= $metas['titulo']?></title>
      <meta name="description"            content="<?= $metas['descripcion'];?>"/>

      <!-- Twitter Card data -->
      <meta name="twitter:card"           content="summary_large_image"/>
      <meta name="twitter:site"           content="@<?= Empresa::$redes['tw'] ?>"/>
      <meta name="twitter:title"          content="<?= $metas['titulo'] ?>" />
      <meta name="twitter:description"    content="<?= $metas['descripcion'];?>" />
      <meta name="twitter:image"          content="<?= $metas['img'] ?>" />

      <!-- Open Graph data -->
      <meta property="og:title"           content="<?= $metas['titulo'] ?>" />
      <meta property="og:description"     content="<?= $metas['descripcion'];?>"/>
      <meta property="og:image"           content="<?= $metas['img']; ?>" />
      <meta property="og:site_name"       content="<?= Empresa::$nombre; ?>"/>
      <meta property="og:url"             content="<?= URL_SECCION; ?>"/>

      <meta name="robots"   content="all">

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />

      <base href="<?= BASE_URL ?>">

      <link rel="canonical" href="<?= URL_SECCION ?>" />
      <?php
      if( count(json_decode(IDIOMA_ENABLED)) > 1 ){
        $dato_url = isset(${SECCION}) ? ${SECCION} : null;
        foreach(json_decode(IDIOMA_ENABLED) AS $lang){
            echo '   <link rel="alternate" hreflang="'.$lang.'" href="'.url(SECCION, $dato_url, $lang).'" />'."\r\n";
        }
      }
      ?>


      <link rel="apple-touch-icon" sizes="72x72" href="/images/favicons/apple-touch-icon.png">
      <link rel="icon" type="image/png" href="/images/favicons/favicon-32x32.png" sizes="32x32">
      <link rel="icon" type="image/png" href="/images/favicons/favicon-16x16.png" sizes="16x16">
      <link rel="manifest" href="/images/favicons/manifest.json">
      <link rel="mask-icon" href="/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="theme-color" content="#ffffff">
      <?php if (SECCION == 'proyecto_resultado') { ?>
        <link href="css/jquery.gridder.min.css" rel="stylesheet">
      <?php } ?>
      <?php
       // Uno y minifico todos los CSS comunes a todas las páginas

      $main_css = $minified->merge( 'css/main.min.css', 'css', array(
              'css/bootstrap.min.css',
              'css/dropdown.min.css',
              'js/jquery.owl.carousel/assets/owl.carousel.css',
              'css/styles-theme.css'
          ));
      echo ' <link rel="stylesheet" href="'.$main_css.'?v='.filemtime(BASE_PATH.$main_css).'" />'."\r\n";?>


      <!--Google Fonts-->
      <link href="https://fonts.googleapis.com/css?family=Biryani:300,400,700,800,900|Archivo+Narrow:700|Roboto:300,400" rel="stylesheet">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>

  <body role="document" class="<?= 's_'.SECCION ?>">

  <!-- GOOGLE ANALYTICS --
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-36852718-7', 'medivac.com.ar');
    ga('send', 'pageview');

</script>
  <!-- GOOGLE ANALYTICS -->

    <header class="cabecera" id="home">
      <nav class="navbar anim-suave">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-3">
              <div class="navbar-header">
                <button class="hamburger hamburger--efecto visible-xs" type="button" aria-label="Menu" aria-controls="cabecera-navbar-collapse" data-toggle="collapse" data-target=".js-navbar-cabecera">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </button>
                <a class="cabecera__logo anim-suave text-left" href="<?=url('home')?>">
                  <img class="img-responsive anim-suave" src="images/logo_nav-principal-cabecera.png" alt="<?=Empresa::$nombre?>">
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-9">
              <div class="navbar-collapse collapse js-navbar-cabecera" id="cabecera-navbar-collapse">
                <nav class="nav-secundaria hidden-xs">
                    <div class="nav-secundaria__redes icono anim-suave">
                      <ul class="list-inline">
                        <li><a target="_blank" href="<?=Empresa::$redes['tw']?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="<?=Empresa::$redes['fb']?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="<?=Empresa::$redes['yt']?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                </nav>
                <div class="clearfix"></div>
                <nav class="nav-principal anim-suave">
                  <ul>
                    <li class="n1"><a href="<?=url('home')?>"><i class="fa fa-home"></i></a></li>
                    <li class="dropdown n2">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">CURSOS Y CAPACITACIONES <i class="fa fa-caret-right hidden-xs" aria-hidden="true"></i></a>
                      <ul class="dropdown-menu">
                        <li>
                            <a href="<?=url('cursos-empresas')?>">
                                <span><i class="icn icn-building"></i></span>
                                <div class="clearfix"></div>                          
                                <span>Empresas</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=url('cursos-salud')?>">
                                <span><i class="icn icn-heart"></i></span> 
                                <div class="clearfix"></div>                         
                                <span>Personal de la Salud</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=url('cursos-general')?>">
                                <span><i class="icn icn-general"></i></span> 
                                <div class="clearfix"></div>                         
                                <span>Público General</span>
                            </a>
                        </li>
                      </ul>
                    </li>
                    <li class="n3"><a href="<?=url('somos')?>">MEDIVAC</a></li>
                    <li class="n4"><a href="<?=url('novedades')?>">NOVEDADES</a></li>
                    <li class="n5"><a href="<?=url('contacto')?>">CONTACTO</a></li>
                  </ul>
                </nav>
                <div class="clearfix"></div>                
                <nav class="nav-secundaria visible-xs">
                    <div class="nav-secundaria__redes icono anim-suave">
                      <ul class="list-inline">
                        <li><a target="_blank" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                </nav>               
              </div>
            </div>
          </div>
        </div>
      </nav>
        <!-- HEADERS -->
        <?php if(SECCION == 'home'){ 
          Plugins::activar('owlCarousel');
          Plugins::activar('enlaces-internos');
          ?>
          <div class="slider-principal">
            <ul class="owl-carousel">
                  <li style="background-image: url(images/slider-principal/1.jpg)">
                    <div class="slider-principal__contenido">
                      <div class="container">
                        <div class="row">
                          <div class="col-xs-12">
                            <div class="slider-principal__texto">
                              <h1>CURSOS DE RCP CERTIFICADOS</h1>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li style="background-image: url(images/slider-principal/2.jpg)">
                    <div class="slider-principal__contenido">
                      <div class="container">
                        <div class="row">
                          <div class="col-xs-12">
                            <div class="slider-principal__texto">
                              <h1>CONTAMOS CON LA EXPERIENCIA</h1>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
            </ul>
              <a class="" href="#index-cursos"><img src="images/chevron-down.png" alt="" class="img-responsive"></a>
          </div>
        <?php }else{
          switch (SECCION) {
            case 'curso': 
              switch ($curso->categoria) {
                case Curso::CAT_PERSONAL_SALUD:
                  $header = 'cursos-salud-curso';
                  break;
                case Curso::CAT_PUBLICO_GRAL:
                  $header = 'cursos-general-curso';
                  break;
                case Curso::CAT_EMPRESA:
                  $header = 'cursos-empresas-curso';
                  break;
                }
              break;
            default:
              $header = SECCION;
              break;
        }

          if($header){?>
            <div id="headerimgs">
              <div class="headerimgs" style="background-image: url(images/cabeceras/<?=$header?>.jpg)">
                <div class="headerimgs__contenido">
                  <div class="container">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="headerimgs__texto">
                          <?=$metas['slider']?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
      <?php } ?>
      <!-- HEADERS -->

    </header>
    <!-- Sección principal -->
    <main id="main" role="main">