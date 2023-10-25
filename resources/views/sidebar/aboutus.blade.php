<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

<!-- header section starts  -->

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo">MITRA GUNA COMPUTER<span>.</span></a>

    <nav class="navbar">
    <a href="/sidebar/index">home</a>
        <a href="/sidebar/about">about</a>
        <a href="/sidebar/paket">pprovide</a>
        <a href="/sidebar/aboutus">about us</a>
        <a href="/sidebar/contact">contact</a>
    </nav>


</header>

<!-- header section ends -->


<!-- review section starts  -->

<section class="about us" id="about us">

    <h1 class="heading"> about <span> us</span> </h1>

    <div class="box-container">

        <div class="box">
            <p>	Owner : Merupakan pemilik cabang, ia adalah pemilik dari usaha tersebut.</p>
            <div class="user">
                <img src="{{asset('images/OWNER2.jpg')}}" alt="">
                <div class="user-info">
                    <h3>IRANI</h3>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <p>	Manager supervisor : Merupakan pihak yang bertugas untuk  memastikan apakah aktivitas bisnis perusahaan telah berjalan sesuai perencanaan yang telah dirancang.</p>
            <div class="user">
                <img src="{{asset('images/MANAGER.png')}}" alt="">
                <div class="user-info">
                    <h3>SUTOPO</h3>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <p> 	Administrasi : Merupakan pihak yang bertugas untuk mencatat serta memeriksa status data penjualan yang telah masuk dan yang belum masuk dengan tujuan untuk mempermudahkan dalam menindaklanjuti kekurangannya.</p>
            <div class="user">
                <img src="{{asset('images/ADMINISTRASI.jpg')}}" alt="">
                <div class="user-info">
                    <h3>ANNISA</h3>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <p> 	Teknisi : Teknisi Komputer bertugas dan bertanggung jawab untuk melaksanakan, mengelola, mengembangkan, dan memperbaiki perangkat keras dan lunak untuk infrastruktur TIK agar dukungan layanan TIK di unit kerja lancar dan tersedia dengan baik.</p>
            <div class="user">
                <img src="{{asset('images/TEKNISI1.webp')}}" alt="">
                <div class="user-info">
                    <h3>FAHRI</h3>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <p> 	Teknisi : Teknisi Komputer bertugas dan bertanggung jawab untuk melaksanakan, mengelola, mengembangkan, dan memperbaiki perangkat keras dan lunak untuk infrastruktur TIK agar dukungan layanan TIK di unit kerja lancar dan tersedia dengan baik.</p>
            <div class="user">
                <img src="{{asset('images/TEKNISI2.jpg')}}" alt="">
                <div class="user-info">
                    <h3>AMRI</h3>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <p> 	Teknisi : Teknisi Komputer bertugas dan bertanggung jawab untuk melaksanakan, mengelola, mengembangkan, dan memperbaiki perangkat keras dan lunak untuk infrastruktur TIK agar dukungan layanan TIK di unit kerja lancar dan tersedia dengan baik.</p>
            <div class="user">
                <img src="{{asset('images/TEKNISI3.jpg')}}" alt="">
                <div class="user-info">
                    <h3>JAY</h3>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>


    </div>

    </section>

<!-- review section ends -->

</body>
</html>
