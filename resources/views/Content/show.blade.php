<x-guest-layout>

	<x-slot:header>
        @if (!isset($contents))
            <div class="visible sm:invisible">
                @include('includes.searches', ['tble' => 'SearchContents'])
            </div>
                <h3>No articles match your query. Try again . . .<br /></h3>
        @else
             @include('includes.searches', ['tble' => 'SearchContents'])
             <h2>{{ $contents->name }}</h2> 
    </x-slot:header>	
	
	<!-------------------------------------------------------->

	<x-slot:sidebar>
		<h3>Articles</h3>
			@foreach ($cont as $c)	
				<p><a class="font-normal text-sm" href="{{ $c->id }}">{{ $c->name }}</a></p>  		
			@endforeach
	</x-slot:sidebar>

	<!-------------------------------------------------------->

	<x-slot:main>
		<h3>{!! $contents->name !!}</h3>
		@php 
			$conts = str_replace('--', '-', $contents->body); 
			preg_replace('/<h2>.*<.h2>/', '-, $conts)
		@endphp
		
		<span class="text-justify">{!! str_replace('/', '', $conts) !!}></span>
		
		<span style="text-align:center">@include('/includes.nextPrevMin',['tble'=>'contents', 'editTable'=>$contents->id, 'id'=>'id', 'text'=>'Article'])</span>	

	</x-slot:main>		

<!-------------------------------------------------------->

	<x-slot:footer>
	</x-slot:footer>

<!-------------------------------------------------------->

	@endif

</x-guest-layout>