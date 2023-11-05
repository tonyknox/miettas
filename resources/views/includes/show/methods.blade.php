<p>
			{!! isset($meth->method) ? $meth->method." " : '' !!}
			{!! isset($meth->mtype) ? $meth->mtype." " : '' !!}
			{!! isset($meth->link_string) ? $meth->link_string." " : '' !!}
			
		</p>
		<p>
			@if (Auth::check())<a href="{{action('AmethodsController@edit', [$method->mid])}}">( Edit )</a>@endif
		</p>