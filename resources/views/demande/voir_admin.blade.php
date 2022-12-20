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
                 <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Profil</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Demandes en Attente</a>
               </li>
               <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Demandes en cours de traitement</a>
              </li>
               <li class="nav-item">
                 <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Demandes Rejetées</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Demande Traitées</a>
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
                                   {{--<th scope="col">Nom</th>--}}
                                   <th scope="col">Demande</th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($demanda33 as $demande)


                                    <tr>
                                        <td scope="row" style="color: white">{{$loop->index+1}}</td>
                                        <td style="color: white">{{ $demande->objet }}</td>
                                        {{--<td>{{ $demande->created_at }}</td>--}}
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
                                   {{--<th scope="col">Nom</th>--}}
                                   <th scope="col">Demande</th>
                                   <th scope="col">Administrateur</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($demanda11   as $demande)
                              @foreach ($les_users as $use )
                              <tr>
                                <td scope="row" style="color: white">{{$loop->index+1}}</td>
                                <td style="color: white">{{ $demande->objet }}</td>
                                {{--<td>{{ $demande->created_at }}</td>--}}
                                <td style="color: white">{{ $use->prenom }} {{ $use->nom }} </td>
                              </tr>
                              @endforeach
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="assets/img/d4.jpg" alt="" class="img-fluid">
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
                                {{--<th scope="col">Nom</th>--}}
                                <th scope="col">Demande</th>
                                <th scope="col">Administrateur</th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($demanda22 as $demande)
                               @foreach ($les_users as $use )
                              <tr>
                                <td scope="row" style="color: white">{{$loop->index+1}}</td>
                                <td style="color: white">{{ $demande->objet }}</td>
                                {{--<td>{{ $demande->created_at }}</td>--}}
                                <td style="color: white">{{ $use->prenom }} {{ $use->nom }} </td>
                            </tr>
                              @endforeach
                               @endforeach
                           </tbody>
                       </table>
                   </div>
                   <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/d1.jpg" alt="" class="img-fluid">
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
                                {{--<th scope="col">Nom</th>--}}
                                <th scope="col">Demande</th>
                                <th scope="col">Administrateur</th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($demanda44 as $demande)
                                @foreach ($les_users as $use )
                              <tr>
                                <td scope="row" style="color: white">{{$loop->index+1}}</td>
                                <td style="color: white">{{ $demande->objet }}</td>
                                {{--<td>{{ $demande->created_at }}</td>--}}
                                <td style="color: white">{{ $use->prenom }} {{ $use->nom }} </td>
                            </tr>
                              @endforeach
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
       <style>
           tr{
               color: white;
           }
       </style>
     </section><!-- End Specials Section -->
@endsection
