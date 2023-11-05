@if (Auth::check())

    <x-onecol-layout>    

    	<!--header------------------------->
	
		<x-slot:header>
			<h2>Edit: {!! $contents->name !!}</h2>
		</x-slot:header>


		<!--main content--------------->

		<x-slot:main>

			{{ html()->modelForm($contents, 'PUT')->route('contents.update', $contents->id)->open() }}

				@include ('Content._form', ['SubmitButtonText' => 'Update Methods'])

			{{ html()->closeModelForm() }}    

		</x-slot:main>

	<!--footer------------------->

	<x-slot:footer></x-slot:footer>

	@endif

</x-onecol-layout>


