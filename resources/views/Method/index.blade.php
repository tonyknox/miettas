<x-guest-layout> 

    <x-slot:header>
        @include('/includes.searches',['tble'=>'Mymethod'])<br />
        <h2>Methods</h2>
    </x-slot:header> 

    <!------------------------------>
    
    <x-slot:sidebar></x-slot:sidebar>

    <!------------------------------>

    <x-slot:main>
       
        @foreach ($methods as $meth)
            <p><a href="{!! route('mymethods.show', [$meth->meth_id]) !!}">{!! $meth->name !!}</b></a></p>
        @endforeach
        <br />
        {{ $methods->links() }}
        
    </x-slot:main>

    <!------------------------------>

    <x-slot:footer> </x-slot:footer>

</x-guest-layout>