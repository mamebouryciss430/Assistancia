<?php
use App\Models\Demande;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailPourDemandeEnAttente;
use App\Mail\SendMailPourDemandeEnCours;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\DemandeController;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('rappel:emailEnAttente',function(  ){
    $demandes = Demande::all()->where('statut','en attente');
       foreach($demandes as $demande)
       {
       $today = date("d");
       $date_limite=$demande->created_at->format(date("d")+2,  date("m"),  date("Y"));
       if($today>=$date_limite)
       {//quand la date limite est epuise
           $this->comment("$date_limite, $today");
           $emails=User::all()->where('privilege','admin');
           foreach($emails as $email):
               Mail::to($email->email)->send(new SendMailPourDemandeEnAttente($demande));
           endforeach;
       }
       }
     }
       )->purpose("cette demande est sensee servir de rappel par envoi de mail si le sejour devient long");


       Artisan::command('rappel:emailEnCours',function(  ){
        $demandes = Demande::all()->where('statut','en cours de traitement');
           foreach($demandes as $demande)
           {
           $today = date("d");
           $date_limite=$demande->created_at->format(date("d")+2,  date("m"),  date("Y"));
           if($today>=$date_limite)
           {//quand la date limite est epuise
               $this->comment("$date_limite, $today");
               $emails=User::all()->where('id',$demande->id_admin);
               foreach($emails as $email):
                   Mail::to($email->email)->send(new SendMailPourDemandeEnCours($demande));
               endforeach;
           }
           }
         }
           )->purpose("cette demande est sensee servir de rappel par envoi de mail a ladmin responsabl si le sejour devient long");



