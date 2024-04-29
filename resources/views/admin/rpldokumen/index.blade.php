@extends('layouts.app')
@section('content')
<div class="col-12">
    <div class="card radius-10">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="p-2">
                    <h5>Data Dokumen RPL (PDF)</h5>
                </div>
                <div class="p-2">
                    <a href="{{ route('rpldokumen.create') }}" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
    @foreach ($data as $dt)
        <div class="card radius-10">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="p-2">
                        <h4>Data {{ $dt->judul }}</h4>
                    </div>
                    <div class="p-2">
                        <form action="{{ route('rpldokumen.destroy', $dt->id)  }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus Data</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <iframe src="/assets/rpldokumen/{{ $dt->file }}" type="application/pdf" width="100%" height="500px"></iframe>
                <table class="table table-striped no-margin mt-3">
                    <tbody>
                        <tr>
                            <td>Judul</td>
                            <td>{{ $dt->judul }}</td>
                        </tr>
                        <tr>
                            <td>Penjelasan</td>
                            <td>{!! $dt->penjelasan !!}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
</div>
@endsection
