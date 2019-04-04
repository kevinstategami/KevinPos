<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
  <title>Admin</title>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset('admin/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/cs-skin-elastic.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{asset('admin/assets/scss/style.css') }}">
    <link href="{{asset('admin/assets/css/lib/vector-map/jqvmap.min.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <aside id="left-panel" class="left-panel">
      <nav class="navbar navbar-expand-sm navbar-default">

          <div class="navbar-header">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="{{url('dashboard')}}">Welcome</a>              
          </div>

          <div id="main-menu" class="main-menu collapse navbar-collapse">
              <ul class="nav navbar-nav">
                  <li>
                      <a href="{{url('/dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Home</a>
                  </li>
                  @if(Auth::user()->role == 'Super Admin')
                  <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Master Products</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-home"></i><a href="{{url('dashboard/profile')}}">Profile Perusahaan</a></li>
                            <li><i class="fa fa-user"></i><a href="{{url('dashboard/karyawan')}}">Data Karyawan</a></li>                    
                        </ul>
                    </li>
                    <br>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Laporan</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-book"></i><a href="{{url('dashboard/barang_masuk')}}">Barang Masuk</a></li>
                            <li><i class="fa fa-book"></i><a href="{{url('dashboard/barang_keluar')}}">Barang Keluar</a></li>                            
                            <li><i class="fa fa-book"></i><a href="{{url('dashboard/pos')}}">Penjualan</a></li>                            
                        </ul>
                    </li>                                      
                    @endif
                    @if(Auth::user()->role != "Kasir")
                  <br>
                  <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Master Konfig</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-bars"></i><a href="{{url('dashboard/products')}}">Inventory</a></li>                                                                            
                            <li><i class="fa fa-book"></i><a href="{{url('dashboard/kategori')}}">Kategori</a></li>
                            <li><i class="fa fa-book"></i><a href="{{url('dashboard/curr')}}">Curr</a></li>                            
                            <li><i class="fa fa-book"></i><a href="{{url('dashboard/disc')}}">Discount</a></li>
                            <li><i class="fa fa-book"></i><a href="{{url('dashboard/unit')}}">Unit</a></li>                            
                        </ul>
                    </li>
                    @endif                  
                    <br>
                    @if(Auth::user()->role != "Admin Gudang")
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-home"></i>POS</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-bars"></i><a href="{{url('dashboard/transaksi')}}">Pembelian</a></li>                                                                                                 
                        </ul>
                    </li>
                    @endif
                    <br>                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Setting</a>
                        <ul class="sub-menu children dropdown-menu">                                          
                            <li><i class="fa fa-exit"></i><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>                            
                        </ul>
                    </li>
                    <br>                       
              </ul>
          </div><!-- /.navbar-collapse -->
      </nav>
  </aside><!-- /#left-panel -->

  <!-- Left Panel -->

  <!-- Right Panel -->

  <div id="right-panel" class="right-panel">

      <!-- Header-->
      <header id="header" class="header">

          <div class="header-menu">

              <div class="col-sm-7">
                  <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
              </div>
              <!-- LOGOUT -->                        
          </div>          

      </header><!-- /header -->
  <!-- Left Panel -->    
  
        <!-- Left Panel -->

        @yield('admin')
        <!-- Header-->
        <script src="{{asset('admin/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="{{asset('admin/assets/js/plugins.js') }}"></script>
        <script src="{{asset('admin/assets/js/main.js') }}"></script>


        <script src="{{asset('admin/assets/js/lib/chart-js/Chart.bundle.js') }}"></script>
        <script src="{{asset('admin/assets/js/dashboard.js') }}"></script>
        <script src="{{asset('admin/assets/js/widgets.js') }}"></script>
        <script src="{{asset('admin/assets/js/lib/vector-map/jquery.vmap.js') }}"></script>
        <script src="{{asset('admin/assets/js/lib/vector-map/jquery.vmap.min.js') }}"></script>
        <script src="{{asset('admin/assets/js/lib/vector-map/jquery.vmap.sampledata.js') }}"></script>
        <script src="{{asset('admin/assets/js/lib/vector-map/country/jquery.vmap.world.js') }}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/datatables.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/jszip.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/datatables-init.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>              

        <script>
            ( function ( $ ) {
                "use strict";

                jQuery( '#vmap' ).vectorMap( {
                    map: 'world_en',
                    backgroundColor: null,
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#1de9b6',
                    enableZoom: true,
                    showTooltip: true,
                    values: sample_data,
                    scaleColors: [ '#1de9b6', '#03a9f5' ],
                    normalizeFunction: 'polynomial'
                } );
            } )( jQuery );
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
              $('#bootstrap-data-table-export').DataTable();
            } );
        </script>
      </body>
      </html>
