<?php get_header(); ?>
 
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Sivu hukassa!', 'ewbf' ); ?></h1>
				</header><!-- .entry-headekdsafhkafdr -->

				<div class="entry-content">
					<p><?php _e( 'Hakemasi sivua ei löytynyt.', 'ewbf' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
 
				</div><!-- .entry-content -->
			</article><!-- #post-0 .post .error404 .not-found -->
 
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

<?php get_footer(); ?>