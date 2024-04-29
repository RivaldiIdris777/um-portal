@extends('layouts.app')
@section('content')
<div class="col-12">
    <div class="card radius-10">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="p-2">
                    <h5>Data Link Pendaftaran</h5>
                </div>
                <div class="p-2">
                    <a href="{{ route('linkdaftar.create') }}" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tujuan Link Url</th>
                        <th>Nama URL</th>
                        <th>Url</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 0;
                    @endphp
                    @forelse ( $data as $dt )
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $dt->tujuan_url }}</td>
                        <td>{{ $dt->nama_url }}</td>
                        <td>{{ $dt->url }}</td>
                        <td>
                            <form action="{{ route('linkdaftar.destroy', $dt->id)  }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus Data</button>
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
