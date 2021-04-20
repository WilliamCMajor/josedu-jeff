<?php
/***
* Template Name: Project
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
        <?php the_content(); ?>
    <?php endwhile; ?>
<!-- end while loop -->
<?php endif; ?>

<div class="project-container">
    <?php 
        $project_title = get_field('project_title');
        $project_title_1 = get_field('project_title_1');
        $project_title_2 = get_field('project_title_2');
        $project_title_3 = get_field('project_title_3');
        
        $project_text = get_field('project_text');
        $project_text_1 = get_field('project_text_1');
        $project_text_2 = get_field('project_text_2');
        $project_text_3 = get_field('project_text_3');
        
        $project_img = get_field('project_img');
        $project_img_1 = get_field('project_img_1');
        $project_img_2 = get_field('project_img_2');
        $project_img_3 = get_field('project_img_3');
    ?>

    <div class="project-box">
        <?php 
        if( !empty( $project_img ) ): ?>
            <img src="<?php echo esc_url($project_img['url']); ?>" alt="<?php echo esc_attr($project_img['alt']); ?>" />
        <?php endif; ?>
        <h2><?php if($project_title) {_e($project_title);} ?></h2>
        <p><?php if($project_text) {_e($project_text);} ?></p>
    </div>

    <div class="project-box">
        <?php 
        if( !empty( $project_img_1 ) ): ?>
            <img src="<?php echo esc_url($project_img_1['url']); ?>" alt="<?php echo esc_attr($project_img_1['alt']); ?>" />
        <?php endif; ?>
        <h2><?php if($project_title_1) {_e($project_title_1);} ?></h2>
        <p><?php if($project_text_1) {_e($project_text_1);} ?></p>
    </div>

    <div class="project-box">
        <?php 
        if( !empty( $project_img_2 ) ): ?>
            <img src="<?php echo esc_url($project_img_2['url']); ?>" alt="<?php echo esc_attr($project_img_2['alt']); ?>" />
        <?php endif; ?>
        <h2><?php if($project_title_2) {_e($project_title_2);} ?></h2>
        <p><?php if($project_text_2) {_e($project_text_2);} ?></p>
    </div>

    <div class="project-box">
        <?php 
        if( !empty( $project_img_3 ) ): ?>
            <img src="<?php echo esc_url($project_img_3['url']); ?>" alt="<?php echo esc_attr($project_img_3['alt']); ?>" />
        <?php endif; ?>
        <h2><?php if($project_title_3) {_e($project_title_3);} ?></h2>
        <p><?php if($project_text_3) {_e($project_text_3);} ?></p>
    </div>



</div><!-- End of project-container -->


<!-- //display footer -->
<?php get_footer(); ?>