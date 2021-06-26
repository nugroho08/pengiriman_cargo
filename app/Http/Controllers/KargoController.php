<?php

namespace App\Http\Controllers;

use App\Models\Kapal;
use Illuminate\Http\Request;

class KargoController extends Controller
{
    public function index()
    {
        $kargo = Kapal::all()->sortByDesc('created_at');

        return view('admin.kapal.index', compact('kargo'));
    }
    public function create()
    {
        return view('admin.kapal.create');
    }

    public function store(Request $request)
    {
        Kapal::create([
            'nama_kapal' => $request->nama_kapal,
            'status_kapal' => $request->status_kapal,
            'alamat_tujuan' => $request->alamat_tujuan,
        ]);
        return redirect('admin/kapal');
    }
    public function edit($id_kapal)
    {
        $kapal = Kapal::where('id_kapal', $id_kapal)->first();

        return view('admin.kapal.edit', compact('kapal'));
    }
    public function update(Request $request)
    {
        Kapal::where('id_kapal', $request->id_kapal)
            ->update([
                'nama_kapal' => $request->nama_kapal,
                'status_kapal' => $request->status_kapal,
                'alamat_tujuan' => $request->alamat_tujuan,
            ]);

        return redirect('admin/kapal');
    }
    public function destroy($id_kapal)
    {
        Kapal::where('id_kapal', $id_kapal)->delete();

        return redirect('admin/kapal');
    }
}
