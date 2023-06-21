<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Peminjam;
use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trans=Transaksi::all();
        return view('transaksi.index',[
            'trans'=>$trans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peminjam = Peminjam::all();
        $barang = Barang::all();
        return view('transaksi.create',[
            "peminjam"=> $peminjam,
            "barang"=>$barang
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barang = Barang::find($request['barang']);
        $request->validate([
            "barang"=>'required',
            "peminjam"=>'required',
            'jumlah'=>'numeric|required|max:'.$barang['jumlah'],
        ]);
            Transaksi::create([
                "barang_id"=>$request['barang'],
                "peminjam_id"=>$request['peminjam'],
                'jumlah'=>$request['jumlah'],
                'tgl_pinjam'=>date("y-m-d h:i:s"),
            ]);
            Barang::where('id',$request['barang'])->update([
                "jumlah"=> $request['jumlah'] - $barang['jumlah'] 
            ]);
            return redirect()->route('transaksi.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Peminjam::where('id',$id)->delete();
        return redirect()->route('transaksi.index');
    }
}
