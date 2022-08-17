@extends('layouts.main')

@section('container')


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Produk</h1>
    </div>

    <div class="col-lg-8 mb-5">

        <a href="/produk" class="btn btn-success mb-5"><i class="bi bi-arrow-left"></i> kembali</a>
        
        <form method="post" action="/produk/{{ $produk->id }}" >
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="nama_produk" class="form-label">Nama Produk</label>
              <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" autofocus value="{{ old('nama_produk', $produk->nama_produk) }}">
              @error('nama_produk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" rows="3" name="keterangan" >{{ $produk->keterangan }}</textarea>
                @error('keterangan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="harga" class="form-label">Harga</label>
              <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga', $produk->harga) }}">
              @error('harga')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="jumlah" class="form-label">Jumlah</label>
              <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" value="{{ old('jumlah', $produk->jumlah) }}">
              @error('jumlah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Produk</button>
        </form>

    </div>


@endsection