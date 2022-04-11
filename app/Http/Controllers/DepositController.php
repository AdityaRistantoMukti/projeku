<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deposit;

class DepositController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    
    public function index()
    {
        $deposits = Deposit::all();
        return view('saldo.index', compact('deposits'));

       
    }

    public function create()
    {

        return view('saldo.create');
    }

    public function store(Request $request)
    {
        $deposit = Deposit::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'saldo' => $request->saldo
        ]);
    
        flash()->success('Data Deposit Berhasil di tambah');
        return redirect()->back();
    }

    public function edit($id)
    {
        $deposit = Deposit::findOrFail($id);
        return view('saldo.edit', compact('deposit'));
    }
    public function update(Request $request, $id)
    {
        $deposit = Deposit::where('id', $id)->first();

        $deposit->name = $request->input('name');
        $deposit->alamat = $request->input('alamat');
        $deposit->telp = $request->input('telp');

        $deposit->save();

        flash()->success('Data berhasil di ubah');
        return redirect(route('deposit'));
    }

    public function destroy($id)
    {
        $deposit = Deposit::findOrFail($id);
        $deposit->delete();

        flash()->success('Data berhasil dihapus');
        return redirect(route('deposit'));
    }
}
