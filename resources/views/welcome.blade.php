<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bezel | Creative Multi-Purpose HTML Template</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">


                <!-- Nav bar -->

                <nav class="navbar navbar-expand-lg fixed-top navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="#"><img src="./assets/logo-dark.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('about')}}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#team">Sponsors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('services')}}">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#works">Add ons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('pack.packList')}}">Packages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('coverage')}}">Coverages</a>
                                </li>
                                <li class="nav-item">

                                    @if (Route::has('login'))
                                        <div class=" hiddennfixed top-0 right-0 px-6 py-4 sm:block">
                                            @auth
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }}

                                                    </a>


                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{route('cars.index')}}">Your Cars</a>
                                                        </li>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            @else
                                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif
                                    </li>


                            </ul>
                            <div class="socials">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a> </li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

                <main>
                    <!-- Section 1 (Home) -->
                    <section id="home">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active img1 w-100 h-100" data-bs-interval="5000">
                                    <div class="carousel-caption d-block">
                                        <h1 class="font-big text-nowrap">Save Your Money.</h1>
                                        <h4 class="caption-font text-nowrap">We offer you the best yearly packages</h4>
                                        <a href="{{route('cars.index')}}"> <button class="btn btn-color btn-shine">Your Cars</button> </a>
                                     <a  href="#contact" ><button class="btn btn-color1">Contact</button></a>
                                    </div>
                                </div>
                                <div class="carousel-item img2 w-100 h-100" data-bs-interval="5000">
                                    <div class="carousel-caption">
                                        <h1 class="font-big wrapfix">Stay Safe with Bezel.</h1>
                                        <h4 class="caption-font text-nowrap">Safe on your car with the best insurance Company </h4>
                                       <a href="{{route('pack.packList')}}"> <button class="btn btn-color btn-shine">Hire us</button> </a>
                                       <a href="{{route('services')}}"> <button class="btn btn-color1">Services</button></a>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="fas fa-arrow-left" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                <div class="btn-overlay position-absolute"></div>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="fas fa-arrow-right" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                <div class="btn-overlay1 position-absolute"></div>
                            </button>
                        </div>
                    </section>

                    <!-- Section 2 (About us) -->

                    <section id="about">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-md-12 m-auto">
                                    <div class="title text-center fw-light d-flex flex-column align-items-center m-0">
                                        <h6>Who We Are</h6>
                                        <p>We are an innovative company. We offer and provide
                                            <span class="typed-words fw-normal"></span>
                                            <span class="typed-cursor">|</span> for
                                            <br>costumers around the world. Our clients are some of the most forward-looking persons in the world.
                                        </p>
                                    </div>
                                    <div class="text-center"><a href="{{route('about')}}"><button class="btn3" href="#">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Section 3 (Team) -->

                    <section id="team">
                        <div class="container">
                            <div class="title-box text-center">
                                <h2 data-bigletter="A">Auto Parts Sponsors</h2>
                                <h4>We Make it new</h4>
                            </div>

                            <div class="row pt-25">
                                <div class="col-12 col-md-6 col-lg-3 p-7 position-relative overlaytrigger">
                                    <img class="w-100" src="./assets/volex.jpeg" alt="">
                                    <div class="team-overlay position-absolute">
                                        <div class="team-info position-absolute bottom-0">
                                            <h4>Volkswagen Group</h4>
                                            <span>german car company</span>
                                        </div>
                                        <ul class="team-social list-unstyled d-flex position-absolute top-0">
                                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3 p-7 position-relative overlaytrigger">
                                    <img class="w-100" src="./assets/gm.jpeg" alt="">
                                    <div class="team-overlay position-absolute">
                                        <div class="team-info position-absolute bottom-0">
                                            <h4>General Motors Group</h4>
                                            <span>morethan 20 brand group</span>
                                        </div>
                                        <ul class="team-social list-unstyled d-flex position-absolute top-0">
                                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3 p-7 position-relative overlaytrigger">
                                    <img class="w-100" src="./assets/daim.jpeg" alt="">
                                    <div class="team-overlay position-absolute">
                                        <div class="team-info position-absolute bottom-0">
                                            <h4>Damiler Group</h4>
                                            <span>mercedes benz and naibach group</span>
                                        </div>
                                        <ul class="team-social list-unstyled d-flex position-absolute top-0">
                                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3 p-7 position-relative overlaytrigger">
                                    <img class="w-100" src="./assets/bmw.jpeg" alt="">
                                    <div class="team-overlay position-absolute">
                                        <div class="team-info position-absolute bottom-0">
                                            <h4>Bavarians motor Group</h4>
                                            <span>leader german car group</span>
                                        </div>
                                        <ul class="team-social list-unstyled d-flex position-absolute top-0">
                                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Section 4 (Services) -->

                    <section id="services">
                        <div class="container">
                            <div class="row text-center row1">
                                <div class="col-md-4 col-lg-2">SAVING LIFES</div>
                                <div class="col-md-4 col-lg-2">LOSING REDUCTION</div>
                                <div class="col-md-4 col-lg-2">PERFECT PACKAGES</div>
                                <div class="col-md-4 col-lg-2">COMPANIES COVERAGE</div>
                                <div class="col-md-4 col-lg-2">BEST SERVICES</div>
                                <div class="col-md-4 col-lg-2">RETINA READY</div>
                            </div>

                            <div class="row p-8">
                                <div class="col-md-4 width-750">
                                    <h2 data-bigletter="W">What We Do.</h2>
                                    <p>We reduce accidents and natural losing , also we insure your life and health after accident</p>
                                </div>
                                <div class="col-md-3 col-sm-6 offset-md-2 mt-25">
                                    <ul class="check-list list-unstyled">
                                        <li class="check-list-icon"><i class="far fa-check-circle"></i>SPECIALISTS</li>
                                        <li class="check-list-icon"><i class="far fa-check-circle"></i>SAFE</li>
                                        <li class="check-list-icon"><i class="far fa-check-circle"></i>SCATTERED</li>
                                        <li class="check-list-icon"><i class="far fa-check-circle"></i>24/7 dedicated call center</li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6 mt-25">
                                    <ul class="check-list list-unstyled">
                                        <li class="check-list-icon"><i class="far fa-check-circle"></i>AUTOMATED PROCESSES</li>
                                        <li class="check-list-icon"><i class="far fa-check-circle"></i>EXPERIENCE</li>
                                        <li class="check-list-icon"><i class="far fa-check-circle"></i>SAVER</li>
                                        <li class="check-list-icon"><i class="far fa-check-circle"></i>COSTUMER SUPPORT</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Section 5 (Pricing) -->

                    <section id="pricing">
                        <div class="container">
                            <div class="title-box text-center">
                                <h2 data-bigletter="P">packages Prices</h2>
                                <h4>We provide the best quality.</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="pricing-table">
                                        <div class="pricing-head">
                                            <h4>Basic</h4>
                                        </div>
                                        <div class="price">
                                            <h2><span>%</span>3</h2>
                                        </div>
                                        <ul class="features list-unstyled">
                                            <li class="check-list-icon"><i class="far fa-check-circle"></i>Covering Accidents</li>
                                            <li class="check-list-icon"><i class="far fa-check-circle"></i>Covering natural disasters</li>

                                        </ul>
                                        <div class="pricing-footer">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="pricing-table">
                                        <div class="pricing-head">
                                            <h4>Silver</h4>
                                        </div>
                                        <div class="price">
                                            <h2><span>%</span>4</h2>
                                        </div>
                                        <ul class="features list-unstyled">
                                            <li class="check-list-icon"><i class="far fa-check-circle"></i>Covering all basic package</li>
                                            <li class="check-list-icon"><i class="far fa-check-circle"></i>include monthly maintance</li>


                                        </ul>
                                        <div class="pricing-footer">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="pricing-table featured"><span class="featured-label">Best Value</span>
                                        <div class="pricing-head">
                                            <h4>Gold</h4>
                                        </div>
                                        <div class="price">
                                            <h2><span>%</span>5</h2>
                                        </div>
                                        <ul class="features list-unstyled">
                                            <li class="check-list-icon"><i class="far fa-check-circle"></i>Covering silver packages</li>
                                            <li class="check-list-icon"><i class="far fa-check-circle"></i>Covering human health</li>
                                            <li class="check-list-icon"><i class="far fa-check-circle"></i>Covering yearly accessories</li>




                                        </ul>
                                        <div class="pricing-footer">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="pricing-table">
                                        <div class="pricing-head">
                                            <h4>Platinum</h4>
                                        </div>
                                        <div class="price">
                                            <h2><span>%</span>6</h2>
                                        </div>
                                        <ul class="features list-unstyled">
                                            <li class="check-list-icon"><i class="far fa-check-circle"></i>Covering Gold packages</li>
                                            <li class="check-list-icon"><i class="far fa-check-circle"></i>Covering bad usage</li>
                                            <li class="check-list-icon"><i class="far fa-check-circle"></i>replacing yearly tires and oils</li>

                                        </ul>
                                        <div class="pricing-footer">
                                        </div>
                                    </div>
                                </div>
                              <a href="{{route('pack.packList')}}">  <button  class="position-relative btn-shine btn-sm btn-shadow">Show Packgaes</button></a>
                            </div>
                        </div>

                    </section>

                    <!-- Section 6 (Works) -->

                    <section id="works">
                        <div class="container">
                            <h6 class="title5 text-center">Car Insurance Add-ons</h6>
                            <div class="row">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
                                    <div class="carousel-indicators" id="carousel-indicators">
                                        <button id="btn-styling" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button id="btn-styling" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    </div>
                                    <div class="workwrapper">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="./assets/engine.png" class="d-block position-absolute" alt="...">
                                                <div class="testimonial-comment">
                                                    <h4>engine protection cover</h4><span class="testimonial-info"></span>
                                                    <p>No coverage is offered for the damage incurred by the car’s engine due to oil leakage or water ingression. A standard car insurance policy only covers the damage caused to the engine during an accident. However, you can get a complete coverage for your car’s engine damage by opting for an engine protection add-on. It is one of the most opted for add-ons as the engine is the heart of the car.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./assets/oil.png" class="d-block position-absolute" alt="...">
                                                <div class="testimonial-comment">
                                                    <h4>Consumable cover</h4><span class="testimonial-info">
                                                        </span>
                                                    <p>When a car gets repaired, several consumable items are used like lubricants, coolant, nuts and bolts, grease, engine oil, screw, oil filter, etc. Generally, the expenses of consumable items are not covered by a car insurance policy and the policyholder has to bear this cost. But the consumable add-on cover reimburses the cost of consumables items incurred during the repair of an insured car. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                            <span class="bi bi-arrow-left" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                            <span class="bi bi-arrow-right" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                    <!-- Section 8 (Contact) -->

                    <section id="contact">
                        <div class="container-fluid m-0 p-0">
                            <div class="row w-100 rowheight">
                                <div class="col-5 w-50">
                                    <iframe class="position-absolute top-0" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d54584.79060517174!2d29.924813389821!3d31.233210655025427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d31.211862699999998!2d29.939360399999998!4m5!1s0x14f5db8a16c3c77d%3A0x24c465e134255814!2zUm91dGUsIDcyNCDYt9ix2YrZgiDYp9mE2K3YsdmK2KnYjCDZhNmI2LHYp9mGLCBGaXJzdCBBbCBSYW1sLCBBbGV4YW5kcmlhIEdvdmVybm9yYXRlIDIxNTIz4oCt!3m2!1d31.247022599999998!2d29.977093999999997!5e0!3m2!1sen!2seg!4v1629511479479!5m2!1sen!2seg"
                                        width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">

                                <div class="col-md-5 offset-md-7 col-sm-12">
                                    <div class="title-box">
                                        <h2 data-bigletter="G">Get In Touch</h2>
                                        <h4>Let's work together.</h4>
                                    </div>
                                    <div class="row pt-25 pb-25">
                                        <form id="contact-form">
                                            <div class="form-group">
                                                <label>Your Name</label>
                                                <input class="form-control" type="text" name="name" data-required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Your Email</label>
                                                <input class="form-control" type="email" name="email" data-required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input class="form-control" type="text" name="phone">
                                            </div>
                                            <div class="form-group">
                                                <label>Your Message</label>
                                                <textarea class="form-control" name="message" data-required=""></textarea>
                                            </div>
                                            <div class="form-group mt-25">
                                                <button class="btn4 btn-shine" type="submit">Send Message</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        </div>

                    </section>

                </main>


            <!-- Bootstrap JS Script -->
            <script src="./js/bootstrap.bundle.min.js"></script>
    </body>
</html>



