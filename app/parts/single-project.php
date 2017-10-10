<div class="row">
	<div class="col-lg-8 col-md-6 zoom-gallery">
		<?php $image = get_field('pic1'); if( !empty($image) ): $url = $image['url']; ?><a href="<?php echo $url; ?>" title="<?php echo $title; ?>"><img src="<?php echo $url; ?>"  alt="<?php echo $image['alt'];  ?>" class='img-fluid' /></a><?php endif; ?>
		<div class="row no-gutters">
			<div class="col-lg-2 col-3 p-2"><?php $image = get_field('pic1'); if( !empty($image) ): $url = $image['url']; ?><a href="<?php echo $url; ?>" title="<?php echo $title; ?>"><img src="<?php echo $url; ?>"  alt="<?php echo $image['alt'];  ?>" class='img-fluid' /></a><?php endif; ?></div>
			<div class="col-lg-2 col-3 p-2"><?php $image = get_field('pic2'); if( !empty($image) ): $url = $image['url']; ?><a href="<?php echo $url; ?>" title="<?php echo $title; ?>"><img src="<?php echo $url; ?>"  alt="<?php echo $image['alt'];  ?>" class='img-fluid' /></a><?php endif; ?></div>
			<div class="col-lg-2 col-3 p-2"><?php $image = get_field('pic3'); if( !empty($image) ): $url = $image['url']; ?><a href="<?php echo $url; ?>" title="<?php echo $title; ?>"><img src="<?php echo $url; ?>"  alt="<?php echo $image['alt'];  ?>" class='img-fluid' /></a><?php endif; ?></div>
			<div class="col-lg-2 col-3 p-2"><?php $image = get_field('pic4'); if( !empty($image) ): $url = $image['url']; ?><a href="<?php echo $url; ?>" title="<?php echo $title; ?>"><img src="<?php echo $url; ?>"  alt="<?php echo $image['alt'];  ?>" class='img-fluid' /></a><?php endif; ?></div>
			<div class="col-lg-2 col-3 p-2"><?php $image = get_field('pic5'); if( !empty($image) ): $url = $image['url']; ?><a href="<?php echo $url; ?>" title="<?php echo $title; ?>"><img src="<?php echo $url; ?>"  alt="<?php echo $image['alt'];  ?>" class='img-fluid' /></a><?php endif; ?></div>
			<div class="col-lg-2 col-3 p-2"><?php $image = get_field('pic6'); if( !empty($image) ): $url = $image['url']; ?><a href="<?php echo $url; ?>" title="<?php echo $title; ?>"><img src="<?php echo $url; ?>"  alt="<?php echo $image['alt'];  ?>" class='img-fluid' /></a><?php endif; ?></div>
			<div class="col-lg-2 col-3 p-2"><?php $image = get_field('pic7'); if( !empty($image) ): $url = $image['url']; ?><a href="<?php echo $url; ?>" title="<?php echo $title; ?>"><img src="<?php echo $url; ?>"  alt="<?php echo $image['alt'];  ?>" class='img-fluid' /></a><?php endif; ?></div>
			<div class="col-lg-2 col-3 p-2"><?php $image = get_field('pic8'); if( !empty($image) ): $url = $image['url']; ?><a href="<?php echo $url; ?>" title="<?php echo $title; ?>"><img src="<?php echo $url; ?>"  alt="<?php echo $image['alt'];  ?>" class='img-fluid' /></a><?php endif; ?></div>
		</div>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="card">
			<div class="card-body">
				<p>Номер проекта<span class="pull-right"><?php the_field('number'); ?></span></p>
				<hr>
				<p>Площадь<span class="pull-right"><?php the_field('area'); ?> м<sup>2</sup></span></p>
				<hr>
				<p>Размер проекта<span class="pull-right"><?php the_field('size'); ?></span></p>
				<hr>
				<p>Этажность<span class="pull-right"><?php the_field('floor'); ?></span></p>
				<hr>
				<p>Особенности<span class="pull-right"></span></p>
				<hr>
				<p>Спальни<span class="pull-right"></span></p>
				<hr>
				<p>Сан.узел<span class="pull-right"></span></p>
				<hr>
				<p>Цена 1<span class="pull-right"><?php $price = get_post_meta($post->ID, 'price1', true); if ($price) { ?><?php  echo number_format( $price, 0, ' ', ' ' ); echo " "; ?>000 р.<?php } else { ?>По запросу<?php } ?></span></p>
				<hr>
				<p>Цена 2<span class="pull-right"><?php $price = get_post_meta($post->ID, 'price2', true); if ($price) { ?><?php  echo number_format( $price, 0, ' ', ' ' ); echo " "; ?>000 р.<?php } else { ?>По запросу<?php } ?></span></p>
				<hr>
				<p>Цена 3<span class="pull-right"><?php $price = get_post_meta($post->ID, 'price3', true); if ($price) { ?><?php  echo number_format( $price, 0, ' ', ' ' ); echo " "; ?>000 р.<?php } else { ?>По запросу<?php } ?></span></p>
				<hr>
				<p>Цена 4<span class="pull-right"><?php $price = get_post_meta($post->ID, 'price4', true); if ($price) { ?><?php  echo number_format( $price, 0, ' ', ' ' ); echo " "; ?>000 р.<?php } else { ?>По запросу<?php } ?></span></p>
				<hr>
				<p>Фундамент 1<span class="pull-right"><?php $price = get_post_meta($post->ID, 'price3', true); if ($price) { ?><?php  echo number_format( $price, 0, ' ', ' ' ); echo " "; ?>000 р.<?php } else { ?>По запросу<?php } ?></span></p>
				<hr>
				<p>Фундамент 2<span class="pull-right"><?php $price = get_post_meta($post->ID, 'price4', true); if ($price) { ?><?php  echo number_format( $price, 0, ' ', ' ' ); echo " "; ?>000 р.<?php } else { ?>По запросу<?php } ?></span></p>
				<hr>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<div id='komp' class="komp">
			<h3>Комплектация</h3>
			<?php $komp = get_post_meta($post->ID, 'Floor', true); 
			if ($komp == Одноэтажный) { ?><?php  get_template_part( '/komp/komp', '1' ); ?><?php } 
			elseif ($komp == Мансарда){ ?><?php  get_template_part( '/komp/komp', '2' ); ?><?php } 
			elseif ($komp == Полутораэтажный){ ?><?php  get_template_part( '/komp/komp', '3' ); ?><?php }
			elseif ($komp == Двухэтажный){ ?><?php  get_template_part( '/komp/komp', '4' ); ?><?php }
			else { ?>По запросу<?php } ?>		
		</div>
	</div>
	<div class="col-12">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
			<?php the_content(); // контент ?>
		<?php endwhile; // конец цикла ?>
	</div>
</div>
