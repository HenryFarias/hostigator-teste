<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Breed;
use App\Weight;
use App\Http\Resources\BreedCollection;


class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Breed[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $breed= Breed::all();
        if(empty($breed)){
            return new BreedCollection(Breed::all());
        }else{
            $client = new \GuzzleHttp\Client();
            $response= $client->request('GET' , 'https://api.thecatapi.com/v1/breeds');
            $array = json_decode($response->getBody(), true);

            foreach ($array as $breed) {
                $weigth = Weight::create($breed["weight"]);
                $breed['weight_id'] = $weigth->id;
                unset($breed['weight']);
                Breed::create($breed);
            }

            return "passou tudo";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
