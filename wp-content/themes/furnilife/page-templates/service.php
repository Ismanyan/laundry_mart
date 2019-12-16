<?php
/**
 * Template Name: Service page
 *
 * Description: Service page template
 *
 * @package WordPress
 * @subpackage Furnilife_Theme
 * @since Furnilife 1.0
 */
$furnilife_opt = get_option( 'furnilife_opt' );

get_header();
?>
<div class="main-container service-page">
	<div class="title-breadcrumb">
		<div class="container">
			<div class="title-breadcrumb-inner">
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<?php Furnilife_Class::furnilife_breadcrumb(); ?>
			</div>
		</div>
	</div>
	<div class="page-content">
		<div class="service-container">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>