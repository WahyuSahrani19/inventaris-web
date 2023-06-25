@extends('part.main')
@section('content')
<div class="card-body p-0">
    <div class="table-responsive">
    <a href='{{route('transaksi.create')}}'type="button" class="float-right mb-3 btn btn-success">Tambah</a>
      <table id="example1" class="table m-0">
        <thead>
        <tr>
        <th>No</th>
        <th>Nama Peminjam</th>
        <th>Nama Barang</th>
        <th>Jumlah</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Pengembalian</th>
        <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($trans as $key=>$item)   
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->peminjam->nama}}</td>
            <td>{{$item->barang->nama}}</td>
            <td>{{$item->jumlah}}</td>
            <td>{{$item->tgl_pinjam}}</td>
            <td>{{$item->tgl_balik}}</td>
            @if(!$item->tgl_balik)
            <td><a href="{{route('transaksi.edit',['transaksi'=>$item])}}" type="button" class="btn btn-info">👍</a></td>
            @else
            <td></td>
              @endif
          </tr>
          @endforeach
                {{-- <form action="{{route('transaksi.destroy',['transaksi'=>$item])}}"  method="post" class='d-inline'>
                    @method('delete')
                    @csrf
                <input type="submit" class="btn btn-danger" value="Delete">
                </form> --}}
              
        </tbody>
      </table>
    </div>
  </div>
@endsection