<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="theme-color" content="#BC8887" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Undangan Pernikahan Halim & Hayati</title>

  <meta property="og:title" content="Undangan Pernikahan Halim & Hayati - Sabtu, 19 Februari 2022">
  <meta property="og:description"
    content="Undangan Pernikahan Halim & Hayati - Sabtu, 19 Februari 2022 di Talang Maua, Mungka, Lima Puluh Kota">
  <!-- Bulma Version 0.8.x-->
  <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/bulma-tooltip@0.1.5/dist/bulma-tooltip.min.css" />
  <link rel="stylesheet" type="text/css" href="css/menikah.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery.countdown.css" />
  <script src="https://kit.fontawesome.com/2828f7885a.js"
    integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG" crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/jquery.coundown.js"></script>
  <link rel="icon" type="image/png" href="image/favicon.png" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23064379-20"></script>
  <!-- Begin Script for Countdown -->
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23064379-20');
  </script>



  <!-- Github Button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
  <!-- Audio wedding -->
  <audio autoplay loop hidden autoload>
    <source src="./assets/wedding_song.mp3" type="audio/mpeg">
  </audio>
  <!-- Begin Preloader -->
  <div class="preloader-wrapper">
    <div class="preloader">
      <img src="image/favicon.png" alt="Flower" />
    </div>
  </div>
  <!-- End Preloader-->
  <!-- Begin Header -->
  <div class="header-wrapper" id="home">
    <!-- Begin Hero -->
    <section class="hero is-large">
      <!-- Begin Mobile Nav -->
      <nav class="navbar is-transparent is-hidden-desktop">
        <!-- Begin Burger Menu -->
        <div class="navbar-brand is-fixed-top">
          <div class="navbar-burger burger" data-target="mobile-nav">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <!-- End Burger Menu -->
        <div id="mobile-nav" class="navbar-menu">
          <div class="navbar-end">
            <div class="navbar-item">
              <a class="navbar-item" href="#Waktu">
                Waktu
              </a>
            </div>
            <div class="navbar-item">
              <a class="navbar-item" href="#lokasi">
                Lokasi
              </a>
            </div>

            <div class="navbar-item">
              <a class="navbar-item" href="#tentang-halim-yati">
                Tentang Halim dan Hayati
              </a>
            </div>
            <div class="navbar-item">
              <a class="navbar-item" href="#rsvp">
                Confirm
              </a>
            </div>
          </div>
        </div>
      </nav>
      <!-- End Mobile Nav -->
      <!-- Begin Hero Content-->
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="subtitle">Undangan Pernikahan</h1>
          <h2 class="title">Halim</h2>
          <p class="sub">Abdul Halim Tarmizi S.Ag</p>
          <img src="assets/cincin-bg.png" width="80" alt="cincin" />
          <h2 class="title">Hayati</h2>
          <p class="sub">Nurhayati Fardilla S.Pd</p>
          <!-- <h4 class="subtitle tempatwaktu">

            Sabtu, 19 Februari 2022
            </br>
            Talang Maua, Mungka, Lima Puluh Kota
            </br>
            Sumatera Barat

          </h4> -->
        </div>
        <!-- Start Countdown -->
        <div>
          <ul id="hitungmundur">
            <li><span class="days">00</span>
              <p class="days_text">Hari</p>
            </li>
            <li class="separator">:</li>
            <li><span class="hours">00</span>
              <p class="hours_text">Jam</p>
            </li>
            <li class="separator">:</li>
            <li><span class="minutes">00</span>
              <p class="minutes_text">Menit</p>
            </li>
            <li class="separator">:</li>
            <li><span class="seconds">00</span>
              <p class="seconds_text">Detik</p>
            </li>
          </ul>
          <div class="spasi">
          </div>
          <script type="text/javascript">
            var now = new Date();
            var day = now.getDate();
            var month = now.getMonth() + 1;
            var year = now.getFullYear() + 1;

            var nextyear = month + '/' + day + '/' + year + ' 07:07:07';
            var harih = '02/19/2022 09:00:00';

            $('#hitungmundur').countdown({
              date: harih, // TODO Date format: 07/27/2017 17:00:00
              offset: +7, // TODO Your Timezone Offset
              day: 'Hari',
              days: 'Hari'
            }, function () {
              alert('Done!');
            });
          </script>
        </div>
        <!-- End Countdown -->
      </div>
      <!-- End Hero Content-->
      <!-- Begin Hero Menu -->
      <div class="hero-foot ">
        <div class="hero-foot--wrapper">
          <div class="columns">
            <div class="column is-12 hero-menu-desktop has-text-centered">
              <ul>
                <li class="is-active">
                  <a href="#home">Home</a>
                </li>
                <li>
                  <a href="#Waktu">Waktu</a>
                </li>
                <li>
                  <a href="#lokasi">Lokasi</a>
                </li>
                <li>
                  <a href="#tentang-halim-yati">Tentang Halim & Hayati</a>
                </li>

                <li>
                  <a href="#rsvp">Confirm</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End Hero Menu -->
    </section>
    <!-- End Hero -->
  </div>
  <!-- End Header -->

  <!-- Begin Main Content -->
  <div class="main-content">
    <!-- Begin regular-section-->
    <section class="section-light no-padding-top regular-section has-text-centered has-vertically-aligned-content"
      id="regular-section">

      <div data-aos="fade-up" data-aos-easing="linear">
        <img src="image/bismillah.png" class="bismillah has-text-centered" alt="Bismillahirrahmaanirrahiim">
      </div>

      <p class="bodytext" data-aos="fade-up" data-aos-easing="linear">
        Assalamu'alaikum Warahmatullahi Wabarakatuh.
        <br />
        Dengan memohon rahmat dan ridha Allah swt,
        <br />
        kami bermaksud mengundang Bapak/Ibu/Saudara/Saudari pada acara pernikahan kami
      </p>

      <span class="space40px"></span>
      <span class="space40px"></span>

      <div data-aos="fade-up" data-aos-easing="linear">
        <div class="nama-lengkap">
          Abdul Halim Tarmizi, S.Ag
          <p class="son">Putra Bpk Ir.Tarmizi (alm) & Ibu Prima Arteti, S.H</p>
        </div>
        <!-- <div class="ampersand">&</div> -->
        <img src="assets/cincin-bg.png" width="80" alt="cincin" />
        <div class="nama-lengkap">
          Nurhayati Fardhilla, S.Pd
          <p class="son">Putri Bpk Erizal (alm) & Ibu Ajeng Kartini</p>
        </div>

      </div>
      <span class="space40px"></span>
      <div data-aos="fade-up" data-aos-easing="linear">
        <img src="image/divider-leaves.png" class="divider has-text-centered" alt="~~~">
      </div>
      <span class="space40px"></span>
      <span class="space40px"></span>
    </section>
    <!-- End regular-section-->

    <!-- Begin Waktu Section -->
    <section class="section-dark" id="Waktu">
      <div class="container">

        <div class="column is-12 regular-section" data-aos="fade-up" data-aos-easing="linear">
          <h1 class="title has-text-centered section-title">Waktu</h1>
        </div>
        <div class="columns is-multiline" data-aos="fade-up" data-aos-easing="linear">
          <div class="column is-4 has-vertically-aligned-content">

            <p class="is-larger has-text-centered">
              <div class="waktu tanggal-hari has-text-centered">Sabtu</div>
              <div class="waktu tanggal-angka has-text-centered">12 | 19</div>
              <div class="waktu tanggal-bulan has-text-centered">Februari 2022</div>
            </p>

          </div>
          <div class="column is-4 has-vertically-aligned-content">
                         
            <p class="waktu is-larger has-text-centered"> 
               <b>Akad Nikah & Resepsi</b> 
             </p>
             <p class="waktu is-larger has-text-centered"> 
               <b>Resepsi 1</b>
             </p>
            <p class="is-larger has-text-centered">
              Sabtu, 12 Februari 2022 <br>Di Jalan Garuda<br>
              Gang Foker 2, 
              No. 10, RW 18<br>
              Kota Pekanbaru
            </p>

          </div>
          <div class="column is-4 has-vertically-aligned-content">
             <p class="waktu is-larger has-text-centered"> 
               <b>Resepsi 2</b>
             </p>
            <p class="is-larger has-text-centered">
              Sabtu, 19 Februari 2022 <br>Di Talang Maur<br> Kecamantan Mungka<br>
              Kabupaten Lima Puluh Kota 
            </p>

          </div>
         

        </div>
      </div>
      <div class="space40px"></div>
      <div class="main-content has-text-centered" data-aos="fade-up" data-aos-easing="linear">
        <a href="https://calendar.google.com/calendar/u/0?cid=ZGtyOW9xOHE1bzlyY2hvdTlkbDkzYThwaTRAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ"
          target="_blank" class="button has-tooltip btn-cta" data-tooltip="Add to Calendar" target="_blank"
          data-aos="zoom-in">
          <i class="far fa-calendar-plus"></i>
          &nbsp;&nbsp;Google Calendar
        </a>
      </div>
    </section>
    <!-- End Waktu Content -->

    <!-- Begin Lokasi Section -->
    <section class="section-darker" id="lokasi">
      <div class="container">
        <div class="column is-12 regular-section" data-aos="fade-up" data-aos-easing="linear">
          <h1 class="title has-text-centered section-title">Lokasi</h1>
          <p class="tempat is-larger has-text-centered">
            <strong>Resepsi 1 : <br></strong>
              Sabtu, 12 Februari 2022 <br>Di Jalan Garuda<br>
              Gang Foker 2, 
              No. 10, RW 18<br>
              Kota Pekanbaru
            <br>
          </p>
        </div>
        <!-- map pekanbaru -->
        <div class="section-map" data-aos="fade-up" data-aos-easing="linear">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7979.3383438529445!2d101.44101380804082!3d0.49541796008567346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e329fdf383d9455!2zMMKwMjknNDEuOSJOIDEwMcKwMjYnMzguMCJF!5e0!3m2!1sid!2sid!4v1641603369471!5m2!1sid!2sid"  
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
          <!-- button map -->
          <div class="space40px"></div>
        <div class="has-text-centered" data-aos="fade-up" data-aos-easing="linear">
          <a href="https://goo.gl/maps/Go8AV7WVnNTNjym36" class="button btn-cta" target="_blank" data-aos="zoom-in">
            <i class="far fa-directions"></i>
            &nbsp;&nbsp;Pekanbaru
          </a>
        </div>
        </div>
         <div class="column is-12 regular-section" data-aos="fade-up" data-aos-easing="linear">
          <p class="tempat is-larger has-text-centered">
            <strong>Resepsi 2<br></strong>
              Sabtu, 19 Februari 2022 <br>Di Talang Maur<br> Kecamantan Mungka<br>
              Kabupaten Lima Puluh Kota
            <br>
          </p>
        </div>
        <!-- map payakumbuh -->
        <div class="section-map" data-aos="fade-up" data-aos-easing="linear">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.4538673572573!2d100.568015329191!3d-0.06849409999687582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf095386cf913d1f7!2zMMKwMDQnMDYuNiJTIDEwMMKwMzQnMDYuOCJF!5e0!3m2!1sid!2sid!4v1641603917701!5m2!1sid!2sid" 
          width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <!-- button map -->
            <div class="space40px"></div>
        <div class="has-text-centered" data-aos="fade-up" data-aos-easing="linear">
          <a href="https://goo.gl/maps/aHfqq1Y78c7vKf7t7" class="button btn-cta" target="_blank" data-aos="zoom-in">
            <i class="far fa-directions"></i>
            &nbsp;&nbsp;Payakumbuh
          </a>
        </div>
        </div>

        
      </div>
    </section>
    <!-- End Lokasi Content -->

    <!-- Begin Tentang halim & yati  -->
    <section class="section-light regular-section is-fullheight" id="tentang-halim-yati">
      <div class="container">
        <div class="columns is-multiline">
          <div class="column has-text-centered is-12 prolog">
            <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear">Tentang Halim &
              Hayati</h1>



            <!-- IMAGES, Change Image go to menikah.css -->
            <div class=" tile">
              <div class="tile is-ancestor">
                <div class="tile is-parent">
                  <article class="tile is-child foto1 notification foto1" data-aos="fade-up" data-aos-easing="linear">
                    <div class="content">
                      <p class="title-foto">Tahun 2006 - 2012</p>
                      <p class="subtitle-foto">
                        Satu sekolah di PPMD Diniyah Pasia Ampek Angkek Canduang, tapi kami belum saling mengenal
                      </p>
                    </div>
                  </article>
                </div>
                <div class="tile is-parent">
                  <article class="tile is-child notification foto2" data-aos="fade-up" data-aos-easing="linear">
                    <div class="content">
                      <p class="title-foto">
                        Tahun 2012 - 2013
                      </p>
                      <p class="subtitle-foto">
                        Kami tamat dari sekolah dan mulai memiliki kedekatan satu sama lain
                      </p>
                    </div>
                  </article>
                </div>
                <div class="tile is-parent">
                  <article class="tile is-child notification foto3" data-aos="fade-up" data-aos-easing="linear">
                    <div class="content">
                      <p class="title-foto">
                        Tahun 2013
                      </p>
                      <p class="subtitle-foto">
                        Kami memiliki rasa saling suka dan akhirnya mulai membuka hati
                      </p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="space24px"></div>
            <div class="tile is-ancestor">
              <div class="tile is-parent">
                <article class="tile is-child notification foto6" data-aos="fade-up" data-aos-easing="linear">
                  <div class="content">
                    <p class="title-foto">Tahun 2013 - 2021</p>
                    <p class="subtitle-foto">Ini adalah masa yang sangat panjang
                      , berjalan bergandengan namun saling berjauhan, tapi dengan komitmen
                      serta saling percaya membuat kami bertahan. 
                    </p>
                  </div>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child notification foto4" data-aos="fade-up" data-aos-easing="linear">
                  <div class="content">
                    <p class="title-foto">Tahun 2021</p>
                    <p class="subtitle-foto">Inilah akhir dari cerita kami, kami mulai melanghkah ke jalan yang 
                      diridhoi allah. Kedua keluarga mulai berunding dan menetapkan hari dan tanggal.
                    </p>
                  </div>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child notification foto5" data-aos="fade-up" data-aos-easing="linear">
                  <div class="content">
                    <p class="title-foto">Tahun 2022</p>
                    <p class="subtitle-foto">Kami menikah dan semoga cinta dan kebahagiaan selalu mengisi hari-hari kami
                       dan menjadi keluarga sakinah, mawadah, warohmah.</p>
                  </div>
                </article>
              </div>
            </div>
            <!-- IMAGES -->
            <div class="space40px"></div>
            <div data-aos="fade-up" data-aos-easing="linear">
              <img src="image/divider-leaves.png" class="divider has-vertically-align" alt="~~~">
            </div>
            <div class="space40px"></div>
            <div class="space40px"></div>

          </div>
        </div>
    </section>
    <!-- End Tentang Halim dan Yati -->

    <!-- Begin RSVP Content -->
    <section class="section-dark contact" id="rsvp">
      <div class="container">
        <div class="columns is-multiline">
          <div class="column is-12 prolog">
            <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear">Konfirmasi
              Kehadiran</h1>
          </div>
          <!-- Prokes image-->
          <div class="cont">
            <div class="lingkaran1">

            </div>
          </div>
          <div class="column is-12 prolog has-text-centered" data-aos="fade-up" data-aos-easing="linear">
            <p class="h2 subtitle">
              Merupakan suatu kehormatan dan kebahagiaan bagi kami
              <br>
              apabila Bapak/Ibu/Saudara/Saudari berkenan hadir
              memberikan doa restu.
              <br>
              <br>
              Jika bisa hadir kami tunggu konfirmasinya,
              <br>
              Informasi: Di meja penerima tamu akan kami sediakan hand sanitizer dan pemeriksaan suhu tubuh.
              <br>
              <br>
              Jika tidak memungkinkan untuk hadir di pernikahan kami,tidak mengapa,
              <br>
              semoga bisa berjumpa di lain kesempatan
              <br>
              <br>
              Stay safe & jaga kesehatan ya :)
            </p>

            <a href="https://api.whatsapp.com/send?phone=6281276250094&text=Halo%20Halim,%20saya%20akan%20datang%20di%20acara%20pernikahan&source=&data="
              class="button btn-whatsapp" target="_blank" data-aos="zoom-in">
              <i class="fab fa-whatsapp"></i>
              &nbsp;&nbsp;Kabari Halim
            </a>

            <a href="https://api.whatsapp.com/send?phone=6282288385448&text=Halo%20Yati,%20saya%20akan%20datang%20di%20acara%20pernikahan&source=&data="
              class="button btn-whatsapp" target="_blank" data-aos="zoom-in">
              <i class="fab fa-whatsapp"></i>
              &nbsp;&nbsp; Kabari Hayati
            </a>
            <div class="space40px"></div>

            <div class="space40px"></div>
            <div data-aos="fade-up" data-aos-easing="linear">
              <img src="image/divider-leaves.png" class="divider has-text-centered" alt="~~~">
            </div>
            <div class="space40px"></div>
            <p class="h2 subtitle" data-aos="fade-up" data-aos-easing="linear">
              Kami yang berbahagia,
              <br>
              <a class="instagram" href="https://instagram.com/halim8253" target="_blank" alt="Instagram Halim">
                <i class="fab fa-instagram"></i> @abdulhalim
              </a>
              &nbsp
              <a class="instagram" href="https://instagram.com/hayati_fardilla" target="_blank" alt="Instagram Yati">
                <i class="fab fa-instagram"></i> @nurhayati
              </a>
            </p>
            <!-- Buat Pesan Dan Doa Disini -->



          </div>
        </div>
      </div>
    </section>
    <!-- End RSVP Content -->
          <section class="">

      <div data-aos="fade-up" data-aos-easing="linear">
         <div class="column is-12 prolog"><br><br>
            <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear">
              Pesan & Doa</h1>
          </div>
      </div>
      <!-- Form Untuk pesan -->
      <form action="" method="POST">
      <center data-aos="fade-up">
        <input name="nama" id="nama" type="text" placeholder="Nama kamu..." style="width: 80%; padding: 12px; border: 1px solid #996e6d;border-radius: 4px;">
      </center>
      <br>
      <center data-aos="fade-up">
        <textarea name="pesan" id="pesan" cols="10" rows="4" placeholder="Pesan kamu..." style="width: 80%;padding: 12px;border: 1px solid #996e6d;border-radius: 4px;"></textarea>
      </center>
      <br>
      <center data-aos="fade-up"><input type="submit" name="submit" value="kirim" class="button btn-cta"></center>
      </form>
    </section>

    <section>

    </section>

  </div>
  <!-- End Main Content -->
