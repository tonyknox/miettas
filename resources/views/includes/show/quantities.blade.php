<p>
			{!! isset($quant->qty) ? $quant->qty." " : '' !!}
			{!! isset($quant->unit) ? ' '.$quant->unit." " : '' !!}
			{!! isset($quant->before_ing) ? '<br />'.$quant->before_ing." " : '' !!}
			{!! isset($quant->description) ? '<br />'.$quant->description." " : '' !!}
			{!! isset($quant->after_ing) ? '<br />'.$quant->after_ing." " : '' !!}
			
			
		</p>
		<p>
			@if (Auth::check())<a href="{{action('QuantitiesController@edit', [$quant->qid])}}">( Edit )</a>@endif
		</p>