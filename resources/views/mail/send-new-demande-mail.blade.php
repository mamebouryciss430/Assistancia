<x-mail::message>
# Infos du site Assistancia
Cher administrateur,
une nouvelle demande a été effectuée avec les élèments suivants:
*Objet:* __{{$demande->objet}}__
*Date Création:* __{{$demande->created_at}}__
@component('mail::button', ['url' => route('demande.show',compact('demande'))])
Afficher la demande
@endcomponent
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
