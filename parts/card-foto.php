<div class="col-sm-4 ">
	<a href="<?php the_permalink(); ?>">
		<div class="card" >
			<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'card-img-top' ) ); ?>
			<div class="card-body">
				<h4 class="card-title"><?php the_title(); ?></h4>
			</div>
		</div>	
	</a>
</div>