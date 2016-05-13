(function($){

$(document).ready(function(){

$('#SlideRight').css('opacity', 0);
$('#SlideLeft').css('opacity', 0);

// animates the right image of the slide in //

$('#SlideRight').waypoint(function(){
  $('#SlideRight').addClass('slideInRight').css('opacity', 1);
}, {offset:'40%'});

// animates the left text of the slide in //

$('#SlideLeft').waypoint(function(){
  $('#SlideLeft').addClass('slideInLeft').css('opacity', 1);
}, {offset:'40%'});

})

  })( jQuery );
