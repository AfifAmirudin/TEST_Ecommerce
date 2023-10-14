@extends('layouts.main')
@section('container')
@if(session()->has('success'))
<div class="alert alert-succes alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if($orders->count())
<div class="mt-3" style="width: fit-content;">
    <div class="card mx-auto">
        <table class="table justify-content-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Order_ID</th>
                    <th scope="col">Kode Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Diskon</th>
                    <th scope="col">PPN</th>
                    <th scope="col">Total Bayar</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($orders as $order)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>INV/07/2020/0000{{ $order->id }}</td>
                    <td>{{ $order->pcode }}</td>
                    <td>{{ $order->harga }}</td>
                    <td>{{ $order->qty }}</td>
                    <td>{{ $order->diskon }}</td>
                    <td>{{ $order->ppn() }}</td>
                    <td>{{ $order->total() }}</td>
                    <td>
                        <a href="/bayar/{{ $order->id }}" class="badge bg-warning text-decoration-none"> Bayar </a>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@else
<p class="fs-4">BELUM ADA ORDERAN</p>
@endif
@endsection