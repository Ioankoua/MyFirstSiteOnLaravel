
$(function(){

	let but_light = '.button_light';
	let but_dark = '.button_dark';
	
	$(but_light).on('click', (function(){
		$('.content_container').css({'background-color':'#EFE78B'});
		$('.header').css({'background-color':'#E9CF25'});
		$('.footer').css({'background-color':'#E9CF25'});
		$('.card-body').css({'background-color':'#EBE27A'});
		$('.message_word').css({'color':'black'});
		$('.test_start').css({'color':'green'});
		sessionStorage["phone"] = 'light';	
	}));

	$(but_dark).on('click', (function(){
		$('.content_container').css({'background-color':'#5B575C'});
		$('.header').css({'background-color':'#D2DA2A'});
		$('.footer').css({'background-color':'#D2DA2A'});
		$('.card-body').css({'background-color':'#A9A9A9'});
		$('.message_word').css({'color':'#28C1A7'});
		$('.test_start').css({'color':'black'});
		sessionStorage["phone"] = 'dark';	
	}));

	if (sessionStorage["phone"] == 'dark') {
		$('.content_container').css({'background-color':'#5B575C'});
		$('.header').css({'background-color':'#D2DA2A'});
		$('.footer').css({'background-color':'#D2DA2A'});
		$('.card-body').css({'background-color':'#A9A9A9'});
		$('.message_word').css({'color':'#28C1A7'});
		$('.test_start').css({'color':'black'});
	}else{
		$('.content_container').css({'background-color':'#EFE78B'});
		$('.header').css({'background-color':'#E9CF25'});
		$('.footer').css({'background-color':'#E9CF25'});
		$('.card-body').css({'background-color':'#EBE27A'});
		$('.message_word').css({'color':'black'});
		$('.test_start').css({'color':'green'});
	}

})
		


	

	