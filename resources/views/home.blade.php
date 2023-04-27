@extends('template')

@section('title', 'PT.Meksiko')

@section('body')
    
    <div class="d-flex m-5 flex-wrap" >
        @foreach ($barang as $barangs)

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $barangs->NamaBarang }}</h5>
                <p class="card-text">Rp. {{ $barangs->HargaBarang }}</p>
                <a href="/detail-barang/{{ $barangs->id }}" class="btn btn-primary">Lihat Detail</a>
            </div>
        </div>
        @endforeach
    </div>
    
@endsection