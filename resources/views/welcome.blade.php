@extends('layouts.portfolio')

@section('content')

  <title>Jônatas Pereira</title>

    <section class="bootstrap-header">
      <nav class="navbar navbar-expand-lg navbar-light py-lg-3 py-2">
        <div class="container">
         
          <a class="navbar-brand" href="{{ url('/') }}"> 
            <i class="fa fa-desktop"></i>
            JospCode
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa fa-bars"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('service') }}">Services</a>
              </li>
            
            
              <li class="nav-item">
                <a class="nav-link" href="{{ url('contact') }}">Contact</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </section>
 
    <!--  Main banner section -->

    <section class="main-banner" id="home">
      <div class="companies20-content">
        <div class="companies-wrapper">
            <div class="item">
            
                <div class="slider-info banner-view text-center">
                  <div class="banner-info container">
                    <img src="{{ asset('images/perfil.jpg') }}" alt="about image" class="img-fluid">
                    <h3 class="banner-text mt-5">Olá, eu sou Jônatas Pereira
                      </h3>
                      <p class="my-4 mb-5">DevOps / Fullstack</p><br>
                  
                  </div>
                </div>
              
            </div>
        </div>
      </div>
    </section>

    <!--  //Main banner section -->

    <section class="about bg-light">
      <div class="skills-bars py-5">
        <div class="container py-md-3">
          <div class="heading text-center mx-auto">
            <h3 class="head">Bem Vindo Ao Meu Site</h3>
            <p class="my-3 head"> Inovações e soluções que irão alavancar o seu negócio. A tecnologia move tudo!</p>
          </div>

          <div class="row mt-lg-5 pt-3">

            <p class="my-3 head"> Meu nome é <strong>Jônatas Silva Pereira</strong>, tenho 19 anos....</p> 

          </div>

        </div>
      </div>
    </section>

    <section class="feature-3" id="features">
      <div class="grid top-bottom">
        <div class="container">
          <div class="heading text-center mx-auto">
            <h3 class="head text-white">Disponibilidade para contratar</h3>
            <p class="my-3 head text-white"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
              Nulla mollis dapibus nunc, ut rhoncus
              turpis sodales quis. Integer sit amet mattis quam.</p>
          </div>

          <div class="middle-section grid-column text-center mt-5 pt-3">

            <div class="three-grids-columns">
              <span class="fa fa-code"></span>
              <h4>Softwares</h4>
              <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc</p>
            </div>
            <div class="three-grids-columns">
              <span class="fa fa-desktop"></span>
              <h4>Websites</h4>
              <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc</p>
            </div>
            <div class="three-grids-columns">
              <span class="fa fa-mobile"></span>
              <h4>Aplicativos</h4>
              <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc</p>
            </div>
            <div class="three-grids-columns">
              <span class="fa fa-globe"></span>
              <h4>Hospedagem</h4>
              <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc</p>
            </div>
            <div class="three-grids-columns">
              <span class="fa fa-paint-brush"></span>
              <h4>Design</h4>
              <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc</p>
            </div>

          </div>

        </div>
      </div>
    </section>

    <div class="products-4" id="portfolio">
      <!-- Products4 block -->
      <div id="products4-block" class="text-center">
        <div class="container">
          <div class="heading text-center mx-auto mb-5">
            <h3 class="head">I Love What I Do</h3>
            <p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
              Nulla mollis dapibus nunc, ut rhoncus
              turpis sodales quis. Integer sit amet mattis quam.</p>
          </div>

          <input id="tab1" type="radio" name="tabs" checked>
         

          <input id="tab2" type="radio" name="tabs">
          <label class="tabtle" for="tab2">Illustration</label>

          <input id="tab3" type="radio" name="tabs">
          <label class="tabtle" for="tab3">Photography</label>

          <input id="tab4" type="radio" name="tabs">
          <label class="tabtle" for="tab4">Website</label>

          

          <section id="content2" class="tab-content text-left">
            <div class="d-grid grid-col-3">

              <div class="product">
                  <a href="{{ asset('/images/g7.jpg') }}" data-lightbox="example-set"
                      data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                      <figure>
                          <img src="{{ asset('/images/g7.jpg') }}" class="img-responsive" alt="" />
                      </figure>
                  </a>
              </div>
              <div class="product">
                  <a href="{{ asset('/images/g8.jpg') }}" data-lightbox="example-set"
                      data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                      <figure>
                          <img src="{{ asset('/images/g8.jpg') }}" class="img-responsive" alt="" />
                      </figure>
                  </a>
              </div>
              <div class="product">
                  <a href="{{ asset('/images/g1.jpg') }}" data-lightbox="example-set"
                      data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                      <figure>
                          <img src="{{ asset('/images/g1.jpg') }}" class="img-responsive" alt="" />
                      </figure>
                  </a>
              </div>
              <div class="product">
                  <a href="{{ asset('/images/g2.jpg') }}" data-lightbox="example-set"
                      data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                      <figure>
                          <img src="{{ asset('/images/g2.jpg') }}" class="img-responsive" alt="" />
                      </figure>
                  </a>
              </div>
              <div class="product">
                  <a href="{{ asset('/images/g3.jpg') }}" data-lightbox="example-set"
                      data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                      <figure>
                          <img src="{{ asset('/images/g3.jpg') }}" class="img-responsive" alt="" />
                      </figure>
                  </a>
              </div>
              <div class="product">
                  <a href="{{ asset('/images/g4.jpg') }}" data-lightbox="example-set"
                      data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                      <figure>
                          <img src="{{ asset('/images/g4.jpg') }}" class="img-responsive" alt="" />
                      </figure>
                  </a>
              </div>

            </div>
          </section>

          <section id="content3" class="tab-content text-left">
            <div class="d-grid grid-col-3">

              <div class="product">
                  <a href="{{ asset('/images/g5.jpg') }}" data-lightbox="example-set"
                      data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                      <figure>
                          <img src="{{ asset('/images/g5.jpg') }}" class="img-responsive" alt="" />
                      </figure>
                  </a>
              </div>
              <div class="product">
                  <a href="{{ asset('/images/g6.jpg') }}" data-lightbox="example-set"
                      data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                      <figure>
                          <img src="{{ asset('/images/g6.jpg') }}" class="img-responsive" alt="" />
                      </figure>
                  </a>
              </div>
              <div class="product">
                  <a href="{{ asset('/images/g7.jpg') }}" data-lightbox="example-set"
                      data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                      <figure>
                          <img src="{{ asset('/images/g7.jpg') }}" class="img-responsive" alt="" />
                      </figure>
                  </a>
              </div>

            </div>
          </section>

          <section id="content4" class="tab-content text-left">
            <div class="d-grid grid-col-3">

                <div class="product">
                    <a href="{{ asset('/images/g8.jpg') }}" data-lightbox="example-set"
                        data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                        <figure>
                            <img src="{{ asset('/images/g8.jpg') }}" class="img-responsive" alt="" />
                        </figure>
                    </a>
                </div>
                <div class="product">
                    <a href="{{ asset('/images/g1.jpg') }}" data-lightbox="example-set"
                        data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                        <figure>
                            <img src="{{ asset('/images/g1.jpg') }}" class="img-responsive" alt="" />
                        </figure>
                    </a>
                </div>

            </div>
          </section>

        </div>
      </div>
      <!-- Products4 block -->
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>

    <section class="services-12" id="experience">
      <div class="form-12-content">
        <div class="container">
          <div class="grid grid-column-2 ">
            
            <div class="column1">
              <h3 class="mb-5">Experiências</h3>

              <div class="experience-top">
                <h5>2018 - now</h5>
                <h4>Freelancer</h4>
                <p class="my-3 text-white">
                  No momento trabalho de forma autônoma e presto serviços para empresas
                  ou pessoas por períodos determinados de tempo. Rápido, prático e seguro, 
                  facilidade para o seu negócio.
                </p>
              </div>
            </div>
            
            <div class="column2">
              <h3 class="mb-5">Educação</h3>
              <div class="experience-top">
                <h5>2019 - Now</h5>
                <h4>Bacharelado em Sistemas de Informção, Universidade Unigranrio - RJ</h4>
                <p class="my-3 text-white">

                </p>
              </div>
              <div class="experience-top">
                <h5>2019</h5>
                <h4>Formado em Técnico em Informática, Senac - RJ</h4>
                <p class="my-3 text-white">
                  
                </p>
              </div>
            </div>
              
          </div>
        </div>
      </div>
    </section>

    <!--<section class="testimonials" id="testimonials">
      <div class="customers-6-content py-5">
        <div class="container py-lg-3">
          <div class="heading text-center mx-auto">
            <h3 class="head">What They Says</h3>
            <p class="my-3 head "> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
              Nulla mollis dapibus nunc, ut rhoncus
              turpis sodales quis. Integer sit amet mattis quam.</p>
          </div>
        
          <div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
              <li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#customerhnyCarousel" data-slide-to="1"></li>
                          
            </ol>
            <!-- Carousel items --><!--
            <div class="carousel-inner pb-5">

              <div class="carousel-item active">
                <div class="customer row py-5 mt-3">
                  <div class="col-lg-4 col-md-6">
                    <div class="card">
                    
                      <div class="card-body">
                        <img class="card-img-top img-responsive" src="assets/images/c1.jpg" alt="">
                        <h3 class="card-title mt-2">Henry Nicholas</h3>
                        <p class="sub-title mb-3">Photographer</p>
                        <p class="card-text">  "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"
                        </p>
                      
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 off-testi-2">
                    <div class="card">
                    
                      <div class="card-body">
                        <img class="card-img-top img-responsive" src="assets/images/c2.jpg" alt="">
                        <h3 class="card-title mt-2">Mark Waugh</h3>
                        <p class="sub-title mb-3">Web Designer</p>
                        <p class="card-text">  "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"
                        </p>
                        
                      
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 off-testi">
                    <div class="card">
                      
                      <div class="card-body">
                        <img class="card-img-top img-responsive" src="assets/images/c3.jpg" alt="">
                        <h3 class="card-title mt-2">Sarina Willams</h3>
                        <p class="sub-title mb-3">Graphic Designer</p>
                        <p class="card-text">  "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"
                        </p>
                      
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--.item--><!--

              <div class="carousel-item">
                <div class="customer row py-5 mt-3">
                  <div class="col-lg-4 col-md-6">
                    <div class="card">
                    
                      <div class="card-body">
                        <img class="card-img-top img-responsive" src="assets/images/c2.jpg" alt="">
                        <h3 class="card-title mt-2">Mark Waugh</h3>
                        <p class="sub-title mb-3">Engineer</p>
                        <p class="card-text">  "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"
                        </p>
                      
                      
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 off-testi-2">
                    <div class="card">
                    
                      <div class="card-body">
                        <img class="card-img-top img-responsive" src="assets/images/c3.jpg" alt="">
                        <h3 class="card-title mt-2">Sarina Willams</h3>
                        <p class="sub-title mb-3">Engineer</p>
                        <p class="card-text">  "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"
                        </p>
                      
                        
                      </div>
                    </div>
                    
                    
                  </div>
                  <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 off-testi">
                    <div class="card">
                    
                      <div class="card-body">
                        <img class="card-img-top img-responsive" src="assets/images/c1.jpg" alt="">
                        <h3 class="card-title mt-2">Henry Nicholas</h3>
                        <p class="sub-title mb-3">Engineer</p>
                        <p class="card-text"> "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"
                        </p>
                      
                        
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
              

            </div>
            <!--.carousel-inner--><!--
          </div>
        </div>
      </div>
      <!--//customers --><!--
    </section> -->
    <br>

    <div>
      <a href="https://api.whatsapp.com/send?phone=5521969504498&text=Quero uma informação sobre um serviço." target="_blank"><img  class="whatsapp" src="https://3.bp.blogspot.com/-ckiKOobNJy8/XRIGyySxDII/AAAAAAAACv0/09JFzT4vlcUYHq19lu-pQfWjYq6dyKYzQCLcBGAs/s1600/contatowhats.png" /></a>
    </div>

    <br>
    
@endsection