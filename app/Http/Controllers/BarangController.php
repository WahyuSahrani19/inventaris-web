<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Transaksi;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $goods=Barang::all();
        $trans=Transaksi::all();
        return view('barang.index',[
            'goods'=>$goods,
            'trans'=>$trans
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Barang::create([
            'nama'=>$request['nama'],
            'jumlah'=>$request['jumlah']        
        ]);
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $goods=Barang::find($id);
        return view('barang.edit',[
            'goods'=>$goods
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $trans=Transaksi::find($id);
        Barang::where('id',$id)->update([
            'nama'=>$request['nama'],
            'jumlah'=>$request['jumlah']
        ]);
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Barang::where('id',$id)->delete();
        return redirect()->route('barang.index');
    }
}
