<style>
     strong{
        color: rgb(255, 162, 0);
     }
</style>
@extends('template')
@section('title','Mes Demandes')
@section('body')
         <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h1 class="point">.</h1>
            <p>Mes Demandes</p>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Profil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Demandes en Attente</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Demandes Rejetées</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Demandes en cours de Traitement</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Demandes Traitées</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <div class="row">
                    <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <ul>
                                <li>Prenom : <strong>{{ Auth::user()->prenom }}</strong></li>
                                <li>Nom : <strong> {{ Auth::user()->nom }}</strong></li>
                                <li>Statut : <strong> {{ Auth::user()->privilege }}</strong></li>
                                <li>Email : <strong> {{ Auth::user()->email }}</strong></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                          <img src="assets/img/admin.png" alt="" class="img-fluid">
                        </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-2">
                   <div class="row">
                     <div class="col-lg-8 details order-2 order-lg-1">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">N°</th>
                                    <th scope="col">Demande</th>
                                    <th scope="col">Statut</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($demanda1 as $demande)
                              <tr>
                                  <td scope="row" style="color: white">{{$loop->index+1}}</td>
                                  <td style="color: white">{{ $demande->objet }}</td>
                                  <td style="color: white">{{ $demande->statut }}</td>
                                  <td>
                                    <a href="{{ route('demande.show',compact('demande'))}}" style="color: wheat">traiter la demande</a>
                                  </td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                     </div>
                     <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="assets/img/d2.jpg" alt="" class="img-fluid">
                      </div>
                   </div>
                </div>
                <div class="tab-pane" id="tab-3">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">N°</th>
                                    <th scope="col">Demande</th>
                                    <th scope="col">Statut</th>
                                    <th scope="col">Motif</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($demanda2 as $demande)
                              <tr>
                                  <td scope="row" style="color: white">{{$loop->index+1}}</td>
                                  <td style="color: white">{{ $demande->objet }}</td>

                                  <td style="color: white">{{ $demande->statut }}</td>
                                  <td style="color: white">{{ $demande->motif }}</td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/d1.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-4">
                    <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">N°</th>
                                        <th scope="col">Demande</th>
                                        <th scope="col">Statut</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($demanda3 as $demande)
                                    <tr>
                                        <td scope="row" style="color: white">{{$loop->index+1}}</td>
                                        <td style="color: white">{{ $demande->objet }}</td>
                                        <td style="color: white">{{ $demande->statut }}</td>
                                        <td>
                                           <form action="{{ route('demandeTraitee',compact('demande')) }}" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                                                @method('post')
                                                @csrf
                                                    <div class="col-lg-4 col-md-6 form-group mt-3">
                                                        <input id="statut" type="hidden" value="traitée" class="form-control @error('statut') is-invalid @enderror" name="statut">
                                                                        @error('statut')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-warning">Traitement Terminé</button>
                                                    </div>
                                            </form>

                                        </td>
                                   </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="assets/img/d4.jpg" alt="" class="img-fluid">
                        </div>
                  </div>

                </div>

                <div class="tab-pane" id="tab-5">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">N°</th>
                                    <th scope="col">Demande</th>
                                    <th scope="col">Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($demanda4 as $demande)
                              <tr>
                                  <td scope="row" style="color: white">{{$loop->index+1}}</td>
                                  <td style="color: white">{{ $demande->objet }}</td>

                                  <td style="color: white">{{ $demande->statut }}</td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/d3.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

              </div>
            </div>
          </div>

        </div>
        <style>
          tr{
              color: white;
          }
         .point{
            color: black;
         }
      </style>
      </section><!-- End Specials Section -->
@endsection
