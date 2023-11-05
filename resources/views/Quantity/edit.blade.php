@if(Auth::check())

	@extends('layouts/app')


	@section('header')
		<br /><br />
			<h1>Edit: {{ $quantity->ingredient }}</h1>
			<br />
			<form action="{!! url('quantities', [$quantity->qid])!!}" method="post" >
				@csrf
				@method('PATCH')

				@include ('Quantity._form', ['SubmitButtonText' => 'Update Quantity'])

			</form>
					
		@include ('errors.list')

	@stop

@endif
