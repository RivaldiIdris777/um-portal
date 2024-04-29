@extends('layouts.app')
@section('content')
<div class="col-12">
    <div class="card radius-10">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="p-2">
                    <h5>Data Biaya Pendaftaran RPL</h5>
                </div>
                <div class="p-2">
                    <a href="{{ route('rplbiayapendaftaran.create') }}" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Program</th>
                        <th>Biaya Pendaftaran</th>
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
                        <td>{{ $dt->program }}</td>
                        <td>Rp {{ format_uang($dt->biayapendaftaran) }}</td>
                        <td>
                            <form action="{{ route('rplbiayapendaftaran.destroy', $dt->id)  }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus Data</button>
                                <a href="{{ route('rplbiayapendaftaran.edit', $dt->id) }}" class="btn btn-warning">Edit Data</a>
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
