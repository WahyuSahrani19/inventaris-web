@extends('part.main')
@section('content')

<strong class='text-center'>Tambah Barang</strong><br><br>
<div class='row'>
    <div class='col-lg-8 border border-success border-4'>
        <form action="{{route('barang.store')}}" method="post">
            @method('post')
            @csrf
    <div class="mb-3">
      <label for="inputgoods" class="form-label">Nama Barang</label>
      <input name='nama' type="text" class="form-control" id="inputgoods" required>
    </div>
    <div class="mb-3">
      <label for="valuegoods" class="form-label">Jumlah</label>
      <input name='jumlah' type="number" class="form-control" id="valuegoods" min=1 required>
    </div>
    <button type="submit" class="btn btn-primary mb-1">Submit</button>
  </form>
    </div>
</div>

@endsection