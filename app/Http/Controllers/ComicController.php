<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        $data = [
            'comics_collection'=> $comics
        ];

        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->getValidation());  

        $form_data = $request->all();
        $new_comics = new Comic();

        $new_comics->fill($form_data);
        $new_comics->save();


        return redirect()->route('comics.show', ['comic' => $new_comics->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::findOrFail($id);

        $data = [
            'comics'=> $comics
        ];

        return view('comics.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comics = Comic::findOrFail($id);

        $data = [
            'comics'=> $comics
        ];

        return view('comics.edit',$data);
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
        $request->validate($this->getValidation());  
        $form_data = $request->all();

        $update_comics = Comic::findOrFail($id);
        $update_comics->update($form_data);

        return redirect()->route('comics.show', ['comic' => $update_comics->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_comics = Comic::findOrFail($id);
        $delete_comics->delete();

        return redirect()->route('comcis.index');    
    }

    protected function getValidation() {
        return [
            'title' => 'required|max:50',
            'description' => 'required|max:60000',
            'thumb' => 'required|max:60000',
            'price' => 'required|max:10' ,
            'series' => 'required|max:30' ,
            'sale_date'=> 'required',
            'type' => 'required|max:30',   
        ];
    } 
}
