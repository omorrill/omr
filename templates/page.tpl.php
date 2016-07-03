<div id="mainwrapper">
	<img src="http://omorrill.com/sites/default/files/snow-covered-mountain-pixabay.jpg" id="bg" alt="">
	
	<?php if (!empty[$header]); ?>
		<header>
		
			<?php if (!empty($site_name)): ?>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
			<?php endif; ?>
		
			<?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
				<nav>
				  <?php if (!empty($primary_nav)): ?>
					<?php print render($primary_nav); ?>
				  <?php endif; ?>
				  <?php if (!empty($secondary_nav)): ?>
					<?php print render($secondary_nav); ?>
				  <?php endif; ?>
				  <?php if (!empty($page['navigation'])): ?>
					<?php print render($page['navigation']); ?>
				  <?php endif; ?>
				</nav>
			<?php endif; ?>
		</header>
	<?php endif; ?>
	<?php print $messages; ?>
	<article>
		<?php if (!empty($title)): ?>
			<h1 class="page-header"><?php print $title; ?></h1>
		<?php endif; ?>
		<?php if (!empty($tabs)): ?>
			<?php print render($tabs); ?>
		<?php endif; ?>
		<?php print render($page['content']); ?>
	</article>
	<footer>
		<?php print render($page['footer']); ?>
	</footer>
</div> <!-- END OF MAINWRAPPER DIV -->