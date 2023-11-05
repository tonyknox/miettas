

<div class="grid grid-cols-2 ">	

	<div>
		<label class="block" >
			<span class="font-bold" >Name</span>
		</label>
		@if(isset($directory))
			<input class="form-input block w-full" id="name" type="text" name="name" value="{{ $directory->name }}">
		@else
			<input class="form-input block w-full" id="name" type="text" name="name">
		@endif
	</div>	

	<div>
		<label class="block" >
			<span class="font-bold" >Title</span>
		</label>
		@if(isset($directory))
			<input class="form-input block w-full" id="title" type="text" name="title" value="{{ $directory->title }}">
		@else
			<input class="form-input block w-full" id="title" type="text" name="title">
		@endif
	</div>

	<!-------------->

	<div>
		<label class="block" >
			<span class="font-bold" >Column 1</span>
		</label>
		@if(isset($directory))
			<textarea class="form-textarea  block w-full" rows="10" id="meta" name="meta">{{ $directory->col_1}}</textarea>
		@else
			<textarea class="form-textarea  block w-full" rows="10" id="meta" name="col_1"></textarea>
		@endif
	</div>	

	<div>
		<label class="block" >
			<span class="font-bold" >Column 2</span>
		</label>
		@if(isset($directory))
			<textarea class="form-textarea  block w-full" rows="10" id="col_2" name="col_2">{{ $directory->col_2}}</textarea>
		@else
			<textarea class="form-textarea  block w-full" rows="10" id="col_1" name="col_2"></textarea>
		@endif
	</div>	

	<!-------------->
	
	<div class="mt-6">
		<label class="block" >
			<span class="font-bold" >Column 3</span>
		</label>
		@if(isset($directory))
			<textarea class="form-textarea  block w-full" rows="10" id="col_3" name="col_3">{{ $directory->col_3}}</textarea>
		@else
			<textarea class="form-textarea  block w-full" rows="10" id="col_3" name="col_3"></textarea>
		@endif
	</div>	

	<div>
		<label class="block" >
			<span class="font-bold" >Meta</span>
		</label>
		@if(isset($directory))
			<textarea class="form-textarea  block w-full" rows="10" id="meta" name="meta">{{ $directory->meta}}</textarea>
		@else
			<textarea class="form-textarea  block w-full" rows="10" id="meta" name="meta"></textarea>
		@endif
	</div>	

	<!-------------->
	<button
		class="bg-blue-500 text-black active:blue-600 font-bold uppercase text-xs px-4 py-2 outline-black mt-6 mr-1 mb-1"
		type="submit">Submit
	</button>

</div> 