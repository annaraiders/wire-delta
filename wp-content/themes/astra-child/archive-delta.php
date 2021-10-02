<?php
/**
 * The site's entry point.
 *
 * Loads the relevant template part,
 * the loop is executed (when needed) by the relevant template part.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<main class="site-main" role="main">
	<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
		<header class="page-header">
			<?php
			the_archive_title( '<h1 class="entry-title">', '</h1>' );
			the_archive_description( '<p class="archive-description">', '</p>' );
			?>
		</header>
	<?php endif; ?>
	<div class="page-content">
	<div class="row">
		<?php
		while ( have_posts() ) {
			the_post();
			$post_link = get_permalink();
			?>
			<div class="col-md-6">
                <div class="card mb-6 box-shadow">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-lg btn-primary" href="<?php echo esc_url($post_link); ?>" role="button">View</a>
                            </div>
                            <small class="text-muted"><?php echo esc_html(get_the_title()); ?></small>
                        </div>
                    </div>
                </div>
            </div>
		<?php } ?>
	</div>
	</div>
	<?php wp_link_pages(); ?>

	<?php
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 ) :
		?>
		<nav class="pagination" role="navigation">
			<?php /* Translators: HTML arrow */ ?>
			<div class="nav-previous"><?php next_posts_link( sprintf( __( '%s older', 'hello-elementor' ), '<span class="meta-nav">&larr;</span>' ) ); ?></div>
			<?php /* Translators: HTML arrow */ ?>
			<div class="nav-next"><?php previous_posts_link( sprintf( __( 'newer %s', 'hello-elementor' ), '<span class="meta-nav">&rarr;</span>' ) ); ?></div>
		</nav>
	<?php endif; ?>
</main>


<?php get_footer();
