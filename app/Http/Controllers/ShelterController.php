<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shelter;

class ShelterController extends Controller
{
    public function index()
    {
        $shelters = Shelter::all();
        return $shelters;
    }

    public function show($id)
    {
        $shelter = Shelter::findOrFail($id);
        $shelter->animals;
        return $shelter;
    }
    public function shelter_page($id){
        return view('shelter');
    }

    public function store(Request $request)
    {
        $shelter = New Shelter();
        $shelter = $request->shelter_params;
        $shelter->save();
        $response = response($shelter, Response::HTTP_CREATED);
        return $response;
    }
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function getShelters(){
        $shelters = Shelter::all();
        
        $response = ['shelters' => $shelters];
        return response()->json($response, 200);
    }
    public function postShelter(Request $request){
        $shelter = new Shelter();
        $shelter->content = $request->input('content');
        $shelter->save();
        return response()->json(['shelter' => $shelter], 200);
    }
    public function getShelter(){
    }
    public function deleteShelter(){}
}
