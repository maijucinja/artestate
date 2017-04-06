// $(document).ready(function(){
	
// 	$('.carousel').carousel({
// 	    interval: false
// 	});

	
// 	$('div').click(function(){
// 		if($(this).is('[data-link]') ){
// 			var prop = $(this).attr('data-link');
// 			window.location.href = prop;
// 		}
// 	})

// 	$('.carousel').each(function(){
// 		var carId = $(this).attr('id');
// 		console.log(carId);
// 		$('#' + carId + ' .carousel-inner').magnificPopup({
// 		  delegate: 'a',
// 		  type: 'image',
// 		  gallery:{
// 		    enabled:true
// 		  }
// 		});
// 	})

// 	var mnuH = $('.main-menu').height();

// 	$(".backtoTop").click(function(event) {

//     if (this.hash !== "") {
//       event.preventDefault();

//       var hash = this.hash;

//       $('html, body').animate({
//         scrollTop: $(hash).offset().top - mnuH
//       }, 800 );
//     }
//   });

// 	// shifty mobile menu
// 	$('.navbar-toggle').click(function(){
// 		$('.offmenu').addClass( 'open');
// 		$('.offmenu .close').addClass( 'open');
// 		var width = $('.allwrap').width();
// 		var ww = width - 110;
// 		var wh = $(window).height();
// 		var mainh = wh - $('.main-nav').height() - 40;
		
// 		$('.allwrap').addClass('shifted');
// 		$('.allwrap').attr('style', ' -webkit-transform:translateX(-'+ww+'px);-moz-transform:translateX(-'+ww+'px);-ms-transform:translateX(-'+ww+'px);-o-transform:translateX(-'+ww+'px);transform:translateX(-'+ww+'px); height:'+mainh+'px');
// 	})
// 	$('.offmenu .close').click(function(){
// 		$('.offmenu').removeClass( 'open');
// 		$('.offmenu .close').removeClass( 'open');
// 		$('.allwrap').removeClass('shifted');
// 		$('.allwrap').attr('style', '');
// 	})
// 	$(".offmenu a").on('click', function(event) {

// 		$('.offmenu').removeClass('open');
// 		$('.offmenu .close').removeClass( 'open');
// 		$('.allwrap').removeClass('shifted');
// 		$('.allwrap').attr('style', '');
// 	});



// })