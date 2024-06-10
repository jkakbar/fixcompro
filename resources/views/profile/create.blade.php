@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
    <div class="card-body">
        <form action="{{ route('admin.profile.store') }}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="">Nama</label>
                <input type="text" name="name" id="" placeholder="Masukkan Nama Lengkap Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Email</label>
                <input type="email" name="email" id="" placeholder="Masukkan Email Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">No Telepon</label>
                <input type="number" name="phone" id="" placeholder="Masukkan Phone Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Alamat</label>
                <textarea name="address" id="" cols="30" rows="30" class="form-control" placeholder="Masukkan Alamat Anda"></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">Github</label>
                <input type="url" name="github_link" id="" placeholder="Masukkan Url Github Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Linkedin</label>
                <input type="url" name="linkedin_link" id="" placeholder="Masukkan Url Linkedin Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Twitter</label>
                <input type="url" name="twitter_link" id="" placeholder="Masukkan Url Twitter Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Facebook</label>
                <input type="url" name="facebook_link" id="" placeholder="Masukkan Url facebook Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Deskripsi</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Masukkan Deskripsi tentang Anda"></textarea>
            </div>
            <div class="form-group mb-3">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>

@endsection
