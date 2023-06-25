@extends('part.main')
@section('content')
<strong class='text-center'>Laporan Peminjaman</strong><br><br>
<div class='row'>
    <div class='col-lg-10 border border-success border-4'>
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
    </div>
</div> 
<script>
    window.addEventListener("load", window.print());
  </script>
@endsection
