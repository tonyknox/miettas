<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos= Photo::simplePaginate(15);
        return view('Photo.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Photo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Photo::create($request->all());
        return redirect('photos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $photo = Mymethod::findOrFail($id);
        list($prevPage,$nextPage) = nextChapter('App\Models\Photo','id',$id,''); 
        return view('Photo.show', compact('photo'))->with('prevPage',$prevPage)->with('nextPage',$nextPage); 

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $photo = Photo::findOrFail($id);
        return view('Photo.edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $photo = Photo::findOrFail($id);
        $photo->update($request->all());
        return redirect('photos'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
