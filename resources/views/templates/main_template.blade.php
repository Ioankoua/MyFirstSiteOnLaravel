<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/style.css">
	<script src="/javas/jquery-3.3.1.min.js"></script>
	<script src="/javas/change_phone.js"></script>
	<script src="/javas/out_footer.js"></script>
	<script src="/javas/button_game.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>@yield('title')</title>
</head>
<body>
	
<div class="header">
	<div class="header_main_img">
		<img src="/img/AncapSnake.png">
	</div>
	<div class="header_main_text">
		<h2>Site future libartarian party</h2>
	</div>

	<div class="header_meny">
		<a href="/main">Main Page</a>
		<a href="/history">History</a>
		<a href="/test">Test</a>
		<a href="/forum">Forum</a>
		<a href="/games">Games</a>
	</div>

<div class="change_phone">
	<div class="cp_text"><p>Change Phone</p></div>
	<form action="#">
        <button  class="button_light" type="submit" value="Далее">
            light
        </button>
    </form>
    <form action="#">
        <button  class="button_dark" type="submit" value="Далее">
            Dark
        </button>
    </form>
	</div>	
</div>


<div class="my_container">
	<div class="content_container">
	@yield('main_content') 
	</div>
</div>


<div class="footer">
	<div class="footer_name">
		&copy; Ioanko
	</div>
	<div class="footer_number">
		-380983391288 &copy;All rights reserved 
	</div>	
	<div class="foot_button">
		<form action="#">
        	<button  class="button_clear" type="submit" value="Далее">
            Clear
       		</button>
    	</form>
	</div>
</div>



	
</body>
</html>
