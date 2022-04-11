@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="px-1 mb-4" style="border-bottom-style: double;">
                            <h3>Edit Data Suplier</h3>
                        </div>
                        <form action="{{ route('suplier.update', $suplier->id) }}" method="post">
                            @csrf
                                @method('PATCH')
                            
                            <div class="form-group">
                                <label for="nama">Nama Suplier</label>
                                <input type="text" name="nama" id="nama" value="{{$suplier->nama}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" value="{{$suplier->alamat}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email"> Email</label>
                                <input type="email" name="email" id="email" value="{{$suplier->email}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone"> Phone</label>
                                <input type="text" name="phone" id="phone" value="{{$suplier->phone}}" class="form-control">
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