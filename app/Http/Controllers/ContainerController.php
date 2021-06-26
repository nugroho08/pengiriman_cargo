<?php

namespace App\Http\Controllers;

use App\Models\Container;
use App\Models\Kapal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psr\Log\Test\DummyTest;

class ContainerController extends Controller
{
    public function index()
    {
        $container = Container::all()->sortByDesc('created_at');

        return view('admin.kontainer.index', compact('container'));
    }
    public function create()
    {
        $data = [
            'kapal' => Kapal::all(),
        ];
        return view('admin.kontainer.create', $data);
    }

    public function store(Request $request)
    {
        Container::create([
            'id_barang' => $request->id_barang,
            'nama_kontainer' => $request->nama_kontainer,
            'jumlah_barang' => $request->jumlah_barang,
            'id_kapal' => $request->id_kapal,
        ]);
        return redirect('admin/kontainer');
    }
    public function edit($id_container)
    {
        $container = Container::where('id_container', $id_container)->first();

        $kapal = Kapal::all();

        return view('admin.kontainer.edit', compact('container', 'kapal'));
    }
    public function update(Request $request)
    {
        Container::where('id_container', $request->id_container)
            ->update([
                'id_barang' => $request->id_barang,
                'nama_kontainer' => $request->nama_kontainer,
                'jumlah_barang' => $request->jumlah_barang,
                'id_kapal' => $request->id_kapal,
            ]);


        return redirect('admin/kontainer');
    }
    public function destroy($id_container)
    {
        Container::where('id_container', $id_container)->delete();

        return redirect('admin/kontainer');
    }
}
