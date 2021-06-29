<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/style.css">
	<script src="/javas/jquery-3.3.1.min.js"></script>
	<script src="/javas/change_phone.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Libertarian</title>
</head>
<body>

<div class="header">
	<div class="header_main_img">
		<img src="/img/AncapSnake.png">
	</div>
	<div class="header_main_text">
		<h2>Site future libertarian party</h2>
	</div>

	<div class="header_meny">
		<a href="/main">Main Page</a>
		<a href="/history">History</a>
		<a href="/test">Test</a>
		<a href="/forum">Forum</a>
		<a href="/games">Games</a>
	</div>
</div>

<div class="my_container">

	<div class="text_block">
		<div class="lib_text">
			<h2 class="lib-title">{{ $data->title }}</h2>
			<p  class="lib-text">{{ $data->text }}</p>
		</div>
	</div>

	<div class="main_phone"></div>
	<div class="ancap_cat"></div>
	<div class="libsnake">
		<img src="/img/libsnake.png">
	</div>

</div>

<div class="footer">
	<div class="footer_name">
		&copy; Ioanko
	</div>
	<div class="footer_number">
		-380983391288 &copy;All rights reserved 
	</div>
</div>

</div>
</body>
</html>



	

