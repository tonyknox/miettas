<br />

<p >		
	<h2>
		<a href="{!! url($tble, [$id => $prevPage])!!}" > < Previous {{ $text }}</a>
			&nbsp;:&nbsp;
		<a href="{!! url($tble, [$id => $nextPage])!!}" > Next {{ $text }} ></a>

	@if (Auth::check())<br /><a href="{!! url($tble.'/'.$id.'/edit') !!}">( Edit )</a>@endif
</h2></p>
