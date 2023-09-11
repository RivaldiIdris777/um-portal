@extends('layouts.app')
@section('content')
<div class="col-12">
    <div class="card radius-10">
        <div class="card-body">
            <div>
                <h5>Tambah Data Alur Pendaftaran</h5>
                <form action="{{ route('prodi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label">Sarjana</label>
                            <select name="id_fakultas" class="form-control">
                                <option value="">-- Pilih Fakultas --</option>
                                @foreach ( $fakultas as $fk )
                                    <option value="{{ $fk->id }}">{{ $fk->nama_fakultas }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('id_fakultas'))
                            <div class="text-danger">
                                {{ $errors->first('id_fakultas') }}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Prodi</label>
                            <input type="text" name="nama_prodi" class="form-control">
                            @if ($errors->has('nama_prodi'))
                            <div class="text-danger">
                                {{ $errors->first('nama_prodi') }}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gelar (S.Kom / S.Hub)</label>
                            <input name="gelar" type="text" class="form-control">
                            @if ($errors->has('gelar'))
                            <div class="text-danger">
                                {{ $errors->first('gelar') }}
                            </div>
                            @endif
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
@push('js')
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'penjelasan' );
</script>
@endpush
