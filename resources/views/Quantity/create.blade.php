@if(Auth::check())

	@extends('layouts/app')

	@section('content2')

		<h1>New Quantity</h1>

			{!! Form::open(['url' => 'quantities']) !!}

				@include ('Quantity._form', ['SubmitButtonText' => 'Add Quantity'])

			{!! Form::close() !!}

			@include ('errors.list')

	@stop

@endif