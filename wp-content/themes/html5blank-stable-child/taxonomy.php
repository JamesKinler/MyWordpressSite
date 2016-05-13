<?php get_header(); ?>

<div class="clearfix">
  <div class="nav_archive nav">
    <?php wp_nav_menu(['menu' => 'Sub Nav']);?>
  </div>

</div>


<section class="no-padding taxonomy" id="portfolio">
  <div class="container-fluid">
    <div class="row no-gutter">

<?php
if (have_posts()) : while (have_posts()) : the_post(); //start the loop
?>
<div class="col-rt-2 col-lg-4 col-sm-6">
    <a href="'<?php echo get_permalink()?>'" class="portfolio__box">
        <?php echo the_post_thumbnail('full', ['class' => 'img-responsive']); ?>
          <div class="portfolio__box__caption">
            <div class="portfolio__box__caption__content">
              <div class="project__category">
                  <?php echo the_title(); ?>
                </div>
                <div class="project__name">
                  <?php echo the_excerpt(); ?>
                </div>
                <p> Click To Read More </p>
              </div>
            </div>
          </a>
        </div>



<?php
endwhile; endif; // End the loop
?>

    </div>
  </div>
</section>



<?php get_footer(); ?>
