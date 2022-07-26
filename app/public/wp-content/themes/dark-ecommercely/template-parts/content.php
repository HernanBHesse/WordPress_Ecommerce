<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package guten_shop
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( class_exists( 'WooCommerce' ) ) : ?>
	<header class="entry-header">
		<?php
		if ( is_product() ) :
		elseif ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( 'post' === get_post_type() ) :
			?>
		<div class="entry-meta">
			<?php guten_shop_posted_by(); ?>
			<span class="post-divider"><?php echo esc_html_e( ' | ', 'dark-ecommercely' ); ?></span>
			<?php guten_shop_posted_on(); ?>
		</div><!-- .entry-meta --> 
	<?php endif; ?>
</header><!-- .entry-header --> 
<?php else : ?>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( 'post' === get_post_type() ) :
			?>
			<?php if ( get_theme_mod( 'sm_show_post_date' ) == '1' ) : ?>
		<div class="entry-meta">
			<?php guten_shop_posted_by(); ?>
			<span class="post-divider"><?php echo esc_html_e( ' | ', 'dark-ecommercely' ); ?></span>
			<?php guten_shop_posted_on(); ?>
		</div><!-- .entry-meta --> 
		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>

<div class="entry-content">
	<?php
	the_content( sprintf(
		wp_kses(
			/* translators: %s: Name of current post. Only visible to screen readers */
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'dark-ecommercely' ),
			array(
				'span' => array(
					'class' => array(),
					),
				)
			),
		get_the_title()
		) );

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php guten_shop_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
