@extends('layouts.main')
@section('container')

<div class="mt-3">
    <div class="card mx-auto" style="width: fit-content;">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $product->pcode }}</h6>
            <p class="card-text">Harga {{ $product->harga }}/pcs</p>

            <form action="/transaksi" method="post">
                @csrf

                <input type="hidden" name="pcode" id="pcode" value="{{ $product->pcode }}">
                <input type="hidden" name="harga" id="harga" value="{{ $product->harga }}">
                <div class="input-group input-group-sm mb-3">
                    <label for="cust_id" class="form-label mb-0">Customer</label>
                    <select id="cust_id" name="cust_id" class="form-select">
                        <option value="0"></option>
                        @foreach ( $customers as $customer )
                        <option value="{{ $customer -> id }}">{{ $customer -> cust_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="qty">Jumlah</span>
                    <input type="number" class="form-control" name="qty" id="qty" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <label for="diskon" class="form-label mb-0">Promo</label>
                    <select id="diskon" name="diskon" class="form-select">
                        <option value="0"></option>
                        @foreach ( $promos as $promo )
                        <option value="{{ $promo -> diskon }}">{{ $promo -> promo_code }}</option>
                        @endforeach
                    </select>
                </div>
                <a href="/" class="btn btn-sm btn-danger text-decoration-none">BACK</a>
                <button class="btn btn-sm btn-success" type="submit">ORDER</button>
            </form>
        </div>
    </div>
</div>
@endsection