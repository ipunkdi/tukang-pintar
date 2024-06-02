<?php

namespace App\Http\Controllers\Api;

use App\Models\Craftsman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CraftsmanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Craftsman::all();
        return response()->json([
            'status' => true,
            'message' => 'Data ditemukan',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataCraftsman = new Craftsman();

        $rules = [
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'skill_description' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal memasukkan data',
                'data' => $validator->errors()
            ]);
        }

        $dataCraftsman->name = $request->name;
        $dataCraftsman->email = $request->email;
        $dataCraftsman->phone_number = $request->phone_number;
        $dataCraftsman->address = $request->address;
        $dataCraftsman->skill_description = $request->skill_description;

        $post = $dataCraftsman->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses memasukkan data'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataCraftsman = Craftsman::find($id);
        if (empty($dataCraftsman)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        } 

        $rules = [
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'skill_description' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal melakukan update data',
                'data' => $validator->errors()
            ]);
        }

        $dataCraftsman->name = $request->name;
        $dataCraftsman->email = $request->email;
        $dataCraftsman->phone_number = $request->phone_number;
        $dataCraftsman->address = $request->address;
        $dataCraftsman->skill_description = $request->skill_description;

        $post = $dataCraftsman->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan update data'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