<!-- SCRIPT PHP -->
	<?php
//including the database connection file
include_once("connect.php");
//script menambahkan
if(isset($_POST['submit'])) {	
	$nm = mysqli_real_escape_string($conn, $_POST['nama']);
	$ps = mysqli_real_escape_string($conn, $_POST['pesan']);
	//$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// checking empty fields
	// if(empty($name) || empty($age) || empty($email)) {
				
	// 	if(empty($name)) {
	// 		echo "<font color='red'>Name field is empty.</font><br/>";
	// 	}
		
	// 	if(empty($age)) {
	// 		echo "<font color='red'>Age field is empty.</font><br/>";
	// 	}
		
	// 	if(empty($email)) {
	// 		echo "<font color='red'>Email field is empty.</font><br/>";
	// 	}
		
	// 	//link to the previous page
	// 	echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	// } else { 
	// 	// if all the fields are filled (not empty) 
			
	// 	//insert data to database	
	 	$result = mysqli_query($conn, "INSERT INTO doa(nama,pesan) VALUES('$nm','$ps')");
	// 	//display success message
	// 	echo "<font color='green'>Data added successfully.";
	// 	//echo "<br/><a href='index.php'>View Result</a>";
	// }
}
?>

<?php
//including the database connection file
include_once("connect.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($conn, "SELECT * FROM doa ORDER BY id DESC"); // using mysqli_query instead
?>

<table style="width:80%; margin-left:10%" border="0">
    <tbody>
            <?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<th>".$res['nama']."</th></tr>";
		echo "<tr>";
		echo "<td>".$res['pesan']."<hr></td></tr>";	
	}
	?>
    </tbody>
</table>




  <!-- Begin Footer -->
  <div class="footer">
    <div class="madeby">
      Made by AbdulHafizTarmizi
    </div>
      <a class="instagram" href="https://instagram.com/tarmiziabdulhafiz" target="_blank" alt="Instagram Hafiz">
        <i class="fab fa-instagram"></i>tarmiziabdulhafiz 
      </a>
         
      <a class="instagram" href="https://api.whatsapp.com/send?phone=6281280647611&text=Halo%20Hafiz,%20saya%20mau%20bertanya%20perihal%20undangan%20pernikahan&source=&data=" target="_blank" alt="Instagram Hafiz">
        <i class="fab fa-whatsapp"></i>AbdulHafizTarmizi
      </a>
  </div>
  <!-- End Footer -->

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/menikah.js"></script>
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <script>
    AOS.init({
      easing: "ease-out",
      duration: 800,
    });
  </script>
</body>

</html>


