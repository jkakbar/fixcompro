@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body mt-3">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.project.create') }}" class="btn btn-primary">Tambah Project</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pekerjaan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->project }}</td>
                                <td>{{ $data->mulai }}</td>
                                <td>{{ $data->selesai }}</td>
                                <td>
                                    <a href="{{ route('admin.project.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                    <form method="POST" action="{{ route('admin.project.destroy', $data->id) }}"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
