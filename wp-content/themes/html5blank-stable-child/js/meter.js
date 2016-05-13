(function($){

$(document).ready(function(){



// animates the right image of the slide in //

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
});

  })( jQuery );
