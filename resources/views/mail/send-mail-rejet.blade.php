<x-mail::message>
# Infos du site Assistancia
Cher client,
Votre demande ci-dessous a été rejetée avec les élèments suivants:
*Objet:* __{{$demande->objet}}__
*Date Création:* __{{$demande->created_at}}__
*Motif de rejet:* __{{$demande->motif}}__
@component('mail::button', ['url' => route('demande.create')])
Vous pouvez réesssayer ici
@endcomponent
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
