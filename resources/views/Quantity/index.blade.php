<x-guest-layout>

<x-slot:header>	
	
	<h1 class="text-gray-800 font-bold mt-3 ml-8 md:ml-20">Quantities</h1>

	<div class="visible md:invisible -mt-8 float-right">
		@include('includes/searchbox')
	</div>	
	<div class="invisible md:visible  -mt-8 float-right ">
		@include('includes/searchbox')
	</div>	

</x-slot:header>

<x-slot:sidebar></x-slot:sidebar>
			
<!------------------------------>

<x-slot:main>	

	@foreach($quantity as $q) 

		<div class="mt-3 -mb-1"><a href="{!! route('quantities.show', [$q->qid]) !!}">{{$q->pre_qty}} {{$q->qty}} {{$q->unit}} {{$q->before_ing}} <strong>{!! $q->ingredient !!}</strong> {{$q->after_ing}} </a></div>
		

	@endforeach	
	<br /><br />	

	
	{{ $quantity->links() }}
</x-slot:main>

<x-slot:search></x-slot:search>
<x-slot:footer></x-slot:footer>
	<x-guest-layout>




