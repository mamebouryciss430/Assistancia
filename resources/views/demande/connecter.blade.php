@extends('template')
@section('title','Connexion')
@section('body')
              <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">
          <div>
            .
          </div>
          <div class="section-title">
            <h1>.</h1>
            <h3></h3>
            <p>Formulaire de Connexion</p>
          </div>

          <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-9 col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
            </div>
            <div class="col-lg-9 col-md-6 form-group mt-3">
                <input type="text" name="mdp" class="form-control" id="mdp" placeholder="Votre Mot de Passe">
                <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">se connecter</button></div>
          </form>

        </div>
      </section><!-- End Book A Table Section -->
@endsection
