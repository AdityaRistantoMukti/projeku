<?php

namespace App\Http\Controllers\Transaksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Barang;
use App\Suplier;
use App\Transaksi;

class BarangMasukController extends Controller
{
    public function create()
    {
        $data = [
            'barangs' => Barang::all(),
            'supliers' => Suplier::all(),
        ];
        return view('transaksi.masuk', $data);
    }

    public function store(Request $request)
    {
        $transaksi = Transaksi::create([
            'barang_id' => $request->barang_id,
            'suplier_id' => $request->suplier_id,
            'quantity' => $request->quantity
        ]);

        if ($transaksi->save()) {
            $barang = Barang::findOrFail($transaksi->barang_id);

            $hitung = $barang->quantity + $transaksi->quantity;
            $barang->update([
                'quantity' => $hitung,
            ]);
        };
        flash()->success('Sukses menambahkan Barang Masuk');
        return redirect(route('transaksi'));
    }
}
