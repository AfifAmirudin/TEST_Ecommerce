@extends('layouts.main')
@section('container')
@if(session()->has('success'))
<div class="alert alert-succes alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if($mutasis->count())
<div class="mt-3" style="width: fit-content;">
    <div class="card mx-auto">
        <table class="table justify-content-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Kode Produk</th>
                    <th scope="col">Order ID</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($mutasis as $mutasi)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{ $mutasi->created_at->format('d/m/y') }}</td>
                    <td>{{ $mutasi->pcode }}</td>
                    <td>{{ $mutasi->order_id }}</td>
                    <td>{{ $mutasi->jumlah }}</td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@else
<p class="fs-4">BELUM ADA MUTASI</p>
@endif
@endsection