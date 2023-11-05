
	
	<div class="grid md:grid-cols-1 gap-4 mt-6">
		
		<div>
			ingredients:<br />
			{{ html()->text('ingredient')->size('106') }}<br />
		</div>
	</div>

	<!---------------------------------->

	<div class="grid md:grid-cols-2 gap-4">

		<div>
			Season:<br />
			{{ html()->text('season')->size('50') }}<br />
		</div><div>
			Availability:<br />
			{{ html()->text('availability')->size('50') }}<br />
		</div>
	
		<div>	
			Info:<br />
    		{{ html()->textarea('info')->rows(12)->cols(50) }}	
		</div>		

		<div>
			Alternative Name:<br />
   			 {{ html()->textarea('alt_name')->rows(12)->cols(50) }}	


		</div>

	</div>

	<!-- ------------------------------ -->

	<div class="grid md:grid-cols-3 gap-4 ">

		<div>
			Cuisine:<br />
    		{{ html()->text('cuisine')->size('30') }}<br />
		</div>

		<div >
			Type:<br />
    		{{ html()->text('ing_type')->size('30') }}<br />
		</div>

		<div>

			Synonym:<br />
   			{{ html()->text('synonym')->size('30') }}<br />
		</div>
	</div>

	<!-- ------------------------------ -->

	<div class="grid md:grid-cols-2 gap-4 ">
		<div>
			Substitute:<br />
    		{{ html()->text('substitute')->size('106') }}<br />
		</div>
	</div>
		{{-- <div class="">
			<label class="font-bold"  for="grid-ingredient_iid">After: </label>	
			<input class="form-input block w-full" id="grid-ingredient_iid" type="text" name="after" value="{{ $ingredient->after }}">
		</div> --}}
	

<!-- ------------------------------ -->
	<div>	

		<button class="bg-blue-500 text-black active:blue-600 font-bold uppercase text-xs px-4 py-2 outline-black mt-6 mr-1 mb-1" type="submit">
			Submit
		</button>

	</div>

