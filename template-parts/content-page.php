<?php
/***
* Template part for displaying content in the page.php
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package Josedu Jeff
* @since 1.0.0
*/
?>
<article <?php post_class();?> id="post-<?php the_ID();?>" >

 <!-- if you had an image it will display using wordpress's largest default thumbnail sizing (settings in the admin - you can see the sizes) -->
<?php //echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>

    <?php
        the_content(); // displays all of the content within the editor in pages in the dashboard
    ?>

</article>
