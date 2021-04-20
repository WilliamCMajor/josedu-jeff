<?php
/*
* The footer for our theme
* footer content.
*
* @package Josedu Jeff
* @since 1.0.0
*/
?>

        </div><!-- closing tag for site-content"> -->
        <footer>
            <div class="footer-title"><?php echo get_bloginfo( 'name' ); ?></div>
            <?php get_template_part('template-parts/sidebar', 'footer'); ?>
            

        </footer>
        <?php wp_footer(); ?>
    </div><!-- closing div for wrapper -->
    </body>
</html>