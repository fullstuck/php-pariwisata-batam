<?php
include "./admin/koneksi.php";
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Wisata Kota Batam - Bandar Dunia Madani</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- 
        Masonry Template 
        http://www.templatemo.com/preview/templatemo_434_masonry
        -->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
        <div id="loader-wrapper">
            <div id="loader"></div>
        </div>
        
        <div class="content-bg"></div>
        <div class="bg-overlay"></div>

        <!-- SITE TOP -->
        <div class="site-top">
            <div class="site-header clearfix">
                <div class="container">
                    <a href="#" class="site-brand pull-left"><strong>Wisata Kota BATAM</strong> -  Bandar Dunia Madani</a>
                    <div class="social-icons pull-right">
							<ul>
                          <!--  <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-behance"></a></li>
                            <li><a href="#" class="fa fa-dribbble"></a></li> -->
                            <li><a href="./admin" class="fa fa-user"></a></li>
                        </ul> 
                    </div>
                </div>
            </div> <!-- .site-header -->
            <div class="site-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-9 text-center">
                            <h2>Selamat Datang di Kota Batam <span class="blue"> - Bandar Dunia</span><span class="green"> Madani</span></h2>
                            <p>Batam merupakan kota ke-3 penduduk terbesar di Pulau Sumatera. Batam memiliki perkembangan yang sangat pesat di antara
							kota - kota di Indonesia. Sebagai sentra industri di Indonesia. Wilayah Kota Batam terletak di Pulau Batam dan seluruh wilayahnya
							dikelilingi Selat Singapura dan Selat Malaka. Kota Batam memiliki beberapa destinasi wisata diantaranya adalah sebagai berikut :
							<!-- <span class="blue">template</span><span class="green">mo</span>.com website. Thank you.</p> -->
                        </div>
                    </div>
                    <div class="row">
                        <form action="index.php" method="post" class="subscribe-form">
                            <fieldset class="col-md-offset-4 col-md-3 col-sm-8">
                                <input type="text" id="subscribe-email" name='qcari' placeholder="Cari Lokasi Destinasi...">
                            </fieldset>
                            <fieldset class="col-md-5 col-sm-4">
                                <input type="submit" id="subscribe-submit" class="button white" value="Find Them..!">
                            </fieldset>
                        </form> 
                    </div>
                </div>
            </div> <!-- .site-banner -->
        </div> <!-- .site-top -->
		
					
        <!-- MAIN POSTS -->
        <div class="main-posts">
            <div class="container">
                <div class="row">
                    <div class="blog-masonry masonry-true">
					
					<!-- Fungsi Menampilkan data dari database -->	
					<?php 
					
					// Cek apakah terdapat data page pada URL
					$page = (isset($_GET['page']))? $_GET['page'] : 1;
					
					$limit = 9; // Jumlah data per halamannya
					
					// Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
					$limit_start = ($page - 1) * $limit;
					
					// Buat query untuk menampilkan data siswa sesuai limit yang ditentukan
					$sql = "SELECT * FROM wisata LIMIT ".$limit_start.",".$limit;

					// Fungsi Search
					if(isset($_POST['qcari'])){
					$qcari=$_POST['qcari'];
					$sql="SELECT * FROM  wisata where nama_wisata like '%$qcari%' or kategori like '%$qcari%' or lokasi like '%$qcari%' ";
                    }
                    
					$sqli = mysqli_query($koneksi, $sql); // Eksekusi querynya
						
					$no = $limit_start + 1; // Untuk penomoran tabel
					while($data = mysqli_fetch_assoc($sqli)){ // Ambil semua data dari hasil eksekusi $sql
					?>
				
        
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="admin\dashboard\<?php echo $data['gambar'];?>"/>
                                <div class="title-over">
                                    <h4><a href="#"><?php echo $data['nama_wisata']; ?></a></h4>
                                </div>
                                <div class="post-hover text-center">
                                    <div class="inside">
                                        <i class="fa fa-plus"></i>
                                        <span class="date"><?php echo $data['tgl_upload']; ?></span>
                                        <h4><a href="detail-wisata.php?hal=edit&kd=<?php echo $data['id_wisata'];?>"><?php echo $data['nama_wisata'];?></a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.post-masonry -->
						<?php $no++; } ?>
						
					</div>
                </div>
            </div>
			<div class="text-center">
			<!--
			-- Buat Paginationnya
			-- Dengan bootstrap, kita jadi dimudahkan untuk membuat tombol-tombol pagination dengan design yang bagus tentunya
			-->
			<ul class="pagination">
				<!-- LINK FIRST AND PREV -->
				<?php
				if($page == 1){ // Jika page adalah page ke 1, maka disable link PREV
				?>
					<li class="disabled"><a href="#">First</a></li>
					<li class="disabled"><a href="#">&laquo;</a></li>
				<?php
				}else{ // Jika page bukan page ke 1
					$link_prev = ($page > 1)? $page - 1 : 1;
				?>
					<li><a href="index.php?page=1">First</a></li>
					<li><a href="index.php?page=<?php echo $link_prev; ?>">&laquo;</a></li>
				<?php
				}
				?>
				
				<!-- LINK NUMBER -->
				<?php
				// Buat query untuk menghitung semua jumlah data
				$sql2 = "SELECT COUNT(*) AS jumlah FROM wisata";
				$sql3 = mysqli_query($koneksi, $sql2); // Eksekusi querynya
				$get_jumlah = mysqli_fetch_array($sql3);
				
				$jumlah_page = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamannya
				$jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
				$start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
				$end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number
				
				for($i = $start_number; $i <= $end_number; $i++){
					$link_active = ($page == $i)? ' class="active"' : '';
				?>
					<li<?php echo $link_active; ?>><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php
				}
				?>
				
				<!-- LINK NEXT AND LAST -->
				<?php
				// Jika page sama dengan jumlah page, maka disable link NEXT nya
				// Artinya page tersebut adalah page terakhir 
				if($page == $jumlah_page){ // Jika page terakhir
				?>
					<li class="disabled"><a href="#">&raquo;</a></li>
					<li class="disabled"><a href="#">Last</a></li>
				<?php
				}else{ // Jika Bukan page terakhir
					$link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
				?>
					<li><a href="index.php?page=<?php echo $link_next; ?>">&raquo;</a></li>
					<li><a href="index.php?page=<?php echo $jumlah_page; ?>">Last</a></li>
				<?php
				}
				?>
			</ul>
			</div>
        </div>
		
        <!-- FOOTER -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="social-icons">
                            <!-- <ul>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-behance"></a></li>
                                <li><a href="#" class="fa fa-dribbble"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center"> Untuk informasi lebih lanjut Anda bisa menghubungi 
					<span class="blue">Deli Mutiara Tanjung</span><span class="green"> 0878 9430 9037 </span> Thank you.</p>
                        <p class="copyright-text">Copyright &copy; 2017 SPAN Community
                        | Photos by <a rel="nofollow" href="http://span-community.com"> Admin </a></p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/min/plugins.min.js"></script>
        <script src="js/min/main.min.js"></script>

        <!-- Preloader -->
        <script type="text/javascript">
            //<![CDATA[
            $(window).load(function() { // makes sure the whole site is loaded
                $('#loader').fadeOut(); // will first fade out the loading animation
                    $('#loader-wrapper').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
                $('body').delay(350).css({'overflow-y':'visible'});
            })
            //]]>
        </script>
	<!-- templatemo 434 masonry -->
    </body>
</html>