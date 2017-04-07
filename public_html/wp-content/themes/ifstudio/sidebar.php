<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package accesspress_parallax
 */

if(!is_active_sidebar('sidebar-1')) { return; } ?>
<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->




<?php if(!is_active_sidebar('left-sidebar')) { return; } ?>
<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'left-sidebar' ); ?>
</div><!-- #secondary -->

<?php 
	//if(!dynamic_sidebar("left-sidebar")) : 
?>
<?php
// 	Код для левой боковой панели по умолчанию располагается здесь...
?>
 <?php 
	//endif; 
?>
