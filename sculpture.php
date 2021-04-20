<?php
/***
* Template Name: Sculpture
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

<div class="sculpture">
        <!-- display page or post content -->

        <?php 
            $gallery_description = get_field('gallery_description'); 
            $gallery_view = get_field('gallery_view');
            $gallery_thumb_first = get_field('gallery_thumb_first');
            $gallery_thumb_second = get_field('gallery_thumb_second');

            $gallery_description_2 = get_field('gallery_description_2'); 
            $gallery_view_2 = get_field('gallery_view_2');
            $gallery_thumb_first_2 = get_field('gallery_thumb_first_2');
            $gallery_thumb_second_2 = get_field('gallery_thumb_second_2');

            $gallery_description_3 = get_field('gallery_description_3'); 
            $gallery_view_3 = get_field('gallery_view_3');
            $gallery_thumb_first_3 = get_field('gallery_thumb_first_3');
            $gallery_thumb_second_3 = get_field('gallery_thumb_second_3');

            $gallery_description_4 = get_field('gallery_description_4'); 
            $gallery_view_4 = get_field('gallery_view_4');
            $gallery_thumb_first_4 = get_field('gallery_thumb_first_4');
            $gallery_thumb_second_4 = get_field('gallery_thumb_second_4');

            $gallery_description_5 = get_field('gallery_description_5'); 
            $gallery_view_5 = get_field('gallery_view_5');
            $gallery_thumb_first_5 = get_field('gallery_thumb_first_5');
            $gallery_thumb_second_5 = get_field('gallery_thumb_second_5');
        ?>

        <aside>
            <p><?php if($gallery_description) { (_e($gallery_description)); } ?></p>
            <div class="sculpture-view" id="sculpture-1">
                <?php 
                if( !empty( $gallery_view ) ): ?>
                    <img src="<?php echo esc_url($gallery_view['url']); ?>" alt="<?php echo esc_attr($gallery_view['alt']); ?>" />
                <?php endif; ?>
            </div>
    
            <div class="thumb-view" id="thumb-1">
                <?php 
                if( !empty( $gallery_view ) ): ?>
                    <img src="<?php echo esc_url($gallery_view['url']); ?>" alt="<?php echo esc_attr($gallery_view['alt']); ?>" />
                <?php endif; ?>

                <?php 
                if( !empty( $gallery_thumb_first ) ): ?>
                    <img src="<?php echo esc_url($gallery_thumb_first['url']); ?>" alt="<?php echo esc_attr($gallery_thumb_first['alt']); ?>" />
                <?php endif; ?>
     
                <?php 
                if( !empty( $gallery_thumb_second ) ): ?>
                    <img src="<?php echo esc_url($gallery_thumb_second['url']); ?>" alt="<?php echo esc_attr($gallery_thumb_second['alt']); ?>" />
                <?php endif; ?>
            </div>
        </aside>
        
        <aside>
            <p><?php if($gallery_description_2) { (_e($gallery_description_2)); } ?></p>
            <div class="sculpture-view" id="sculpture-2">
                <?php 
                if( !empty( $gallery_view_2 ) ): ?>
                    <img src="<?php echo esc_url($gallery_view_2['url']); ?>" alt="<?php echo esc_attr($gallery_view_2['alt']); ?>" />
                <?php endif; ?>      
            </div>
                
            <div class="thumb-view" id="thumb-2">
                <?php 
                if( !empty( $gallery_view_2 ) ): ?>
                    <img src="<?php echo esc_url($gallery_view_2['url']); ?>" alt="<?php echo esc_attr($gallery_view_2['alt']); ?>" />
                <?php endif; ?>

                <?php 
                if( !empty( $gallery_thumb_first_2 ) ): ?>
                    <img src="<?php echo esc_url($gallery_thumb_first_2['url']); ?>" alt="<?php echo esc_attr($gallery_thumb_first_2['alt']); ?>" />
                <?php endif; ?>
     
                <?php 
                if( !empty( $gallery_thumb_second_2 ) ): ?>
                    <img src="<?php echo esc_url($gallery_thumb_second_2['url']); ?>" alt="<?php echo esc_attr($gallery_thumb_second_2['alt']); ?>" />
                <?php endif; ?>
            </div>
        </aside>

        <aside>
            <p><?php if($gallery_description_3) { (_e($gallery_description_3)); } ?></p>
            <div class="sculpture-view" id="sculpture-3">
                <?php 
                if( !empty( $gallery_thumb_first_3 ) ): ?>
                    <img src="<?php echo esc_url($gallery_thumb_first_3['url']); ?>" alt="<?php echo esc_attr($gallery_thumb_first_3['alt']); ?>" />
                <?php endif; ?>     
            </div>
                
            <div class="thumb-view" id="thumb-3">
                <?php 
                if( !empty( $gallery_view_3 ) ): ?>
                    <img src="<?php echo esc_url($gallery_view_3['url']); ?>" alt="<?php echo esc_attr($gallery_view_3['alt']); ?>" />
                <?php endif; ?>

                <?php 
                if( !empty( $gallery_thumb_first_3 ) ): ?>
                    <img src="<?php echo esc_url($gallery_thumb_first_3['url']); ?>" alt="<?php echo esc_attr($gallery_thumb_first_3['alt']); ?>" />
                <?php endif; ?>
     
                <?php 
                if( !empty( $gallery_thumb_second_3 ) ): ?>
                    <img src="<?php echo esc_url($gallery_thumb_second_3['url']); ?>" alt="<?php echo esc_attr($gallery_thumb_second_3['alt']); ?>" />
                <?php endif; ?>
            </div>
        </aside>

        <aside>
            <p><?php if($gallery_description_4) { (_e($gallery_description_4)); } ?></p>
            <div class="sculpture-view" id="sculpture-4">
                <?php 
                if( !empty( $gallery_view_4 ) ): ?>
                    <img src="<?php echo esc_url($gallery_view_4['url']); ?>" alt="<?php echo esc_attr($gallery_view_4['alt']); ?>" />
                <?php endif; ?>    
            </div>
                
            <div class="thumb-view" id="thumb-4">
                <?php 
                if( !empty( $gallery_view_4 ) ): ?>
                    <img src="<?php echo esc_url($gallery_view_4['url']); ?>" alt="<?php echo esc_attr($gallery_view_4['alt']); ?>" />
                <?php endif; ?>

                <?php 
                if( !empty( $gallery_thumb_first_4 ) ): ?>
                    <img src="<?php echo esc_url($gallery_thumb_first_4['url']); ?>" alt="<?php echo esc_attr($gallery_thumb_first_4['alt']); ?>" />
                <?php endif; ?>
     
                <?php 
                if( !empty( $gallery_thumb_second_4 ) ): ?>
                    <img src="<?php echo esc_url($gallery_thumb_second_4['url']); ?>" alt="<?php echo esc_attr($gallery_thumb_second_4['alt']); ?>" />
                <?php endif; ?>
            </div>
        </aside>

        <aside>
            <p><?php if($gallery_description_5) { (_e($gallery_description_5)); } ?></p>
            <div class="sculpture-view" id="sculpture-5">
                <?php 
                if( !empty( $gallery_view_5 ) ): ?>
                    <img src="<?php echo esc_url($gallery_view_5['url']); ?>" alt="<?php echo esc_attr($gallery_view_5['alt']); ?>" />
                <?php endif; ?>    
            </div>
                
            <div class="thumb-view" id="thumb-5">
                <?php 
                if( !empty( $gallery_view_5 ) ): ?>
                    <img src="<?php echo esc_url($gallery_view_5['url']); ?>" alt="<?php echo esc_attr($gallery_view_5['alt']); ?>" />
                <?php endif; ?>

                <?php 
                if( !empty( $gallery_thumb_first_5 ) ): ?>
                    <img src="<?php echo esc_url($gallery_thumb_first_5['url']); ?>" alt="<?php echo esc_attr($gallery_thumb_first_5['alt']); ?>" />
                <?php endif; ?>
     
                <?php 
                if( !empty( $gallery_thumb_second_5 ) ): ?>
                    <img src="<?php echo esc_url($gallery_thumb_second_5['url']); ?>" alt="<?php echo esc_attr($gallery_thumb_second_5['alt']); ?>" />
                <?php endif; ?>
            </div>
        </aside>



    </div><!-- End of sculpture -->


<!-- //display footer -->
<?php get_footer(); ?>