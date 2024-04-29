@extends('layouts.app')
@section('content')
<div class="col-12">
    <div class="card radius-10">
        <div class="card-body">
            <div>
                <h5>Tambah Data Biaya Pendaftaran RPL</h5>
                <form action="{{ route('rplbiayapendaftaran.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label">Program</label>
                            <input name="program" type="text" value="{{ $data->program }}" class="form-control" >
                            @if ($errors->has('program'))
                            <div class="text-danger">
                                {{ $errors->first('program') }}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Url</label>
                            <input name="biayapendaftaran" type="number" value="{{ $data->biayapendaftaran }}" class="form-control" >
                            @if ($errors->has('biayapendaftaran'))
                            <div class="text-danger">
                                {{ $errors->first('biayapendaftaran') }}
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
