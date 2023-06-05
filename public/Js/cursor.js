$(document).ready(function(){
	$('.goup').hide();
	$('.ir-arriba').click(function(){
		$('body,html').animate({
			scrollTop:0
		},200)
	});
	$(window).scroll(function () {
		if ($(this  ).scrollTop() >0) {
			$('.ir-arriba').slideDown(300);
		}
		else {
			$('.ir-arriba').slideDown(300);
		}
	});
});