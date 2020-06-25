// script para animação do scroll
$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
		  if (scroll >= 10) {               
		    $(".meuMenu").addClass("ativo");    
		  } else {
		    $(".meuMenu").removeClass("ativo"); 
		  }
});

$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
		  if (scroll >= 10) {               
		    $(".menu2").addClass("ativar");    
		  } else {
		    $(".menu2").removeClass("ativar"); 
		  }
});

$(window).scroll(function() {    
      var scroll = $(window).scrollTop();
        if (scroll >= 100 && scroll <= 700) {              
          $(".icon1").addClass("i1");    
        } else {
          $(".icon1").removeClass("i1"); 
        }
});

$(window).scroll(function() {    
      var scroll = $(window).scrollTop();
        if (scroll >= 10) {              
          $(".logo").addClass("lg");    
        } else {
          $(".logo").removeClass("lg"); 
        }
});


// background automatico
var id = 0;
var imgs = new Array();
imgs[0] = "img/foto5.png";
imgs[1] = "img/map.png";
imgs[2] = "img/mob.png";
imgs[3] = "img/foto4.png";
//Aqui apenas adicione mais imagens
function troca(){
	if (id<imgs.length-1){
	id++;	
	}else{
		id=0
	}
	$("#box").fadeOut(500);
	setTimeout("$('#box').html('<img src=\""+imgs[id]+" \" alt=\"Imagem\" title=\"Imagens\" class=\"imgheader img\"  />');$('#box').fadeIn(500);",500);
}
var segundos = 3; //Segundos entre cada imagem
setInterval("troca();",segundos*3000);


// carousel start
$(document).ready(function(){
  var slideImages = [ {src: 'img/4.jpg'},
                    {src: 'img/5.jpg'},
                    {src: 'img/6.jpg'},
                    {src: 'img/9.jpg'},
                    {src: 'img/10.jpg'} ]
  //var jR3DCarousel;
  
  jR3DCarousel = $('.jR3DCarouselGallery').jR3DCarousel({
    width: 200,     /* largest allowed width */
    height: 272,    /* largest allowed height */
    slides: slideImages /* array of images source */
  });
  
  var carouselCustomeTemplateProps =  {
        width: 350,         /* largest allowed width */
        height: 600,        /* largest allowed height */
        slideLayout : 'cover',     /* "contain" (fit according to aspect ratio), "fill" (stretches object to fill) and "cover" (overflows box but maintains ratio) */
        animation: 'slide3D',   /* slide | scroll | fade | zoomInSlide | zoomInScroll */
        animationCurve: 'ease',
        animationDuration: 1900,
        animationInterval: 5000,
        slideClass: 'jR3DCarouselCustomSlide',
        autoplay: true,
        controls: true,     /* control buttons */
        navigation: ''      /* circles | squares | '' */,
        perspective: 1200,
        rotationDirection: 'ltr',
        onSlideShow: slideShownCallback
          
    }
  function slideShownCallback($slide){
    console.log("Slide shown: ", $slide.find('img').attr('src'))
  }

  jR3DCarouselCustomeTemplate = $('.jR3DCarouselGalleryCustomeTemplate').jR3DCarousel(carouselCustomeTemplateProps);

  })
