@extends('layouts.app')
@section('content')
<div class="col-12">
    <div class="card radius-10">
        <div class="card-body">
            <div>
                <h5>Tambah Data Kapasitas Kampus</h5>
                <form action="{{ route('kapasitas.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label">Jumlah Mahasiswa</label>
                            <input name="jml_mahasiswa" type="number" class="form-control">
                            @if ($errors->has('jml_mahasiswa'))
                            <div class="text-danger">
                                {{ $errors->first('jml_mahasiswa') }}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Fakultas</label>
                            <input name="jml_fakultas" type="number" class="form-control">
                            @if ($errors->has('jml_fakultas'))
                            <div class="text-danger">
                                {{ $errors->first('jml_fakultas') }}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Program Studi</label>
                            <input name="jml_prodi" type="number" class="form-control">
                            @if ($errors->has('jml_prodi'))
                            <div class="text-danger">
                                {{ $errors->first('jml_prodi') }}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Dosen</label>
                            <input name="jml_dosen" type="number" class="form-control">
                            @if ($errors->has('jml_dosen'))
                            <div class="text-danger">
                                {{ $errors->first('jml_dosen') }}
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
