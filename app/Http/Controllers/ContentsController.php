<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentsController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
    $content = Content::simplePaginate(10);
    return view('Content.index', compact('content'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('Content.create'); 
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       Content::create($request->all());
       return redirect('contents');
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       if(is_null($id)){
           $noone = true;
           return view('Content.show', compact('noone'));
       } else {
           $contents = Content::findOrFail($id);

           if(preg_match('/^.*? /', "$contents->category", $match)){
               $c = $match[0];
           }  
           $cont = Content::where('category', 'like', "$c%")->get(); 
           
           list($prevPage,$nextPage) = nextChapter('App\Models\Content','id',$id,''); 
            return view('Content.show', compact('contents'))->with('prevPage',$prevPage)->with('nextPage',$nextPage)->with('cont',$cont);
       }
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $contents = Content::findOrFail($id);
       return view('Content.edit', compact('contents'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
        $content = Content::findOrFail($id);
        $content->update($request->all());
        return redirect('contents'); 
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       //
   }
}
