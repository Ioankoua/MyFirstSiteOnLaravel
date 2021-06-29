
$(function(){

	let but_clear = '.button_clear';

	if (sessionStorage["foot"]) {
		$('.footer').css({'opacity':'0'});
	}else{
		$(but_clear).click (function(){
		$('.footer').css({'opacity':'0'});
		sessionStorage["foot"] = true;
		});
	}
});