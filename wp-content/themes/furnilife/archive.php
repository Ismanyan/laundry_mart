<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Furnilife already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Furnilife_Theme
 * @since Furnilife 1.0
 */

$furnilife_opt = get_option( 'furnilife_opt' );

get_header();
?>
<?php 
$furnilife_bloglayout = 'nosidebar';
if(isset($furnilife_opt['blog_layout']) && $furnilife_opt['blog_layout']!=''){
	$furnilife_bloglayout = $furnilife_opt['blog_layout'];
}
if(isset($_GET['layout']) && $_GET['layout']!=''){
	$furnilife_bloglayout = $_GET['layout'];
}
$furnilife_blogsidebar = 'right';
if(isset($furnilife_opt['sidebarblog_pos']) && $furnilife_opt['sidebarblog_pos']!=''){
	$furnilife_blogsidebar = $furnilife_opt['sidebarblog_pos'];
}
if(isset($_GET['sidebar']) && $_GET['sidebar']!=''){
	$furnilife_blogsidebar = $_GET['sidebar'];
}
switch($furnilife_bloglayout) {
	case 'sidebar':
		$furnilife_blogclass = 'blog-sidebar';
		$furnilife_blogcolclass = 9;
		Furnilife_Class::furnilife_post_thumbnail_size('furnilife-category-thumb');
		break;
	case 'largeimage':
		$furnilife_blogclass = 'blog-large';
		$furnilife_blogcolclass = 9;
		$furnilife_postthumb = '';
		break;
	default:
		$furnilife_blogclass = 'blog-nosidebar';
		$furnilife_blogcolclass = 12;
		$furnilife_blogsidebar = 'none';
		Furnilife_Class::furnilife_post_thumbnail_size('furnilife-post-thumb');
}
?>
<div class="main-container"> 
	<div class="title-breadcrumb"> 
		<div class="container">
			<div class="title-breadcrumb-inner">
				<?php Furnilife_Class::furnilife_breadcrumb(); ?>
				<header class="entry-header">
					<h1 class="entry-title"><?php if(isset($furnilife_opt)) { echo esc_html($furnilife_opt['blog_header_text']); } else { esc_html_e('Blog', 'furnilife');}  ?></h1>
				</header> 
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			
			<?php if($furnilife_blogsidebar=='left') : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
			
			<div class="col-xs-12 <?php if ( is_active_sidebar( 'sidebar-1' ) ) { echo 'col-md-'.$furnilife_blogcolclass;} ?>">
				<div class="page-content blog-page <?php echo esc_attr($furnilife_blogclass); if($furnilife_blogsidebar=='left') {echo ' left-sidebar'; } if($furnilife_blogsidebar=='right') {echo ' right-sidebar'; } ?>">
					<?php if ( have_posts() ) : ?>
						<header class="archive-header">
							<?php
								the_archive_title( '<h1 class="archive-title">', '</h1>' );
								the_archive_description( '<div class="archive-description">', '</div>' );
							?>
						</header>

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/* Include the post format-specific template for the content. If you want to
							 * this in a child theme then include a file called called content-___.php
							 * (where ___ is the post format) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );

						endwhile;
						?>
						
						<div class="pagination">
							<?php Furnilife_Class::furnilife_pagination(); ?>
						</div>
						
					<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<?php if( $furnilife_blogsidebar=='right') : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
		</div>
	</div> 
</div>
<?php get_footer(); ?>