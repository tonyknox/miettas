 <div class="grid grid-cols-1 ">
    <div>     
    Name:<br />
    {{ html()->text('name')->size('78') }}<br />
    Method:<br />
    {{ html()->textarea('method')->rows(12)->cols(78) }}	
</div>
</div>   
   
<!------------------------------->

<div class="grid grid-cols-2 gap-4">
    <div>
    Link String:<br />
    {{ html()->text('link_string')->size('35') }}
    </div>
    <div>
    Type:<br />
    {{ html()->text('method_type')->size('35') }}
    </div>
</div>

<div class="grid grid-cols-3 ">
    <button
        class="bg-blue-500 text-black active:blue-600 font-bold uppercase text-xs px-4 py-2 outline-black mt-6 mr-1 mb-1"
        type="submit">Submit
    </button>
</div>
