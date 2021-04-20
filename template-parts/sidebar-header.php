<?php
/* 
*   This partial template will contain header widget area code
*
* @package Josedu Jeff
* @since 1.0
*/
?>

<?php if (is_active_sidebar( 'header-col' )) : ?>
    <?php dynamic_sidebar( 'header-col' ); ?>
<?php endif ?>
