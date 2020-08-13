@extends('layouts.portfolio')

@section('content')

  <title>JospCode - Serviços</title>

  <section class="bootstrap-header">
    <nav class="navbar navbar-expand-lg navbar-light py-lg-3 py-2">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"> JospCode</a>
        <!-- if logo is image enable this   
        <a class="navbar-brand" href="#index.html">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
        </a> -->
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

  <section class="service-breadcrum">
    <div class="breadcrum-bg">
      <div class="container py-5">
        <p><a href="{{ url('/') }}">Home</a> &nbsp; / &nbsp; Services</p>
      </div>
    </div>
  </section>

  <section class="features-4">
    <!-- /features -->
    <div class="features py-5" id="services">
      <div class="container py-md-3">
        
        <div class="heading text-center mx-auto">
          <h3 class="head">Meus Serviços</h3>
        </div>

        <div class="fea-gd-vv row mt-5 pt-3">

          <div class="float-lt feature-gd col-lg-4 col-md-6">	
            <div class="icon"> <span class="fa fa-desktop" aria-hidden="true"></span></div>
            <div class="icon-info">
              <h5>Website Design</h5>
              <p> O melhor e o mais moderno design gráfico para WebSites.</p>
            </div>
          </div>

          <div class="float-mid feature-gd col-lg-4 col-md-6 mt-md-0 mt-5">	
            <div class="icon"> <span class="fa fa-code" aria-hidden="true"></span></div>
            <div class="icon-info">
              <h5>Software Development</h5>
              <p> Elaboração e implementação de um sistema computacional, transforme a sua necessidade em um produto de mercado.</p>
            </div>
          </div>

          <div class="float-rt feature-gd col-lg-4 col-md-6 mt-lg-0 mt-5">	
            <div class="icon"> <span class="fa fa-mobile" aria-hidden="true"></span></div>
            <div class="icon-info">
              <h5>App Development</h5>
              <p> Desenvolvimento de aplicações e sistemas para dispositivos móveis.</p>
            </div>
          </div>

          <div class="float-mid feature-gd col-lg-4 col-md-6 mt-5">	
            <div class="icon"> <span class="fa fa-cogs" aria-hidden="true"></span></div>
            <div class="icon-info">
              <h5>Infraestrutura de TI</h5>
              <p> Recursos físicos e virtuais que suportam o fluxo, armazenamento, processamento e análise de dados.</p>
            </div>
          </div> 
              
          <div class="float-lt feature-gd col-lg-4 col-md-6 mt-5">	
            <div class="icon"> <span class="fa fa-paint-brush" aria-hidden="true"></span></div>
            <div class="icon-info">
              <h5>Design Gráfico</h5>
              <p> Projetos de comunicação visual, logotipos, panfletos, revistas, banners, anúncios, etc.</p>
            </div> 
          </div>

          <div class="float-mid feature-gd col-lg-4 col-md-6 mt-5">	
            <div class="icon"> <span class="fa fa-bar-chart" aria-hidden="true"></span></div>
            <div class="icon-info">
              <h5>Análise e Modelagem de Dados</h5>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt  </p>
            </div>
          </div> 

          <div class="float-rt feature-gd col-lg-4 col-md-6 mt-5">	
            <div class="icon"> <span class="fa fa-info" aria-hidden="true"></span></div>
            <div class="icon-info">
              <h5>Other Catagory</h5>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt  </p>
            </div>
          </div>

        </div>

      </div>
    </div>
    <!-- //features -->
  </section>

  <section class="pricing-7" id="pricing">
    <div class="pricing-7_sur py-5">
      <div class="container py-md-3">
        <div class="heading text-center mx-auto">
          <h3 class="head">Confira nossos pacotes</h3>
          <p class="my-3 head">
            Para mais informações entrar em contato.
          </p>
        </div>
        <div class="row pricing-7-gd-top pt-3 mt-5">
          <div class="col-lg-4 col-md-6 pricing-7-gd-left">
            <div class="pricing-7  pric-7-1">
              <h6>Simples</h6>
              
              <div class="pricing-7-bottom">
                <div class="pricing-7-bottom-bottom">
                  <ul class="links">
                    <li class="tick-info">
                      1 WebSite
                    </li>
                    <li class="tick-info">
                      Suporte e Atualização
                    </li>
                    <li class="tick-info">
                      Hospedagem
                    </li>
                    <li class="tick-info">
                      Site não incluso PHP
                    </li>
                  </ul>
                  <h3 class="title-sub mt-4">R$ 99,99</h3>
                </div>
                <div class="buy-button text-center mt-4">
                  <a href="contact.html" class="btn btn-secondary btn-theme5">
                    <div class="anim"></div><span>Get Started</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-md-0 mt-4 pricing-7-gd-left active">
            <div class="pricing-7 pric-7 active">
              <h6 class="active">Avançado</h6>
            
              <div class="pricing-7-bottom">
                <div class="pricing-7-bottom-bottom">
                  <ul class="links">
                    <li class="tick-info">
                      Lifetime Usage
                    </li>
                    <li class="tick-info">
                      3 Months Support & Updates
                    </li>
                    <li class="tick-info">
                      1 Website License
                    </li>
                    <li class="tick-info">
                      Quickstart Included
                    </li>
                    <li class="tick-info">
                      Access to Templates & Extensions
                    </li>
                    <li class="tick-info">
                      Branding/Copyright Removal
                    </li>
                  </ul>
                  <h3 class="title-sub mt-4 active">$299.00</h3>
                </div>
                <div class="buy-button text-center mt-4">
                  <a href="contact.html" class="btn btn-secondary btn-theme5 active">
                    <div class="anim"></div><span>Get Started</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 pricing-7-gd-left">
            <div class="pricing-7 pric-7-2">
              <h6>Intermediário</h6>
              
              <div class="pricing-7-bottom">
                <div class="pricing-7-bottom-bottom">
                  <ul class="links">
                    <li class="tick-info">
                      Lifetime Usage
                    </li>
                    <li class="tick-info">
                      3 Months Support & Updates
                    </li>
                    <li class="tick-info">
                      1 Website License
                    </li>
                    <li class="tick-info">
                      Quickstart Included
                    </li>
                    <li class="tick-info">
                      Access to Templates & Extensions
                    </li>
                    <li class="tick-info">
                      Branding/Copyright Removal
                    </li>
                  </ul>
                  <h3 class="title-sub mt-4">$399.00</h3>
                </div>
                <div class="buy-button text-center mt-4">
                  <a href="contact.html" class="btn btn-secondary btn-theme5">
                    <div class="anim"></div><span>Get Started</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection