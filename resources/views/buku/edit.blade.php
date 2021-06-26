@extends('__layouts.app')

@section('title', 'Edit Buku')

@section('content')


 <div class="col-md-6 mx-auto">
        <div class="card shadow mb-4">
            <div class="card-header">
                <h6 class="font-weight-bold text-primary m-0">@yield('title')</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('buku.update', $buku->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                    <label for="judul" class="form-label">Judul Buku</label>
                    <input type="text" name="judul" value="{{ $buku->judul }}" class="form-control" placeholder="Judul Buku">
                    </div>

                    <div class="form-group">
                    <label for="noisbn" class="form-label">Nomor ISBN</label>
                    <input type="number" name="noisbn" value="{{ $buku->noisbn }}" class="form-control" placeholder="Nomor ISBN">
                    </div>
                    <div class="form-group">
                    <label for="penulis" class="form-label">Penulis Buku</label>
                    <input type="text" name="penulis" value="{{ $buku->penulis }}" class="form-control" placeholder="Penulis Buku">
                    </div>
                    <div class="form-group">
                    <label for="penerbit" class="form-label">Penerbit Buku</label>
                    <input type="text" name="penerbit" value="{{ $buku->penerbit }}" class="form-control" placeholder="Penerbit Buku">
                    </div>

                    <div class="form-group">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="number" name="tahun" value="{{ $buku->tahun }}" class="form-control" placeholder="Tahun">
                    </div>

                    <div class="form-group">
                    <label for="harga_pokok" class="form-label">Harga Pokok</label>
                    <input type="number" name="harga_pokok" value="{{ $buku->harga_pokok }}" class="form-control" placeholder="Harga Pokok">
                    </div>

                    <div class="form-group">
                    <label for="harga_jual" class="form-label">Harga Jual</label>
                    <input type="number" name="harga_jual" value="{{ $buku->harga_jual }}" class="form-control" placeholder="Harga Jual">
                    </div>

                    <div class="form-group">
                    <label for="ppn" class="form-label">PPN <small><i>(Diisi dalam bentuk %)</i></small></label>
                    <input type="number" name="ppn" value="{{ $buku->ppn }}" class="form-control" placeholder="PPN">
                    </div>

                    <div class="form-group">
                    <label for="diskon" class="form-label">Diskon <small><i>(Diisi dalam bentuk %)</i></small></label>
                    <input type="number" name="diskon" value="{{ $buku->diskon }}" class="form-control" placeholder="Diskon">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-warning" type="submit">Edit</button>
                        <a href="{{ route('buku.index') }}" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
