<x-guest-layout>

    <x-slot:header>
        @if (!isset($ingredient))
            <div class="visible sm:invisible">
                @include('includes.searches', ['tble' => 'SearchIngredients'])
            </div>
                <h3>No ingredients match your query. Try again . . .<br /></h3>
        @else
             @include('includes.searches', ['tble' => 'SearchIngredients'])
             <h2>{{ $ingredient->ingredient }}</h2> 
    </x-slot:header>

    <x-slot:sidebar>
    </x-slot:sidebar>

    <x-slot:main>
        <div class="hyphens-auto text-justify">
            {!! strlen($ingredient->info) ? '<b>Ingredient Info</b> ' . $ingredient->info . '' : '' !!}
            {!! strlen($ingredient->season) ? '<b>Season</b> ' . $ingredient->season . ' ' : '' !!}
            {!! strlen($ingredient->availability) ? '<b>Availability</b> ' . $ingredient->availability . ' ' : '' !!}
            {!! isset($ingredient->comments) ? '<b>Comments</b> ' . $ingredient->comments . ' ' : '' !!}
            {!! isset($ingredient->cuisine) ? '<b>Cuisine</b> ' . $ingredient->cuisine . ' ' : '' !!}
            {!! isset($ingredient->type) ? '<b>Type</b> ' . $ingredient->type . ' ' : '' !!}
            {!! isset($ingredient->synonym) ? '<b>Synonym</b> ' . $ingredient->synonym . ' ' : '' !!}
            {!! isset($ingredient->substitute) ? '<b>Subsitute</b> ' . $ingredient->substitute . ' ' : '' !!}
            {!! isset($ingredient->recipe_rid) ? '<b>Recipe ID</b> ' . $ingredient->recipe_rid . ' ' : '' !!}
            <br />
            {!! isset($ingredient->alt_name) ? '<b>Alternative Name</b> ' . $ingredient->alt_name . ' ' : '' !!}
        </div>
    </x-slot:main>

    <x-slot:footer>
        <span style="text-align:center">@include('/includes.nextPrevMin',['tble'=>'ingredients', 'editTable'=>$ingredient->ing_id, 'id'=>'ing_id', 'text'=>'Ingredient'])</span>	
     </x-slot:footer>

  @endif

</x-guest-layout>
