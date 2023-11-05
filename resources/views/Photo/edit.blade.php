@if (Auth::check())

    <x-onecol-layout>    

    <!--header------------------------->
	
		<x-slot:header>

			<span class="font-bold text-xl">Edit: {!! $photo->photo_name !!}</span>
            <br /><br />

		</x-slot:header>


		<!--main content--------------->

		<x-slot:main>

			<p class="-mt-8">

				{{ html()->modelForm($photo, 'PUT')->route('photos.update', $photo->id)->open() }}

					@include ('Photo._form', ['SubmitButtonText' => 'Update Photos'])

				{{ html()->closeModelForm() }}
			</p>      

		</x-slot:main>

<!--footer------------------->

<x-slot:footer>
&nbsp;
</x-slot:footer>


    </x-onecol-layout>
@endif
