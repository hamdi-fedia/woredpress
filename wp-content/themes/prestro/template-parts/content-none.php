<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Prestro
 */
?>

<section class="no-results not-found">
	<header class="page-header page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'prestro' ); ?></h1>
	</header>
	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php /* translators: %s: post title */ printf ( esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'prestro' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'prestro' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'prestro' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div>
</section>