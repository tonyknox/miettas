<x-guest-layout>
    <x-slot:header>
        @include('/includes.searches', ['tble' => 'SearchIngredients'])
        <h2>Ingredients</h2>
    </x-slot:header>

    <!------------------------------>	
    <x-slot:sidebar></x-slot:sidebar>
    <!------------------------------>	

    <x-slot:main>
    @foreach($ingredients as $ing) 
		<p><a href="{!! route('ingredients.show', [$ing->ing_id]) !!}"> {{$ing->ing_id}} {!! $ing->ingredient !!}</a></p>		
	@endforeach	

	{{ $ingredients->links() }}

    </x-slot:main>

    <!------------------------------>	
    <x-slot:footer></x-slot:footer>
	<!------------------------------>	

</x-guest-layout>