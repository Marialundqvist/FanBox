$(document).ready(function() {
   $('.pic').mouseover(function() {
       $(this).animate({'top': '-5%'});
   });
   $('.pic').mouseleave(function() {
       $(this).animate({
           'top': '0px'
		   


		
       }); 
   });

$('#loggain').hide();
$('.login').on('click', function() {
 $( "#loggain" ).slideToggle('slow', function() {
 });

});
$('.kundvagn').on('click', function () {
$('#kundlogin').removeClass('hide');
});

   
});

