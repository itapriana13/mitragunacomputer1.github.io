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

    <a href="#" class="logo">Mitra Guna Computer<span>.</span></a>

    <nav class="navbar">
    <a href="/sidebar/index">home</a>
        <a href="/sidebar/about">about</a>
        <a href="/sidebar/paket">provide</a>
        <a href="/sidebar/aboutus">about us</a>
        <a href="/sidebar/contact">contact</a>
    </nav>


</header>

<!-- header section ends -->

<!-- about section starts  -->

<section class="about" id="about">
    <div class="container">
    <h1 class="heading"> <span> MGC </span>Mitra Guna Computer </h1>

    <div class="row text-center nb-3">
        <div class="col">
        <div class="row justify-content-center">
            <div class="col-4">
            </div>
            <img src="{{ asset('images/MGC.jpg') }}" alt="" height="300" width="500">
        </div>
        </div>
        <div class="content">
            <h3>Sejarah Perusahaan</h3>
            <p>Latar belakang berdirinya Mitra Guna Computer berawal dari pengalaman pendiri yang ingin membantu dan menyediakan kebutuhan pengadaan komputer yang berkualitas bagi komsumen serta menyediakan service computer yang dapat diandalkan. Dengan berbekal pengalaman dalam dunia IT maka MGC didirikan pada 2004. Melalui kemampuan teknikal dan pengalaman kami, kami tidak hanya menyediakan jasa perbaikan saja, namun kami lebih menekankan pada solusi yang dapat kami berikan untuk kepuasan pelanggan. Mulai dari perencanaan, mencari sebab permasalahan dan pengadaan unit sehingga para pelanggan akan mendapatkan nilai tambah dari proyek yang akan dibangun. Baik dari segi harga, waktu pelaksanaan dan hasil/kualitas.</p>
            <p>Berpusat di Mall WTC Matahari Serpong Lt 3 Blok TD 6-9, kami menyediakan kemudahan akses untuk jasa perusahaan kami karena letaknya yang mudah di jangkau. Dengan berkembangnya perusahaan maka perusahaan juga mengembangkan layanannya ke bidang mesin absensi, notebook, dan CCTV yang saat ini sudah menjadi bagian dalam bidang computer.
                Sebagai salah satu perusahaan computer yang mengedepankan reputasi sebagai integritas perusahaan kami MGC menanamkan integritas yang tinggi kepada semua personel karena dengan integritas itulah perusahaan kami dapat menjunjung tinggi moral dan etika serta menyediakan jasa terbaik dengan standar professional.
                </p>
        </div>
    </div>
    </div>

</section>

<!-- about section ends -->

</body>
</html>
