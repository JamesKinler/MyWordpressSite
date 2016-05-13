<?php get_header(); ?>


<section class="portfolio_page no-padding">



<?php
if (have_posts()) : while (have_posts()) : the_post(); //start the loop


?>


			<?php the_post_thumbnail('portfolio_single'); ?>
			<div class="single__page">


			<?php the_title('<h1>', '</h1>'); ?>
			<hr>
			<div class="single__author">


			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			</div>
			<?php the_content();  ?>
			<div class="single__comment">
				<?php comments_template(); ?>
			</div>

</div>





<?php
endwhile; endif; // End the loop

?>

</section>



<?php get_footer(); ?>
