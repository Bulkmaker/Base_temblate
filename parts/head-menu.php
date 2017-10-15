	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="/">
				<img src="img/logo.svg" width="100%" height="100%" class="d-inline-block align-top" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarsExample09">
						<?php
						wp_nav_menu( array(
							'theme_location'	=> 'top',
							'container' => false,
							'menu_class'		=> 'navbar-nav text-md-center nav-justified w-100',
							'fallback_cb'		=> '__return_false',
							'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'				=> 2,
							'walker'			=> new bootstrap_4_walker_nav_menu()
						) );
						?>
			</div>
		</nav>
	</div>