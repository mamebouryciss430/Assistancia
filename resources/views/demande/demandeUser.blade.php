@extends('template')
@section('body')
<section id="book-a-table" class="book-a-table">
<div class="row">
    <div class="col-12">
        <div class="card">
          <div class="card-body">
            <blockquote class="blockquote mb-0">
                <h1>.</h1>
                <h1>.</h1>
              <p>Liste des demandes</p>
            </blockquote>
            <div class="table-responsive-sm">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Objet</th>
                            <th scope="col">Date Création</th>
                            <th scope="col">Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($demandes as $demande)
                        <tr class="">
                            <td scope="row">{{$loop->index+1}}</td>
                            <td>{{ $demande->objet }}</td>
                            <td>{{ $demande->created_at }}</td>
                            <td>{{ $demande->statut }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a href="{{ route('demande.create') }}" class="btn btn-warning"">Nouvelle Demande</a>
          </div>
        </div>
    </div>
</div>
</section>
@endsection
