@if (Auth::check())

    <x-onecol-layout>    

    <!--header------------------------->
	
		<x-slot:header>

			<span class="font-bold text-xl">Edit: {!! $method->name !!}</span>

		</x-slot:header>


		<!--main content--------------->

		<x-slot:main>

			<p class="-mt-8">

				{{ html()->modelForm($method, 'PUT')->route('mymethods.update', $method->meth_id)->open() }}

					@include ('Method._form', ['SubmitButtonText' => 'Update Methods'])

				{{ html()->closeModelForm() }}
			</p>      

		</x-slot:main>

<!--footer------------------->

<x-slot:footer>
&nbsp;
</x-slot:footer>


    </x-onecol-layout>
@endif
