<?php

namespace App\Http\Controllers;

use App\Http\Resources\PetitionCollection;
use App\Http\Resources\PetitionResource;
use App\Models\Petition;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PetitionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return PetitionCollectionphp
     */
    public function index()
    {
        //
        $petitions=Petition::all();

        return response()->json(new PetitionCollection($petitions),Response::HTTP_OK);
        //returning collection resource customised in Petitions Collection class

        /*
         * OR
         * return PetitionResource::collection($petitions);
         * //returns customised resource in the form of a collection(list)
         */

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //To create a new PETITION-API

        $petition= Petition::create($request->only([
            'title', 'author', 'signees', 'description', 'category'
        ]));
        //
        return response()->json(new PetitionResource($petition),Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petition  $petition
     * @return PetitionResource
     */
    public function show(Petition $petition)
    {
        //To display the petition
        return new PetitionResource($petition);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petition $petition)
    {
        //To update an existing petition
        $petition->update($request->only([
            'title', 'description', 'author', 'signees', 'category'
        ]));

        //return \response()->json(new PetitionResource($petition),Response::HTTP_OK );
        return new PetitionResource($petition);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petition $petition)
    {
        //
        $petition->delete();

        return response()->json(null, Response::HTTP_OK); //returning a null response
    }
}
