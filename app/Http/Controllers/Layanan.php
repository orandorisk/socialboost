<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan_Model;
use App\Models\User_Model;
use App\Models\Pesan_Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Events\Validated;

class Layanan extends Controller
{
    public function index()
    {
        $data = Layanan_Model::all();
        return view('admin.index', ['data' => $data]);
    }
    public function insert()
    {
        return view('admin.insert');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'min_pesan' => 'required',
            'max_pesan' => 'required',
            'deskripsi' => 'required',
        ]);

        $data = new Layanan_Model();
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->min_pesan = $request->min_pesan;
        $data->max_pesan = $request->max_pesan;
        $data->deskripsi = $request->deskripsi;
        $data->save();
        if ($data) {
            return redirect('/admin/layanan')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect('/admin/layanan')->with('error', 'Data gagal ditambahkan');
        }
    }
    public function edit($id)
    {
        $data = Layanan_Model::find($id);
        return view('admin.edit', ['data' => $data]);
    }
    public function update(Request $request, $id)
    {
        $data = Layanan_Model::find($id)->update($request->all());
        if ($data) {
            return redirect('/admin/layanan')->with('success', 'Data berhasil diubah');
        } else {
            return redirect('/admin/layanan')->with('error', 'Data gagal diubah');
        }
    }
    public function delete($id)
    {
        $data = Layanan_Model::find($id);
        $data->delete();
        if ($data) {
            return redirect('/admin/layanan')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect('/admin/layanan')->with('error', 'Data gagal dihapus');
        }
    }

    public function forms()
    {
        $email = Session::get('email');
        $users = User_Model::where('email', "=", $email)->first();
        $data = Layanan_Model::all();
        return view('layanan.pesan', ['data' => $data, 'users' => $users]);
    }

    public function order(Request $request)
    {
        $pesan = new Pesan_Model();
        $pesan->service = $request->title;
        $pesan->target = $request->author;
        $pesan->quantity = $request->publication;
        $pesan->save();

        return $pesan;
    }
    public function main()
    {
        $email = Session::get('email');
        $users = User_Model::where('email', "=", $email)->first();
        $data = Layanan_Model::all();
        return view('main', ['data' => $data, 'users' => $users]);
    }

    public function history()
    {
        $email = Session::get('email');
        $users = User_Model::where('email', "=", $email)->first();
        return view('layanan.history', ['pesan' => 'Halaman History Pesan', 'users' => $users]);
    }
}
