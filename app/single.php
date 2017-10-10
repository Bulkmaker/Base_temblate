<?php get_header();?> 
<div class="container">
	<div class="content">
		<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb(' <p id="breadcrumbs">','</p>'); } ?>
		<h1><?php the_title(); // заголовок поста ?></h1>
		<? if ( in_category( 'doma-iz-brusa' )) {
	// действия, если пост относится к категории 'pachyderms'
			get_template_part('parts/single-project');
		}
		elseif ( in_category( array( 'photo', 'otziv', 'info' ) )) {
	// действия, если пост относится к одной из категорий 'Tropical Birds', 'small-mammals'
			get_template_part('parts/content');
		}
		else { 
			get_template_part('parts/content');
		} ?>
	</div>
</div>
<?php get_footer();?>