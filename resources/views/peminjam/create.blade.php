@extends('part.main')
@section('content')

<strong class='text-center'>Tambah Data Peminjam</strong><br><br>
<div class='row'>
    <div class='col-lg-8 border border-success border-4'>
        <form action="{{route('peminjam.store')}}" method="post">
            @method('post')
            @csrf
    <div class="mb-3">
        <label for="inputborrow" class="form-label">Nomor Identitas</label>
        <input name='nomor_identitas' type="text" class="form-control" id="inputborrow" required>
    </div>
    <div class="mb-3">
      <label for="inputborrow" class="form-label">Nama Peminjam</label>
      <input name='nama' type="text" class="form-control" id="inputborrow" required>
    </div>
    <div class="form-floating mb-3">
        <label for="inputborrow">Alamat</label>
        <textarea name='alamat' type='text' class="form-control" id="inputborrow" style="height: 140px" required></textarea>
    </div>
    <div class="form-check">
        <label class="form-check-label" for="inputborrow">
        <input name='status' class="form-check-input" value="Mahasiswa" type="radio" id="inputborrow">
          MAHASISWA
        </label>
      </div>
      <div class="form-check mb-3">
        <label class="form-check-label" for="inputborrow">
        <input name='status' class="form-check-input" value="Dosen" type="radio" id="inputborrow" checked>
          DOSEN
        </label>
      </div>
    <div class="mb-3">
        <label for="inputborrow" class="form-label">Nomor Telepon</label>
        <input name='no_telp' type='text' class="form-control" id="inputborrow" required>
      </div>
    <button type="submit" class="btn btn-primary mb-1">Submit</button>
    </div>
</div>

@endsection