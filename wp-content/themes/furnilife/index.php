<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Furnilife_Theme
 * @since Furnilife 1.0
 */

$furnilife_opt = get_option( 'furnilife_opt' );

get_header();

$furnilife_bloglayout = 'sidebar';

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
		Furnilife_Class::furnilife_post_thumbnail_size('furnilife-category-thumb');
		break;
	case 'grid':
		$furnilife_blogclass = 'grid';
		$furnilife_blogcolclass = 9;
		Furnilife_Class::furnilife_post_thumbnail_size('furnilife-category-thumb');
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

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							
							<?php get_template_part( 'content', get_post_format() ); ?>
							
						<?php endwhile; ?>

						<div class="pagination">
							<?php Furnilife_Class::furnilife_pagination(); ?>
						</div>
						
					<?php else : ?>

						<article id="post-0" class="post no-results not-found">

						<?php if ( current_user_can( 'edit_posts' ) ) :
							// Show a different message to a logged-in user who can add posts.
						?>
							<header class="entry-header">
								<h1 class="entry-title"><?php esc_html_e( 'No posts to display', 'furnilife' ); ?></h1>
							</header>

							<div class="entry-content">
								<p><?php printf( wp_kses(__( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'furnilife' ), array('a'=>array('href'=>array()))), admin_url( 'post-new.php' ) ); ?></p>
							</div><!-- .entry-content -->

						<?php else :
							// Show the default message to everyone else.
						?>
							<header class="entry-header">
								<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'furnilife' ); ?></h1>
							</header>

							<div class="entry-content">
								<p><?php esc_html_e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'furnilife' ); ?></p>
								<?php get_search_form(); ?>
							</div><!-- .entry-content -->
						<?php endif; // end current_user_can() check ?>

						</article><!-- #post-0 -->

					<?php endif; // end have_posts() check ?>
				</div>
				
			</div>
			<?php if( $furnilife_blogsidebar=='right') : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
		</div>
	</div> 
</div>
<?php get_footer(); ?>