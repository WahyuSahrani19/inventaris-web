<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjam;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $borrow=Peminjam::all();
        return view('peminjam.index',[
            'borrow'=>$borrow
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peminjam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        Peminjam::create([
            'nomor_identitas'=>$request['nomor_identitas'],
            'nama'=>$request['nama'],
            'alamat'=>$request['alamat'],
            'status'=>$request['status'],
            'no_telp'=>$request['no_telp']
        ]);
        return redirect()->route('peminjam.index');
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
        $borrow=Peminjam::find($id);
        return view('peminjam.edit',[
            'borrow'=>$borrow
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Peminjam::where('id',$id)->update([
            'nomor_identitas'=>$request['nomor_identitas'],
            'nama'=>$request['nama'],
            'alamat'=>$request['alamat'],
            'status'=>$request['status'],
            'no_telp'=>$request['no_telp']
        ]);
        return redirect()->route('peminjam.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Peminjam::where('id',$id)->delete();
        return redirect()->route('peminjam.index');
    }
}
