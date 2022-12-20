@extends('template')
@section('title','Ajout de demande')
@section('body')
              <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up" align="center">
          <div class="point">
            .
          </div>
          <div class="section-title">
            <h1 class="point">.</h1>
            <p>Formulaire d'Ajout d'une Demande</p>
          </div>

          <form action="{{ route('demande.store') }}" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            @csrf
            <div class="col-lg-6 form-group mt-3">
              <textarea class="form-control @error('objet') is-invalid @enderror" name="objet" rows="5" placeholder="Objet de la Demande">{{ old('objet') }}</textarea>
              <div class="validate"></div>
                                @error('objet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
                <input id="statut" type="hidden" value="en attente" class="form-control @error('statut') is-invalid @enderror" name="statut" value="{{ old('statut') }}">
                                @error('statut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
            </div>
            <div class="row">
                <!--div class="col-lg-9 col-md-12 form-group mt-3">
                  <div class=""><button type="submit">Annuler</button></div>
                </!--div-->
                <div class="">
                  <div class=""><button type="submit">Ajouter</button></div>
                </div>
           </div>
          </form>
        </div>
        <style>
          .point{
              color: black;
          }
        </style>

    </section><!-- End Book A Table Section -->
@endsection
