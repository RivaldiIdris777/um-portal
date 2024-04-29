@extends('layouts.app')
@section('content')
<div class="col-12">
    <div class="card radius-10">
        <div class="card-body">
            <div>
                <h5>Tambah Data Biaya Perkuliahan</h5>
                <form action="{{ route('biayaperkuliahan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input name="judul" type="text" class="form-control">
                            @if ($errors->has('judul'))
                            <div class="text-danger">
                                {{ $errors->first('judul') }}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Upload Alur Pendaftaran</label>
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
                            <label class="form-label">Penjelasan</label>
                            <textarea name="penjelasan" id="konten" cols="30" rows="10" class="form-control"></textarea>
                            @if ($errors->has('penjelasan'))
                            <div class="text-danger">
                                {{ $errors->first('penjelasan') }}
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
