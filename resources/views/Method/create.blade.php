@if (Auth::check())
    
	<x-onecol-layout>

		<!--header------------------------->
			
		<x-slot:header>
		<span class="text-xl font-bold">New Method</span>
		</x-slot:header>

		<!--main content--------------->

		<x-slot:main>

			{{ html()->form('POST')->route('mymethods.store')->open() }}
						
			@include ('Method._form')

			{{ html()->form()->close() }}

		</x-slot:main>

		<!--footer------------------->

		<x-slot:footer></x-slot:footer>


    </x-onecol-layout>
@endif

