@extends('layouts.main')
@section('container')

<div class="mt-3">
    <div class="card mx-auto" style="width: fit-content;">
        <div class="card-body">


            <h5 class="card-title">KONFIRMASI PEMBAYARAN</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Order ID : INV/07/2020/0000{{ $order->id }}</h6>
            <h6 class="card-subtitle text-body-secondary">Kode Produk : {{ $order->pcode }}</h6>
            <h6 class="card-subtitle text-body-secondary">Jumlah : {{ $order->qty }}</h6>
            <h6 class="card-subtitle text-body-secondary">NET : {{ $order->net() }}</h6>
            <h6 class="card-subtitle text-body-danger">Diskon : {{ $order->diskon }}</h6>
            <h6 class="card-subtitle mb-2 text-body-secondary">PPN 9,5% : {{ $order->ppn() }}</h6>
            <h5 class="card-title mb-3">TOTAL BAYAR : {{ $order->total() }}</h5>

            <form action="/bayar" method="post">
                @csrf

                <input type="hidden" name="pcode" id="pcode" value="{{ $order->pcode }}">
                <input type="hidden" name="id_order" id="id_order" value="{{ $order->id }}">
                <input type="hidden" name="order_id" id="order_id" value="INV/07/2020/0000{{ $order->id }}">
                <input type="hidden" name="jumlah" id="jumlah" value="{{ $order->qty }}">
                <input type="hidden" name="net" id="net" value="{{ $order->net() }}">
                <input type="hidden" name="diskon" id="diskon" value="{{ $order->diskon }}">
                <input type="hidden" name="ppn" id="ppn" value="{{ $order->ppn() }}">
                <input type="hidden" name="total" id="total" value="{{ $order->total() }}">

                <a href="/orders" class="btn btn-sm btn-danger text-decoration-none">KEMBALI</a>
                <button class="btn btn-sm btn-success" type="submit">KONFIRMASI</button>
            </form>
        </div>
    </div>
</div>
@endsection