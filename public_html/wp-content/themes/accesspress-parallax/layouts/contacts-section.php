<?php
/**
 * The template for displaying all Parallax Templates.
 *
 * @package accesspress_parallax
 */
?>
<div class="contacts-listing clearfix">
	<div class="row">
	<?php
	$args = array(
		'cat' => $category,
		'posts_per_page' => -1
		);
	$count_service = 0;
	$query = new WP_Query($args);
	if($query->have_posts()):
		$i = 0;
		while($query->have_posts()):
			$query->the_post();
			$i = $i + 0.25; 
			$service_class = ($count_service % 2 == 0) ? "span4" : "span2";
			?>
			<div class="<?php echo $service_class; ?> col">

				<div class="clearfix contacts-list" data-wow-delay="<?php echo $i; ?>s">
					<div class="contacts-detail">
						<div class="contacts-content"><?php the_content(); ?></div>
					</div>
				</div>

			</div> <!-- class=span col -->

			<?php
			$count_service++;
		endwhile;
		wp_reset_postdata();
	endif; ?>
	</div> <!-- class=row -->
</div><!-- #primary -->
