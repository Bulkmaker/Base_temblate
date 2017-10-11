<?php get_header();?> 
<div class="container">
	<div class="content catalog">
		<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb(' <p id="breadcrumbs">','</p>'); } ?>
		<h1><?php single_cat_title(); // название категории ?></h1>
<p><?php // Текст из поля для тегов и категорий
$queried_object = get_queried_object();
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;
the_field('before', $taxonomy . '_' . $term_id); ?></p>
<?php 	if( cat_is_ancestor_of(2, $cat) or is_category(2) ){ // подключаем фильтр в зависимости от категории
	get_template_part('brusfilter'); } ?>
	<div class="row">
		<div class="col-sm-9">
			<div class="row">
				<?php global $query_string; query_posts( $query_string . "&order=ASC" );
				if (have_posts()) : while (have_posts()) : the_post();
					get_template_part('parts/card-project');
				endwhile;
				else: echo '<div class="col"><p class="lead">Нет записей.</p></div>'; endif; ?>	 
			</div>
			<p><?php
			$queried_objec = get_queried_object();
			$taxonomy = $queried_object->taxonomy;
			$term_id = $queried_object->term_id;
			the_field('after', $taxonomy . '_' . $term_id); ?>		</p>
		</div>
		<div class="col-sm-3">
			<?php get_sidebar(); // подключаем sidebar.php ?>
		</div>
	</div>
</div>
</div>
<?php get_footer();?>