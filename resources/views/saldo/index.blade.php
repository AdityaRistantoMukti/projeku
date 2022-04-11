@extends('layouts.app')

@section('content')

<div class="container">
    <div class="alert alert-primary mt-5" role="alert">
        Selamat datang di data deposit  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
          </svg>
      </div>
<div class="card border-0 shadow">
    <div class="card-body ">
        <div class="d-flex mb-2p">
            <div class="mr-auto mb-2">
                
                <a href="{{route('deposit.create')}}" class="btn btn-info mr-2">Tambah Data </a>
            </div>
        </div>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telp</th>
                    <th>Saldo</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deposits as $deposit)
                <tr>
                    <td>
                    <a href="{{route('tambahsaldo', $deposit->id)}}" class="btn btn-outline-primary btn-sm">{{$deposit->name}}</a>
                    </td>
                    <td>{{$deposit->alamat}}</td>
                    <td>{{$deposit->telp}}</td>
                    <td>
                        <a href="{{route('kurang-saldo', $deposit->id)}}" class="btn btn-outline-danger btn-sm">Rp.{{$deposit->saldo}}</a>
                     </td>
                     <td>
                         <a href="{{route('deposit.edit', $deposit->id)}}" class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg></a>
                        <a class="btn btn-danger btn-sm" href="{{route('deposit.delete', $deposit->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                          </svg></a>
                     </td>
                </tr>
                @endforeach
                
                    
                        @if ($deposits == null)
                            Data Belum Terisi
                        @endif
                     
                     
            </tbody>
        </table>    
    </div>
</div>
</div>

@endsection
