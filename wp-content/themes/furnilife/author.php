<?php
/**
 * The template for displaying Author Archive pages
 *
 * Used to display archive-type pages for posts by an author.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Furnilife_Theme
 * @since Furnilife 1.0
 */

$furnilife_opt = get_option( 'furnilife_opt' );

get_header();

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

						<?php
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							 *
							 * We reset this later so we can run the loop
							 * properly with a call to rewind_posts().
							 */
							the_post();
						?>

						<header class="archive-header">
							<h1 class="archive-title"><?php printf( esc_html__( 'Author Archives: %s', 'furnilife' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
						</header><!-- .archive-header -->

						<?php
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();
						?>

						<?php
						// If a user has filled out their description, show a bio on their entries.
						if ( get_the_author_meta( 'description' ) ) : ?>
						<div class="author-info archives">
							<div class="author-avatar">
								<?php
								/**
								 * Filter the author bio avatar size.
								 *
								 * @since Furnilife 1.0
								 *
								 * @param int $size The height and width of the avatar in pixels.
								 */
								$author_bio_avatar_size = apply_filters( 'furnilife_author_bio_avatar_size', 68 );
								echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
								?>
							</div><!-- .author-avatar -->
							<div class="author-description">
								<h2><?php printf( esc_html__( 'About %s', 'furnilife' ), get_the_author() ); ?></h2>
								<p><?php the_author_meta( 'description' ); ?></p>
							</div><!-- .author-description	-->
						</div><!-- .author-info -->
						<?php endif; ?>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', get_post_format() ); ?>
						<?php endwhile; ?>
						
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