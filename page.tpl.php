<div id="wrapper"><div class="container">
	<header class="clearfix">
	
		<div id="owen-logo">
		  <?php if ($logo): ?>
			<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="owen-logo">
			  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
			</a>
		  <?php endif; ?>
		</div>
		
		<div class="site-info clearfix">
		  <?php if ($site_name || $site_slogan): ?>
			<div id="name-and-slogan">
			  <?php if ($site_name): ?>
				<?php if ($title): ?>
				  <div id="site-name"><strong>
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
				  </strong></div>
				<?php else: /* Use h1 when the content title is empty */ ?>
				  <h1 id="site-name">
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
				  </h1>
				<?php endif; ?>
			  <?php endif; ?>

			  <?php if ($site_slogan): ?>
				<div id="site-slogan"><?php print $site_slogan; ?></div>
			  <?php endif; ?>
			</div> <!-- /#name-and-slogan -->
		  <?php endif; ?>

		  <?php print render($page['header']); ?>
		  </div>

	</header>
		  
	<nav>	
		<?php if ($page['navigation']): ?>
			<?php print render($page['navigation']); ?>
		<?php endif; ?>
	</nav>
	
	<?php if ($page['search-form']): ?>
		<?php print render($page['search-form']); ?>
	<?php endif; ?>
</div>

    <div id="messages"><?php print $messages; ?></div>

    <div id="main-wrapper" class="center"><div id="main" class="clearfix">
	
      <article>
        <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </article> <!-- /.section, /#content -->

      <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_first']); ?>
        </div></div> <!-- /.section, /#sidebar-first -->
      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="sidebar-second"><div class="section">
          <?php print render($page['sidebar_second']); ?>
        </div></div> <!-- /.section, /#sidebar-second -->
      <?php endif; ?>

    </div></div> <!-- /#main, /#main-wrapper -->

    <div id="footer"><div class="section">
      <?php print render($page['footer']); ?>
    </div></div> <!-- /.section, /#footer -->

  </div> <!-- /#page, /#page-wrapper -->
