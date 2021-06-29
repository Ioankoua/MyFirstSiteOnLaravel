
$(function(){

let but = ('.button');
let but2 = ('.button_2');
let but3 = ('.button_3');

$(but).mouseover(function(){
let hide = $(but).hide(200)

	if (typeof hide === 'object') {
		let res = anim(but2)
		if (res === true) {
			
			$(but2).mouseover(function(){
			hide = $(but2).hide(200)

				if (typeof hide === 'object') {
					res = anim(but3)
				}
			})
		}

	
	function anim(but){
	$(but).animate({
		'opacity':'1'
		},(500))
	return true
	}

		}

	})
})



		

