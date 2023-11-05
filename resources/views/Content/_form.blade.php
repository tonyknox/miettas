<div class="w-full">
	<div class="grid grid-cols-2">
		<p>
			<span class="font-bold">Name</span><br />
			<span class="bg-slate-100">{{ html()->text('name')->size('40%') }}</span>
		</p><p>
			<span class="font-bold">Title</span><br />
			<span class="bg-slate-100">{{ html()->text('title')->size('40%') }}</span>
		</p><p>
			<span class="font-bold">Abstract</span><br />
			<span class="bg-slate-100">{{ html()->text('abstract')->size('40%') }}</span>
		</p><p>
			<span class="font-bold">Category</span><br />
			<span class="bg-slate-100">{{ html()->text('category')->size('40%') }}</span>
		</p>
		
		<p>
			<span class="font-bold">Body</span><br />
			<span class="bg-slate-100">{{ html()->textarea('body')->rows(15)->cols(50) }}</span>
		</p><p>
		<span class="font-bold">Images</span><br />
			<span class="bg-slate-100">{{ html()->textarea('images')->rows(4)->cols(50) }}</span>
			<span class="font-bold">Meta</span><br />
			<span class="bg-slate-100">{{ html()->textarea('meta')->rows(9)->cols(50) }}</span>
		</p>
	
	</div>

	<!------------------------------->

	<div class="grid md:grid-cols-3 gap-4 w-full">
		<div>			
			<span class="font-bold">HTML Name</span><br />
			<span class="bg-slate-100">{{ html()->text('html_name')->size('30%') }}</span>
		</div>
		<div>
			<span class="font-bold">Subject</span><br />
			<span class="bg-slate-100">{{ html()->text('subject')->size('30%') }}</span>
		</div>
		<div>
			<span class="font-bold">Article</span><br />
			<span class="bg-slate-100">{{ html()->text('article')->size('30%') }}</span>
		</div>
		<div>
			<span class="font-bold">Show/Hide</span><br />
			<span class="bg-slate-100">{{ html()->text('showhide')->size('30%') }}</span>
		</div>
	<div>
</div>
	</div>
	<button class="bg-blue-500 text-black active:blue-600 font-bold uppercase text-xs px-4 py-2 outline-black mt-6 mr-1 mb-1" type="submit">
		Submit
	</button>
<br />
	</div>
