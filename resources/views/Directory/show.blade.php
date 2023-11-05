<x-guest-layout>

    <x-slot:header>


        @if (isset($noone))
            @include('includes.searches', ['tble' => 'SearchIngredients'])
            {{ $noone }}
            <h3>No match for your query. Try again . . .<br /></h3>
        @else
            <div class="visible sm:invisible">
                @include('includes/searchbox')
            </div>

            <div class="invisible sm:visible float-right">
                @include('includes/searchbox')
            </div>
        @endif

    </x-slot:header>


    <x-slot:sidebar>

    </x-slot:sidebar>


    <x-slot:main>

        <div class="mb-4 ml-20">

            <p class="text-xl font-bold mb-1">{!! $directory->name !!}</p>

        </div>

        <div class="ml-20">
            <p>{!! $directory->col_1 !!}</p>
            <p>{!! $directory->col_2 !!} </p>
            <p>{!! $directory->col_3 !!}</p>

        </div>

    </x-slot:main>

    <x-slot:search></x-slot:search>
<x-slot:footer></x-slot:footer>



    <x-slot:footer>
        <div class="ml-10">

            next-prev

        </div>
    </x-slot:footer>
</x-guest-layout>