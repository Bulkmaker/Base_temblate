<div class="col-lg-3 col-md-6">
	<div class="card" >
		<a href="<?php the_permalink(); ?>">
			<div class="img-header">
				<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
				<a href="<?php the_permalink(); ?>"><span class="img-card-title"><?php the_title(); ?></span></a>
			</div>
		</a> 
		<a class="button" href="<?php the_permalink(); ?>" >Открыть проект</a>
	</div>	
</div>