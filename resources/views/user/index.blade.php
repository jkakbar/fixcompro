@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">User</div>
    <div class="card-body">
        <div align="right" class="mb-3">
            <a href="{{route('admin.user.create')}}" class="btn btn-primary">Tambah User</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no=1;
                @endphp
                @foreach ($datas as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>
                        <a href="{{route('admin.user.edit', $data->id)}}" class="btn btn-success">Edit</a>
                        @if ($no > 2)
                        <form method="POST" action="{{route('admin.user.destroy', $data->id)}}" class="d-inline">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
