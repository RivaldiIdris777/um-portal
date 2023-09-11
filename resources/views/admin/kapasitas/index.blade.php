@extends('layouts.app')
@section('content')
<div class="col-12">
    <div class="card radius-10">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="p-2">
                    <h5>Data Kapasitas Kampus</h5>
                </div>
                <div class="p-2">
                    @if(count($data) > 0)
                    @else
                        <a href="{{ route('kapasitas.create') }}" class="btn btn-success">Tambah Data</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Mahasiswa</th>
                        <th>Fakultas</th>
                        <th>Program Studi</th>
                        <th>Dosen</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $dt)
                    <tr>
                        <td>{{ $dt->jml_mahasiswa }}</td>
                        <td>{{ $dt->jml_fakultas }}</td>
                        <td>{{ $dt->jml_prodi }}</td>
                        <td>{{ $dt->jml_dosen }}</td>
                        <td>
                            <form action="{{ route('kapasitas.destroy', $dt->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Hapus Data</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
