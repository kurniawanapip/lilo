<?php 
// menghubungkan ke functions
  require 'functions.php';
  
// cek apakah sudah tersimpan apa belum
  if ( isset($_POST["submit"]) ) {

     if ( tambah($_POST) > 0 ) {
       echo "
        <script>
          alert('pesan terkirim!!');
        </script>
          ";
     } else {
      echo "
        <script>
          alert('pesan tidak terkirim!!');
        </script>
          ";
     }
}

?>

<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Lilo Teknik</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-diamond"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>LILO TEKNIK</h1>
								<p>(LIETECH)</p>
								<h2>SUPPLY & SERVICE</h2>
								<p>Menyediakan macam-macam sparepart untuk industri seperti elektronik atau mesin dengan berbagai macam merk,jenis dan type.</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">Intro</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#work">Parts</a></li>
								<li><a href="#contact">Pesan</a></li>
								<!-- <li><a href="#elements">Elements</a></li> -->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Intro</h2>
								<span class="image main"><img src="images/lilo2.jpg" alt="" /></span>
								<p>Semakin berkembang pesatnya pertumbuhan industri di negara Indonesia ini, seperti yang kita lihat banyak pabrik-pabrik yang di bangun oleh investor asing di berbagai daerah di Indonesia terutama di jabodetabek, yang setidaknya mungkin bisa memberikan pertumbuhan ekonomi dan kesejahteraan untuk masyarakatnya. <br> 
								sehingga bisa menjadikan suatu peluang bisnis untuk mereka para pelaku usaha kecil maupun besar, seperti catering, koperasi, transportasi untuk jemputan karyawan, mengolah limbah pabrik, jual-beli sparepart, dan lainnya.</p>
								<p>Dan lilo teknik ini adalah salah satunya, kami di sini bergerak dalam jual beli sparepart untuk kebutuhan industri baik mesin maupun panel kelistrikan dan lainnya dari yang baru hingga yang bekas dengan harga terjangkau dan kualitas barang yang ok. seperti PLC, Kontektor, Inverter, CPU, Dinamo, Kabel, Servo, dan masih banyak lainnya..</p>
							</article>

						<!-- about -->
							<article id="about">
								<h2 class="major">About</h2>
								<span class="image main"><img src="images/li.jpg" alt="" /></span>
								<p>Awal mula toko ini berdiri sekitar 1970an dengan lokasi berada di daerah poncol jakarta pusat.<br>
								dan alhamdulillah semakin kesini semakin berkembang dan memiliki banyak relasi sehingga toko inipun berpindah tempat di bekasi dengan dua lokasi.</p>
								Keunggulan :
								<ul>
									<li>Tersedia barang baru dan bekas dengan berbagai merk dan type.</li>
									<li>Kualitas di jamin ok.</li>
									<li>Harga bisa nego.</li>
									<li>Barang bergaransi.</li>
								</ul>
								Kontak kami :
								<ul>
									<li>Nama    : Lili Djunali</li>
									<li>Email   : lilotekhnikg132@gmail.com</li>
									<li>Phone	: 081586476605</li>
									<li>Telp	: 02189324067</li>
									<li>Alamat 1	: Perum Taman Aster Blok G1 No.31 Cikarang-Bekasi</li>
									<li>Alamat 2	: Jl. KH. Hajar Dewantara Ruko 1B Jababek 5. <br> (Dekat SMA President University)</li>
								</ul>
								
							</article>

						<!-- part -->
							<article id="work">
								<h2 class="major">Contoh Parts</h2>
								<span class="image main"><img src="images/lilo6.jpg" alt="">
								   Name : PLC (Power) <br>
								   Type : F3PU20-OS <br>
								   Merk : Yokogawa
								</span>
								<span class="image main"><img src="images/lilo7.jpg" alt="">
								   Name : PLC (C-link) <br>
								   Type : F3LC11-2F/CT <br>
								   Merk : Yokogawa
								</span>
								<span class="image main"><img src="images/lilo8.jpg" alt="">
								   Name : PLC (DC OUT) <br>
								   Type : F3YD64-1P/CT <br>
								   Merk : Yokogawa
								</span>
								<span class="image main"><img src="images/lilo9.jpg" alt="">
								   Name : PLC (Remote) <br>
								   Type : F3LR01-ON/CT <br>
								   Merk : Yokogawa
								</span>
								<span class="image main"><img src="images/lilo10.jpg" alt="">
								   Name : PLC <br>
								   Type : F3NX01-ON <br>
								   Merk : Yokogawa
								</span>
								<span class="image main"><img src="images/lilo11.jpg" alt="" />
								   Name : PLC (power supply)<br>
								   Type : 1769-PA4 <br>
								   Merk : Allan-Bradley
								</span>
								<span class="image main"><img src="images/lilo12.jpg" alt="" />
								   Name :  <br>
								   Type :  <br>
								   Merk : 
								</span>
								<span class="image main"><img src="images/lilo13.jpg" alt="" />
								   Name : PLC (CPU) <br>
								   Type : AP11-ON*A <br>
								   Merk : Yokogawa
								</span>
								<span class="image main"><img src="images/lilo14.jpg" alt="" />
								   Name : PLC (CPU) <br>
								   Type : MP31-1N*A <br>
								   Merk : Yokogawa
								</span>
								<span class="image main"><img src="images/lilo15.jpg" alt="" />
								   Name : PLC (ADC) <br>
								   Type : AD08 <br>
								   Merk : Yokogawa
								</span>
								<span class="image main"><img src="images/lilo16.jpg" alt="" />
								   Name : PLC (POWER SUPPLY) <br>
								   Type : A61P <br>
								   Merk : Mitsubishi
								</span>
								<span class="image main"><img src="images/lilo17.jpg" alt="" />
								   Name : PLC <br>
								   Type : AY41 <br>
								   Merk : Mitsubishi
								</span>
								<span class="image main"><img src="images/lilo18.jpg" alt="" />
								   Name : PLC <br>
								   Type : AY51 <br>
								   Merk : Mitsubishi
								</span>
								<span class="image main"><img src="images/lilo19.jpg" alt="" />
								   Name : PLC <br>
								   Type : PA208 <br>
								   Merk : omron
								</span>
								<span class="image main"><img src="images/lilo20.jpg" alt="" />
								   Name : PLC <br>
								   Type : AY42 <br>
								   Merk : Mitsubishi
								</span>
								<span class="image main"><img src="images/lilo21.jpg" alt="" />
								   Name : PLC <br>
								   Type : MR-J25-40A <br>
								   Merk : Mitsubishi
								</span>
								<span class="image main"><img src="images/lilo22.jpg" alt="" />
								   Name : Ac Servo Driver <br>
								   Type : DV80X <br>
								   Merk : Panasonic
								</span>
								<!-- <span class="image main"><img src="images/lilo23.jpg" alt="" />
								   Name : PLC <br>
								   Type : F3NX01-ON <br>
								   Merk : Yokogawa
								</span> -->
								<span class="image main"><img src="images/lilo24.jpg" alt="" />
								   Name : PLC <br>
								   Type : A1SJ71UC24-R2 <br>
								   Merk : Mitsubishi
								</span>
								<span class="image main"><img src="images/lilo25.jpg" alt="" />
								   Name : DD SERVO ACTUATOR <br>
								   Type : UR1B <br>
								   Merk : 
								</span>
								
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Pesan sekarang</h2>
								<p>jika ingin memesan barang silahkan isi form di bawah ini :</p>
								<form method="post" action="">
									<div class="field half first">
										<label for="name">Nama *</label>
										<input type="text" name="nama" id="name" required autocomplete="off" />
									</div>
									<div class="field half second">
										<label for="telp">No. Hp *</label>
										<input type="text" name="telp" id="telp" required autocomplete="off" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" autocomplete="off" />
									</div>
									<div class="field">
										<label for="alamat">Alamat *</label>
										<input type="text" name="alamat" id="alamat" required autocomplete="off" />
									</div>
									<div class="field">
										<label for="barang">Barang yang ingin di pesan *</label>
										<input type="text" name="merk" id="barang" placeholder="tuliskan merk" required autocomplete="off" />
										<input type="text" name="barang" id="barang" placeholder="tuliskan nama barang" required autocomplete="off" />
										<input type="text" name="type" id="barang" placeholder="tuliskan type" autocomplete="off" />
										<input type="text" name="jumlah" id="barang" placeholder="tuliskan jumlah" autocomplete="off" />
									</div>
									<div class="field">
										<label for="message">pertanyaan *</label>
										<textarea name="pesan" id="message" rows="4" required autocomplete="off"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Kirim" name="submit" class="special" /></li>
									</ul>
								</form>
								<ul class="icons">
									<!-- <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li> -->
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<!-- <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li> -->
								</ul>
							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<br>
						<br>
						<p class="copyright">&copy; Copyright By: apip kurniawan.</p>
			            <br>	
						<ul class="icons">
							<li><a href="https://www.facebook.com/apip.ajaah" target="blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>	
							<li><a href="http://instagram.com/apip_kurniawan" target="blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						</ul>

					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
