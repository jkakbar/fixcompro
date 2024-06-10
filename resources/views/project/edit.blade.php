@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
    <div class="card-body">
        <form action="{{route('admin.project.update', $edit->id)}}" method="post">
            @csrf
            @method("put")
            <div class="form-group mb-3">
                <label for="">Nama Project</label>
                <input value="{{$edit->project}}" type="text" name="project" id="" placeholder="Masukkan Nama Project Anda"
                    class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Tanggal Mulai</label>
                <input value="{{$edit->mulai}}" type="date" name="mulai" id="tgl_mulai" max="<?= date('Y-m-d')?>" placeholder="Masukkan Tanggal Mulai Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Tanggal Selesai</label>
                <input value="{{$edit->selesai}}" type="date" name="selesai" id="tgl_selesai" max="<?= date('Y-m-d')?>" placeholder="Masukkan Tanggal Selesai Anda" class="form-control">
            </div>
            <script>
                function setMinDate() {
                    var selesai = document.getElementById('tgl_selesai').value;
                    document.getElementById('tgl_mulai').max = selesai;
                }

                function setMaxDate() {
                    var mulai = document.getElementById('tgl_mulai').value;
                    document.getElementById('tgl_selesai').min = mulai;
                }
            </script>
            <div class="form-group mb-3">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
