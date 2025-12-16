<?php

namespace App\Http\Controllers;

use App\Models\Target;
use Illuminate\Http\Request;

class TargetController extends Controller
{
    public function index()
    {
        return response()->json(Target::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_target' => 'required',
            'target_nominal' => 'required|integer'
        ]);

        return response()->json(Target::create($data));
    }

    public function update(Request $request, $id)
    {
        $target = Target::findOrFail($id);
        $target->update($request->all());

        return response()->json($target);
    }

    public function destroy($id)
    {
        Target::destroy($id);
        return response()->json(['message' => 'Target dihapus']);
    }
}
