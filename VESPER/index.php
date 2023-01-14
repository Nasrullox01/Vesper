<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vesperr</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="navbar bg-white mt-4 justify-content-around">
        <div>
            <h1>Vesperr</h1>
        </div>
        <div class="nav">
            <ul class="list-unstyled align-items-center">
                <li><a class="text-primary" href="">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Portfolio</a></li>
                <li><a href="">Team</a></li>
                <li><a href="">Pricing</a></li>
                <div class="dropdown">
                    <button class="drop btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                      Drop Down
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark bg-white" aria-labelledby="dropdownMenuButton2">
                      <li><a class="dropdown-item active text-dark" href="#">Drop Down1</a></li>
                      <li><a class="dropdown-item text-dark" href="#">Drop Down2</a></li>
                      <li><a class="dropdown-item text-dark" href="#">Drop Down3</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item text-dark" href="#">Drop Down4</a></li>
                    </ul>
                  </div>
                <li><a href="">Contact</a></li>
                <button class="btn btn-primary">Get Started</button>
                <a class="menu" href=""><i class="fas fa-bars"></i></a>
            </ul>
        </div>
    </div>
    <div class="container">
        <header>
            <div class="d-flex justify-content-around row">
                <div class="intro float-start col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <h1 class="display-5 fw-bold mt-5">Grow your business with Vesperr</h1>
                    <h3 class="fw-normal text-muted mt-2">We are team of talented designers making websites with Bootstrap</h3>
                    <button class="btn btn-outline-primary mt-5">Get Started</button>
                </div>
                <div class="float-end col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <img class="img-fluid" src="img/hero-img.png" alt="hero">
                </div>
            </div>
        </header>
        <main>
            <div id="about" class="client row">
                <img class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2 img-fluid" src="img/clients/client-1.png" alt="">
                <img class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2 img-fluid" src="img/clients/client-2.png" alt="">
                <img class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2 img-fluid" src="img/clients/client-3.png" alt="">
                <img class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2 mt-2 img-fluid" src="img/clients/client-4.png" alt="">
                <img class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2 img-fluid" src="img/clients/client-5.png" alt="">
                <img class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2 img-fluid" src="img/clients/client-6.png" alt="">
            </div>
            <div>
                <h2 class="fw-bold mt-5 text-center">ABOUT US</h2>
            </div>
            <div class="about d-flex justify-content-around row">
                <div class="float-start mt-5 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <ul class="list-unstyled">
                        <li class="mt-2"><a href=""><i class="fas fa-check-double text-primary"></i></a><span>Ullamco laboris nisi ut aliquip ex ea commodo consequat</span></li>
                        <li class="mt-2"><a href=""><i class="fas fa-check-double text-primary"></i></a><span>Duis aute irure dolor in reprehenderit in voluptate velit</span></li>
                        <li class="mt-2"><a href=""><i class="fas fa-check-double text-primary"></i></a><span>Ullamco laboris nisi ut aliquip ex ea commodo consequat</span></li>
                    </ul>
                </div>
                <div class="float-end mt-5 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <button class="btn btn-outline-primary">Learn More</button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-5">
                    <img class="img-fluid" src="img/counts-img.svg" alt="">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 row mt-5">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <span class="display-6 fw-bold"><a class="text-primary display-6" href=""><i class="far fa-smile"></i></a> 65</span>
                        <p>Happy Clients consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <span class="display-6 fw-bold"><a class="text-primary display-6" href=""><i class="far fa-list-alt"></i></a> 85</span>
                        <p>Projects adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <span class="display-6 fw-bold"><a class="text-primary display-6" href=""><i class="far fa-clock"></i></a> 18</span>
                        <p>Years of experience aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <span class="display-6 fw-bold"><a class="text-primary display-6" href=""><i class="fas fa-award"></i></a> 15</span>
                        <p>Awards rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                    </div>
                </div>
            </div>
            <div>
                <h1 class="fw-bold mt-5 text-center">Services</h1>
                <p class="text-muted text-center mt-3">Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-5">
                            <div class="p-3 border bg-light">
                                <a class="text-primary display-6" href=""><i class="fab fa-dribbble"></i></a>
                                <h5 class="mt-1">Lorem Ipsum</h5>
                                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-5">
                            <div class="p-3 border bg-light">
                                <a class="text-primary display-6" href=""><i class="far fa-file-alt"></i></a>
                                <h5 class="mt-1">Sed ut perspiciatis</h5>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-5">
                            <div class="p-3 border bg-light">
                                <a class="text-primary display-6" href=""><i class="fas fa-tachometer-alt"></i></a>
                            <h5 class="mt-1">Magni Dolores</h5>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-5">
                            <div class="p-3 border bg-light">
                                <a class="text-primary display-6" href=""><i class="fas fa-globe-asia"></i></a>
                                <h5 class="mt-1">Nemo Enim</h5>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                    <img class="img-fluid rounded" src="img/more-services-1.jpg" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                   <img class="img-fluid rounded" src="img/more-services-2.jpg" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                    <img class="img-fluid rounded" src="img/more-services-3.jpg" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                    <img class="img-fluid rounded" src="img/more-services-4.jpg" alt="">
                </div>
            </div>
            <div>
                <h1 class="fw-bold mt-5 text-center">Features</h1>
                <p class="text-muted text-center mt-3">Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
            </div>
            <div class="container mt-5">
                <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-4">
                        <div class="p-3 border bg-light">
                            <span class="fs-3 text-warning"><i class="fas fa-store"></i></span>
                            <a class="fs-6 ms-3 fw-bold" href="">Lorem Ipsum</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-4">
                        <div class="p-3 border bg-light">
                            <span class="fs-3 text-primary"><i class="far fa-chart-bar"></i></span>
                            <a class="fs-6 ms-3 fw-bold" href="">Dolor Sitema</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-4">
                        <div class="p-3 border bg-light">
                            <span class="fs-3 text-danger"><i class="far fa-calendar-alt"></i></span>
                            <a class="fs-6 ms-3 fw-bold" href="">Sed perspiciatis</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-4">
                        <div class="p-3 border bg-light">
                            <span class="fs-3 text-danger"><i class="fas fa-paint-roller"></i></span>
                            <a class="fs-6 ms-3 fw-bold" href="">Magni Dolores</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-4">
                        <div class="p-3 border bg-light">
                            <span class="fs-3 text-info"><i class="fas fa-database"></i></span>
                            <a class="fs-6 ms-3 fw-bold" href="">Nemo Enim</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-4">
                        <div class="p-3 border bg-light">
                            <span class="fs-3 text-warning"><i class="far fa-dot-circle"></i></span>
                            <a class="fs-6 ms-3 fw-bold" href="">Eiusmod Tempor</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-4">
                        <div class="p-3 border bg-light">
                            <span class="fs-3 text-info"><i class="far fa-newspaper"></i></span>
                            <a class="fs-6 ms-3 fw-bold" href="">Midela Teren</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-4">
                        <div class="p-3 border bg-light">
                            <span class="fs-3 text-primary"><i class="fas fa-tag"></i></span>
                            <a class="fs-6 ms-3 fw-bold" href="">Pira Neve</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-4">
                        <div class="p-3 border bg-light">
                            <span class="fs-3 text-success"><i class="fas fa-anchor"></i></span>
                            <a class="fs-6 ms-3 fw-bold" href="">Dirada Pack</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-4">
                        <div class="p-3 border bg-light">
                            <span class="fs-3 text-danger"><i class="fas fa-compact-disc"></i></span>
                            <a class="fs-6 ms-3 fw-bold" href="">Moton Ideal</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-4">
                        <div class="p-3 border bg-light">
                            <span class="fs-3 text-warning"><i class="fas fa-broadcast-tower"></i></span>
                            <a class="fs-6 ms-3 fw-bold" href="">Verdo Park</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-4">
                        <div class="p-3 border bg-light">
                            <span class="fs-3 text-success"><i class="fas fa-fingerprint"></i></span>
                            <a class="fs-6 ms-3 fw-bold" href="">Flavor Nivelanda</a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h1 class="fw-bold mt-5 text-center">TESTIMONIALS</h1>
                <p class="text-muted text-center mt-3">Magnam dolores commodi suscipit eum quidem consectetur velit</p>
            </div>
            <div class="container px-4">
                <div class="row gx-5">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 mt-5">
                        <div class="p-3 border bg-light">
                            <img class="testi rounded border" src="img/testimonials/testimonials-1.jpg" alt="">
                            <h1 class="te fs-5 fw-bold ms-5">Saul Goodman</h1>
                            <p class="ms-5 text-muted">Ceo & Founder</p>
                            <p class="ms-5 text-muted text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos culpa excepturi accusantium totam id pariatur, repellat, tenetur non ullam consectetur suscipit ea minima necessitatibus quibusdam quasi porro dolorum nemo natus.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 mt-5">
                        <div class="p-3 border bg-light">
                            <img class="testi rounded border" src="img/testimonials/testimonials-2.jpg" alt="">
                            <h1 class="te fs-5 fw-bold ms-5">Sara Wilsson</h1>
                            <p class="ms-5 text-muted">Designer</p>
                            <p class="ms-5 text-muted text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos culpa excepturi accusantium totam id pariatur, repellat, tenetur non ullam consectetur suscipit ea minima necessitatibus quibusdam quasi porro dolorum nemo natus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h1 class="fw-bold mt-5 text-center">PORTFOLIO</h1>
                <p class="text-muted text-center mt-3">Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
            </div>
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="p-3 border bg-light">
                            <img class="img-fluid" src="img/portfolio/portfolio-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="p-3 border bg-light">
                            <img class="img-fluid" src="img/portfolio/portfolio-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="p-3 border bg-light">
                            <img class="img-fluid" src="img/portfolio/portfolio-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="p-3 border bg-light">
                            <img class="img-fluid" src="img/portfolio/portfolio-4.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="p-3 border bg-light">
                            <img class="img-fluid" src="img/portfolio/portfolio-5.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="p-3 border bg-light">
                            <img class="img-fluid" src="img/portfolio/portfolio-6.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="p-3 border bg-light">
                            <img class="img-fluid" src="img/portfolio/portfolio-7.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="p-3 border bg-light">
                            <img class="img-fluid" src="img/portfolio/portfolio-8.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="p-3 border bg-light">
                            <img class="img-fluid" src="img/portfolio/portfolio-9.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h1 class="fw-bold mt-5 text-center">TEAM</h1>
                <p class="text-muted text-center mt-3">Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
            </div>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-5">
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="card h-100">
                        <img src="img/team/team-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Walter White</h5>
                            <p class="card-text text-muted text-center">Chief Executive Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="card h-100">
                        <img src="img/team/team-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Sarah Jhonson</h5>
                            <p class="card-text text-muted text-center">Product Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="card h-100">
                        <img src="img/team/team-3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">William Anderson</h5>
                            <p class="card-text text-muted text-center">CTO</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="card h-100">
                        <img src="img/team/team-4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Amanda Jepson</h5>
                            <p class="card-text text-muted text-center">Accountant</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h1 class="fw-bold mt-5 text-center">PRICING</h1>
                <p class="text-muted text-center mt-3">Sit sint consectetur velit nemo qui impedit suscipit alias ea</p>
            </div>
            <div class="container mt-5">
                <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="p-3 border bg-light rounded">
                            <h3 class="text-center fs-5 mt-4">Free</h3>
                            <h4 class="text-center fs-1 text-primary"><sup class="fs-6 text-primary">$</sup>0<span class="fs-5 text-muted fw-light"> / month</span></h4>
                            <p class="text-center mt-3">Aida dere</p>
                            <p class="text-center">Nec feugiat nisl</p>
                            <p class="text-center">Nulla at volutpat dola</p>
                            <p class="text-center"><s class="text-muted">Pharetra massa</s></p>
                            <p class="text-center"><s class="text-muted">Massa ultricies mi</s></p>
                            <button class="btn btn-outline-primary mt-3">Buy Now</button>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="p-3 border bg-light rounded border-primary">
                            <h3 class="text-center fs-5 mt-4">Business</h3>
                            <h4 class="text-center fs-1 text-primary"><sup class="fs-6 text-primary">$</sup>19<span class="fs-5 text-muted fw-light"> / month</span></h4>
                            <p class="text-center mt-3">Aida dere</p>
                            <p class="text-center">Nec feugiat nisl</p>
                            <p class="text-center">Nulla at volutpat dola</p>
                            <p class="text-center text-muted">Pharetra massa</p>
                            <p class="text-center"><s class="text-muted">Massa ultricies mi</s></p>
                            <button class="btn btn-primary mt-3">Buy Now</button>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="p-3 border bg-light rounded">
                            <h3 class="text-center fs-5 mt-4">Developer</h3>
                            <h4 class="text-center fs-1 text-primary"><sup class="fs-6 text-primary">$</sup>29<span class="fs-5 text-muted fw-light"> / month</span></h4>
                            <p class="text-center mt-3">Aida dere</p>
                            <p class="text-center">Nec feugiat nisl</p>
                            <p class="text-center">Nulla at volutpat dola</p>
                            <p class="text-center text-muted">Pharetra massa</p>
                            <p class="text-center text-muted">Massa ultricies mi</p>
                            <button class="btn btn-outline-primary mt-3">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mtop">
                <h1 class="fw-bold text-center">FREQUENTLY ASKED QUESTIONS</h1>
            </div>
            <div class="row">
                <div class="d-inline-flex col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-5">
                    <p class="fs-5 text-info"><i class="far fa-question-circle"></i></p>
                    <p class="freq ms-2 mt-1 text-muted fw-bold">Non consectetur a erat nam at lectus urna duis?</p>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-5">
                    <p class="text-muted">Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
                <hr class="mt-4">
                <div class="d-inline-flex col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-5">
                    <p class="fs-5 text-info"><i class="far fa-question-circle"></i></p>
                    <p class="freq ms-2 mt-1 text-muted fw-bold">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</p>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-5">
                    <p class="text-muted">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.</p>
                </div>
                <hr class="mt-4">
                <div class="d-inline-flex col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-5">
                    <p class="fs-5 text-info"><i class="far fa-question-circle"></i></p>
                    <p class="freq ms-2 mt-1 text-muted fw-bold">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</p>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-5">
                    <p class="text-muted">Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.</p>
                </div>
                <hr class="mt-4">
                <div class="d-inline-flex col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-5">
                    <p class="fs-5 text-info"><i class="far fa-question-circle"></i></p>
                    <p class="freq ms-2 mt-1 text-muted fw-bold">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</p>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-5">
                    <p class="text-muted">Aperiam itaque sit optio et deleniti eos nihil quidem cumque. Voluptas dolorum accusantium sunt sit enim. Provident consequuntur quam aut reiciendis qui rerum dolorem sit odio. Repellat assumenda soluta sunt pariatur error doloribus fuga.</p>
                </div>
                <hr class="mt-4">
                <div class="d-inline-flex col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-5">
                    <p class="fs-5 text-info"><i class="far fa-question-circle"></i></p>
                    <p class="freq ms-2 mt-1 text-muted fw-bold">Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</p>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-5">
                    <p class="text-muted">Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                </div>
                <hr class="mt-4">
            </div>
            <div>
                <h1 class="fw-bold text-center mt-5">CONTACT US</h1>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-2">
                    <h3 class="fw-bold">Vesperr</h3>
                    <p class="text-muted">Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                    <a class="fs-2 text-info" href=""><i class="fab fa-twitter"></i></a>
                    <a class="fs-2 text-info ms-3" href=""><i class="fab fa-facebook"></i></a>
                    <a class="fs-2 text-info ms-3" href=""><i class="fab fa-instagram"></i></a>
                    <a class="fs-2 text-info ms-3" href=""><i class="fab fa-linkedin"></i></a>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-2">
                    <div>
                        <p class="d-inline-flex fs-3 text-info"><i class="fas fa-map-marker-alt"></i></p>
                        <p class="d-inline-flex">A108 Adam Street</p>
                        <p class="ms-4">New York, NY 535022</p>
                    </div>
                    <div>
                        <p class="d-inline-flex fs-3 text-info"><i class="far fa-envelope"></i></p>
                        <p class="d-inline-flex">info@example.com</p>
                    </div>
                    <div>
                        <p class="d-inline-flex fs-3 text-info"><i class="fas fa-phone-alt"></i></p>
                        <p class="d-inline-flex">+1 5589 55488 55s</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-2">
                    <input class="form-control  mt-3" type="text" placeholder="Your Name">
                    <input class="form-control mt-3" type="email" placeholder="Your Email">
                    <input class="form-control mt-3" type="text" placeholder="Subject">
                    <div class="form-floating mt-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>
                    <button class="btn btn-primary mt-3" type="button">Send Message</button>
                </div>
            </div>
        </main>
    </div>
    <footer class="bg-light">
        <div class="container">
            <div class="foot d-flex justify-content-around row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <p class="mt-4 fw-light text-dark text-center">© Copyright <span class="text-dark fw-bold">Vesperr</span>. All Rights Reserved</p>
                    <p class="ms-5 fw-light text-center">Designed by <a class="text-primary" href="">BootstrapMade</a></p>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
                    <ul class="list-unstyled d-inline-flex mt-5">
                        <li class="ms-3"><a href="">Home</a></li>
                        <li class="ms-3"><a href="">About</a></li>
                        <li class="ms-3"><a href="">Privacy Policy</a></li>
                        <li class="ms-3"><a href="">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>