@extends('template')

@section('title', 'Edit Barang')

@section('body')
    
    <div class="m-5">
        <h1 class="text-center">Edit Barang</h1>
        <form action="/update-barang/{{ $barang->id }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('patch')

            <div class="form-group">
                <label for="KategoriBarang">Kategori Barang</label>
                <input type="text" class="form-control" id="KategoriBarang" placeholder="Masukkan Kategori Barang" name="KategoriBarang" value="{{ old('KategoriBarang') }}">
                @error('KategoriBarang')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="NamaBarang">Nama Barang</label>
                <input type="text" class="form-control" id="NamaBarang" placeholder="Nama Barang" name="NamaBarang" value="{{ old('NamaBarang') }}">
                @error('NamaBarang')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="HargaBarang">Harga Barang</label>
                <input type="number" class="form-control" id="HargaBarang" placeholder="Harga Barang" name="HargaBarang" value="{{ old('HargaBarang') }}">
                @error('HargaBarang')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="JumlahBarang">Jumlah Barang</label>
                <input type="number" class="form-control" id="JumlahBarang" placeholder="Jumlah Barang" name="JumlahBarang" value="{{ old('JumlahBarang') }}">
                @error('JumlahBarang')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="FotoBarang">Foto Barang</label>
                <input type="file" class="form-control" id="FotoBarang" placeholder="Foto Barang" name="FotoBarang" value="{{ old('Foto') }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection