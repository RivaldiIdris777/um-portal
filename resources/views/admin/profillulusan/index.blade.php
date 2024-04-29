@extends('layouts.app')
@section('content')
<div class="col-12">
    <div class="card radius-10">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="p-2">
                    <h5>Data Profil Lulusan</h5>
                </div>
                <div class="p-2">
                    <a href="{{ route('profillulusan.create') }}" class="btn btn-success">Tambah Data</a>
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
                        <form action="{{ route('profillulusan.destroy', $dt->id)  }}" method="POST">
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
                <img src="{{ Storage::url('public/profil_lulusan/').$dt->gambar }}" alt="" width="1000" height="900">
            </div>
        </div>
    @endforeach

</div>
@endsection
