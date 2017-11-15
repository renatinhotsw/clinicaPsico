$(function(){
	var nav = $(".menu");

	$(window).scroll(function(){

		if($(this).scrollTop() > 180){
			nav.addClass("menufixo");
		}else{
			nav.removeClass("menufixo");
		}
		
	});
});