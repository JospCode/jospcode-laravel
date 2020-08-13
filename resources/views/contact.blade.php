@extends('layouts.portfolio')

@section('content')

  <title>JospCode - Contact</title>

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

  <section class="contact-breadcrum">
    <div class="breadcrum-bg">
      <div class="container py-5">
        <p><a href="{{ url('/') }}">Home</a> &nbsp; / &nbsp; Contact</p>
      </div>
    </div>
  </section>

  <!-- contact -->
  <section class="contacts-12" id="contact">
    <div class="contact-top pt-5">
      <div class="container py-md-3">

        <div class="row cont-main-top">
          <!-- contact form -->

          <div class="contacts12-main col-lg-6 "> 
            <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="main-input">
                <div class="top-inputs d-grid">
                  <input type="text" placeholder="Name" name="name" id="name" required="">
                </div>
                
                <input type="email" name="email" placeholder="Email" id="email" required="">
                
                <textarea placeholder="Message" name="message" id="message" required=""></textarea>
                
                <div class="text-right">
                  <button type="submit" class="btn btn-theme2">Submit Now</button>
                </div>
            </form>
          </div>
          <!-- //contact form -->
          <!-- contact address -->
          <div class="contact col-lg-6 mt-lg-0 mt-5">

            <div class="cont-subs">
              <div class="cont-add">
                  <div class="cont-add-lft">
                    <span class="fa fa-map-marker" aria-hidden="true"></span>
                  </div>
                  <div class="cont-add-rgt">
                  <p class="contact-text-sub">Duque de Caxias, Rio de Janeiro - RJ</p>
              </div>
            </div>

            <div class="cont-add add-2">
              <div class="cont-add-lft">
                <span class="fa fa-envelope" aria-hidden="true"></span>
              </div> 
              <div class="cont-add-rgt">
                <a href="mailto:jonatas.silvapereira.jt@gmail.com">
                  <p class="contact-text-sub">jonatas.silvapereira.jt@gmail.com</p>
                </a>
              </div>     
            </div>
            
            <div class="cont-add">
              <div class="cont-add-lft">
                <span class="fa fa-phone" aria-hidden="true"></span>
              </div>
              <div class="cont-add-rgt">
                <a href="tel:+55-21-9-6950-4498">
                  <p class="contact-text-sub">+55 21 96950-4498</p>
                </a>
              </div>
            </div>

            <div class="cont-add add-3">
              <div class="cont-add-lft">
                <span class="fa fa-file-pdf-o" aria-hidden="true"></span>
              </div>
              <div class="cont-add-rgt">
                <a href="assets/documents/JÔNATAS SILVA PEREIRA.pdf" download>
                  <p class="contact-text-sub">Download Currículo</p>
                  <iframe src="{{ asset('/documents/JÔNATAS SILVA PEREIRA.pdf') }}" width="450" height="300" style="border: none;"></iframe>
                </a>
              </div>
            </div>

          </div>

        </div>
        <!-- //contact address -->
                 
      </div>
    </div>
      
    <!-- map -->
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1893240.7112501042!2d-44.0444245133345!3d-22.05970109929065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x981894cae28ac3%3A0x349c31ac10583d0!2sRio%20de%20Janeiro!5e0!3m2!1spt-BR!2sbr!4v1591480028988!5m2!1spt-BR!2sbr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- //map -->

  </section>
  <!-- //contact -->
 
@endsection