<x-guest-layout>

	<!--header------------------------->

	<x-slot:header>

		<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchPhotos'])</span>

		@if( isset($noresult))
			<h1>{{ $noresult }}</h1>
		@else
			<h1 class="max-w-[520px]">Photos</h1>
		@endif

	</x-slot:header>

	<!--sidebar---------------------------->
	
	<x-slot:sidebar>
		<h5>
			
		</h4>
	</x-slot:sidebar>
	
	<!---main content------------------->

	<x-slot:main>

		@foreach($photos as $ph) 
		
			
				<!-- image -->	
				
					

						<div class="flex w-[800px] p-2">
							{!! $ph->link_hr !!}{!! $ph->link_lr !!}</a> <span class="ml-3 w-[600px]">{{ $ph->title }} {{ $ph->photo_name }}</span>
						</div>
					
					
				

				
		@endforeach
		
			{!! $photos->links() !!}
			
			</x-slot:main>

			<x-slot:search>

				<span class="invisible sm:visible"]>@include('includes/searches', ['tble' => 'SearchBuildings'])</span>

			</x-slot:search>

<!--footer------------------->

<x-slot:footer>
	
</x-slot:footer> 

</x-guest-layout>
