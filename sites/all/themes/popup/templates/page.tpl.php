<section class="content wrapper">
	
	<header>
		<?php print render($page['header']); ?>
		<h1><?php print $site_name;?></h1>
	</header>
	
	<section id="highlighted">
		<?php print render($page['highlighted']); ?>
		<?php print render($page['content']); ?>
		<?php print render($page['app_links']); ?>
	</section>

	<section id="first">
		<?php print render($page['first_section']); ?>
	</section>

	<section id="second">
		<?php print render($page['second_section']); ?>
	</section>

	<section id="third">
		<?php print render($page['third_section']); ?>
	</section>

	<footer>
		<?php print render($page['footer']); ?>
	</footer>
	
</section>