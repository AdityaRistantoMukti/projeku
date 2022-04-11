@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="px-1 mb-4" style="border-bottom-style: double;">
                            <h3>Edit Data Barang</h3>
                        </div>
                        <form action="{{route('master-barang.update', $barang->id)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="kode_barang"> Kode Barang</label>
                                <input type="text" name="kode_barang" id="kode_barang" class="form-control" value="{{$barang->kode_barang}}">
                            </div>
                            <div class="form-group">
                                <label for="nama_barang"> Nama Barang</label>
                                <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{$barang->nama_barang}}">
                            </div>
                            <div class="form-group">
                                <label for="suplier_id">Nama Suplier</label>
                                <select name="suplier_id" id="suplier_id" class="form-control">
                                    <option value="">- pilih suplier -</option>
                                    @foreach ($supliers as $suplier)
                                        <option value="{{$suplier->id}}">{{$suplier->nama}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="quantity"> Quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control" value="{{$barang->quantity}}">
                            </div>
                            <div>
                                <button class="btn btn-success btn-lg">Simpan</button>
                                <a href="{{route('master-barang')}}" class=" btn btn-outline-secondary btn-lg">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection