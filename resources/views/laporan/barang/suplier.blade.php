@extends('layouts.cetak')

@section('content')
    <div class="row">
        <div class="cold-md-12">
            <div class="text-center">
                <P>
                    <b>
                        <h3>Inventori
                            <br>Jl Mutiara No 1
                        </h3>
                    </b>
                </P>
            </div>

            @if (request('tgl_awal'))
                <small>Dari tanggal {{request('tgl_awal') }}
                        Sampai tanggal {{request('tgl_akhir') }}
                </small>
            @endif

            <u>
                <h4>Laporan Suplier Masuk</h4>
            </u>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kode Suplier </th>
                        <th>Nama Suplier </th>
                        <th>Alamat </th>
                        <th>Email </th>
                        <th>Phone</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @forelse ($barang as $get)
                        <tr>
                            <td>{{$get->kode_suplier}} |</td>
                            <td>{{$get->nama}} |</td>
                            <td>{{$get->alamat}} |</td>
                            <td>{{$get->email}} </td>
                            <td>{{$get->phone}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Data Tidak Ditemukan !</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection