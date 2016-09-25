$(document).ready(function()
{
$("#top-menu li a").each(function(){  
var a="<span>"+ $(this).text() + "</span>";
$(this).append(a);
});

    $('[data-toggle="tooltip"]').tooltip({placement : 'bottom'});   
  



var $lis = $('.d3mslider ul > li');
$(".d3mslider .next").click(function(){   
var $slide =  $('.currents').removeClass('currents animated fadeIn');
($slide.next().length > 0 ? $slide.next() : $lis.first()).addClass('currents animated  fadeIn');		   
$(".d3mslider ul li.currents").removeAttr("style");
$(this).removeClass("animated  fadeIn");
});
 




	
	 $(".d3mslider .prev").click(function(){   
        var $slide =  $('.currents').removeClass('currents');
        ($slide.prev().length > 0 ? $slide.prev() : $lis.last()).addClass('currents');
		$(".d3mslider ul li.currents").removeAttr("style");
$(".d3mslider ul li").find('img').removeClass("animated  fadeIn");

  $(".d3mslider ul li.currents").find('img').addClass("animated  fadeIn");
    });





function addcls() {
        var current = $('.d3mslider  li.currents').removeClass('currents animated  fadeIn'),
        next = current.next().length ? current.next() : current.siblings().filter(':first');
        next.addClass('currents animated  fadeIn');
    	var currentImage = $(".d3mslider li.currents  ");

var onLastLi = $(".d3mslider li:last ").hasClass("currents ");
var currentImage = $(".d3mslider li.currents ");



 if(onLastLi){
var nextImage = $(".d3mslider li:first ");
} else {
      var nextImage = $(".d3mslider li.currents ").next();
    }

  

 };

setInterval(function () {
addcls();}, 3000);



$('h2').each(function(){

    var text = $(this).text().split(' ');
    if(text.length < 2)
        return;

    text[1] = '<span class="text">'+text[1]+'</span>';

    $(this).html( text.join(' ') );

});


  $('.crousel').carouFredSel({
          auto: true,
    prev: { button: function() { return $(this).closest('div').prev().find('.prev'); }}, 
             
             next: { button: function() { return $(this).closest('div').prev().find('.next'); }}, 

 
          scroll : {
            items            : 1,
            easing            : "elastic",
            duration        : 1000,
            pauseOnHover    : true
        }
        });


});



