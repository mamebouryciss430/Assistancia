@extends('template')
@section('title','Details de la demande')
@section('body')
    <div class="container" data-aos="fade-up" align="center">
         <br>
         <br>
         <br>
         <br>
          <div class="section-title">
            <br>
            <br>
            <p>Details de la  Demande</p>
          </div>
        <h4 class="">Objet: {{ $demande->objet }}</h4>

        <p class="">Statut: {{ $demande->statut }}</p>
        <p class="">Date: {{ $demande->created_at }}</p>
        <div class="con">
            <style>
                .con{
                    display: flex;
                    justify-content: center;
                    gap: 10px;
                }
            </style>
            <div>
                <a href="{{ route('refus',compact('demande')) }}" class="btn btn-danger">Rejeter</a>
            </div>

            <div>
            <a href="{{ route('demande.edit',compact('demande')) }}" class="btn btn-warning">Traiter</a>
            </div>
        </div>
       <br>
       <br>
       <br>
       <br>
       <br>
    </div>

@endsection




