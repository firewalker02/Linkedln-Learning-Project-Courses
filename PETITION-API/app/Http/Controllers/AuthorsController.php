<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorCollections;
use App\Http\Resources\AuthorResource;
use App\Models\Author;


use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(new AuthorCollections(Author::all()),Response::HTTP_OK );
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        return response()->json(new AuthorResource($author),Response::HTTP_OK);
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Author  $author
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Author $author)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Author  $author
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Author $author)
    // {
    //     //
    // }
}
