@extends('part.main')
@section('content')
@if($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error !</strong> <span>{{$errors->first()}}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
<strong class='text-center'>Transaksi Peminjaman</strong><br><br>
<div class='row'>
    <div class='col-lg-8 border border-success border-4'>
        <form action="{{route('transaksi.store')}}" method="post">
            @method('post')
            @csrf

        <div class="mb-3">
            <label for="peminjam" class="form-label">Peminjam</label>
            <select name="peminjam" id="" class="form-control">
            @foreach ($peminjam as $item)
                <option value="{{$item->id}}" {{old("peminjam")==$item->id ? 'selected':''}}>{{$item->nomor_identitas}} - {{$item->nama}}</option>
            @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="barang" class="form-label">Barang</label>
            <select name="barang" id="" class="form-control">
            @foreach ($barang as $item)
            @if ($item->jumlah > 0)
             <option value="{{$item->id}}" {{old("barang")==$item->id ? 'selected':''}}>{{$item->nama}} - {{$item->jumlah}}</option>   
            @endif
            @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input valueAsNumber type="number" name="jumlah" id="jumlah" class="form-control" value="{{old('jumlah')}}" min="1" required>
        </div>
    <button type="submit" class="btn btn-primary mb-1">Submit</button>
  </form>
    </div>
</div>
@endsection