@extends('templates.main_template')

@section('title')Forum @endsection

@section('main_content')

<div class="block_message">
	<form action="{{ route('contact-form') }}" method="post">
		@csrf

		<div class="form-group">
			<label class="message_word" for="name">Your name</label>
			<input type="text" name="name" class="form-control" placeholder="Bob">
		</div>


		<div class="form-group">
			<label class="message_word" for="email">Your email</label>
			<input type="text" name="email" id="email" class="form-control" placeholder="lol@gmail.com">
		</div>


		<div class="form-group">
			<label class="message_word" for="subject">Your subject</label>
			<input type="text" name="subject" id="subject" class="form-control" placeholder="Thema">
		</div>

		<div class="form-group">
			<label class="message_word" for="message">Your message</label>
			<textarea type="text" name="message" id="message" class="form-control" placeholder="random text"></textarea>
		</div>

		<div class="message_button_position">
			<button type="submit" class="btn btn-success">Send</button>
		</div>
	
	</form>
</div>

<div class="answer_block">
	@foreach($user_text as $el)
		<div class="alert alert-info">
			<h4> {{ $el->message }}</h4>
		</div>
	@endforeach
</div>



@endsection
