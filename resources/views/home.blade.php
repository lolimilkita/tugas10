@extends('layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Produk</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="table-responsive">
      <a href="/produk/create" class="btn btn-primary mb-3">Tambah Product Baru</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Produk</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Harga</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($produk as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama_produk }}</td>
                    <td>{{ $p->keterangan }}</td>
                    <td>{{ $p->harga }}</td>
                    <td>{{ $p->jumlah }}</td>
                    <td>
                        <a href="/produk/{{ $p->id }}" class="badge bg-info"><i class="bi bi-eye"></i></a>
                        <a href="/produk/{{ $p->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                        <form action="/produk/{{ $p->id }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda Yakin?')"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>      
            @endforeach
          </tbody>
        </table>
    </div>

    
@endsection