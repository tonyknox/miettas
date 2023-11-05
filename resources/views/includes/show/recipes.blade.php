
@if(strlen($recipe->abstract))
	 <strong>Abstract: </strong>{!!$recipe->rabstract."<br />" !!} 
@endif

@if(strlen($recipe->preamble))
	 <strong>Preamble: </strong>{!!$recipe->preamble."<br />" !!} 
@endif

@if(strlen($recipe->remarks))
	 <strong>Remarks: </strong>{!!$recipe->remarks."<br />" !!} 
@endif

@if(strlen($recipe->rcomments))
	 <strong>Comments: </strong>{!!$recipe->rcomments."<br />" !!} 
@endif	
	
@if(strlen($recipe->preptime))
	 <strong>Prep Time: </strong>{!!$recipe->preptime.", " !!} 
@endif

@if(strlen($recipe->cooktime))
	<strong>Cooking Time: </strong>{{ $recipe->cooktime.", " }} 
@endif

@if(!empty($recipe->serves))
<strong>Serves: </strong>{!! $recipe->serves.", " !!}  <br />
@endif

@if(strlen($recipe->credit))
	<strong>Credit: </strong>{{ $recipe->credit.", " }}
@endif

@if(strlen($recipe->Cuisine))
	<strong>Cuisine: </strong>{{ $recipe->cuisine .", "}}
@endif


@if(strlen($recipe->rseason) && ! preg_match('/all year/i',$recipe->rseason) )
	<strong>Season: </strong>{!!$recipe->rseason.", " !!} 
@endif

@if(strlen($recipe->rcost)) 
<p><strong>Cost: </strong>{!!$recipe->rcost!!}</p>
@endif
