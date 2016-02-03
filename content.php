<?php if ( is_page() ) : ?>

	<?php the_title( '<h1>', '</h1>' ); ?>

	<?php the_content(); ?>

<? else : ?>

	<h2><a href="<?php print get_the_permalink( $post->ID ); ?>"><?php print get_the_title( $post->ID  ); ?></a></h2>

	<?php the_excerpt(); ?>

<? endif; ?>
