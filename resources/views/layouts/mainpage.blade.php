<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equive="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/73a5bd7ed6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/styles.css') !!}">

    <title>Home - Ainthisar Media Teknologi</title>
</head>

    <!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" style="">
    <div class="container-fluid">
        <img src="{{ url('images/AMT.png') }}" style="max-width:70px;" class="card-img-top" alt="..."></img>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">  
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">&emsp;Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/information">Career</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/information">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    About Us
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/vision">Vision</a></li>
                    <li><a class="dropdown-item" href="/mission">Mission</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/information">Company History</a></li>
                </ul>
                </li>
            </ul>
            <form class="d-flex">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Are you our family?</a>
                @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                    <a class="btn btn-outline-success" href="/login">Sign in</a>
                    @endauth
                @endif
            </form>
        </div>
    </div>
</nav>
</head>

<body>   
@yield('content')

<!-- Image Slider -->
<h2 class="text-center pt-5">Our <span class="text-muted">Partners</span> :</h2>
    <footer class="text-center text-white" style="background-color: #B0E0E6; margin-top:50px;">
<!-- Grid container -->
        <div class="container p-4">
<!-- Section: Images -->
            <section class="">
                <div class="row">
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="{{ url('images/Telkom.png') }}" class="w-100"/>
                            <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.1);"></div></a>
                            </div>
                        </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="{{ url('images/Myrep.png') }}" class="w-100"/>
                            <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.1);"></div></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="{{ url('images/Pertamina.png') }}" class="w-100"/>
                            <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.1);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="{{ url('images/Airnav.png') }}" class="w-100"/>
                            <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.1);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="{{ url('images/Icon.png') }}" class="w-100"/>
                            <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.1);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="{{ url('images/Balitower.png') }}" class="w-100"/>
                            <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.1);"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </footer>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-white text-muted">
    <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
    <!-- Left -->

    <!-- Right -->
            <div>
                <a href="/information" class="me-4 link-secondary">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="/information" class="me-4 link-secondary">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="/information" class="me-4 link-secondary">
                    <i class="fa-brands fa-google"></i>
                </a>
                <a href="/information" class="me-4 link-secondary">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="/information" class="me-4 link-secondary">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="/information" class="me-4 link-secondary">
                    <i class="fa-brands fa-github"></i>
                </a>
            </div>
    <!-- Right -->
        </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
    <!-- Grid row -->
                <div class="row mt-3">
    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
    <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            </i>Ainthisar Media Teknologi
                        </h6>
                        <p>Jl. Pangkalan Jati IA No.9, RT.4/RW.013, Cipinang Melayu, Makasar.</p>
                    </div>
    <!-- Grid column -->

    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
    <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Products</h6>
                        <p>
                            <a href="/information" class="text-reset">Service</a>
                        </p>
                        <p>
                            <a href="/information" class="text-reset">Goods</a>
                        </p>
                        <p>
                            <a href="/information" class="text-reset">Investment</a>
                        </p>
                        <p>
                            <a href="/information" class="text-reset">Others</a>
                        </p>
                    </div>
    <!-- Grid column -->

    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
    <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="/information" class="text-reset">Schedule Meet</a>
                        </p>
                        <p>
                            <a href="/information" class="text-reset">Consultation</a>
                        </p>
                        <p>
                            <a href="/information" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="/information" class="text-reset">Help</a>
                        </p>
                    </div>
    <!-- Grid column -->

    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
    <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fa-solid fa-house"></i>&emsp; Jakarta Timur, DKI Jakarta, ID.</p>
                        <p>
                        <i class="fa-solid fa-envelope"></i>&emsp; admin@ainthisar.id
                        </p>
                        <p><i class="fa-solid fa-phone"></i>&emsp; +62 21 39703323</p>
                        <p><i class="fa-brands fa-whatsapp"></i>&emsp; +62 822 1115 5268</p>
                    </div>
    <!-- Grid column -->
                </div>
    <!-- Grid row -->
            </div>
        </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="">Luki Kianda</a>
        </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>