<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class OperatorController extends Controller
{
    public function index()
    {
        $operator = Operator::all()->sortByDesc('created_at');
        $user = User::all()->sortByDesc('created_at');

        return view('admin.operator.index', compact('operator', 'user'));
    }
    public function create()
    {
        return view('admin.operator.create');
    }
    public function store(Request $request)
    {
        Operator::create([
            'nip_operator' => $request->nip_operator,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => $request->password,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telepon' => $request->no_telepon,
            'Alamat' => $request->Alamat,

        ]);
        User::create([
            'id' => $request->nip_operator,
            'name' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'OPERATOR',
        ]);
        return redirect('admin/operator');
    }
    public function edit($nip_operator)
    {
        $operator = Operator::where('nip_operator', $nip_operator)->first();

        return view('admin.operator.edit', compact('operator'));
    }
    public function update(Request $request)
    {
        Operator::where('nip_operator', $request->nip_operator)
            ->update([
                'nip_operator' => $request->nip_operator,
                'nama_lengkap' => $request->nama_lengkap,
                'email' => $request->email,
                'password' => $request->password,
                'jenis_kelamin' => $request->jenis_kelamin,
                'no_telepon' => $request->no_telepon,
                'Alamat' => $request->Alamat,
            ]);

        return redirect('admin/operator');
    }
    public function destroy($nip_operator)
    {
        Operator::where('nip_operator', $nip_operator)->delete();

        return redirect('admin/operator');
    }
}
