@extends('layouts.app')
@section('content')
<div class="col-12">
    <div class="card radius-10">
        <div class="card-body">
            <div>
                <h5>Tambah Data Gambar Alur Pendaftaran</h5>
                <form action="{{ route('rplgambar.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <select name="judul" class="form-control">
                                <option value="alur-pendaftaran">ALUR-PENDAFTARAN</option>
                                <option value="brosur">BROSUR</option>
                            </select>
                            @if ($errors->has('judul'))
                            <div class="text-danger">
                                {{ $errors->first('judul') }}
                            </div>
                            @endif
                        </div>
                        <label class="form-label">Upload Alur Pendaftaran</label>
                        <div class="mb-3">
                            <img class="mb-2" id="outputtf" src="{{ old('gambar') }}" width="1000" height="900">
                            <input type="file" name="gambar" class="form-control" accept="image/*"
                                onchange="document.getElementById('outputtf').src = window.URL.createObjectURL(this.files[0])">
                            @if ($errors->has('gambar'))
                            <div class="text-danger">
                                {{ $errors->first('gambar') }}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">keterangan</label>
                            <textarea name="keterangan" id="konten" cols="30" rows="10" class="form-control"></textarea>
                            @if ($errors->has('keterangan'))
                            <div class="text-danger">
                                {{ $errors->first('keterangan') }}
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
    CKEDITOR.replace( 'keterangan' );
</script>
@endpush
