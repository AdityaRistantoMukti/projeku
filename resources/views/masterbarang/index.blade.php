@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="alert alert-primary mt-5" role="alert">
        Selamat datang di data barang  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
          </svg>
      </div>
    <div class="row">
        <div class="col-md-12">
        <div class="card border-0 shadow">
        <div class="card-body">
            <div class="d-flex mb-2p">
                <div class="mr-auto mb-2">
                    
                    <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-info mr-2">Tambah Data Barang Baru</a>
                </div>
            
                <form action="{{route('laporan.periode.barang')}}" method="GET">
                    <div class="row">
                       <div class="col-md-4">
                           <div class="form-group">
                                <input type="date" name="tgl_awal" class="form-control" id="tgl_awal">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <input type="date" name="tgl_akhir" class="form-control" id="tgl_akhir">
                         </div>
                     </div>
                     <div>
                       <button class="btn btn-info"> Cari data </button>
                     </div>
                    </div>                 
                </form>
            </div>

                <table class="table table-stripped">
                    <thead>
                        <tr>
                            
                            <th>Kode Barang</th>       
                            <th>Nama Barang</th>
                            <th>Quantity</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barangs as $barang)    
                        <tr>
                            <td>{{$barang->kode_barang}}</td>
                            <td>{{$barang->nama_barang}}</td>
                            <td>{{$barang->quantity}}</td>
                           
                            <td>
                            <a href="{{ route('master-barang.edit', $barang->id) }}" class="btn btn-outline-warning" btn-sm>Edit</a>
                            <a href="{{ route('master-barang.show', $barang->id ) }}" class="btn btn-outline-info" btn-sm>Detail</a>
                           
                                     
                            </td>
                            
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                </div>
            </div>
          
        </div>
    </div>
</div>
@endsection

