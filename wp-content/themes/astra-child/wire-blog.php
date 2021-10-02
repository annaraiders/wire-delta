<?php /* Template Name: Wire Blog Page */

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>
        <div class="container">
		
        <h2>Blog Filter With categories</h2>
      
        <div class="row center">
       
        <?php $categories = get_categories(); ?>
<div class="cat-list d-flex justify-content-center">
<div class="p-2"><a class=" cat-list_item active btn btn-primary" href="#!" data-slug="">All Blogs</a></div>

  <?php foreach($categories as $category) : ?>
    <div class="p-2">
      <a class="cat-list_item btn btn-primary " href="#!" data-slug="<?= $category->slug; ?>">
        <?= $category->name; ?>
      </a>
  </div>
  <?php endforeach; ?>
  </div>
        </div>



         <div class="row">
         <div class="outhtml">
        <?php $string = '';
$the_query = new WP_Query( array( 
    'post_type' => 'post',
    'posts_per_page' => -1,
    
    'orderby' => 'menu_order', 
    'order' => 'desc',
) ); 
  
// The Loop
if ( $the_query->have_posts() ) {
    $string .= '<div class="row">';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
            if ( has_post_thumbnail() ) {
            $string .= '<div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="' . get_the_post_thumbnail_url()  . '" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">'. get_the_excerpt() .' </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a class="btn btn-lg btn-primary" href="' . get_the_permalink() .'" role="button">View</a>
                        </div>
                        <small class="text-muted">' . get_the_title() .'</small>
                    </div>
                </div>
            </div>
        </div>';
           
            } else { 
            // if no featured image is found
          
            }
            }
            $string .= '</div>';
    } 
   
  
echo $string;
    ?>
         </div>
</div>


		
       
        </div>
	</div><!-- #primary -->
   
<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
