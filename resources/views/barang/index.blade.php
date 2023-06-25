@extends('part.main')
@section('content')
<div class="card-body p-0">
    <div class="table-responsive">
    <a href='{{route('barang.create')}}'type="button" class="float-right mb-3 btn btn-success">Tambah Barang</a>
      <table id="example1" class="table m-0">
        <thead>
        <tr>
          <th>Kode Barang</th>
          <th>Nama Barang</th>
          <th>Jumlah</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($goods as $key=>$item)    
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$item->nama}}</td>
              <td>{{$item->jumlah}}</td>
              <td>
                <a href="{{route('barang.edit',['barang'=>$item])}}" type="button" class="btn btn-info">Edit</a>
                <form action="{{route('barang.destroy',['barang'=>$item])}}"  method="post" class='d-inline'>
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