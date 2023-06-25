@extends('part.main')
@section('content')
<script src="plugins/chart.js/Chart.min.js"></script>
<div class="row">
  <div class="col-lg-3 col">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{$total}}</h3>        
        <p>Barang Terdata</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{$trans->count()}}</h3>

        <p>Jumlah Transaksi</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
    </div>
  </div>

  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>{{$goods->sum('jumlah')}}</h3>

        <p>Barang Tersedia</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
    </div>
  </div>

  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{$borrow->count()}}</h3>

        <p>Data Peminjam</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
    </div>
  </div>
  <!-- ./col -->
</div>

<!-- /.row -->
<!-- Main row -->

    <!-- TABLE: barang baru -->
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Barang Baru Ditambahkan</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <ul class="products-list product-list-in-card pl-2 pr-2">
              @foreach ($goods->reverse()->take(7) as $key=>$item) 
              <li class="item">
                <div class="product-info">
                  <a class="product-title">{{$item->nama}}
                </div>
              </li>
              @endforeach
            </ul>
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-center">
            <a href="{{route('barang.index')}}" class="uppercase">Lihat selengkapnya</a>
          </div>
          <!-- /.card-footer -->
        </div>
          <!-- /.card-footer -->
        </div>
      </div>
      <div class="col-lg-4">
    
                    
      </div>
    </div>
    <!-- /.card -->

  </section>
  <!-- right col -->
</div>
@endsection