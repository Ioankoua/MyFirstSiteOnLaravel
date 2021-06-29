@extends('templates.main_template')

@section('title')ButtonGame @endsection

@section('main_content')



		<div class="button_position">
            <form action="№">
                <button  class="button" type="submit" value="Далее">
                    Click here:)
                </button>
            </form>
		</div>

		<div class="button_position_2">
            <form action="№">
                <button  class="button_2" type="submit" value="Далее">
                    LOOSER
                </button>
            </form>
		</div>

		<div class="button_position_3">
            <form action="/games/button/gameover">
                <button  class="button_3" type="submit" value="Далее">
                    Last shance!
                </button>
            </form>
		</div>

@endsection

