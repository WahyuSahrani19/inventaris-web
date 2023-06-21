@extends('part.main')
@section('content')
<strong class='text-center'>Transaksi Peminjaman</strong><br><br>
<div class='row'>
    <div class='col-lg-8 border border-success border-4'>
        <form action="{{route('transaksi.store')}}" method="post">
            @method('post')
            @csrf

        <div class="dropdown">
            <label for="valuegoods" class="form-label">Nomor Identitas</label>
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
        <div class="mb-3">
            <label for="inputborrow" class="form-label">Nama Peminjam</label>
            <input name='nama' type="text" class="form-control" id="inputborrow" required>
        </div>
    <div class="mb-3">
      <label for="valuegoods" class="form-label">Jumlah</label>
      <input name='jumlah' type="number" class="form-control" id="valuegoods" min=1 required>
    </div>
    <div class="mb-3">
        <label for="valuegoods" class="form-label">Tanggal Peminjaman</label>
        <input name='jumlah' type="number" class="form-control" id="valuegoods" min=1 required>
    </div>
    <button type="submit" class="btn btn-primary mb-1">Submit</button>
  </form>
    </div>
</div>
@endsection