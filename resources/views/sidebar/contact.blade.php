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
        <a href="/sidebar/paket">provide</a>
        <a href="/sidebar/aboutus">about us</a>
        <a href="/sidebar/contact">contact</a>
    </nav>


</header>

<!-- header section ends -->


<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>

    <div class="container">
        <div class="row">
           
                <form action="{{ url('contact_mail') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="text" placeholder="name" class="box" name="name">
                    <input type="email" placeholder="email" class="box" name="email">
                    <input type="number" placeholder="number" class="box" name="number">
                    <textarea name="message" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
                    <input type="submit" value="send message" class="btn">
                </form>

                    </div>
    </div>

</section>

<!-- contact section ends -->

</body>
</html>
