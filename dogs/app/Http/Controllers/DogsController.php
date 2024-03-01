<?php

namespace App\Http\Controllers;

use App\Models\Dogs;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DogsController extends Controller {

    public function showAllDogs()
    : JsonResponse {

        return response()->json(Dogs::all());
    }

    public function showOneDog($id)
    : JsonResponse {

        return response()->json(Dogs::find($id));
    }

    public function create(Request $request)
    : JsonResponse {

        $Dogs = Dogs::create($request->all());

        return response()->json($Dogs, Response::HTTP_CREATED);
    }

    // public function update($id, Request $request)
    // : JsonResponse {

    //     $Dogs = Dogs::findOrFail($id);
    //     $Dogs->update($request->all());

    //     return response()->json($Dogs, Response::HTTP_OK);
    // }

    // public function delete($id) {

    //     Dogs::findOrFail($id)->delete();

    //     return response('Deleted Successfully', Response::HTTP_OK);
    // }
};