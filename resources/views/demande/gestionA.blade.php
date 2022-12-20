<style>
    strong{
       color: rgb(255, 162, 0);
    }
</style>

@extends('template')
@section('title','Admin et demandes')
@section('body')
        <!-- ======= Specials Section ======= -->
   <section id="specials" class="specials">
       <div class="container" data-aos="fade-up">

         <div class="section-title">
           <h1>.</h1>
           <p>Les Demandes</p>
         </div>

         <div class="row" data-aos="fade-up" data-aos-delay="100">
           <div class="col-lg-3">
             <ul class="nav nav-tabs flex-column">
               <li class="nav-item">
                 <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">mon Profil</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Liste de mes clients </a>
               </li>
               <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Liste de mes administrateurs </a>
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
                                   <th scope="col">Nom</th>
                                   <th scope="col">Prenom</th>
                                   <th scope="col">Action</th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($recuperation_client as $recuperation_client)


                                    <tr>
                                        <td scope="row" style="color: white">{{$loop->index+1}}</td>
                                        <td style="color: white">{{ $recuperation_client->nom }}</td>
                                        <td style="color: white">{{ $recuperation_client->prenom }}</td>
                                        <td>


                                            <form action="/update/{{$recuperation_client->id}}" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">

                                               {{ csrf_field() }}
                                                    <div class="col-lg-4 col-md-6 form-group mt-3">
                                                        <input id="privilege" type="hidden" value="admin" class="form-control @error('privilege') is-invalid @enderror" name="privilege">
                                                                        @error('privilege')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" style="color: rgb(236, 161, 22)">Mettre Admin</button>
                                                    </div>
                                            </form>

                                        </td>

                               @endforeach
                           </tbody>
                       </table>
                    </div>

                </div></div>



               <div class="tab-pane" id="tab-3">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">N°</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prenom</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($recuperation_admin as $recuperation_admin)


                                <tr>
                                    <td scope="row" style="color: white">{{$loop->index+1}}</td>
                                    <td style="color: white">{{ $recuperation_admin->nom }}</td>
                                    <td style="color: white">{{ $recuperation_admin->prenom }}</td>
                                    {{-- <td>
                                        <form class="d-inline" action="/updatee/{{$recuperation_admin->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </form>

                                    </td> --}}
                                </tr>

                           @endforeach
                            </tbody>
                        </table>
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
       </style>
     </section><!-- End Specials Section -->
@endsection
