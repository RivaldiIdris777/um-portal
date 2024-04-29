@extends('layouts.app')
@section('content')
<div class="col-12">
    <div class="card radius-10">
        <div class="card-body">
            <div>
                <h5>Tambah Data Link Pendaftaran</h5>
                <form action="{{ route('linkdaftar.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label">Tujuan URL</label>
                            <select name="tujuan_url" class="form-control">
                                <option value="Sarjana">Sarjana</option>
                                <option value="Pascasarjana">Pascasarjana</option>
                            </select>
                            @if ($errors->has('tujuan_url'))
                            <div class="text-danger">
                                {{ $errors->first('tujuan_url') }}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Link Pendaftaran</label>
                            <input name="nama_url" type="text" class="form-control" >
                            @if ($errors->has('nama_url'))
                            <div class="text-danger">
                                {{ $errors->first('nama_url') }}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Url</label>
                            <input name="url" type="text" class="form-control" >
                            @if ($errors->has('url'))
                            <div class="text-danger">
                                {{ $errors->first('url') }}
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
