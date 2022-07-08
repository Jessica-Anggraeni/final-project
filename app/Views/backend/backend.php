<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Pemrograman Web - Jessica Anggraeni</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="javascript:void(0)" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="javascript:void(0)" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>


            </ul>
        </nav>
        <!-- /.navbar -->
          <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="javascript:void(0)" class="brand-link">
          <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">UTS PROJECT</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="javascript:void(0)" class="d-block">Jessica Anggraeni </a>
              </div>
          </div>



          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="praktikum-pemweb/index.php" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>

                  </li>
                  <li class="nav-item">
                      <a href="project-1/index.php" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Project 1
                              <span class="right badge badge-danger">New</span>
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link">
                          <i class="nav-icon fas fa-copy"></i>
                          <p>
                              Praktikum
                              <i class="fas fa-angle-left right"></i>
                              <span class="badge badge-info right">5</span>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="array_siswa.php" target="blank" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Praktikum 1</p>
                              </a>
                          </li>


                          

                          <li class="nav-item">
                              <a href="javascript:void(0)" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>
                                      <p>Praktikum 2</p>
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>

                              <ul class="nav nav-treeview" style="display: none;">
                              <li class="nav-item">
                                      <a href="form_belanja_online_post.php" target="blank" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Form Belanja</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="form_penilaian.php" target="blank" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Form Penilaian</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="form_siswa.php" target="blank" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Form Siswa</p>
                                      </a>
                                  </li>
                              </ul>



                          <li class="nav-item">
                              <a href="javascript:void(0)" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>
                                      <p>Praktikum 3</p>
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>

                              <ul class="nav nav-treeview" style="display: none;">
                              <li class="nav-item">
                                      <a href="atas.php" target="blank" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>atas</p>
                                      </a>
                                  </li>
                              <li class="nav-item">
                                      <a href="bawah.php" target="blank" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>bawah</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="home.php" target="blank" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>home</p>
                                      </a>
                                  </li>
                              </ul>

                              <li class="nav-item">
                              <a href="javascript:void(0)" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>
                                      <p>Praktikum 4</p>
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>
                              
                              <ul class="nav nav-treeview" style="display: none;">
                                  <li class="nav-item">
                                      <a href="class_lingkaran.php" target="blank" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>class lingkaran</p>
                                      </a>
                                  </li>

                                  <li class="nav-item">
                                      <a href="class_nilai_mahasiswa.php" target="blank" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>class nilai mahasiswa</p>
                                      </a>
                                  </li>

                                  <li class="nav-item">
                                      <a href="class-persegipanjang.php" target="blank" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>class persegi panjang</p>
                                      </a>
                                  </li>

                                  <li class="nav-item">
                                      <a href="data_lingkaran.php" target="blank" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>data lingkaran</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="data-persegipanjang.php" target="blank" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>data persegi panjang</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="mahasiswa.php" target="blank" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>mahasiswa</p>
                                      </a>
                                  </li>
                              </ul>
                              
                          <li class="nav-item">
                              <a href="javascript:void(0)" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>
                                      <p>Praktikum 5</p>
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>

                              <ul class="nav nav-treeview" style="display: none;">
                              <li class="nav-item">
                                      <a href="atm.php" target="blank" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>atm</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="atm2.php" target="blank" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>atm 2</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="hasil.php" target="blank" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>hasil</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>

                      </ul>
                  </li>

                                
                                  
                                
                                 
                                  

                         



              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <!-- <b>Version</b> 3.2.0 -->
    </div>
    <strong> &copy; Made <i class="fa fa-star" style="font-size:12px;color:red"></i> by Jessica Anggraeni
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="assets/dist/js/demo.js"></script> -->
</body>

</html>