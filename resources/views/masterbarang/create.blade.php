@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="px-1 mb-4" style="border-bottom-style: double;">
                            <h3>Tambah Data Barang</h3>
                        </div>
                        <form action="{{route('master-barang.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nama_barang"> Nama Barang</label>
                                <input type="text" name="nama_barang" id="nama_barang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="suplier_id"> Nama Suplier</label>
                                <select name="suplier_id" id="" class="form-control">
                                    <option value="">Pilih Suplier</option>
                                    @foreach ($supliers as $suplier)
                                    <option value="{{$suplier->id}}">{{$suplier->nama}}</option>
                                        
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="quantity"> Quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control">
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