
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Kasir</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
 <!--  <link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla')?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla') ?>/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
 -->
  <!-- Template CSS -->
   <link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla') ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla') ?>/assets/css/components.css">

<!--   <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"> -->
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar ">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
          
            
             <!--  <a class="nav-link"  style="float: right" href="<?php echo base_url('auth/logout')?>"><span class="text-white">Logout</span></a>
           -->
 <!--           <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item active">
                    <a class="nav-link"?>    </a>
                </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="<?php echo base_url('auth/logout') ?>" >Logout</a>
                 </li>
                 </ul>                 
                 </div> -->
         <!--  <li class="nav-link"><a href="<?php echo base_url('auth/logout') ?>"  class="nav-link">
            <div class="d-sm-none d-lg-inline-block"style="margin-left: 999px;">Logout</div></a>
            </div>

          </li>
 -->          
        </form>
         <ul class="navbar-nav navbar-right">
          <a class="nav-link disabled" style="font-size: 20px" href="">Welcome <?=$this->fungsi->user_login()->name ?></a>  
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          
          <div class="sidebar-brand">
            <a href="<?=site_url('dashboard')?>"><img src="<?php echo site_url('');?>assets/img/Yus.png"
             width="120px" height="120px" class="rounded-circle" style="margin-top: 20px" >
             </a>
          </div>

          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?=site_url('dashboard')?>"><img src="<?php echo base_url();?>assets/img/Yus.png"
             width="50px" height="50px" class="rounded-circle" style="margin-top: 20px" ></a>
          </div>
          
                            
          <ul class="sidebar-menu">
              <li class="menu-header" style="margin-top: 80px">Home</li>
              <li>
                <a href="<?=site_url('dashboard')?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                
              </li>
              <li class="menu-header">Master</li>
                <li class="nav-item dropdown">
                  <a href="#" class=" has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data</span></a>
                  <ul class="dropdown-menu">
                    
                    <?php if($this->fungsi->user_login()->level == 1) { ?> 
                    <li><a class="nav-link" href="">Karyawan</a></li>
                    <?php } ?>

                    <?php if($this->fungsi->user_login()->level == 1) { ?> 
                    <li><a class="nav-link" href="<?=site_url('user')?>">User</a></li>
                    <?php } ?>

                    <li><a class="nav-link" href="<?=site_url('category')?>">Category</a></li>
                    <li><a class="nav-link" href="<?=site_url('unit')?>">Unit</a></li>
                    <li><a class="nav-link" href="<?=site_url('item')?>">Item</a></li>
                    <li><a class="nav-link" href="<?=site_url('customer')?>">Customer</a></li>
                    <li><a class="nav-link" href="<?=site_url('supplier')?>">Supplier</a></li>
                  </ul>
                </li>
              
              <li class="menu-header" >TRANSACTION</li>
              <li>
                <a href="" class="nav-link"><i class="fas fa-th-large"></i><span>Penjualan</span></a>
                <a href="" class="nav-link"><i class="fas fa-th-large"></i><span>Stock Masuk</span></a>
                
              </li>
              
              
              <li class="menu-header">laporan</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Laporan</span></a>
                <ul class="dropdown-menu">
                  <li><a href="">Laporan Pendapatan</a></li>
                  <li><a href="">Laporan Penyewa</a></li>
                  <li><a href="">Laporan Kendaraan Favorit</a></li>
                   <li><a href="">Chart</a></li>
                </ul>
              </li>
             <!--  <li class="menu-header"></li>
              <li class="menu-header"></li>
              <li>
                <a href="<?php echo base_url('register') ?>" class="nav-link btn btn-primary" style="color: #000000"><i class="fas fa-user"></i><span>Register</span></a>
                
              </li> -->
              <li class="menu-header"></li>
              <li>
                <a href="<?=site_url('auth/logout')?>" class="nav-link btn btn-danger mb-1" style="color: #000000"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
                
              </li>
              <li class="menu-header"></li>
              <li>
                <a href="auth/ganti_password" class="nav-link btn btn-secondary mb-1" style="color: #000000"><i class="fas fa-lock"></i><span>Ganti Password</span></a>
                
              </li>


              <li class="menu-header"></li>
              <li class="menu-header"></li>
            </ul>
          
        </aside>
      </div>
      </div>
    </div>
  </body>


      <!-- Main Content -->
      <div class="main-content">
        <?php echo $contents ?>
      </div>

      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    <!-- </div>
  </div> -->
<!-- <script src="<?php echo base_url('assets/assets_stisla') ?>/node_modules/jquery/dist/jquery.min.js"></script> -->

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url('assets/assets_stisla') ?>/assets/js/stisla.js"></script>


  <!-- JS Libraries -->
<!--   <script src="<?php echo base_url('assets/assets_stisla') ?>/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url('assets/assets_stisla') ?>/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url('assets/assets_stisla') ?>/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url('assets/assets_stisla') ?>/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>

 -->
  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/assets_stisla') ?>/assets/js/scripts.js"></script>
  <script src="<?php echo base_url('assets/assets_stisla') ?>/assets/js/custom.js"></script>



<!--   <script src="<?php echo base_url('assets/assets_stisla') ?>/assets/js/page/components-table.js"></script>  -->


<!--   <script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>  -->
  <!-- Page Specific JS File -->
<!--    <script src="<?php echo base_url('assets/assets_stisla') ?>/assets/js/page/index-0.js"></script>  -->

  <!-- <script>
    $(document).ready(function() {
      $('#table1').Datatable()
    })
  </script> -->

</body>
</html>
