<?php get_header(); ?>


<section class="portfolio_page no-padding">



<?php
if (have_posts()) : while (have_posts()) : the_post(); //start the loop


?>

<div class="container">
	<div class="row no-gutter">
		<div class="col-rt-7 col-lg-7 col-sm-5">
			<?php the_post_thumbnail('portfolio_single'); ?>
		</div>
		<div class="col-rt-5 col-lg-4 col-sm-6 portfolio__page__title">
			<?php the_title('<h1>', '</h1>'); ?>
			<hr>
			<div class="portfolio__page__content">
						<?php the_content();  ?>
			</div>
		</div>
	</div>
</div>



<?php
endwhile; endif; // End the loop

?>

</section>

<?php get_footer(); ?>
