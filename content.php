<?php if ( is_page() ) : ?>
	<?php the_title( '<h1>', '</h1>' ); ?>
	<?php the_content(); ?>

<?php elseif ( is_single() ) : ?>
	<?php single_post_title( '<h1>', '</h1>' ); ?>
	<?php echo "<h4>" . get_the_date() . ", Posted by: " . get_the_author() . "</h4>"; ?>
	<?php the_content(); ?>

<?php else : ?>
	<h2><a href="<?php print get_the_permalink( $post->ID ); ?>"><?php print get_the_title( $post->ID  ); ?></a></h2>
	<?php the_excerpt(); ?>

<?php endif; ?>
