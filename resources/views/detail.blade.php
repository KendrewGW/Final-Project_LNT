@extends('template')

@section('title', 'Detail Barang')

@section('body')
    
    <div class="d-flex m-5">
            <div class="card justify-content-center" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('/storage/Barang/'.$barang->Foto) }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $barang->NamaBarang }}</h5>
                    <p class="card-text">Kategori : {{ $barang->KategoriBarang }}</p>
                    <p class="card-text">Harga : Rp. {{ $barang->HargaBarang }}</p>
                    <p class="card-text">Stok Barang : {{ $barang->JumlahBarang }}</p>
                    <a href="/" class="btn btn-primary">Kembali</a>
                    <a href="/edit-barang/{{$barang->id}}" class="btn btn-success">Edit Barang</a>
                    <a href="/delete-barang/{{ $barang->id }}" class="btn btn-danger" style="margin-top: 10px">Hapus Barang</a>
                </div>
            </div>
    </div>        
    
@endsection