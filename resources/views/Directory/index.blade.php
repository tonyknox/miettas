<x-guest-layout>

	<x-slot:header>	
			<div class="text-xl font-bold">Directories</div>
	</x-slot:header>

	<x-slot:sidebar>
	</x-slot:sidebar>
<x-slot:main>
			@foreach($directory as $dir) 
				<div class="row">
					<div class="col-1">
						{{ $dir->id }} 
					</div>

					<div class="col" style="max-width:500px">

						<a href="{{ route('directories.show', [$dir->id]) }}">{!! $dir->name !!}</a><br />

						@if($dir!= '')
							(Auth::check())<a href="{{ route('directories.show', [$dir->id]) }}">( Edit )</a>
						@endif

					</div>
						
				</div>

			@endforeach
</x-slot:main>
<x-slot:search></x-slot:search>
	<x-slot:footer>
			{{-- {!! $directory->render() !!} --}}
			next-prev
	</x-slot:footer>
		
</x-guest-layout>