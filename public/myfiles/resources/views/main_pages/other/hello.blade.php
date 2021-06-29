<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/style.css">
	<script src="/javas/jquery-3.3.1.min.js"></script>
	<title>Hello!</title>
</head>

<script>
	$(function(){
		let = show_butn = $('.my_button');
		show_butn.hide().show(2000);
	})
</script>

<body>

	<div class="hi_anime_teen">
		<div class="Hi_text">
				<h1>We are glad that you are back</h1>
	    </div>
		<div class="hello_button">
            <form action="/main">
                <button  class="my_button" type="submit" value="Далее">
                    Comeback
                </button>
            </form>
		</div>
	</div>

</body>
