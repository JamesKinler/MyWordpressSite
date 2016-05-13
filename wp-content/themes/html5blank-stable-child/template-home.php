  <?php /* Template Name: Home Page Template */ get_header(); ?>




<section class="aboutme" id="about">
  <h1>About Me</h1>
  <hr>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
    took a galley of type and scrambled it to make a type specimen book. It has survived not only
    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
    It was popularised in the 1960s with the release of Letraset sheets containing
    Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
    PageMaker including versions of monkeys</p>
</section>

<div> <?php echo do_shortcode('[portfolio_items]');?> </div>


<section class="conecpts" id="OurConcepts">
    <div class="container">
        <div class="row">
          <div class="col-lg-6 concepts__container">
             <div id="SlideLeft" class="animated">
                <h2>Our Concept</h2>
                  <hr>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                      a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                      remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                      Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
                      of monkeys.
                    </p>
              </div>
          </div>

          <div class="col-lg-6">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ImacIphoneMockUP.png" id="SlideRight" class="img-responsive animated" alt="">
          </div>
        </div>
    </div>
  </section>



  <div> <?php echo do_shortcode('[posts_items]');?> </div>





<?php get_footer(); ?>
