@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
    <div class="card-body">
        <form action="{{route('admin.user.update', $edit->id)}}" method="post">
            @csrf
            @method("put")
            <div class="form-group mb-3">
                <label for="">Nama</label>
                <input value="{{$edit->name}}" type="text" name="name" id="" placeholder="Masukkan Nama Lengkap Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Email</label>
                <input value="{{$edit->email}}" type="email" name="email" id="" placeholder="Masukkan Email Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Password )* Boleh kosong jika tidak ingin mengganti password</label>
                <input type="password" name="password" id="" placeholder="Masukkan Password Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
