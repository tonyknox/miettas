@if (Auth::check())
    <x-onecol-layout>

<!--header------------------------->
	
<x-slot:header>

<span class="text-xl font-bold">New Recipe</span>

</x-slot:header>

<!--main content--------------->

<x-slot:main>

{{ html()->form('POST')->route('recipes.store')->open() }}
			
			@include ('Recipe._form')

		{{ html()->form()->close() }}

</x-slot:main>


<!--footer------------------->

<x-slot:footer>
&nbsp;
</x-slot:footer>


    </x-onecol-layout>
@endif
