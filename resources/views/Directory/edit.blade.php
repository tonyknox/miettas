@if(Auth::check())

	<x-guest1-layout>

		<h1>Edit: {!! $directory->chapname !!}</h1>

		<div style="margin-left:40px;margin-right:40px">
			{!! Form::model($directory,['route' => ['directories.update', 'directory' => $directory->id], 'method' => 'PUT']) !!}

				@include ('Directory._form', ['SubmitButtonText' => 'Update Directory'])

			{!! Form::close() !!}
		</div>
		

	</x-guest1-layout>

@endif