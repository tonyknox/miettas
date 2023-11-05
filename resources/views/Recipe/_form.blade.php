<div class="grid grid-col-2  gap-4 mt-6">

    <div class="col-span-2">
        
			Recipe:<br />
			{{ html()->text('name')->size('100') }}
		
    </div>
    <div>
        <p>
            Body:<br />
            {{ html()->textarea('body')->rows(12)->cols(50) }}		
        </p><p>
            Method:<br />
            {{ html()->textarea('method')->rows(12)->cols(50) }}		
        </p><p>
            Ingredients:<br />
            {{ html()->textarea('my_ing')->rows(12)->cols(50) }}	
        </p><p>
            Left Overs:<br />
			{{ html()->textarea('left_overs')->rows(2)->cols(50) }}	
       </p><p>
            Remarks:<br />
			{{ html()->textarea('remarks')->rows(4)->cols(50) }}	
       </p><p>
            Private Comments:<br />
			{{ html()->textarea('priv_comments')->rows(2)->cols(50) }}	
       </p><p>
        
            Variations:<br />
			{{ html()->textarea('variations')->rows(2)->cols(50) }}	
        </p>
    </div>


<!------------------------------->




    <div>
        Preamble:<br />
        {{ html()->textarea('preamble')->rows(4)->cols(40) }}	
       <br /><br /></p><p>
        Techinque:<br />
		{{ html()->text('techinque')->size('40%') }}
        <br /><br /></p><p>
        Difficulty:<br />
		{{ html()->text('difficulty')->size('40%') }}
        <br /><br /></p><p>
        Serves:<br />
		{{ html()->text('serves')->size('40%') }}
        <br /><br /></p><p>
        Cost:<br />
		{{ html()->text('cost')->size('40%') }}
        <br /><br /></p><p>
        Season:<br />
		{{ html()->text('season')->size('40%') }}
        <br /><br /></p><p>
        Preparation Time:<br />
		{{ html()->text('prep_time')->size('40%') }}
        <br /><br /></p><p>
        Cook Time:<br />
		{{ html()->text('cook_time')->size('40%') }}
        <br /><br /></p><p>
        Public Credit:<br />
		{{ html()->text('credit_public')->size('40%') }}
        <br /><br /> </p><p>
        Cuisine:<br />
		{{ html()->text('cuisine')->size('40%') }}
        <br /><br /></p><p>
        Category:<br />
		{{ html()->text('category')->size('40%') }}
        <br /><br /></p><p>
        Recipe Sub-Type:<br />
		{{ html()->text('recipe_sub_type')->size('40%') }}
        <br /><br /></p><p>
        Recipe Index:<br />
		{{ html()->text('recipe_index')->size('40%') }}
        <br /><br /></p><p>
        Recipe Type:<br />
		{{ html()->text('recipe_type')->size('40%') }}
        <br /><br /></p><p>
        Book:<br />
		{{ html()->text('book')->size('40%') }}
        </p>
    </div>

</div>
</div>
<!------------------------------->


<div class="">

    <button
        class="bg-blue-500 text-black active:blue-600 font-bold uppercase text-xs px-4 py-2 outline-black mt-6 mr-1 mb-1"
        type="submit">
        Submit
    </button>

</div>
