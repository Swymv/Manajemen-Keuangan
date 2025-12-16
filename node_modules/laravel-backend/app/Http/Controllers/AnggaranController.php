<?php

namespace App\Http\Controllers;

use App\Models\Anggaran;
use Illuminate\Http\Request;

class AnggaranController extends Controller
{
    public function index()
    {
        return response()->json(Anggaran::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'kategori' => 'required',
            'total' => 'required|integer'
        ]);

        return response()->json(Anggaran::create($data));
    }

    public function update(Request $request, $id)
    {
        $anggaran = Anggaran::findOrFail($id);
        $anggaran->update($request->all());

        return response()->json($anggaran);
    }

    public function destroy($id)
    {
        Anggaran::destroy($id);
        return response()->json(['message' => 'Berhasil dihapus']);
    }
}
