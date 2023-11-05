<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directory;
use App\Models\Recipe;

class DirectoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directory = Directory::simplePaginate(15);
        return view('Directory.index', compact('directory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Directory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Directory::create($request->all());
        return redirect('directories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $directory = Directory::findOrFail($id); 
        return  view('Directory.show', compact('directory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $directory = Directory::findOrFail($directory->id);
        return view('Directory.edit', compact('directory'));
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
        $directory->update($request->all());
        return redirect('directories'); 
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

    public function splash_page()
    {
        $directory = Directory::findOrFail(13);
        $gardy = Recipe::where('credit','gardy')->limit(6)->get();
        $mietta = Recipe::where('credit','mietta')->limit(6)->get();
        $chef = Recipe::whereNotNull('book')->limit(6)->get();
        return view('Directory.welcome', compact('directory'))->with('gardy',$gardy)->with('mietta',$mietta)->with('chef',$chef); 
    }
}