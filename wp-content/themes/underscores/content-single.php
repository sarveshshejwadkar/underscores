<?php
/**
 * @package underscores
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('no-margin'); ?>>
	<?php 
		remove_filter( 'the_content', 'wpautop' ); 
		the_content(); ?>
</article><!-- #post-## -->
