@extends('templates.main_template')

@section('title')Games @endsection

@section('main_content')

<div class="block_button">
	<div class="card text-center border-dark" style="width: 15rem">
		<img src="/img/button_click.jpg" class="card-img-top" style="height: 37vh">
		<div class="card-body ">
			<h5 class="card-title">Button game</h5>
			<p class="card-text">You need just click of button)))</p>
			<a href="/games/button" class="btn btn-warning">Play</a>
		</div>
	</div>
</div>

<div class="block_chess">
	<div class="card text-center border-dark" style="width: 15rem">
		<img src="/img/chess.jpg" class="card-img-top" style="height: 37vh">
		<div class="card-body ">
			<h5 class="card-title">Chess</h5>
			<p class="card-text">Tipical clasic chess with bags:)))</p>
			<a href="/games/chess" class="btn btn-warning">Play</a>
		</div>
	</div>
</div>


@endsection
