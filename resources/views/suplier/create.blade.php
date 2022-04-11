@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="px-1 mb-4" style="border-bottom-style: double;">
                            <h3>Tambah Data Suplier</h3>
                        </div>
                        <form action="{{ route('suplier.store') }}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="nama">Nama Suplier</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email"> Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="kode_barang">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control">
                            </div>
                            <div>
                                <button class="btn btn-success btn-lg">Simpan</button>
                                <a href="{{route('suplier')}}" class=" btn btn-outline-secondary btn-lg">Kembali</a>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection