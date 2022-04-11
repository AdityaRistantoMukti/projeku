<?php

namespace App\Http\Controllers\Suplier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Suplier;
use App\Barang;
use App\Transaksi;

class SuplierController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $supliers = Suplier::all();

        return view('suplier.index', compact('supliers'));
    }

    public function create()
    {
        return view('suplier.create');
    }

    public function edit($id)
    {
        $suplier = Suplier::findOrFail($id);
        return view('suplier.edit', compact('suplier'));
    }

    public function store(Request $request)
    {
        $suplier = Suplier::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        flash()->success('Data Suplier berhasil di buat');

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $suplier = Suplier::where('id', $id)->first();

        $suplier->nama = $request->input('nama');
        $suplier->alamat = $request->input('alamat');
        $suplier->email = $request->input('email');
        $suplier->phone = $request->input('phone');

        $suplier->save();

        flash()->success('Suplier berhasil di ubah');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $suplier = Barang::where('suplier_id', $id)->delete();
        $suplier = Transaksi::where('suplier_id', $id)->delete();
        $suplier = Transaksi::where('barang_id', $id)->delete();
        $suplier = Suplier::findOrFail($id);
        $suplier->delete();

        flash()->success('Suplier berhasil di hapus');
        return redirect()->back();
    }
}
