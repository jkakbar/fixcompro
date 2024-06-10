@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body mt-3">
            <form action="{{ route('admin.experience.store') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Nama Pekerjaan</label>
                    <input type="text" name="nama_pekerjaan" id="" placeholder="Masukkan Nama Pekerjaan Anda"
                        class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" id="" placeholder="Masukkan Nama Perusahaan Anda"
                        class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Mulai</label>
                    <input type="date" name="tgl_mulai" id="tgl_mulai" max="<?= date('Y-m-d') ?>"
                        placeholder="Masukkan Tanggal Mulai Anda" class="form-control" onchange="setMaxDate()">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Selesai</label>
                    <input type="date" name="tgl_selesai" id="tgl_selesai" max="<?= date('Y-m-d') ?>"
                        placeholder="Masukkan Tanggal Selesai Anda" class="form-control" onchange="setMinDate()">
                </div>
                <script>
                    function setMinDate() {
                        var tgl_selesai = document.getElementById('tgl_selesai').value;
                        document.getElementById('tgl_mulai').max = tgl_selesai;
                    }

                    function setMaxDate() {
                        var tgl_mulai = document.getElementById('tgl_mulai').value;
                        document.getElementById('tgl_selesai').min = tgl_mulai;
                    }
                </script>
                <div class="form-group mb-3">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi_pekerjaan" id="" cols="30" rows="10" class="form-control"
                        placeholder="Masukkan Deskripsi tentang Anda"></textarea>
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
