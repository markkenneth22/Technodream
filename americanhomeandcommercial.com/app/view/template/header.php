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
				<div id="headerTop">
					<a href="<?php echo URL ?>"><img src="./public/images/common/mainLogo.png" alt="Main Logo" class="mainLogo"></a>
					<div class="col-1">
						<p class="email">EMAIL US<span><?php $this->info(["email","mailto"]);?></span></p>
						<p class="phone">CALL US TODAY<span><?php $this->info(["phone","tel"]);?></span></p>
					</div>
				</div>
				<div id="headerBot">
					<div class="container">
						<nav>
							<a href="#" id="pull"><strong>MENU</strong></a>
							<ul>
								<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
								<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="<?php echo URL ?>about#content">ABOUT US</a></li>
								<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services#content">SERVICES</a></li>
								<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>gallery#content">GALLERY</a></li>
								<li <?php $this->helpers->isActiveMenu("reviews"); ?>><a href="<?php echo URL ?>reviews#content">REVIEWS</a></li>
								<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact#content">CONTACT</a></li>
							</ul>
						</nav>
						<div class="socialMedia">
							<a href="<?php $this->info("fb_link"); ?>" target="_blank">f</a>
							<a href="<?php $this->info("gp_link"); ?>" target="_blank">g</a>
							<a href="<?php $this->info("tt_link"); ?>" target="_blank">i</a>
							<a href="<?php $this->info("li_link"); ?>" target="_blank">l</a>
							<a href="<?php $this->info("yt_link"); ?>" target="_blank">x</a>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</header>

	<div id="banner">
		<div class="row">
			<div class="container">
				<h3>WE DO IT RIGHT THE FIRST TIME, ALL THE TIME!</h3>
				<a href="contact#content">Get A Free Quote</a>
			</div>
			<div class="imgBox">
				<img src="public/images/common/bannerBg.png" alt="">
			</div>
		</div>
	</div>