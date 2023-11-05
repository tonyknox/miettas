<x-guest-layout>
    <x-slot:header></x-slot:header>
    <x-slot:sidebar></x-slot:sidebar>

    <x-slot:main>
 <div class="grid grid-cols-1 md:grid-cols-3 gap-3 mt-3">
    <div>
        <h2>Gardy's Recipe Box</h2>
        <img src="/images/simone_patrizia/pasta_dough-1.jpg" alt="Making pasta dough" width="100%" />

        @foreach($gardy as $g) 
            <b class="mt-3 -mb-2"><a href="{!! route('recipes.show', [$g->rid]) !!}">{!! $g->rname !!}</b>
            <span class="text-sm">{!! $g->rabstract !!}</span></a><br />
        @endforeach

        {{ $gardy->links() }}
    </div>

    <div>
        <h2>Mietta's Restaurant Recipes</h2>
        @foreach($mietta as $m)
        <b class="mt-3 -mb-2"><a href="{{ route('recipes.show', [$m->rid])}}">{!! $m->rname !!}</b>
            <span class="text-sm">{!! $m->rabstract !!}</span></a><br />
        @endforeach

        {{ $mietta->links() }}
    </div> 

    <div class="">
        <h2>Mietta's Books</h2>
        @foreach($chef as $c)
        <b class="mt-3 -mb-2"><a href="{{ route('recipes.show', [$c->rid])}}">{!! $c->rname !!}</b>
        <span class="text-sm">{!! $c->rabstract !!}</span></a><br />
        @endforeach
        
        {{ $chef->links() }}
    </div> 
   
 </div>
    </x-slot:main>

    <x-slot:footer></x-slot:footer>
</x-guest-layout>