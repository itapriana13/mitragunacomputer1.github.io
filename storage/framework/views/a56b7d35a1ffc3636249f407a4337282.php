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
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

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

<!-- prodcuts section starts  -->

<section class="paket" id="paket">
    <div class="container">
        <div class="row text-center">
            <div class="col">
    <h1 class="heading"> MGC <span>Menyediakan Barang dan Jasa</span> </h1>
                </div>
                <div class="row">
                    <div class="col-md-4 nb-3">
                        <div class="card">
                            <img src="<?php echo e(asset('images/seperangkatcomputer.jpg')); ?>" class="card-img-top" alt="paket1" height="200" width="300">
                            <div class="card-body">
                              <p  class="card-text"> <b>SEPERANGKAT COMPUTER</b></p>
                               <p>  Perangkat keras komputer atau yang juga sering disebut oleh hardware adalah semua jenis komponen pada komputer dimana bagian fisiknya dapat terlihat secara kasat mata dan bisa dirasakan langsung. Dalam pengertiannya, hardware disebut sebagai peralatan fisik komputer yang berguna untuk melakukan proses input, output, dan proses.
                              </p>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4 nb-3">
                        <div class="card">
                            <img src="<?php echo e(asset('images/tplink.jpg')); ?>" class="card-img-top" alt="paket1"  height="200" width="300">
                            <div class="card-body">
                              <p class="card-text"><b>ROUTER</b></p>
                              <P>Router adalah perangkat yang berfungsi untuk mentransmisikan paket data dari jaringan internet keperangkat lain melalui proses routing. Proses routing sendiri merupakan proses meneruskan paket jaringan satu dengan yang lainnya. </P>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="<?php echo e(asset('images/TEKNISI1.webp')); ?>" class="card-img-top" alt="paket1"  height="200" width="300">
                            <div class="card-body">
                              <p class="card-text"><b>MEMPERBAIKI SEPERANGKAT KOMPUTER</b></p>
                              <p>Jasa adalah setiap tindakan atau kegiatan yang dapat di tawarkan oleh satu pihak kepada pihak lain. MGC juga menerima perbaikan jasa seperangkat alat komputer</p>
                            </div>
                          </div>
                    </div>

    </section>


<!-- prodcuts section ends -->

</body>
</html>
<?php /**PATH C:\laragon\www\project-toko\resources\views/sidebar/paket.blade.php ENDPATH**/ ?>