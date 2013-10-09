<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>
<div class="row post_container">
<?php /* Template Name: home_page */ ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					
					<div class="post threecol">	
						
						<?php // check if the post has a Post Thumbnail assigned to it.
						if ( has_post_thumbnail() ) {
								the_post_thumbnail('large');
						}; ?> 
						<div class="album_title"><h2><?php the_title(); ?></h2></div>
						 <?php the_content(); ?>
					


								

					</div>
					
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>

				

<?php endwhile; ?>
</div>

<?php get_footer(); ?>