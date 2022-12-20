<x-mail::message>
    # Infos du site Assistancia
    Cher administrateur,
    La demande dont
    Objet:{{$demande->objet}}
    Date Création:{{$demande->created_at}}
    Que vous avez commence a traiter n'a pas ete prise en charge pendant plusieurs jours.
    Merci de veiller a son traitement!
    @component('mail::button', ['url' => route('demande.show',compact('demande'))])
    Afficher mes demandes
    @endcomponent

Thanks,<br>

</x-mail::message>
