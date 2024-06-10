@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
    <div class="card-body">
        <form action="{{route('admin.education.update', $edit->id)}}" method="post">
            @csrf
            @method("put")
            <div class="form-group mb-3">
                <label for="">Nama Instansi</label>
                <input value="{{$edit->instansi}}" type="text" name="instansi" id="" placeholder="Masukkan Nama Instansi Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Jurusan</label>
                <input value="{{$edit->jurusan}}" type="text" name="jurusan" id="" placeholder="Masukkan Nama Jurusan Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Tanggal Mulai</label>
                <input value="{{$edit->mulai}}" type="date" name="mulai" id="" max="<?= date('Y-m-d')?>" placeholder="Masukkan Tanggal Mulai Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Tanggal Selesai</label>
                <input value="{{$edit->selesai}}" type="date" name="selesai" id="" max="<?= date('Y-m-d')?>" placeholder="Masukkan Tanggal Selesai Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Deskripsi</label>
                <textarea  name="deskripsi" id="" cols="30" rows="10" class="form-control" placeholder="Masukkan Deskripsi tentang Anda">{{$edit->deskripsi}}</textarea>
            </div>
            <div class="form-group mb-3">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
