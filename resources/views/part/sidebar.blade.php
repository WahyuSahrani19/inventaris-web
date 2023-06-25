<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{asset('/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Wahyu Sahrani</a>
        </div>
      </div>

  

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                 <a href="/" class="nav-link  {{Request::segment(1)==''?'active':''}}">
                   <i class="nav-icon fas fa-tachometer-alt"></i>
                   <p>
                     Dashboard
                   </p>
                 </a>
               </li>
               <li class="nav-item">
                <a href='{{route('barang.index')}}' class="nav-link {{Request::segment(1)=='barang'?'active':''}}">
                  <i class="nav-icon fas fa-laptop"></i>
                  <p>
                    Barang
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('peminjam.index')}}" class="nav-link {{Request::segment(1)=='peminjam'?'active':''}}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Data Peminjam
                  </p>
                </a>
              </li>
               <li class="nav-item">
                 <a href='{{route('transaksi.index')}}' class="nav-link {{Request::segment(1)=='transaksi'?'active':''}}">
                   <i class="nav-icon fas fa-barcode"></i>
                   <p>
                     Transaksi
                   </p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="{{route('laporan.index')}}" class="nav-link {{Request::segment(1)=='laporan'?'active':''}}">
                   <i class="nav-icon fas fa-print"></i>
                   <p>
                     Laporan
                   </p>
                 </a>
               </li>
               
               
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>