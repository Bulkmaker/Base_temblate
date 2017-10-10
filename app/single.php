<?php get_header();?> 
<? if ( in_category( 'doma-iz-brusa' )) {
	// действия, если пост относится к категории 'pachyderms'
	get_template_part('parts/single-project');
}
elseif ( in_category( array( 'photo', 'otziv', 'info' ) )) {
	// действия, если пост относится к одной из категорий 'Tropical Birds', 'small-mammals'
	get_template_part('parts/single-info');
}
else { 
	get_template_part('parts/content-page');
} ?>
<?php get_footer();?>