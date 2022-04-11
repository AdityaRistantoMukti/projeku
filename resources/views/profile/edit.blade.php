@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="px-1 mb-4" style="border-bottom-style: double;">
                            <h3>Edit Profile</h3>
                        </div>
                        <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                @method('PATCH')
                            <div class="form-group">
                                <label for="avatar">Avatar</label>
                                <div class="col-md-6">
                                <img src="{{ asset('images/'. auth()->user()->avatar) }}" alt="" width="250" class="bi bi-person-circle rounded-circle mb-2">
                                    @if (auth()->user()->avatar != null)

                                    <a href="{{route('profile.delete')}}" 
                                    class="btn btn-danger btn-sm mb-4" onclick="event.preventDefault();
                                    document.getElementById('remove-avatar').submit()">Hapus Avatar</a>

                                    
                                    @endif

                                <input type="file" name="avatar" id="avatar" class="form-control" >
                                </div>
                            </div>                         
                          <div>
                                <button class="btn btn-success btn-lg">Simpan</button>
                                <a href="{{route('profile.index')}}" class=" btn btn-outline-secondary btn-lg">Kembali</a>
                            </div>
                        </form>

                        <form action="{{route('profile.delete')}}" id="remove-avatar" method="post">
                        @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection