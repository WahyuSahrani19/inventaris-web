@extends('part.main')
@section('content')
<strong class='text-center'>Verifikasi</strong><br><br>
<div class='row'>
    <div class='col-lg-8 border border-success border-4'>
        <form action="{{route('transaksi.update',['transaksi'=>$trans])}}" method="post">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="inputgoods" class="form-label">Nama Barang</label>
              <input name='barang' type="text" value='{{$barang->nama}}' class="form-control" id="inputgoods" readonly>
            </div>
            <div class="mb-3">
              <label for="inputborrow" class="form-label">Nama Peminjam</label>
              <input name='peminjam' type="text" value='{{$peminjam->nama}}' class="form-control" id="inputborrow" readonly>
            </div>
            <div class="mb-3">
              <label for="inputborrow" class="form-label">Tanggal Peminjaman</label>
              <input name='tanggalpinjam' type="text" value='{{$trans->tgl_pinjam}}' class="form-control" id="inputborrow" readonly>
            </div>
            <div class="mb-3">
              <label for="valuegoods" class="form-label">Jumlah</label>
              <input name='jumlah' type="number" value='{{$trans->jumlah}}' class="form-control" id="valuegoods" readonly>
            </div>
    <button type="submit" class="btn btn-primary mb-1">Submit</button>
  </form>
    </div>
</div>    

@endsection