@if (Auth::check())

    <x-onecol-layout>    

    <!--header------------------------->
	
		<x-slot:header>

			<sh2>Edit: {!! $ingredient->ingredient !!}</h2>

		</x-slot:header>


		<!--main content--------------->

		<x-slot:main>

			<p class="-mt-8">

				{{ html()->modelForm($ingredient, 'PUT')->route('ingredients.update', $ingredient->ing_id)->open() }}

					@include ('Ingredient._form', ['SubmitButtonText' => 'Update Methods'])

				{{ html()->closeModelForm() }}
			</p>      

		</x-slot:main>

<!--footer------------------->

<x-slot:footer>
&nbsp;
</x-slot:footer>


    </x-onecol-layout>
@endif

