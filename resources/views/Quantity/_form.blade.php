<div class="grid grid-cols-3 gap-4 ">
    <div>
        <label class="font-bold" for="grid-qid">Quantity ID: </label>
        <input class="form-input block w-full" id="grid-qid" type="text" name="qid" value="{{ $quantity->qid }}">
    </div>

    <div class="">
        <label class="font-bold" for="grid-ingredient_iid">Ingredient ID: </label>
        <input class="form-input block w-full" id="grid-ingredient_iid" type="text" name="ingredient_iid"
            value="{{ $quantity->ingredient_iid }}">
    </div>

    <div class="">
        <label class="font-bold" for="grid-recipe_rid">Recipe ID: </label>
        <input class="form-input block w-full" id="grid-recipe_rid" type="text" name="recipe_rid"
            value="{{ $quantity->recipe_rid }}">
    </div>

    <!-- ------------------------------ -->
    <div class="">
        <label class="font-bold" for="grid-pre_qty">Pre Quantity: </label>
        <input class="form-input block w-full" id="grid-pre_qty" type="text" name="pre_qty"
            value="{{ $quantity->pre_qty }}">
    </div>

    <div class="">
        <label class="font-bold" for="grid-qty">Quantity: </label>
        <input class="form-input block w-full" id="grid-qty" type="text" name="qty"
            value="{{ $quantity->qty }}">
    </div>

    <div class="">
        <label class="font-bold" for="grid-unit">Unit: </label>
        <input class="form-input block w-full" id="grid-unit" type="text" name="unit"
            value="{{ $quantity->unit }}">
    </div>
</div>

<!-- ------------------------------ -->

<br />
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 ">
    <div class="">
        <label class="font-bold" for="grid-pre_qty">Before Ingredient: </label>
        <input class="form-input block w-full" id="grid-before_ing" type="text" name="before_ing"
            value="{{ $quantity->before_ing }}">
    </div>

    <div class="">
        <label class="font-bold" for="grid-ingredient">Ingredient: </label>
        <input class="form-input block w-full" id="grid-ingredient" type="text" name="ingredient"
            value="{{ $quantity->ingredient }}">
    </div>

    <div class="">
        <label class="font-bold" for="grid-unit">After Ingredient: </label>
        <input class="form-input block w-full" id="grid-after_ing" type="text" name="after_ing"
            value="{{ $quantity->after_ing }}">
    </div>
</div>

<!-- ------------------------------ -->
<br />

<div class="grid grid-cols-1 ">
    <div class="">
        <label class="font-bold" for="grid-unit">Description: </label>
        <input class="form-input block w-full" id="grid-description" type="text" name="description"
            value="{{ $quantity->description }}">
    </div>
</div>

<br />

<button class="bg-blue-500 text-black active:blue-600 font-bold uppercase text-xs px-4 py-2 outline-black mr-1 mb-1"
    type="submit">Submit</button>
