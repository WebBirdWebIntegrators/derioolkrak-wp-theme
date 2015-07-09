<?php get_header(); ?>

<div id="body">
	<div class="b1">
		<div class="cntr">
			<div class="content">
				<?php if ( function_exists('yoast_breadcrumb') ) {
					if( is_front_page() ) {
						yoast_breadcrumb('<p id="breadcrumbs" style="display:none">','</p>');
					} else {
						yoast_breadcrumb('<p id="breadcrumbs">','</p>');
					}
				} ?>
				<h1>Oeps, deze pagina bestaat niet (meer).</h1>
				<p>Af en toe ruimen we ook onze website waardoor deze netjes blijft. We verwijzen je graag door naar onze nette <a href="<?php echo get_home_url(); ?>">homepagina</a>.</p>
			</div>
			<?php if( get_field('field_552fb0b78c6c1') === 'disabled' ) { ?>
			<?php } else { ?>
				<div class="sidebar">
					<?php dynamic_sidebar( 'sidebar1' ); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>