<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Furnilife_Theme
 * @since Furnilife 1.0
 */
$furnilife_opt = get_option( 'furnilife_opt' );

get_header();
?>
<div class="main-container default-page">
	<div class="title-breadcrumb"> 
		<div class="container">  
			<div class="title-breadcrumb-inner">
				<?php Furnilife_Class::furnilife_breadcrumb(); ?> 
				<header class="entry-header"> 
					<h1 class="entry-title"><?php the_title(); ?></h1> 
				</header>  
			</div> 
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="container">
		
		<div class="row"> 
			<?php
			$customsidebar = get_post_meta( $post->ID, '_furnilife_custom_sidebar', true );
			$customsidebar_pos = get_post_meta( $post->ID, '_furnilife_custom_sidebar_pos', true );

			if($customsidebar != ''){
				if($customsidebar_pos == 'left' && is_active_sidebar( $customsidebar ) ) {
					echo '<div id="secondary" class="col-xs-12 col-md-3">';
						dynamic_sidebar( $customsidebar );
					echo '</div>';
				} 
			} else {
				if( $furnilife_opt['sidebarse_pos']=='left'  || !isset($furnilife_opt['sidebarse_pos']) ) {
					get_sidebar('page');
				}
			} ?>
			<div class="col-xs-12 <?php if ( $customsidebar!='' || is_active_sidebar( 'sidebar-page' ) ) : ?>col-md-9<?php endif; ?>">
				<div class="page-content default-page">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>
						<?php comments_template( '', true ); ?>
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
			<?php
			if($customsidebar != ''){
				if($customsidebar_pos == 'right' && is_active_sidebar( $customsidebar ) ) {
					echo '<div id="secondary" class="col-xs-12 col-md-3">';
						dynamic_sidebar( $customsidebar );
					echo '</div>';
				} 
			} else {
				if( $furnilife_opt['sidebarse_pos']=='right' ) {
					get_sidebar('page');
				}
			} ?>
		</div>
	</div> 
</div>
<?php get_footer(); ?>