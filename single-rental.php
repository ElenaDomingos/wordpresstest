<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation(
					array(
						'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
					)
				);
			} 
			
			if(get_field('area')) {
			    echo '<h2>Площадь: ' . get_field('area') . ' км<sup>2</sup></h2>';
			}
			
			if(get_field('price')) {
			    echo '<h2>Цена: ' . get_field('price') . ' ₽</h2>';
			}
			
			if(get_field('floor')) {
			    echo '<h2>Этаж(ей): ' . get_field('floor') . ' </h2>';
			}

			// End the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
 
<?php get_footer(); ?>
