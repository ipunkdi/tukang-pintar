<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataCustomer = new Customer();

        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone_number' => 'required',
            'address' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal memasukkan data',
                'data' => $validator->errors()
            ]);
        }

        $dataCustomer->name = $request->name;
        $dataCustomer->email = $request->email;
        $dataCustomer->password = $request->password;
        $dataCustomer->phone_number = $request->phone_number;
        $dataCustomer->address = $request->address;

        $post = $dataCustomer->save();

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
        $dataCustomer = Customer::find($id);
        if (empty($dataCustomer)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        } 

        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone_number' => 'required',
            'address' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal melakukan update data',
                'data' => $validator->errors()
            ]);
        }

        $dataCustomer->name = $request->name;
        $dataCustomer->email = $request->email;
        $dataCustomer->password = $request->password;
        $dataCustomer->phone_number = $request->phone_number;
        $dataCustomer->address = $request->address;

        $post = $dataCustomer->save();

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

    public function login(Request $request)
    {
        try {
            $credentials = $request->only('phone_number', 'password');

            if (Auth::guard('customer')->attempt($credentials)) {
                $data = Customer::where('phone_number', $credentials['phone_number'])->take(1)->get()[0];
                return response()->json([
                    'status' => true,
                    'message' => 'Login Berhasil',
                    'user_id' => $data->id,
                    'user_name' => $data->name,
                    'phone' => $data->phone_number,
                    'email' => $data->email
                ]);

            } else {
                return response()->json(['error' => 'Unauthorized'], 401);
            }

        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi Kesalahan: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'phone_number' => 'required|string',
                'password' => 'required|string'
            ]);

            Customer::create([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'password' => Hash::make($request->password),
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Register Berhasil',
            ]);

        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi Kesalahan: ' . $e->getMessage(),
            ], 500);
        }
    }
}
