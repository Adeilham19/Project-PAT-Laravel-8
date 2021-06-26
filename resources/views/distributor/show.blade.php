@extends('__layouts.app')

@section('title', 'Detail Distributor')

@section('content')

    <div class="col-md-6 mx-auto">
        <div class="card shadow mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h6 class="font-weight-bold text-primary m-0">@yield('title')</h6>
                    <div>
                        <a href="{{ route('distributor.index') }}" class="btn btn-danger">Back</a>
                    </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Distributor</label>
                    <input type="text" name="nama_distributor" value="{{ $distributor->nama_distributor }}" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                        <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control" disabled>{{ $distributor->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="number" name="telpon" value="{{ $distributor->telpon }}" class="form-control" disabled>
                </div>
            </div>
        </div>
    </div>

@endsection
