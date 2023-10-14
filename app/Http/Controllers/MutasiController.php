<?php

namespace App\Http\Controllers;

use App\Models\Mutasi;
use App\Models\Product;
use App\Http\Requests\StoreMutasiRequest;
use App\Http\Requests\UpdateMutasiRequest;

class MutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mutasi.index', [
            'mutasis' => Mutasi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMutasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMutasiRequest $request)
    {
        $validatedData = $request->validate([
            'pcode' => 'required',
            'id_order' => 'required',
            'order_id' => 'required',
            'jumlah' => 'required',
            'diskon' => 'required',
            'net' => 'required',
            'ppn' => 'required',
            'total' => 'required',
        ]);


        Mutasi::create($validatedData);


        return redirect('/mutasi')->with('success', 'Mutasi ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function show(Mutasi $mutasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Mutasi $mutasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMutasiRequest  $request
     * @param  \App\Models\Mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMutasiRequest $request, Mutasi $mutasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mutasi $mutasi)
    {
        //
    }
}
