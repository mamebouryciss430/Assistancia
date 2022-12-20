<x-mail::message>
    # Infos du site Assistancia
    Cher administrateur,
    La demande dont :
    Objet:{{$demande->objet}}
    Date Création:{{$demande->created_at}}
    n'a pas ete prise en charge par aucun administrateur pendant plusieurs jours.
    Merci de veiller a son traitement!
    @component('mail::button', ['url' => route('demande.show',compact('demande'))])
    Afficher la demande
    @endcomponent

Thanks,<br>

</x-mail::message>
