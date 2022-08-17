@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-5">{{ $produk->nama_produk }}</h2>
                
                <a href="/produk" class="btn btn-success"><i class="bi bi-arrow-left"></i> kembali</a>
                <a href="/produk/{{ $produk->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                <form action="/produk/{{ $produk->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah anda Yakin?')"><i class="bi bi-trash"></i> Delete</button>
                </form>
                    
                <article class="my-3 fs-5">
                    {{ $produk->keterangan }}
                </article>

                <p class="my-3 fs-5">
                    {{ $produk->harga }}
                </p>

                <p class="my-3 fs-5">
                    {{ $produk->jumlah }}
                </p>

            </div>
        </div>
    </div>

@endsection