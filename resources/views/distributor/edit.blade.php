@extends('__layouts.app')

@section('title', 'Edit Distributor')

@section('content')

<div class="col-md-6 mx-auto">
        <div class="card shadow mb-4">
            <div class="card-header">
                <h6 class="font-weight-bold text-primary m-0">@yield('title')</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('distributor.update', $distributor->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                    <label for="nama_distributor" class="form-label">Nama Distributor</label>
                    <input type="text" name="nama_distributor" value="{{ $distributor->nama_distributor }}" class="form-control" placeholder="Nama Distributor">
                    </div>

                    <div class="form-group">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control" placeholder="Alamat">{{ $distributor->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                    <label for="telpon" class="form-label">No Telepon</label>
                    <input type="number" name="telpon" value="{{ $distributor->telpon }}" class="form-control" placeholder="No Telepon">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                        <a href="{{ route('distributor.index') }}" class="btn btn-danger btn-sm">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
