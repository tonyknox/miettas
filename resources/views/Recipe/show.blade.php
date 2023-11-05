<x-guest-layout>

    <x-slot:header>
        @if (!isset($recipe))
        <div class="visible sm:invisible">
            @include('includes.searches', ['tble' => 'SearchRecipes'])
        </div>
            <h3>No recipe matches your query. Try again . . .<br /></h3>
        @else
             @include('includes.searches', ['tble' => 'SearchRecipes'])
             <h2>{{ $recipe->name }}</h2>      
    </x-slot:header>

    <!-------------------------------------------------->
    
    <x-slot:sidebar>
       
            <p class="mb-4"><span class="font-bold text-xl">Ingredients</span><br/></p>

            <div class="">
               
                    @foreach($qty as $qty)
                        <p><a class="font-normal text-sm " href="{{ route('ingredients.show', [$qty->ingredient_iid]) }}">{{ $qty->description }}</a><br /></p>
                    @endforeach
                
            </div>

    </x-slot:sidebar>
   
    <!-------------------------------------------------->

    <x-slot:main>
        
        @include('includes.show.recipes')
        <br /><br />
        @if ($recipe->rid < 1480 || $recipe->rid > 1695)
            <span class="text-xl font-bold">Method</span>
        @endif

        <div id="method" class="hyphens-auto text-justify">
            @if (strlen($recipe->method))
                {!! $recipe->method !!}
            @else
                @php
                    $body = preg_replace('/<h2>.*?<\/h3>/is', '', $recipe->body);
                @endphp
                {!! $body !!}
            @endif
        </div>
       
        <br />
        <span style="text-align:center">@include('/includes.nextPrevMin',['tble'=>'recipes', 'editTable'=>$recipe->rec_id, 'id'=>'rec_id', 'text'=>'Recipe'])</span>	
     
        @include('includes.show.recipes2')<br />
        
        <br /><br />

             <!-- Trigger/Open The Modal -->
            <button id="myBtn">Open Modal</button>

        <!-- The Modal -->
        <div id="recipeModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <span id="name-text"></span>
            <span id="method-text"></span>
        </div>

        </div> 

</div>
</div>
    </x-slot:main>

    <!-------------------------------------------------->

    <x-slot:footer>

     
    </x-slot:footer>

    @endif
    </div>

    <!-------------------------------------------------->

   
    <!-- MODAL -->

    <!-- <div class="modal fade" id="recipeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <span id="name-text"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <span id="ingredient-text"></span>
                            </div>
                            <div class="col-sm-8">
                                <span id="method-text"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="modal-footer"> -->
                                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </x-guest-layout>

    <!-- <div class="modal fade" id="methodModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <span id="methname-text"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <span id="methmethod-text"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> -->

   
