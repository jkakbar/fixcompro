@extends('layouts.app')
@section('content')
    <style>

    </style>
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body mt-3">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.skills.create') }}" class="btn btn-primary">Tambah Skills</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Skills dan Persentase</th>
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
                                <td>
                                    <div class="row skills-content">

                                        <div class="col-12">

                                            <div class="progress">
                                                <span class="skill">{{ $data->skills }} <i
                                                        class="val">{{ $data->persentase }}</i></span>
                                                <div class="progress-bar-wrap">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                                        aria-valuemin="0" aria-valuemax="100"
                                                        style="width: {{ $data->persentase }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td style="width: 20%">
                                    <a href="{{ route('admin.skills.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                    <form method="POST" action="{{ route('admin.skills.destroy', $data->id) }}"
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
