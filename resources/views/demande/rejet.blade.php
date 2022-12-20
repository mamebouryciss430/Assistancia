@extends('template')
@section('title','Motif  de la demande')
@section('body')
    <div class="container" data-aos="fade-up" align="center">
         <br>
         <br>
         <br>
         <br>
          <div class="section-title">
            <br>
            <br>
            <p>Motif rejet de la  Demande</p>
          </div>

        <div>
            <form action="{{ route('demandeRejetee',compact('demande')) }}" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">

                @method('post')
                @csrf
                   <label for=""><h4 class="">Objet: {{ $demande->objet }}</h4></label>
                    <div class="col-lg-4 col-md-6 form-group mt-3" style="display: none">
                        <input id="statut" type="hidden" value="rejetée" class="form-control @error('statut') is-invalid @enderror" name="statut">
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
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <textarea class="form-control @error('motif') is-invalid @enderror" name="motif" rows="5" placeholder="Motif de rejet de la Demande">{{ old('objet') }}</textarea>
                        <div class="validate"></div>
                                          @error('motif')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                    </div>
                    <br>
                    <br>

                    <div>
                        <button type="submit" class="btn btn-danger">Confirmer Rejet</button>
                    </div>
            </form>
        </div>
       <br>
       <br>
       <br>
       <br>
       <br>
    </div>

@endsection




