<?php

namespace App\Http\Controllers;

use App\Models\Pelabuhan;
use Illuminate\Http\Request;

class PelabuhanController extends Controller
{
    public function index()
    {
        $pelabuhan = Pelabuhan::all()->sortByDesc('created_at');

        return view('admin.pelabuhan.index', compact('pelabuhan'));
    }
    public function create()
    {
        return view('admin.pelabuhan.create');
    }

    public function store(Request $request)
    {
        Pelabuhan::create([
            'nama_pelabuhan' => $request->nama_pelabuhan,
            'tempat' => $request->tempat,
            'Alamat' => $request->Alamat,
        ]);
        return redirect('admin/pelabuhan');
    }
    public function edit($id_pelabuhan)
    {
        $pelabuhan = Pelabuhan::where('id_pelabuhan', $id_pelabuhan)->first();

        return view('admin.pelabuhan.edit', compact('pelabuhan'));
    }
    public function update(Request $request)
    {
        Pelabuhan::where('id_pelabuhan', $request->id_pelabuhan)
            ->update([
                'nama_pelabuhan' => $request->nama_pelabuhan,
                'tempat' => $request->tempat,
                'Alamat' => $request->Alamat,
            ]);

        return redirect('admin/pelabuhan');
    }
    public function destroy($id_pelabuhan)
    {
        Pelabuhan::where('id_pelabuhan', $id_pelabuhan)->delete();

        return redirect('admin/pelabuhan');
    }
}
