<div class="col-12">
	<a href="<?php the_permalink(); ?>">
		<div class="media">
			<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'd-flex, align-self-start, mr-3, ' ) ); ?>
			<div class="media-body">
				<h5 class="mt-0"><?php the_title(); ?></h5>
				<?php the_excerpt(); ?>
			</div>
		</div>
	</a>
</div>
