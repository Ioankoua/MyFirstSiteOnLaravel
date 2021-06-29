@extends('templates.main_template')

@section('title')Test @endsection

@section('main_content')

<div class="page_title">
	<h1>Тест на Либертарианство</h1>
</div>

<div class="page_test">
	<form action="{{ route('result_submit') }}" >
		<div class="qwestion_name">
			<p>Вопрос 1. Поддерживаете ли вы капитализм?</p>
		</div>
		<ul>
			<input type="checkbox" class="in" name="answer1" value="4" />
			<label for="answer1"> Абсолютно </label>
		</ul>
		<ul>
			<input type="checkbox" class="in" name="answer1" value="3" />
			<label for="answer1"> Скорее да </label>
		</ul>
		<ul>
			<input type="checkbox" class="in" name="answer1" value="2" />
			<label for="answer1"> Частично </label>
		</ul>
		<ul>
			<input type="checkbox" class="in" name="answer1" value="1" />
			<label for="answer1"> Нет </label>
		</ul>

		<div class="qwestion_name">
			<p>Вопрос 2. Являетесь ли в сторонником авторитаризма?</p>
		</div>
		<ul>
			<input type="checkbox" class="in" name="answer2" value="1" />
			<label for="answer2"> Асолютно </label>
		</ul>
		<ul>
			<input type="checkbox" class="in" name="answer2" value="2" />
			<label for="answer2"> Скорее да </label>
		</ul>
		<ul>
			<input type="checkbox" class="in" name="answer2" value="3" />
			<label for="answer2"> Скорее нет </label>
		</ul>
		<ul>
			<input type="checkbox" class="in" name="answer2" value="4" />
			<label for="answer2"> Точно нет! </label>
		</ul>

		<div class="qwestion_name">
			<p>Вопрос 3. Считаете ли вы что налоги должны быть низькими?</p>
		</div>
		<ul>
			<input type="checkbox" class="in" name="answer3" value="4" />
			<label for="answer3"> Абсолютно да! </label>
		</ul>
		<ul>
			<input type="checkbox" class="in" name="answer3" value="3" />
			<label for="answer3"> Скорее да </label>
		</ul>
		<ul>
			<input type="checkbox" class="in" name="answer3" value="2" />
			<label for="answer3"> Скорее нет </label>
		</ul>
		<ul>
			<input type="checkbox" class="in" name="answer3" value="1" />
			<label for="answer3"> Нет они должны быть высокими </label>
		</ul>

		<div class="qwestion_name">
			<p>Вопрос 4. Считаете ли вы что владение оружием и наркотиками должно быть декременализировано?</p>
		</div>
		<ul>
			<input type="checkbox" class="in" name="answer4" value="4" />
			<label for="answer4"> Естествено </label>
		</ul>
		<ul>
			<input type="checkbox" class="in" name="answer4" value="3" />
			<label for="answer4"> Скорее да </label>
		</ul>
		<ul>
			<input type="checkbox" class="in" name="answer4" value="2" />
			<label for="answer4"> Скорее нет </label>
		</ul>
		<ul>
			<input type="checkbox" class="in" name="answer4" value="1" />
			<label for="answer4"> Некогда! </label>
		</ul>

		<div class="qwestion_name">
			<p>Вопрос 5. Являетесь ли вы сторонником анархии?</p>
		</div>
		<ul>
			<input type="checkbox" class="in" name="answer5" value="4" />
			<label for="answer5"> Аанархия вперед! </label>
		</ul>
		<ul>
			<input type="checkbox" class="in" name="answer5" value="3" />
			<label for="answer5"> За минархизм! </label>
		</ul>
		<ul>
			<input type="checkbox" class="in" name="answer5" value="2" />
			<label for="answer5"> Нет </label>
		</ul>
		<ul>
			<input type="checkbox" class="in" name="answer5" value="1" />
			<label for="answer5"> НЕЕЕЕЕЕЕЕТ! </label>
		</ul>


		<div class="next_page">
			<form action="#" type="submit" value="Далее">
				<button class="my_button">
					LOOK RESULT
				</button>
			</form>
		</div>
	</form>
</div>


@endsection
