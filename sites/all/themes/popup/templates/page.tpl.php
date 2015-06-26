<section class="content">
	
	<section id="highlighted">
		<div class="wrapper">
		<header>
			<?php print render($page['header']); ?>
			<img class="logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
			<h1><?php print $site_name;?></h1>
		</header>
		<?php print render($page['highlighted']); ?>
		<?php print render($page['app_links']); ?>
		</div>
	</section>
	<div class="wrapper">
	<?php if (!drupal_is_front_page()) { ?>
	<?php print render($page['content']); ?>
	<?php } ?>
	<section id="first">
		<?php print render($page['first_section']); ?>
	</section>

	<section id="second">
		<?php print render($page['second_section']); ?>
	</section>

	<section id="third">
		<?php print render($page['third_section']); ?>
	</section>
	</div>
	<footer>
		<?php print render($page['footer']); ?>
	</footer>
</section>