<?php include("./admin/koneksi.php"); ?>
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
                  <!--      <div class="col-md-offset-2 col-md-9 text-center">
                            <h2>Selamat Datang di Kota Batam <span class="blue"> - Bandar Dunia</span><span class="green"> Madani</span></h2>
                            <p>Batam merupakan kota ke-3 penduduk terbesar di Pulau Sumatera. Batam memiliki perkembangan yang sangat pesat di antara
							kota - kota di Indonesia. Sebagai sentra industri di Indonesia. Wilayah Kota Batam terletak di Pulau Batam dan seluruh wilayahnya
							dikelilingi Selat Singapura dan Selat Malaka. Kota Batam memiliki beberapa destinasi wisata diantaranya adalah sebagai berikut :
							<!-- <span class="blue">template</span><span class="green">mo</span>.com website. Thank you.</p> -->
                        </div>
                    </div>
                    <div class="row">
                    <!--    <form action="index.php" method="post" class="subscribe-form">
                            <fieldset class="col-md-offset-4 col-md-3 col-sm-8">
                                <input type="text" id="subscribe-email" name='qcari' placeholder="Cari Lokasi Destinasi...">
                            </fieldset>
                            <fieldset class="col-md-5 col-sm-4">
                                <input type="submit" id="subscribe-submit" class="button white" value="Find Them..!">
                            </fieldset>
                        </form>  -->
                    </div>
                </div>
            </div> <!-- .site-banner -->
        </div> <!-- .site-top -->
		
		<!-- Fungsi Menampilkan Data dari Database -->	
					
					<?php
					$query = mysqli_query($koneksi, "SELECT * FROM wisata WHERE id_wisata='$_GET[kd]'");
					$data  = mysqli_fetch_array($query);
					?>
					
			<!-- End -->
        
       <!-- Table Responsive -->
		<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="form-panel">
                      <table id="example">
                      <tr>
                      <td><strong>Nama Wisata</strong></td>
                      <td><span class="label label-danger"><?php echo $data['nama_wisata']; ?></span></td>
					  </tr>
					  <tr>
                      <td rowspan="0">
                      <img src="admin\dashboard\<?php echo $data['gambar']; ?>" class="img-rounded" height="250" width="250" alt="User Image" style="border: 2px solid #000;" />
                      </td>
                      </tr>
                      <tr>
                      <td width="0"><strong>Kategori</strong></td>
                      <td width="0" colspan="1"><?php echo $data['kategori']; ?></td>
                      </tr>
                      <tr>
                      <td><strong>Lokasi</strong></td>
                      <td colspan="1"><?php echo $data['lokasi']; ?></td>
                      </tr>
                      <tr>
                      <td><strong>Deskripsi</strong></td>
                      <td colspan="1"><?php echo $data['deskripsi']; ?></td>
                      </tr>
                      </table>
                      
					</div>
				</div>
			</div>
		</div>
			  <!-- End -->

        <!-- FOOTER -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        
						<div class="text-right">
						<a href="index.php" class="btn btn-sm btn-primary">Kembali <i class="fa fa-arrow-circle-right"></i></a>
						</div>
                            <!-- <ul>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-behance"></a></li>
                                <li><a href="#" class="fa fa-dribbble"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul> -->
                        
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