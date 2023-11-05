<x-guest-layout>

    <x-slot:header>
        
        <span class="">@include('/includes.searches',['tble'=>'Recipe'])</span><br />
        <span class="text-gray-800 font-bold text-xl">Recipes</span>
        

   </x-slot:header>

    <!------------------------------>
    <x-slot:sidebar></x-slot:sidebar>
    <!------------------------------>

    <x-slot:main>
        
        @foreach ($recipe as $rec)
            <div class="mt-3">
                <a href="{!! route('recipes.show', [$rec->rec_id]) !!}">
                    <span class="font-bold">{!! $rec->name !!}</span>
                </a>
                <p class="text-sm -mt-1">{!! $rec->rec_abstract !!}</p>
            </div>
        @endforeach
        
        <br />
        {{ $recipe->links() }}
        <br />

    </x-slot:main>

    <!------------------------------>

    <x-slot:footer></x-slot:footer>

</x-guest-layout>
