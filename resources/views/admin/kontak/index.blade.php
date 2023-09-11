@extends('layouts.app')
@section('content')
<div class="col-12">
    <div class="card radius-10">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="p-2">
                    <h5>Data Kontak</h5>
                </div>
                <div class="p-2">
                    <a href="{{ route('kontak.create') }}" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
    @foreach ($data as $dt)
        <div class="card radius-10">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="p-2">
                        <h4>Data Kontak (Alamat, Email, Whatsapp)</h4>
                    </div>
                    <div class="p-2">
                        <form action="{{ route('kontak.destroy', $dt->id)  }}" method="POST">
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
                <iframe style="border:0; width: 100%; height: 350px;" src="{{ $dt->googlemaplink }}" frameborder="0" allowfullscreen></iframe>
                <table class="table table-striped no-margin mt-3">
                    <tbody>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $dt->alamat }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $dt->email }}</td>
                        </tr>
                        <tr>
                            <td>Whatsapp</td>
                            <td>{{ $dt->whatsapp }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
</div>
@endsection
