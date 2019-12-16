<?php
/**
 * Template Name: Full Width
 *
 * Description: Full Width page template
 *
 * @package WordPress
 * @subpackage Furnilife_Theme
 * @since Furnilife 1.0
 */
$furnilife_opt = get_option( 'furnilife_opt' );

get_header();
?>
<div class="main-container full-width">
	<div class="title-breadcrumb"> 
		<div class="container">
			<div class="title-breadcrumb-inner">  
				<header class="entry-header">
					<div class="container">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</div>
				</header>  
				<?php Furnilife_Class::furnilife_breadcrumb(); ?>
			</div>
		</div>   
	</div>
	
	<div class="page-content">
		<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>