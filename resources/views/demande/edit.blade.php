@extends('template')
@section('title','Editer demande')
@section('body')

<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up" align="center">
        <div class="section-title">
            <h1 class="point">.</h1>
            <h1 class="point">.</h1>
            <p>Formulaire de modification</p>
        </div>

      <form action="{{ route('demande.update', compact('demande')) }}" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
        @method('put')
        @csrf

            <div class="col-lg-4 col-md-6 form-group">
                <label for="objet" class="form-label">Objet</label>
                <textarea type="text" class="form-control @error('objet') is-invalid @enderror"
                    name="objet" id="objet" aria-describedby="helpObjetId"
                    placeholder="Objet de la demande">{{ old('objet') ?? $demande->objet }}</textarea>
                @error('objet')
                    <small id="helpObjetId" class="form-text text-muted">{{ $message }}</small>
                @enderror
            </div>
             <div class="col-lg-4 col-md-6 form-group mt-3">
                <input id="statut" type="hidden" class="form-control @error('statut') is-invalid @enderror" name="statut" value="en cours de traitement">
                                @error('statut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
           <div class="col-lg-4 col-md-6 form-group mt-3">
                <input id="id_admin" type="hidden" value="{{ Auth::user()->id }}" class="form-control @error('id_admin') is-invalid @enderror" name="id_admin">

                                @error('id_admin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
            <div class="col-12">
                <button type="submit" class="btn btn-warning">En cours traitement</button>
            </div>
      </form>
    </div>
    <div class="point">
        .
      </div>
      <div class="point">
        .
      </div>
      <div class="point">
        .
      </div>
      <div class="point">
        .
      </div>
      <style>
        .point{
            color: black;
        }
      </style>

</section><!-- End Book A Table Section -->

@endsection
