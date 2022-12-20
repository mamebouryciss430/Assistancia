<x-mail::message>
# Infos du site Assistancia
Cher client,
Votre demande ci-dessous a été traitée avec succés:
*Objet:* __{{$demande->objet}}__
*Date Création:* __{{$demande->created_at}}__
*Statut:* __{{$demande->statut}}__
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
