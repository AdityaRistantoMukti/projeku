@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
      <div class="col-md-6">
            <div class="card"> 
                <div class="card-body" style="background: #FFE4C4; border: 1px solid">
                    <div class="px-1 mb-2" style="border-bottom-style: double;">
                        <h3>Tambah Data Deposit</h3>
                    </div>
                    <form action="{{route('deposit.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" id="name" class="form-control"  placeholder="Masukkan Nama"
                             value="{{ old('name') }}">

                          </div>
                          <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat"class="form-control" placeholder="Masukkan Alamat"
                            value="{{ old('alamat') }}">
                            
                        </div>
                        <div class="form-group">
                            <label for="telp">Telp</label>
                            <input type="number" name="telp" id="telp" class="form-control" placeholder="Masukkan Phone">
                        </div>
                      <div class="form-group">
                          <label for="saldo">Saldo</label>
                          <input type="number" name="saldo" id="saldo" class="form-control" placeholder="Masukkan Jumlah Saldo"
                          value="{{ old('saldo') }}">
                          
                      </div>
                      <div>
                          <input type="submit" class="btn btn-success btn-lg" value="Simpan">
                          <a href="{{ route('deposit')}}" class="btn btn-secondary btn-lg">Kembali</a>                      </div>
                      
                  </form>
              </div>
        </div>
      </div>
  </div>
</div>
@endsection 