@extends('part.main')
@section('content')
<div class="card-body p-0">
    <div class="table-responsive">
      <table id="example1" class="table mt-5">
        <thead>
        <tr>
        <th>No</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Pengembalian</th>
        <th>Nama Peminjam</th>
        <th>Nama Barang</th>
        <th>Jumlah</th>
        <th>Aksi</th>
        </tr>
        </thead>
        <tbody> 
          @foreach ($trans as $key=>$item)    
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$item->tgl_pinjam}}</td>
              <td>{{$item->tgl_balik}}</td>
              <td>{{$item->peminjam->nama}}</td>
              <td>{{$item->barang->nama}}</td>
              <td>{{$item->jumlah}}</td>
              <td><a href="{{route('laporan.show',['laporan'=>$item])}}" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
              </td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection