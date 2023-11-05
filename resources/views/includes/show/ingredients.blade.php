{!! isset($ingredient->iseason) ? $ingredient->iseason." " : '' !!}
			{!! isset($ingredient->availability) ? $ingredient->availability." " : '' !!}
			{!! isset($ingredient->icomments) ? $ingredient->icomments." " : '' !!}
			{!! isset($ingredient->ialtname) ? $ingredient->ialtname." " : '' !!}
			{!! isset($ingredient->cuisine) ? $ingredient->cuisine." " : '' !!}
			{!! isset($ingredient->after_ing) ? $ingredient->after_ing." " : '' !!}

			{!! isset($ingredient->itype) ? $ingredient->itype." " : '' !!}
			{!! isset($ingredient->synonym) ? $ingredient->synonym." " : '' !!}
			{!! isset($ingredient->substitute) ? $ingredient->substitute." " : '' !!}
			{!! isset($ingredient->after) ? $ingredient->after." " : '' !!}
			{!! isset($ingredient->recipe_rid) ? $ingredient->recipe_rid." " : '' !!}

		</p>
		<p>
			@if (Auth::check())<a href="{{action('IngredientsController@edit', [$ingredient->iid])}}">( Edit )</a>@endif
		</p>