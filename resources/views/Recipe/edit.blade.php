@if (Auth::check())
    <x-onecol-layout>    

    <!--header------------------------->
	
	<x-slot:header>

<span class="font-bold text-xl">Edit: {!! $recipe->name !!}</span>

</x-slot:header>


<!------------------------------>

<x-slot:sidebar>
    &nbsp;
</x-slot:sidebar>


<!--main content--------------->

<x-slot:main>
<p class="-mt-8">

    {{ html()->modelForm($recipe, 'PUT')->route('recipes.update', $recipe->rec_id)->open() }}

		@include ('Recipe._form', ['SubmitButtonText' => 'Update Recipe'])

	{{ html()->closeModelForm() }}
</p>      

</x-slot:main>

<!--footer------------------->

<x-slot:footer>
&nbsp;
</x-slot:footer>


    </x-onecol-layout>
@endif
