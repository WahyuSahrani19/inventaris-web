@extends('part.main')
@section('content')
<div class="card-body p-0">
    <div class="table-responsive">
    <a href='{{route('transaksi.create')}}'type="button" class="float-right mb-3 btn btn-success">Tambah</a>
      <table class="table m-0">
        <thead>
        <tr>
        <th>Kode peminjaman</th>
        <th>Nama Peminjam</th>
        <th>Jumlah</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Pengembalian</th>
        <th>Aksi</th>
        </tr>
        </thead>
        <tbody> 
                {{-- <form action="{{route('transaksi.destroy',['transaksi'=>$item])}}"  method="post" class='d-inline'>
                    @method('delete')
                    @csrf
                <input type="submit" class="btn btn-danger" value="Delete">
                </form> --}}
              </td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection