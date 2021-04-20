<?php
/***
* This template is for displaying for the homepage only.
* This is the template that displays all pages by default. Please note that is WordPress construct of pages and other 'pages' on your
 wp site will use different.
*
* @package Josedu Jeff
* @since 1.0.0
*/
//display header
get_header();
?>
<div class="preloader">

    <div class="welcome-msg">
        <h2>Explore Jesedu's Abstract Arts.</h2>
        <h2>Welcome!</h2>
    </div>

    <img loading="eager" src="https://josedujeff.com/wp-content/uploads/2021/02/julie-laiymani-F-X05iw4bCQ-unsplash.jpg" alt="art image preloader">
    
</div>
<?php if(have_posts()) : ?>
<!-- start the loop -->
    <?php while(have_posts()) : the_post(); ?>
        <?php
        //do things -- display content : the function below will pull the content from the template partial.
        get_template_part( 'template-parts/content', 'home' );
        ?>
    <?php endwhile; ?>
<!-- end while loop -->
    <?php else : ?>
<!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
        <?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>

<!-- //display footer -->
<?php get_footer(); ?>