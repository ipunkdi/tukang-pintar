<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use App\Models\JobRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = JobRequest::orderBy('service_id', 'asc')->get();
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
        $rules = [
            'customer_id' => 'required',
            'service_id' => 'required',
            'craftsman_id' => 'required',
            'address' => 'required',
            'work_date' => 'required'
        ];

        $validasi = $request->validate($rules);
        JobRequest::create($validasi);

        return response()->json([
            'status' => true,
            'message' => 'Sukses menambahkan data job',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Customer::with('jobRequest.service', 'jobRequest.craftsman')->find($id);

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'User not found',
            ], 404);
        }

        $orderHistory = $user->jobRequests;

        return response()->json([
            'status' => true,
            'message' => 'Order history fetched successfully',
            'data' => $orderHistory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
