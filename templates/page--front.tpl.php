<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<meta http-equiv="refresh" content="3;url=https://www.aesseal.com"/>
<link rel="stylesheet" href="/sites/all/libraries/flexslider/flexslider.css" type="text/css">
<script src="/sites/all/libraries/flexslider/jquery.flexslider-min.js"></script>
<script src="/sites/all/themes/aesinternational/js/slider.js"></script>
<script src="/sites/all/themes/aesbs337/js/maintenance-counter.js"></script>

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
						<img src="/sites/all/themes/aesbs337/images/logos/textonlylogo.svg" alt="<?php print t('Home'); ?> " class="textlogo img-adaptive" alt="textlogo"/>
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
						<div class="section-shadow-menu">
						</div>
				</header>

				<div id="name-and-slogan">
					<?php if (!empty($site_name)): ?>
						<h1 id="site-name">
							<div title="<?php print t('Home'); ?>" rel="home">
								<span>
									<?php print $site_name; ?>
								</span>
							</div>
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
							<li>
								<img class="img-responsive" src="/files/fields/field_flex_image/seal-watermark-product.png">
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
	</div>
</div>

<div class="main-container <?php print $container_class; ?>">
  <div class="container-fluid">
		<div class="row">
			<div class="tablet-fix">
				<section id="main-content" class="col-sm-12">
					<div class="clearfix">
						<div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
							<?php if (!empty($tabs)): ?>
								<?php print render($tabs); ?>
							<?php endif; ?>
						</div>
					</div>
					<?php print render($page['content']); ?>
				</section>
			</div>
		</div>
	</div>
</div>


<div id="footer-wrapper">
	<div id="footer">
	 <?php if (!empty($footer)): print $footer; endif; ?>
	</div>
</div>
