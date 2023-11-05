<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Ingredient;
use App\Models\Mymethod;
use App\Models\Recipe;


class SearchController extends Controller
{
   

//CONTENT------------------------------------------------------------
	
	public function searchcontent(Request $request)
	{
		list($contents,$num) = searchQuery($request,'App\Models\Content');
		
		if( $num>1){
			return view('Content.index', compact('contents'));
		}
		elseif($num == 1){
			$cont = $contents[0]['id'];
			$contents = Content::find($cont); 
															
			list($prevPage,$nextPage) = nextChapter('App\Models\Content','id',$contents->id,'');
			return view('Content.show', compact('contents'))->with('prevPage',$prevPage)->with('nextPage',$nextPage)->with('contents',$contents);
		}
		else{	
			return view('Content.index', ['noresult'=>'No content matches your query. Try again . . .']);
		}
	}

	public function searchingredients(Request $request)
	{
		list($ingredients,$num) = searchQuery($request,'App\Models\Ingredient');
		
		if( $num>1){
			return view('Ingredient.index', compact('ingredient'))->with('ingredients',$ingredients);
		}
		elseif($num == 1){
			$ing = $ingredients[0]['ing_id'];
			$ingredients = $ing[0];	
			
			list($prevPage,$nextPage) = nextChapter('App\Models\Ingredient','ing_id',$ingredients->ing_id,'');

			return view('Ingredient.show', compact('ingredients'))->with('prevPage',$prevPage)->with('nextPage',$nextPage)->with('ingredient',$ingredient);
		}
		else{
			return view('Plan.index', ['noresult'=>'No ingredient matches your query. Try again . . .'])->with('plans',$num);	
		}
	}

	public function searchmethods(Request $request)
	{
		list($methods,$num) = searchQuery($request,'App\Models\Mymethod');
		
		if( $num>1){
			return view('Method.index', compact('methods'));
		}
		elseif($num == 1){
			$meth = $methods[0]['id'];
			$methods = Mymethod::find($meth); 
															
			list($prevPage,$nextPage) = nextChapter('App\Models\Mymethod','meth_id',$methods->meth_id,'');
			return view('Method.show', compact('methods'))->with('prevPage',$prevPage)->with('nextPage',$nextPage)->with('method',$method);
		}
		else{	
			return view('Method.index', ['noresult'=>'No method matches your query. Try again . . .']);
		}
	}
	
	public function searchrecipes(Request $request)
	{
		list($recipes,$num) = searchQuery($request,'App\Models\Recipe');
		
		if( $num>1){
			return view('Recipe.index', compact('recipes'))->with('recipe',$recipe);
		}
		elseif($num == 1){
			$rec = $recipes[0]['rec_id'];
			$recipes = $rec[0];	
			
			list($prevPage,$nextPage) = nextChapter('App\Models\Recipe','rec_id',$recipes->rec_id,'');

			return view('Ingredient.show', compact('recipes'))->with('prevPage',$prevPage)->with('nextPage',$nextPage)->with('recipe',$recipe);
		}
		else{
			return view('Plan.index', ['noresult'=>'No recipe matches your query. Try again . . .'])->with('plans',$num);	
		}
	}

}
