<div class="col-sm-3">
	<div class="card" >
		<a href="<?php the_permalink(); ?>">
			<?php $image = get_field('pic1'); if( !empty($image) ): $url = $image['url']; ?><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $url; ?>"  alt="<?php echo $image['alt'];  ?>" class='card-img-top' /></a><?php endif; ?>
		</a>
		<div class="card-body">
			<h4 class="card-title"><?php the_title(); ?></h4>
		</div>
		<a class='button' href="<?php the_permalink(); ?>">Открыть проект</a>
</div>	
</div>
