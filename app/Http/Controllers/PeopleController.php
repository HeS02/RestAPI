<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function create(Request $req)
    {
        $res = People::create($req->all());
        return response()->json($res, 201);
    }

    public function readAll()
    {
        return response() -> json(People::all(), 200);
    }

    public function read($id)
    {
        $res = People::find($id);

        if($res){
            return response() -> json($res, 200);
        }
        return response() -> json(['error' => 'Data not found'], 204);
    }

    public function update(Request $req, $id)
    {
        $person = People::find($id);
        
        if (!$person) {
            return response()->json(['error' => 'Data not found'], 204);
        }

        try{
            People::where("id", $id)->update($req->all());
            return response() -> json(['info' => 'Date updated!'], 200);
        }
        catch(Exception $ex){
            return response()-> json(['error' => 'Failed to update data'], 304);
        }
    }

    public function delete($id)
    {
        $person = People::find($id);

        if (!$person) {
            return response()->json(['error' => 'Data not found'], 404);
        }

        try{
            People::where("id", $id)->delete();
            return response()->json(['info' => 'Data deleted'], 204);
        }
        catch(Exception $ex){
            return response()->json(['error' => 'Failed to delete data'], 304);
        }
    }
}
