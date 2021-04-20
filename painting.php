<?php
/***
* Template Name: Painting
* description: template to display all sculpture created with cpts.
*
* @package Josedu Jeff
* @since 1.0.0
*/
//display header
get_header();
?>

<!-- display the produce page content -->
<?php if(have_posts()) : ?>
<!-- start the loop -->
    <?php while(have_posts()) : the_post(); ?>
        <div class="painting-container"><?php the_content(); ?></div>
    <?php endwhile; ?>
<!-- end while loop -->
<?php endif; ?>

<div class="painting-gallery">
    <?php 
        $painting_0 = get_field('painting_0');
        $painting_1 = get_field('painting_1');
        $painting_2 = get_field('painting_2');
        $painting_3 = get_field('painting_3');
        $painting_4 = get_field('painting_4');
        $painting_5 = get_field('painting_5');
        $painting_6 = get_field('painting_6');
        $painting_7 = get_field('painting_7');
        $painting_8 = get_field('painting_8');
        $painting_9 = get_field('painting_9');
        $painting_10 = get_field('painting_10');   
    ?>

    <div class="painting-thumb">
        <?php 
        if( !empty( $painting_0 ) ): ?>
            <img src="<?php echo esc_url($painting_0['url']); ?>" alt="<?php echo esc_attr($painting_0['alt']); ?>" />
        <?php endif; ?>
    </div>

    <div class="painting-thumb">
        <?php 
        if( !empty( $painting_1 ) ): ?>
            <img src="<?php echo esc_url($painting_1['url']); ?>" alt="<?php echo esc_attr($painting_1['alt']); ?>" />
        <?php endif; ?>
    </div>

    <div class="painting-thumb">
        <?php 
        if( !empty( $painting_2 ) ): ?>
            <img src="<?php echo esc_url($painting_2['url']); ?>" alt="<?php echo esc_attr($painting_2['alt']); ?>" />
        <?php endif; ?>
    </div>

    <div class="painting-thumb">
    <?php 
        if( !empty( $painting_3 ) ): ?>
            <img src="<?php echo esc_url($painting_3['url']); ?>" alt="<?php echo esc_attr($painting_3['alt']); ?>" />
        <?php endif; ?>
    </div>
    <div class="painting-thumb">
    <?php 
        if( !empty( $painting_4 ) ): ?>
            <img src="<?php echo esc_url($painting_4['url']); ?>" alt="<?php echo esc_attr($painting_4['alt']); ?>" />
        <?php endif; ?>
    </div>
    <div class="painting-thumb">
    <?php 
        if( !empty( $painting_5 ) ): ?>
            <img src="<?php echo esc_url($painting_5['url']); ?>" alt="<?php echo esc_attr($painting_5['alt']); ?>" />
        <?php endif; ?>
    </div>
    <div class="painting-thumb">
    <?php 
        if( !empty( $painting_6 ) ): ?>
            <img src="<?php echo esc_url($painting_6['url']); ?>" alt="<?php echo esc_attr($painting_6['alt']); ?>" />
        <?php endif; ?>
    </div>
    <div class="painting-thumb">
    <?php 
        if( !empty( $painting_7 ) ): ?>
            <img src="<?php echo esc_url($painting_7['url']); ?>" alt="<?php echo esc_attr($painting_7['alt']); ?>" />
        <?php endif; ?>
    </div>
    <div class="painting-thumb">
    <?php 
        if( !empty( $painting_8 ) ): ?>
            <img src="<?php echo esc_url($painting_8['url']); ?>" alt="<?php echo esc_attr($painting_8['alt']); ?>" />
        <?php endif; ?>
    </div>
    <div class="painting-thumb">
    <?php 
        if( !empty( $painting_9 ) ): ?>
            <img src="<?php echo esc_url($painting_9['url']); ?>" alt="<?php echo esc_attr($painting_9['alt']); ?>" />
        <?php endif; ?>
    </div>

    <div class="click-view"></div>

</div><!-- End of painting-gallery -->


<!-- //display footer -->
<?php get_footer(); ?>