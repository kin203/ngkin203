<?php
/**
 * @package bakery-pastry-lite
 */
?>
<div id="sidebar">    
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
         <?php dynamic_sidebar('sidebar-1');?>
    <?php endif; ?>	
</div><!-- sidebar -->