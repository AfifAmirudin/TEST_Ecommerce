@extends('layouts.main')
@section('container')
<div class="mt-3">
    @foreach ($products as $product)
    <div class="card mx-auto" style="width: fit-content;">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Kode : {{ $product->pcode }}</h6>
            <h6 class="card-subtitle mb-2 text-body-secondary">STOK : {{ $product->jumlah }}</h6>
            <p class="card-text">Harga : {{ $product->harga }}/pcs</p>
            <a href="/order/{{ $product->id }}" class="btn btn-sm btn-success text-decoration-none">Beli</a>
        </div>
    </div>
    @endforeach
</div>
@endsection