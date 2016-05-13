(function($){

$(document).ready(function () {

  // The on click for my nav hamburger
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();
    });

    function hamburger_cross() {

      if (isClosed == true) {
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }


  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });

  // Sets the what the number is counting to and where its going to activate on the scroll
  $('#about').waypoint(function(){
    setTimeout(function(){
      $('#odometer1').html(1000);
  }, {offset:'10%'},1000);


  setTimeout(function(){
    $('#odometer2').html(300);
  }, {offset:'10%'},1000);

  setTimeout(function(){
    $('#odometer3').html(5);
  }, {offset:'10%'},1000);

  setTimeout(function(){
    $('#odometer4').html(15000);
  }, {offset:'10%'},1000);
  });
  $('#SlideRight').css('opacity', 0);
  $('#SlideLeft').css('opacity', 0);

  // animates the right image of the slide in //



  // adds the active class to bootstraps carsouel
  $('.carousel-inner .item:first').addClass('active');

  $(".current-menu-item").addClass('active');



if ($(window).width() > 1200){
  $('#SlideRight').waypoint(function(){
    $('#SlideRight').addClass('slideInRight').css('opacity', 1);
  }, {offset:'40%'});

  // animates the left text of the slide in //

  $('#SlideLeft').waypoint(function(){
    $('#SlideLeft').addClass('slideInLeft').css('opacity', 1);
  }, {offset:'40%'});
} else{
  $('#SlideRight, #SlideLeft').css('opacity', 1  );
}

});


  })( jQuery );
