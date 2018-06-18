<?php
/**
 * Header image template part
 *
 * @package Tasman
 */
$term_id = ( is_category() || is_tag() ) ? get_queried_object()->term_id : '';
$image_id = get_term_meta( $term_id, 'image', true );
$page_for_posts = get_option( 'page_for_posts' );
?>

<div class="custom-header-media">

	<?php the_custom_header_markup(); ?>

</div><!-- .custom-header-media -->
