<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeluhanPelanggan;

class KeluhanPelangganController extends Controller
{
    public function __construct(KeluhanPelanggan $table)
    {
        $this->table = $table;
    }

    public function index()
    {
        $data = $this->table->all();
        // return $data;
        return response()->json($data);
        // $keluhanpelanggan = KeluhanPelanggan::all();
        // return response()->json($keluhanpelanggan);
        // return response()->json($keluhanpelanggan);
    }

    public function show($id)
    {
        $data = $this->table->find($id);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $data = $this->table->create($request->all());
        return response()->json([
            'data' => $data,
            'message' => 'New record created successfully'
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $this->table->find($id)->update($request->all());
        return response()->json([
            'data' => $data,
            'message' => 'User data updated successfully'
        ]);
    }

    public function destroy($id)
    {
        $data = $this->table->find($id)->delete();
        return response()->json([
            'data' => $data,
            'message' => 'User deleted successfully'
        ]);
    }
}
