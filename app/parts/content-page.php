	
<div class="container">
	<div class="content catalog">
		<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb(' <p id="breadcrumbs">','</p>'); } ?>
		<h1><?php the_title(); // заголовок поста ?></h1>
		<div class="row">
			<div class="col-sm-9">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
					<?php the_content(); // контент ?>
				<?php endwhile; // конец цикла ?>
			</div>
			<div class="col-sm-3">
				<?php get_sidebar(); // подключаем sidebar.php ?>
			</div>
		</div>
	</div>
</div>