<?php if ( in_category( array( 'doma-iz-brusa', '118' ) )) { get_template_part('parts/card-project');}
elseif ( in_category( 'photo' )) { get_template_part('parts/card-foto');}
elseif ( in_category( 'otziv' )) { get_template_part('parts/card-otziv');}
else { get_template_part('parts/card-info');} ?>