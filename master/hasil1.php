<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Analisis Data Fuzzy</title>
	
    <!-- css -->
    <link href="ui/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="ui/css/nivo-lightbox.css" rel="stylesheet" />
	<link href="ui/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="ui/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="ui/css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="ui/css/animate.css" rel="stylesheet" />
    <link href="ui/css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">
    
    <!-- =======================================================
        Theme Name: Medicio
        Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
}
-->
</style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
			  </div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">
                    <img src="logo-solchic-small copy.png" alt="" width="100" height="100" />                </a>            
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li  class="active"><a href="./indexmenu.php">Home</a></li>
				<li  class="active"><a href="./index.php">Logout</a></li>
				<li><a href="./konfig.php">Konfigurasi</a></li>
				<li><a href="./userlogin.php">User Login</a></li>
				<li><a href="./barang.php">Stok</a></li>
				<li><a href="./fuzzy.php">Fuzzy</a></li>
				<li><a href="./chart.php">Chart</a></li>
			  	<li><a href="./hasil1.php">Hasil</a></li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<!-- Section: intro -->
                <tr valign="baseline">        
              <td><div align="center"></div></td>
			  <td><div align="center"></div></td>
      	</tr>
            <tr valign="baseline">        
              <td><div align="center"></div></td>
			  <td><div align="center"></div></td>
      	</tr>
                <tr valign="baseline">        
              <td><div align="center"></div></td>
			  <td><div align="center"></div></td>
      	</tr>
            <tr valign="baseline">        
              <td><div align="center"></div></td>
			  <td><div align="center"></div></td>
      	</tr>
<div id="page">
	<div id="content">
	  <div class="post">
		<h2 class="title"><a href="#">H</a></h2>
        <hr />
    </div>
	<div id="content">
	  <div class="post">
		<h2 class="title"><a href="#"> </a></h2>
        <hr />
    </div>
	<div id="content">
	  <div class="post">
		<h2 class="title"><a href="#">Data Hasil</a></h2>
        <hr />
    </div>
<div id="page">
	<div class="container">
		<div class="admin"> 
			<div class="form-grup">
			<div align="center"></div>
	<div class="container">
		<div class="admin"> 
			<div class="form-grup">
			<div align="center"></div>
	<div class="container">
		<div class="admin"> 
			<div class="form-grup">
			<div align="center"></div>
        	  <table width="1000" border="2" align="center">
				<thead>
				  <th width="5" bordercolor="#000000"><div align="center">Nomor</th>
						<th width="100" bordercolor="#000000"><div align="center">Tanggal</th>
						<th width="100" bordercolor="#000000"><div align="center">Data Terjual</th>
						<th width="100" bordercolor="#000000"><div align="center">Data Sisa</th>
						<th width="100" bordercolor="#000000"><div align="center">Perkiraan Order</th>
					</thead>
		    	<?php
					include "/connections/RON.php";
					$modal=mysqli_query($mysqli,"SELECT * FROM konfix");
					while($row=mysqli_fetch_array($modal)){
					$or_r=$row['order_r'];
					$or_m=$row['order_min'];
					$or_x=$row['order_max'];
					$j_r=$row['jual_r'];
					$j_m=$row['jual_min'];
					$j_x=$row['jual_max'];
					$s_r=$row['stok_r'];
					$s_m=$row['stok_min'];
					$s_x=$row['stok_max'];
				}
					?>
					
					<?php
					include "/connections/RON.php";
					$no_tran = 0;
					$NM_xc = 1;
					$modal=mysqli_query($mysqli,"SELECT * FROM barang");
					while($row=mysqli_fetch_array($modal)){
					$kd_11=$row['No_B'];
					$NM_11=$row['Jual'];
					$tgl_11=$row['Tgl_Data'];
					$kd_1=$row['Sisa'];
					$NM_1=$row['Order2'];
					$jsdk=($j_x-$NM_11)/$j_r	;
					$jbny=($NM_11-$j_m)/$j_r	;
					$ssdk=($s_x-$kd_1)/$s_r	;
					$sbny=($kd_1-$s_m)/$s_r	;
					if ($jbny<$ssdk) {
					$a1=$jbny;
					}
					if ($jbny>$ssdk) {
					$a1=$ssdk;
					}
					if ($jsdk>$sbny) {
					$a2=$sbny;
					}
					if ($jsdk<$sbny) {
					$a2=$jsdk;
					}
					if ($jsdk>$ssdk) {
					$a3=$ssdk;
					}
					if ($jsdk<$ssdk) {
					$a3=$jsdk;
					}
					if ($jbny>$sbny) {
					$a4=$sbny;
					}
					if ($jbny<$sbny) {
					$a4=$jbny;
					}
					$z1=($a1*$or_r)+$or_m	;
					$z2=$or_x-($a2*$or_r)	;
					$z3=($a3*$or_r)+$or_m	;
					$z4=$or_x-($a4*$or_r)	;					
					$zt1=(($a1*$z1)+($a2*$z2)+($a3*$z3)+($a4*$z4))/($a1+$a2+$a3+$a4);
					$zt2=intval($zt1);
					?>
						<tr bordercolor="#000000">
					  <td><center><?php echo $kd_11; ?></center></td>
					  <td><center><?php echo $tgl_11; ?></center></td>
					  <td><center><?php echo $NM_11; ?></center></td>
					  <td><center><?php echo $kd_1; ?></center></td>					  
				      <td><center><?php echo $zt2; ?></center></td>					  
				  </tr>
					<?php } 
					?>
            
          </table>
          <div align="center">
            </div>
          <div align="center"></div>
          <div align="center">
            <input type="hidden" name="MM_insert" value="form1" />
            </div>
</form>

	<!-- /Section: intro -->

	<footer>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
				  <div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Information</h5>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="./konfig.php">Konfigurasi</a></li>
							<li><a href="./databarang.php">Stok</a></li>
							<li><a href="./fuzzy.php">Fuzzy</a></li>
							<li><a href="./chart.php">Chart</a></li>
							<li><a href="./hasil1.php">Hasil</a></li>
                		</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4"></div>
		  <div class="col-sm-6 col-md-4"></div>
		  </div>	
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p></p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
						<div class="credits">
                            <a </a> <a </a>
                        </div>
					</div>
					</div>
				</div>
			</div>	
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="ui/js/jquery.min.js"></script>	 
    <script src="ui/js/bootstrap.min.js"></script>
    <script src="ui/js/jquery.easing.min.js"></script>
	<script src="ui/js/wow.min.js"></script>
	<script src="ui/js/jquery.scrollTo.js"></script>
	<script src="ui/js/jquery.appear.js"></script>
	<script src="ui/js/stellar.js"></script>
	<script src="ui/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="ui/js/owl.carousel.min.js"></script>
	<script src="ui/js/nivo-lightbox.min.js"></script>
    <script src="ui/js/custom.js"></script>
    
</body>

</html>
