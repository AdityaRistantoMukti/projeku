<?php

namespace App\Http\Controllers\Transaksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Barang;
use App\Suplier;
use App\Transaksi;
use App\User;

class TransaksiController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $transactions = Transaksi::with('barang', 'suplier')->get();
       
        return view('transaksi.index', compact('transactions'));
    }
    
    public function destroy(Transaksi $transaction)
    {

        $transaction = Transaksi::truncate();

        flash()->success('Data dibersihkan');
        return redirect(route('transaksi'));
    }
}
