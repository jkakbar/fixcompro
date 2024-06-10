@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
    <div class="card-body">
        <form action="{{ route('admin.skills.store') }}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="">Skills</label>
                <input type="text" name="skills" id="" placeholder="Masukkan Keahlian Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Persentase</label>
                <input type="text" name="persentase" id="" placeholder="Masukkan Persetanse Keahlian, contoh : 100%" class="form-control">
            </div>
            <div class="form-group mb-3">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
