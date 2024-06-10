@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
    <div class="card-body">
        <form action="{{route('admin.profile.update', $edit->id)}}" method="post">
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
                <label for="">No Telepon</label>
                <input value="{{$edit->phone}}" type="number" name="phone" id="" placeholder="Masukkan Phone Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Alamat</label>
                <textarea  name="address" id="" cols="30" rows="10" class="form-control" placeholder="Masukkan Alamat Anda">{{$edit->address}}</textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">Link Github</label>
                <input value="{{$edit->github_link}}" type="url" name="github_link" id="" placeholder="Masukkan Link Github Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Link Linkedin</label>
                <input value="{{$edit->linkedin_link}}" type="url" name="linkedin_link" id="" placeholder="Masukkan Link Linkedin Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Link Twitter</label>
                <input value="{{$edit->twitter_link}}" type="url" name="twitter_link" id="" placeholder="Masukkan Link Twitter Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Link Facebook</label>
                <input value="{{$edit->facebook_link}}" type="url" name="facebook_link" id="" placeholder="Masukkan Link facebook Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Deskripsi</label>
                <textarea  name="description" id="" cols="30" rows="10" class="form-control" placeholder="Masukkan Deskripsi tentang Anda">{{$edit->description}}</textarea>
            </div>
            <div class="form-group mb-3">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
