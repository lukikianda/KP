@extends('layouts.mainpage')

@section('content')
    <body style="background-color: #E6E6FA;">

        <!-- Carousel Slide -->
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ url('images/slide-1.jpg') }}" class="d-block w-100" style="opacity:0.3" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>PT. <span style="color: red">Ainthisar</span> Media Teknologi</h1>
                        <p>Serve everything you want.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ url('images/slide-2.jpg') }}" class="d-block w-100" style="opacity:0.3" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>PT. <span style="color: red">Ainthisar</span> Media Teknologi</h1>
                        <p>Everything you need.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ url('images/slide-3.jpg') }}" class="d-block w-100" style="opacity:0.3" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>PT. <span style="color: red">Ainthisar</span> Media Teknologi</h1>
                        <p>Everything to be a best result!</p>
                    </div>
                 </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
              
        <!-- Text -->
        <center style="margin-top: 50px; margin-bottom: 10px;">
            <h5>We are a company that engaged in the Engineering, Construction, and Manufacturing sector.</h5>
            <h5>Based in Jakarta, we serve all types of work services related to engineering, construction, and manufacturing.<h5>
            <h6>In addition, we also accept cooperation and investment from any related work.</h6>
            <h6>For more information about what we provide, you can see below.</h6> 
        </center>

        <!-- Card Group -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card shadow" style="width: 20rem;">
                            <div class="inner">
                                <img src="{{ url('images/project1.jpg') }}" alt="Card image cap" class="card-img-top">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Contractor</h5>
                                <p class="card-text">We build the required infrastructure of every company/individual. In every best result, there is always us!</p>
                                <a href="/information" class="btn btn-success">More Information</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow" style="width: 20rem;">
                            <div class="inner">
                                <img src="{{ url('images/project2.jpg') }}" alt="Card image cap" class="card-img-top">
                            </div>  
                            <div class="card-body text-center">
                                <h5 class="card-title">Consultant</h5>
                                <p class="card-text">If you want to start a project, we can help provide consultation based on the experience we have.</p>
                                <a href="/information" class="btn btn-success">More Information</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow" style="width: 20rem;">
                            <div class="inner">
                                <img src="{{ url('images/project3.jpg') }}" alt="Card image cap" class="card-img-top">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Distributor</h5>
                                <p class="card-text">We also provide procurement services for every device/material you need to support the project you are working on.</p>
                                <a href="/information" class="btn btn-success">More Information</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Image Employee -->
        <div class="card-wrapper">
        <div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-3">
						<h2>Our Team</h2>
						<p>Let us all be the leaders we wish we had !</p>
					</div>
				</div>
			</div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card text-center text-white bg-dark">
                            <div class="card-body">
                                <img alt="" class="img-fluid rounded-circle" src="images/team1.jpg">
                                <h3 class="card-title py-2">Luki Kianda</h3>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
                                <p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card text-center text-white bg-dark">
                            <div class="card-body">
                                <img alt="" class="img-fluid rounded-circle" src="images/team2.jpg">
                                <h3 class="card-title py-2">Faisal Febrian</h3>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
                                <p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card text-center text-white bg-dark">
                            <div class="card-body">
                                <img alt="" class="img-fluid rounded-circle" src="images/team3.jpg">
                                <h3 class="card-title py-2">Qomarudin</h3>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
                                <p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card text-center text-white bg-dark">
                            <div class="card-body">
                                <img alt="" class="img-fluid rounded-circle" src="images/team4.jpg">
                                <h3 class="card-title py-2">Asa Ayyakunna</h3>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
                                <p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="margin-top:50px; margin-bottom:50px;"/>
@endsection      
