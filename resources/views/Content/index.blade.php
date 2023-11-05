<x-guest-layout>

	<x-slot:header>
		@include('/includes.searches',['tble'=>'contents'])<br />
        <h2>Archive</h2>
	</x-slot:header> 

	<!------------------------------>	
	<x-slot:sidebar></x-slot:sidebar>
	<!------------------------------>	

	<x-slot:main>

		@foreach($content as $cont) 
			<h4><a href="{{ route('contents.show', [$cont->id]) }}">{!! $cont->name !!}</a></h4>
			<p class="text-sm mb-4">{!! str_replace('\\', '', $cont->abstract) !!}</p>
		@endforeach	

		{{ $content->links() }}
		
	</x-slot:main>

	<!------------------------------>	
	<x-slot:footer></x-slot:footer>
	<!------------------------------>	

</x-guest-layout>
