@extends('layouts.app')
@section('content')
<div class="col-12">
    <div class="card radius-10">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="p-2">
                    <h5>Data Akreditasi Kampus</h5>
                </div>
                <div class="p-2">
                    @if(count($data) > 0)
                    @else
                        <a href="{{ route('akreditasi.create') }}" class="btn btn-success">Tambah Data</a>
                    @endif
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
                        <form action="{{ route('akreditasi.destroy', $dt->id)  }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus Data</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div>
                </div>
                <img src="{{ Storage::url('public/akreditasi/').$dt->gambar }}" alt="" width="1000" height="900">
                <table class="table table-striped no-margin mt-3">
                    <tbody>
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
