@if(Auth::check())
    
	<x-onecol-layout>

		<!--header------------------------->
			
		<x-slot:header>
		<h2>New Article</h2>
		</x-slot:header>

		<!--main content--------------->

		<x-slot:main>

			{{ html()->form('POST')->route('contents.store')->open() }}
						
			@include ('Content._form')

			{{ html()->form()->close() }}

		</x-slot:main>

		<!--footer------------------->

		<x-slot:footer></x-slot:footer>


    </x-onecol-layout>

@endif