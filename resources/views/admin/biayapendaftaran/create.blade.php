@extends('layouts.app')
@section('content')
<div class="col-12">
    <div class="card radius-10">
        <div class="card-body">
            <div>
                <h5>Tambah Data Info Biaya Pendaftaran</h5>
                <form action="{{ route('biayapendaftaran.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label">Biaya Pendaftaran Pagi</label>
                            <input name="pagi" type="number" class="form-control">
                            @if ($errors->has('pagi'))
                            <div class="text-danger">
                                {{ $errors->first('pagi') }}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Biaya Pendaftaran Malam</label>
                            <input name="malam" type="number" class="form-control">
                            @if ($errors->has('malam'))
                            <div class="text-danger">
                                {{ $errors->first('malam') }}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rekening Bank</label>
                            <input name="nama_rekening" type="text" class="form-control" value="BSI" readonly>
                            @if ($errors->has('nama_rekening'))
                            <div class="text-danger">
                                {{ $errors->first('nama_rekening') }}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor Rekening</label>
                            <input name="nomor_rekening" type="number" class="form-control">
                            @if ($errors->has('nomor_rekening'))
                            <div class="text-danger">
                                {{ $errors->first('nomor_rekening') }}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Nasabah</label>
                            <input name="nama_nasabah" type="text" class="form-control" >
                            @if ($errors->has('nama_nasabah'))
                            <div class="text-danger">
                                {{ $errors->first('nama_nasabah') }}
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
