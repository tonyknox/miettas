<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mymethod;

class MymethodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $methods= Mymethod::simplePaginate(15);
        return view('Method.index', compact('methods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Method.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mymethod::create($request->all());
        return redirect('mymethods');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $method = Mymethod::findOrFail($id);
        $meth =   Mymethod::get(); 
        list($prevPage,$nextPage) = nextChapter('App\Models\Mymethod','meth_id',$id,''); 
        return view('Method.show', compact('method'))->with('meth',$meth)->with('prevPage',$prevPage)->with('nextPage',$nextPage); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $method = Mymethod::findOrFail($id);
        return view('Method.edit', compact('method'));
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
        $method = Mymethod::findOrFail($id);
        $method->update($request->all());
        return redirect('mymethods'); 
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