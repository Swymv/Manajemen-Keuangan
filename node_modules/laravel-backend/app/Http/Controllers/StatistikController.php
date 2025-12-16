<?php

namespace App\Http\Controllers;

use App\Models\StatistikHarga;
use Illuminate\Http\Request;

class StatistikController extends Controller
{
    public function index()
    {
        return response()->json(StatistikHarga::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required|integer',
            'tanggal' => 'required|date'
        ]);

        return response()->json(StatistikHarga::create($data));
    }

    public function destroy($id)
    {
        StatistikHarga::destroy($id);
        return response()->json(['message' => 'Data statistik dihapus']);
    }
}
