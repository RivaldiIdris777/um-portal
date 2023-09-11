@extends('layouts.app')
@section('content')
<div class="col-12">
    <div class="card radius-10">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="p-2">
                    <h5>Data Biaya Pendaftaran</h5>
                </div>
                <div class="p-2">
                    @if(count($data) > 0)
                    @else
                        <a href="{{ route('biayapendaftaran.create') }}" class="btn btn-success">Tambah Data</a>
                    @endif

                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Biaya Pendaftaran Pagi</th>
                        <th>Biaya Pendaftaran Malam</th>
                        <th>Biaya Pendaftaran Nama Rekening</th>
                        <th>Biaya Pendaftaran Nomor Rekening</th>
                        <th>Biaya Pendaftaran Nama Nasabah</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ( $data as $dt )
                    <tr>
                        <td>{{ $dt->malam }}</td>
                        <td>{{ $dt->pagi }}</td>
                        <td>{{ $dt->nama_rekening }}</td>
                        <td>{{ $dt->nomor_rekening }}</td>
                        <td>{{ $dt->nama_nasabah }}</td>
                        <td>
                            <form action="{{ route('biayapendaftaran.destroy', $dt->id)  }}" method="POST">
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
