<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">
	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" />
	<?php $this->helpers->analytics(); ?>
</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
<?php $this->checkSuspensionHeader(); ?>
	<header>
		<div id="header">
			<div class="row">
				<nav>
					<a href="#" id="pull"><strong>MENU</strong></a>
					<ul>
						<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
						<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="<?php echo URL ?>about#content">ABOUT US</a></li>
						<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services#content">SERVICES</a></li>
						<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>gallery#content">GALLERY</a></li>
						<li <?php $this->helpers->isActiveMenu("testimonials"); ?>><a href="<?php echo URL ?>testimonials#content">TESTIMONIALS</a></li>
						<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact#content">CONTACT US</a></li>
					</ul>
				</nav>
			</div>		
		</div>
	</header>

	<div id="banner">
		<div id="bannerTop">
			<div class="row">
				<a href="<?php echo URL ?>"><img src="./public/images/common/mainLogo.png" alt="Main Logo" class="mainLogo"></a>
				<h3>LINCENSED • BONDED • INSURED</h3>
				<span>High Quality Services at Great Prices!</span>
			</div>
		</div>
		<div id="bannerBot">
			<div class="row">
				<div class="imgBox">
					<img src="public/images/common/bannerBOtImg1.jpg" alt="">
				</div>
				<div class="imgBox">
					<img src="public/images/common/bannerBOtImg2.jpg" alt="">
				</div>
				<div class="imgBox">
					<img src="public/images/common/bannerBOtImg3.jpg" alt="">
				</div>
			</div>
		</div>
	</div>