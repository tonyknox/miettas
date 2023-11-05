@if(Auth::check())

	<x-guest1-layout>

		
			<h1>New Directory</h1>
		
		

		<div style="margin-left:40px;margin-right:40px">

			{!! Form::open(['url' => 'directories']) !!}

				@include ('Directory._form', ['SubmitButtonText' => 'Add Directory'])

			{!! Form::close() !!}

		</div>

		
	</x-guest1-layout>

@endif