@if(strlen($recipe->leftovers))
	<br />
	Left Overs: {{$recipe->leftovers }}
@endif
@if(strlen($recipe->variations))
	<br />
	<strong>Variations: </strong>{{$recipe->variations }}
@endif