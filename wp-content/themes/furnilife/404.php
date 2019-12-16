<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Furnilife_Theme
 * @since Furnilife 1.0
 */

$furnilife_opt = get_option( 'furnilife_opt' );

get_header();

?>
	<div class="main-container error404">
		<div class="container">
			<div class="search-form-wrapper">
				<h1>404</h1>
				<h2><?php esc_html_e( "Opps! PAGE NOT BE FOUND", 'furnilife' ); ?></h2>
				<p class="home-link"><?php esc_html_e( "Sorry but the page you are looking for does not exist, have been removed, name changed or is temporarity unavailable.", 'furnilife' ); ?></p>
				<?php get_search_form(); ?>
				<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_html_e( 'Back to home', 'furnilife' ); ?>"><?php esc_html_e( 'Back to home page', 'furnilife' ); ?></a>
			</div>
		</div> 
	</div>
</div>
<?php get_footer(); ?>