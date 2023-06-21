@extends('part.main')
@section('content')
  <div class="card-body p-0">
    <div class="table-responsive">
    <a href='{{route('peminjam.create')}}'type="button" class="float-right mb-3 btn btn-success">Tambah Data Peminjam</a>
      <table class="table m-0">
        <thead>
        <tr>
        <th>No</th>
        <th>Nomor Identitas</th>
        <th>Nama Peminjam</th>
        <th>Alamat</th>
        <th>Status</th>
        <th>No Telepon</th>
        <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($borrow as $key=>$item)    
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$item->nomor_identitas}}</td>
              <td>{{$item->nama}}</td>
              <td>{{$item->alamat}}</td>
              <td>{{$item->status}}</td>
              <td>{{$item->no_telp}}</td>
              <td>
                <a href="{{route('peminjam.edit',['peminjam'=>$item])}}" type="button" class="btn btn-info">Edit</a>
                <form action="{{route('peminjam.destroy',['peminjam'=>$item])}}"  method="post" class='d-inline'>
                    @method('delete')
                    @csrf
                <input type="submit" class="btn btn-danger" value="Delete">
                </form>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection