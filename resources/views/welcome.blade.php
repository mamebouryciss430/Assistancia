@extends('template')
@section('title','Accueil')
@section('body')
   <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Bienvenu Chez <span>Assistancia </span></h1>
          <h2>Pour un meilleur suivi de vos demandes</h2>

          <div class="btns">
            <!--a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</!--a-->
            <a href="#contact" class="btn-book animated fadeInUp scrollto">Contactez nous</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=G6-ZN_JHLdo&ab_channel=AmdyMoustapha" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contactez Nous</p>
      </div>
    </div>

    <div data-aos="fade-up">
      <iframe style="border:0; width: 100%; height: 350px;" src="< src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3857.5619291273592!2d-16.964931685677712!3d14.793687676282847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec1be4b9a3e6963%3A0x49745eeebf8971a4!2sUniversit%C3%A9%20Iba%20Der%20THIAM%20de%20Thi%C3%A8s!5e0!3m2!1sfr!2ssn!4v1671465281586!5m2!1sfr!2ssn" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Adresse:</h4>
              <p>Thiès Nord</p>
            </div>

            <div class="open-hours">
              <i class="bi bi-clock"></i>
              <h4>Heures d'Ouverture:</h4>
              <p>
                7j/7<br>
                24h/24
              </p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>mamebouryciss430@gmail.com</p>
              <p>Fatimatraore35@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Téléphone:</h4>
              <p>(+221) ...</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-8 mt-lg-0">

          <img src={{ asset("assets/img/assistancia.jpeg") }} alt="" height="500" width="900">

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

@endsection
