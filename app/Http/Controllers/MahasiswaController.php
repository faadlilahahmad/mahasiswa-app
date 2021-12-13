<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function list()
    {
        $data = Mahasiswa::all();
        return view('list', ['mahasiswa' => $data]);
    }

    public function showData($id)
    {
        $data = Mahasiswa::find($id);
        return view('edit', ['data' => $data]);
    }

    public function update(Request $req)
    {

        $data = Mahasiswa::find($req->id);
        $data->nama = $req->nama;
        $data->tt = $req->tt;
        $data->tm = $req->tm;
        $data->uts = $req->uts;
        $data->uas = $req->uas;
        $data->na = (0.20 * $req->tt) + (0.20 * $req->tm) + (0.20 * $req->uts) + (0.40 * $req->uas);
        $data->save();
        return redirect('list');
    }
}
