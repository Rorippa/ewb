<article id="post-0" class="post no-results not-found">
	<header class="entry-header">
		<h1 class="entry-title"><?php _e( 'Hakemaasi sivua ei löytynyt.', 'ewbf' ); ?></h1>
	</header><!-- .entry-header -->
	
	<div class="entry-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
		
			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'ewbf' ), admin_url( 'post-new.php' ) ); ?></p>
			
				<?php elseif ( is_search() ) : ?>
				
			<p><?php _e( 'Haku:', 'ewbf' ); ?></p>
			<?php get_search_form(); ?>
			
		<?php else : ?>
		
			<p><?php _e( 'Emme löytäneet hakemaasi.', 'ewbf' ); ?></p>
			<?php get_search_form(); ?>
			
		<?php endif; ?>
	</div><!-- .entry-content -->
</article><!-- #post-0 .post .no-results .not-found -->