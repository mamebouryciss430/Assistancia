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
                            <th scope="col">Date</th>
                            <th scope="col">Statut</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($demandes as $demande)
                        <tr class="">
                            <td scope="row">{{$loop->index+1}}</td>
                            <td>{{ $demande->objet }}</td>
                            <td>{{ $demande->created_at }}</td>
                            <td>{{ $demande->statut }}</td>
                            <td>
                                <a href="{{ route('demande.show',compact('demande')) }}" class="btn btn-primary">Voir</a>
                                <a href="{{ route('demande.edit',compact('demande')) }}" class="btn btn-warning">Editer</a>
                                <form class="d-inline" action="{{ route('demande.destroy', compact('demande')) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a href="{{ route('demande.create') }}" class="btn btn-primary">Nouvelle Demande</a>
          </div>
        </div>
    </div>
</div>
</section>
@endsection
