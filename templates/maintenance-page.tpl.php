<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="refresh" content="3;url=https://www.aesseal.com"/>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<!--IE7 conditional stylesheet-->
<!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="/sites/all/themes/aesseal_classic/css/ie7-and-down.css" />

<![endif]-->
<?php print $scripts; ?>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<link rel="stylesheet" href="/sites/all/libraries/flexslider/flexslider.css" type="text/css">
<script src="/sites/all/libraries/flexslider/jquery.flexslider-min.js"></script>
<script src="/sites/all/themes/aesinternational/js/slider.js"></script>
<script src="/sites/all/themes/aesbs337/js/maintenance-counter.js"></script>
</head>

<body class="<?php print $classes; ?>">

  <div class="container-fluid bannercontainer">
	   <div class="row bannerimage">
       <div class="row waveupper row-eq-height">
         <div class="col-sm-2 col-xs-2 fullscreen">
           <div class="wavelogo">
             <img class="wavelogo" src="/sites/all/themes/aesbs337/images/logos/logo.svg" alt ="logo"></img>
           </div>
           <img class= "uppercurve" src="/sites/all/themes/aesbs337/images/logos/wave-upper.svg" alt ="uppercurve"></img>
           <?php if ($logo): ?>
             <div class="logo navbar-btn pull-left" title="<?php print t('Home'); ?>">
               <img src="/sites/all/themes/aesbs337/images/logos/textonlylogo.svg" alt="<?php print t('Home'); ?> " class="textlogo img-adaptive" alt="image responsive"/>
             </div>
           <?php endif; ?>
         </div>

         <div class="col-sm-10 col-xs-10 fullscreen">
           <header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">

             <div class="<?php print $container_class; ?>">
               <div class="navbar-header">
               </div>
             </div>

             <div class="navbar-collapse">
               <div class="container-fluid navbar-container">
                 <nav role="navigation">
                   <ul class="menu nav navbar-nav">
                     <li class="first leaf">
                       <a class="btn-disabled disabled" href="#">&nbsp;</a>
                     </li>
                   </nav>
                 </div>
               </div>
               <div class="section-shadow-menu"></div>
             </header>

             <div id="name-and-slogan">
               <?php if (!empty($site_name)): ?>
                 <h1 id="site-name">
                   <div title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></div>
                 </h1>
               <?php endif; ?>

               <?php if (!empty($site_slogan)): ?>
                 <div id="site-slogan"><?php print $site_slogan; ?></div>
               <?php endif; ?>
             </div>
           </div>
         </div>

         <?php if (!empty($header)): ?>
           <div id="header-region">
             <?php print $header; ?>
           </div>
         <?php endif; ?>

         <div class="preface">
          <div class= "flex_gradient front__flex-margin">
            <div class="flex-container">
              <div class="flexslider">
                <ul class="slides">
                  <li><img class="img-responsive" src="/files/fields/field_flex_image/seal-watermark-product.png">
                    <div class="caption-container flex-item-caption">
                      <div class="flex-header">
                        <p>Redirecting.. <span id="counter">3</span></p>
                      </div>
                      <div class="flex-caption">
                        <p><span id="replace">You will now be redirected if your browser will allow it</span> <br /> <a class="display-none white-text" id="ext-link" href="https://www.aesseal.com/en" rel="nofollow">https://www.aesseal.com/en</a></p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
         </div>
       </div>
     </div>

     <div class="row wavelower row-eq-height">
 			<div class="col-sm-9 col-xs-0 fullscreen">
 				<div class="bottom-gap">
 				</div>
 			</div>

 			<div class="col-sm-3 col-xs-12 fullscreen">

 				<img class="curve-down" src = "/sites/all/themes/aesbs337/images/logos/wave-lower.svg" alt ="curve-down"></img>

        <div class="socialmedia text-center">
          <ul>
            <li> <a href="https://twitter.com/AESSEALplc" target="_self" title="AESSEAL Twitter"></a></li>
            <li> <a href="http://www.linkedin.com/company/aesseal" target="_self" title="AESEEAL Linkedin"></a></li>
            <li> <a href="https://www.aesseal.com/en/contact-us" target="_self" title="Contact Us"></a></li>
            <li> <a href="https://www.aesseal.com/en/locations" target="_self" title="Browse all Locations"></a></li>
            <li> <a href="/locations/europe/gb/syk/aesseal-plc-headquarters" target="_self" title="View Global Headquarters"> </a></li>
          </ul>
        </div>
 			</div>
 		</div>

   <div class="container-fluid" class="clearfix">
     <div class="row">
       <div class="col-sm-10 col-lg-8 col-sm-offset-1 col-lg-offset-2">
          <div id="main-squeeze">
            <div id="content">
              <?php if (!empty($title)): ?><h1 class="title" id="page-title"></h1><?php endif; ?>
              <?php if (!empty($messages)): print $messages; endif; ?>
              <div id="main-content" class="clearfix">
                <?php print $content; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>

   <div id="footer-wrapper">
     <div id="footer">
      <?php if (!empty($footer)): print $footer; endif; ?>
     </div>
   </div>

</body>
