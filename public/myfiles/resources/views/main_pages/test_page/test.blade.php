@extends('templates.main_template')

@section('title')Test @endsection

@section('main_content')

<div class="test_start">
	<p>Want to know if you are a libertarian?</p>
</div>
<div class="test_text">
	<div class="card border-success" style="border: solid"; >
		<div class="card-body">
			<h4 class="card-title text-center">{{ $data->title }}</h4>
			<p class="card-text" style="text-align: justify;">{{ $data->text }}</p>
		</div>
	</div>	
</div>
<div class="btn_position">
	<form action="{{ route('qwestions') }}" type="submit" value="Далее">
		<button class="my_button">
			START TEST
		</button>
	</form>
</div>

@endsection
