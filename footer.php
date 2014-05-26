</div><!-- #main .site-main -->
 
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <?php do_action( 'ewbf_credits' ); ?>
        <a href="http://wordpress.org/" title="<?php esc_attr_e( 'wordpress.org', 'ewbf' ); ?>" rel="generator"><?php printf( __( 'Powered by %s', 'ewbf' ), 'WordPress' ); ?></a>
        <span class="sep"> | </span>
        <?php printf( __( 'Teema: %1$s', 'ewbf' ), 'ewbf', '<a href="http://themeewbfr.com/" rel="designer">Themeewbfr</a>' ); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->
 
<?php wp_footer(); ?>
 
</body>
</html>