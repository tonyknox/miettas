<x-onecol-layout>
    <x-slot:header>
        <img src="images/mietta_11_11_95_c_002 cropped.jpg" alt="Mietta at Mietta's in 1995 shortly before the restaurnat closed" width="100%" />
        <span class="caption">Mietta in the restaurant in 1995</span>     
    </x-slot:header>

    <x-slot:main>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mt-3">
            <div>
            <h3>Gardy's Recipe Box</h3>
            <img src="images/chefs/lamont_hands.jpg" alt="pastry shell" width="100%" />
            <span class="caption">Lining a flan pan with pastry</span><br />
            <div class="boc-content h-100 w-[100%] truncate">
                @foreach($gardy as $g) 
                    <a class="mt-3 -mb-2" href="{{ url('recipes', [$g->rec_id]) }}">{{ $g->name }}</a><br />
                @endforeach
            </div>
        </div>

        <div>
    <h3>Mietta's Recipes</h3>

    <img src="images/simone_patrizia.jpg" alt="Making pasta dough" width="100%" />
    <span class="caption">Four hands make light work - preparing pasta dough forthe restaurant</span><br />
    <div class="boc-content h-60 w-[100%] truncate">
    @foreach($mietta as $m) 
            <a class="mt-3 -mb-2" href="{{ url('recipes', [$m->rec_id]) }}" }}">{{ $m->name }}</a><br />
        @endforeach 
    </div>
    </div> 

    <div class="">
    <h3>Mietta's Books</h3>
    <img src="images/chefs/loubet_bruno_brunos_tables_2003/hr/loubet_bruno_0662.jpg" alt="Bruno Loubet" width="100%" />
    <span class="caption">Chef, Bruno Loubet at work</span><br />
    <div class="boc-content h-60 w-[100%] truncate">   
    @foreach($chef as $c)
        <a class="mt-3 -mb-2" href="{{ url('recipes', [$c->rec_id]) }}">{{ $c->name }}
</a><br />
        @endforeach
    </div> 

      
    </div> 
   
 </div>

    </x-slot:main>

    <x-slot:footer></x-slot:footer>
</x-onecol-layout>