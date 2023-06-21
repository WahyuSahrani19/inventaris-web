@extends('part.main')
@section('content')
<strong class='text-center'>Edit Barang</strong><br><br>
<div class='row'>
    <div class='col-lg-8 border border-success border-4'>
        <form action="{{route('barang.update',['barang'=>$goods])}}" method="post">
            @method('put')
            @csrf
    <div class="mb-3">
      <label for="inputgoods" class="form-label">Nama Barang</label>
      <input name='nama' type="text" value='{{$goods->nama}}' class="form-control" id="inputgoods" required>
    </div>
    <div class="mb-3">
      <label for="valuegoods" class="form-label">Jumlah</label>
      <input name='jumlah' type="number" value='{{$goods->jumlah}}' class="form-control" id="valuegoods" min=1 required>
    </div>
    <button type="submit" class="btn btn-primary mb-1">Submit</button>
  </form>
    </div>
</div>
@endsection