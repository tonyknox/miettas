<x-guest-layout> 

    <x-slot:header>
        @if (!isset($method))
            <div class="visible sm:invisible">
                @include('includes.searches', ['tble' => 'SearchMethods'])
            </div>
                <h3>No methods matches your query. Try again . . .<br /></h3>
        @else
             @include('includes.searches', ['tble' => 'SearchMethods'])
             <h2>{{ $method->name }}</h2>    
    </x-slot:header>

    <!------------------------------------------------------------>

    <x-slot:sidebar>
        <!-- <p class="mb-4"><span class="font-bold text-xl">Methods</span><br/></p>
       
        @foreach ($meth as $meth)
            <p><a class="font-normal text-sm" href="{{ $meth->meth_id }}">{{ $meth->name }}</a></p>   
        @endforeach -->

    </x-slot:sidebar>

    <!------------------------------------------------------------>

    <x-slot:main>
        <p id='method'>
            {!! $method->method !!}
        </p>
    </x-slot:main>

@endif

    <!------------------------------------------------------------>
        
    <x-slot:footer>
        <span style="text-align:center">@include('/includes.nextPrevMin',['tble'=>'mymethods', 'editTable'=>$method->meth_id, 'id'=>'meth_id', 'text'=>'Method'])</span>	
     </x-slot:footer>

</x-guest-layout>
