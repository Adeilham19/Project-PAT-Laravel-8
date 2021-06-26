@extends('__layouts.app')

@section('title', 'Input Distributor')

@section('content')

<div class="col-md-6 mx-auto">
        <div class="card shadow mb-4">
            <div class="card-header">
                <h6 class="font-weight-bold text-primary m-0">@yield('title')</h6>
            </div>
            <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <h4>Error : </h4>
                            <ul>
                                @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                
                <form action="{{ route('distributor.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="nama_distributor" class="form-label">Nama Distributor</label>
                        <input type="text" name="nama_distributor" class="form-control" placeholder="Nama Distributor">
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="telpon" class="form-label">No Telepon</label>
                        <input type="number" name="telpon" class="form-control" placeholder="No Telepon">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm">Tambah</button>
                        <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
                        <a href="{{ route('distributor.index') }}" class="btn btn-danger btn-sm">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
