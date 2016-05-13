<?php /* Template Name: About Page Template */get_header(); ?>

<div class="about_page" id="about">
  <h1>
    More About Me!
  </h1>
  <hr>
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2.jpg" class="img-responsive" alt="">
  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus faucibus nibh id blandit. Proin dapibus libero leo, sed hendrerit
    arcu scelerisque sit amet. Sed vestibulum arcu lacus, vel gravida justo convallis quis. Morbi ac auctor nibh, a gravida massa. Cras vitae
    dapibus dui. Vivamus id augue accumsan, cursus sapien in, pulvinar nulla. Nulla tempor magna sed ipsum auctor, quis posuere nulla
    sagittis.

  Duis eget rutrum turpis. Etiam id tincidunt enim. Pellentesque commodo euismod dolor, ut mattis mi pellentesque et. Vestibulum sed
  molestie ipsum. Nullam vulputate metus id pellentesque sollicitudin. Maecenas vehicula non quam quis malesuada. Fusce commodo dapibus
  ipsum eu tristique. Nullam in quam ut dolor bibendum tempor et in sapien.

  </p>

</div>

<div class="container about__page__counter">
  <div class="row">
    <div class="col-lg-3">
      <div>
        <i class="fa fa-3x fa-coffee" aria-hidden="true"></i>
      </div>
      <div id="odometer1" class="odometer">
          <p>0</p>
      </div>
      <h2>
        how many Pepsi I Have Drank
      </h2>
    </div>
    <div class="col-lg-3">
      <div>
        <i class="fa fa-3x fa-mobile" aria-hidden="true"></i>
      </div>
      <div id="odometer2" class="odometer">
        <p>0</p>
      </div>
      <h2>
        How Many Phones I have broken
      </h2>
    </div>
    <div class="col-lg-3">
      <div>
        <i class="fa fa-3x fa-desktop" aria-hidden="true"></i>
      </div>
      <div id="odometer3" class="odometer">
        <p>0</p>
      </div>
      <h2>
        How Many Computers I Owned
      </h2>
    </div>
    <div class="col-lg-3">
      <div>
        <i class="fa fa-3x fa-code" aria-hidden="true"></i>
      </div>
      <div id="odometer4" class="odometer">
        <p>0</p>
      </div>
      <h2>
        How Many Lines Of Code I Typed
      </h2>
    </div>
  </div>
</div>




<?php get_footer(); ?>
