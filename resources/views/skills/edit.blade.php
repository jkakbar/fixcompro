@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
    <div class="card-body">
        <form action="{{route('admin.skills.update', $edit->id)}}" method="post">
            @csrf
            @method("put")
            <div class="form-group mb-3">
                <label for="">Nama</label>
                <input value="{{$edit->skills}}" type="text" name="skills" id="" placeholder="Masukkan Keahlian Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Email</label>
                <input value="{{$edit->persentase}}" type="text" name="persentase" id="" placeholder="Masukkan Persentase Keahlian Anda, contoh : 100%" class="form-control">
            </div>
            <div class="form-group mb-3">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
