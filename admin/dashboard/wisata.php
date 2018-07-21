<!-- Fungsi Session -->
<?php 
session_start();
if (empty($_SESSION['username'])){
	header('location:../index.php');	
} else {
	include "../koneksi.php";
?>
<!-- End -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Wisata Kota Batam - Bandar Dunia Madani</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

				<!-- Fungsi Waktu Session -->
				<?php
				$timeout = 10; // Set timeout minutes
				$logout_redirect_url = "../index.php"; // Set logout URL

				$timeout = $timeout * 60; // Converts minutes to seconds
				if (isset($_SESSION['start_time'])) {
					$elapsed_time = time() - $_SESSION['start_time'];
					if ($elapsed_time >= $timeout) {
						session_destroy();
						echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
					}
				}
				$_SESSION['start_time'] = time();
				?>
				<?php } ?>
				<!-- End -->

<body>


    <!-- Navigation -->
    <nav id="mainNav" class="navbar static-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Wisata Kota Batam - Bandar Dunia Madani</a>
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="sidebar-nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
           <!--     <li class="nav-item">
                    <a class="nav-link" href="penjualan.php"><i class="fa fa-fw fa-area-chart"></i> Transaksi Penjualan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="barang.php"><i class="fa fa-fw fa-table"></i> Data Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="supplier.php"><i class="fa fa-fw fa-edit"></i> Data Supplier</a>
                </li> -->
				 <li class="nav-item active">
                    <a class="nav-link" href="wisata.php"><i class="fa fa-fw fa-area-chart"></i> Data Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user.php"><i class="fa fa-fw fa-table"></i> Data User</a>
                </li>	
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Selamat Datang, <b><?php echo $_SESSION['fullname']; ?></b></a>
                    
                </li>
               
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2" action='wisata.php' method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control" name='qcari' placeholder="Cari Nama Wisata/Kategori">
                            <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                        </div>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>
    </nav>
	

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Wisata</li>
				</ol>
				

            <p><a class="btn btn-primary icon-btn" href="tambah-wisata.php"><i class="fa fa-plus"></i> Tambah Wisata	</a></p>
			
			<!-- Fungsi Menampikan Isi dari Database -->
					<?php
                    $query1="SELECT * from wisata ORDER BY id_wisata DESC limit 10";
                    
					// Fungsi Search
                    if(isset($_POST['qcari'])){
	               $qcari=$_POST['qcari'];
	               $query1="SELECT * FROM  wisata 
	               where nama_wisata like '%$qcari%' or kategori like '%$qcari%' or lokasi like '%$qcari%' ";
                    }
                    $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                    ?>
						
					 <!-- End -->		
						  
            <!-- Table Responsive -->
					<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th><center>No.</center></th>
                      <th><center>Nama Wisata</center></th>
					  <th><center>Kategori</center></th>
					  <th><center>Lokasi</center></th>
					  <th><center>Foto</center></th>
                      <th><center>Tools</center></th>
                    </tr>
                  </thead>
                  <!-- End -->
				  
				  
				  
				  <!-- Fungsi Menampilkan Hasil dari Data di Database -->
				  <?php 
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
				  
                  <tbody>
                    <tr>
					<td><center><?php echo $no; ?></center></td>
					<td><a href="detail-wisata.php?hal=edit&kd=<?php echo $data['id_wisata'];?>"><span class="fa fa-desktop"></span> <?php echo $data['nama_wisata'];?></td>
					<td><center><?php echo $data['kategori']; ?></center></td>
					<td><center><?php echo $data['lokasi']; ?></center></td>
					<td><center><img src="<?php echo $data['gambar'];?>" width="100" height="100" class="img-rounded" style="border: 3px solid #888;"/></center></td>
					
					<td><center><div id="thanks"><a class="btn btn-sm btn-info" data-placement="bottom" data-toggle="tooltip" title="Edit Wisata" href="edit-wisata.php?hal=edit&kd=<?php echo $data['id_wisata'];?>"><span class="fa fa-pencil"> Edit</span></a>  
                        <a onclick="return confirm ('Yakin hapus <?php echo $data['nama_wisata'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Wisata" href="hapus-wisata.php?hal=hapus&kd=<?php echo $data['id_wisata'];?>"><span class="fa fa-trash-o"> Delete</span></a></center></td></tr></div>
                 
				<?php
				}
				?>
				
				 <!-- End -->  
				 
          
                  </tbody>
                </table>
              </div>			  

            </div>
          </div>
        </div>
		
		
               
        </div>
        <!-- /.container-fluid -->
		
		

    </div>
    <!-- /.content-wrapper -->

    <a class="scroll-to-top rounded" href="#">
        <i class="fa fa-chevron-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/sb-admin.min.js"></script>

</body>

</html>
