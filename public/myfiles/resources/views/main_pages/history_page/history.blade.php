@extends('templates.main_template')

@section('title')History of libartarian @endsection

@section('main_content')

	<div class="history_text">
		<div class="card border-success" style="border: solid"; >
			<div class="card-body">
				<h2 class="card-title text-center">{{ $data->title }}</h2>
				<p class="card-text" style="text-align: justify;">{{ $data->text }}</p>
			</div>
		</div>
	</div>
	
	<div class="container_history_photo">
		<div class="history_photoes">
			<div class="card text-center border-dark" style="width: 15rem">
				<img src="/img/history1.jpg" class="card-img-top">
				<div class="card-body ">
					<h5 class="card-title">Henry George</h5>
					<p class="card-text">Founder of georgeism, who proposed replacing all taxes with a single land tax</p>
					<a href="https://en.wikipedia.org/wiki/Henry_George" class="btn btn-warning">To learn more</a>
				</div>
			</div>
		</div>

		<div class="history_photoes">
			<div class="card text-center border-dark" style="width: 15rem">
				<img src="/img/history2.jpg" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title">Thomas Paine</h5>
					<p class="card-text">Whose theory of property showed a libertarian concern with the redistribution of resources</p>
					<a href="https://en.wikipedia.org/wiki/Thomas_Paine" class="btn btn-warning">To learn more</a>
				</div>
			</div>
		</div>
	</div>


@endsection
