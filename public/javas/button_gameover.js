$(function(){

let scrimer = ('.scrimer img');
let but = ('.button_2');

let some = $(scrimer).animate({
		'opacity':'0'
		},(1700))

if (typeof some === 'object') {
	$(but).animate({
		'opacity':'1'
		},(3500))
	}
})