$(function() {

		$.vegas( 'slideshow', {
		  backgrounds:[
			{ src:'images/slide1.jpg', fade:1000, valign:'bottom' },
			{ src:'images/slide2.jpg', fade:1000, valign:'bottom' },
			{ src:'images/slide3.jpg', fade:1000, valign:'bottom' },
			{ src:'images/slide4.jpg', fade:1000, valign:'bottom' },
			{ src:'images/slide5.jpg', fade:1000, valign:'bottom' }
		  ]
		});
/*
		$(".username").focus(function() {
			$(".user-icon").css("left","-28px");
		});
		$(".username").blur(function() {
			$(".user-icon").css("left","20px");
		});
		
		$(".password").focus(function() {
			$(".pass-icon").css("left","-28px");
		});
		$(".password").blur(function() {
			$(".pass-icon").css("left","20px");
		});
*/
});