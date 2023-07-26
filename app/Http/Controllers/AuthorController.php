<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function readAll(){
        return Author::all();
    }

    public function create(Request $request)
    {
        $author = new Author();
        $author->username = $request->username;
        $author->author_name = $request->author_name;
        $author->email = $request->email;
        $author->instagram = $request->instagram;

        $author->save();
        return "Data added successfully";
    }

    public function readEmail($email)
    {
       return Author::where('email', '=', $email)->get();
    }

    public function readUsername($username)
    {
       return Author::where('username', '=', $username)->get();
    }

    public function readIG($ig)
    {
       return Author::where('instagram', '=', $ig)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        $author->username = $request->username;
        $author->author_name = $request->author_name;
        $author->email = $request->email;
        $author->instagram = $request->instagram;

        $author->save();
        return "Data updated successfully";
    }

    public function delete($id)
    {
        $comic = Author::find($id);
        $comic->delete();
        return "Data deleted successfully";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        //
    }
}
