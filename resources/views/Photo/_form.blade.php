<div class="flex justify-between">
       
    <div>
        Photo Name:<br />
        {{ html()->text('photo_name') }}
    </div><div>
        Outer Folder<br />
        {{ html()->text('outer_folder') }}
     </div><div>
        Folder 2<br />
        {{ html()->text('folder2')}}<br />
     </div><div>
        Folder 3<br />
        {{ html()->text('folder3')}}<br />

    
    </div>
</div>
<div class="flex justify-between">
   <div>
        Credit:<br />
        {{ html()->text('Credit') }}<br />
    </div><div>
        Copyright<br />
        {{ html()->text('copyright')}}<br />
    </div><div>
        Title<br />
        {{ html()->text('title')}}<br />
    </div><div>
        Caption<br />
        {{ html()->text('caption') }}<br />
</div></div>
<div class="flex justify-between">
    <div>
        X Dimension<br />
        {{ html()->text('x_dimension')}}
    </div><div>
        Y Dimension<br />
        {{ html()->text('y_dimension') }}
    </div><div>
        Photo Page ID<br />
        {{ html()->text('ppage_id')}}
    </div>
</div>

<div class="flex justify-between">
    <div>
        HR Link:<br />
        {{ html()->textarea('link_hr')->rows(4)->cols('45') }}
    </div><div>
        LR Link<br />
        {{ html()->textarea('link_lr')->rows(4)->cols('45') }}
    </div>
</div>
    <div class="flex justify-between">
    <div>Link Best:<br />
    {{ html()->textarea('link_best')->rows(4)->cols('45') }}
    </div><div>Metatags:<br />
    {{ html()->textarea('metatags')->rows(4)->cols('45') }}
</div></div>
        <button
            class="bg-blue-500 text-black active:blue-600 font-bold uppercase text-xs px-4 py-2 outline-black mt-6 mr-1 mb-1"
            type="submit">Submit
        </button>
    </div>
</div>