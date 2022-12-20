<?php

namespace App\Http\Controllers;
use App\Mail\SendMailConfirmation;
use App\Mail\SendMailRejet;
use App\Mail\SendNewDemandeMail;
use App\Models\Demande;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demandeT= Demande::all()->where('statut','traité');
        $admin=User::all()->where('privilege','admin');
        return view('demande.admindemande',compact('demandeT','admin'));
    }

    public function demandeUser()
    {
        $demandes = Demande::all()->where('user_id', Auth::user()->id );

        return view('demande.demandeUser',compact('demandes'));
    }

    public function demandeAdmin()
    {
        $demanda1= Demande::all()->where('statut','en attente');
        $demanda2= Demande::all()->where('id_admin', Auth::user()->id )->where('statut','rejetée');
        $demanda3= Demande::all()->where('id_admin', Auth::user()->id )->where('statut','en cours de traitement');
        $demanda4= Demande::all()->where('id_admin', Auth::user()->id )->where('statut','traitée');

        return view('demande.demandeAdmin',compact('demanda1','demanda2','demanda3','demanda4'));
    }

    public function demandeTraitee(Request $request,Demande $demande){

        $demande->updateOrFail($request->all());
        $mail=User::all()->where('id',$demande->user_id);
        foreach($mail as $email):
            Mail::to($email->email)->send(new SendMailConfirmation($demande));
        endforeach;
        return redirect()->route('demandeAdmin');
    }

    public function Responsabiliser_user(Request $request, $id){
        $user = User::all();


        $gestion = $request->input('privilege');

        DB::update('update users set privilege = ? where id = ?', [$gestion,$id]);
        return redirect()->route('gestionA');
    }

    public function rejet(Demande $demande){
        return view('demande.rejet',compact('demande'));
    }

    public function demandeRejetee(Request $request,Demande $demande)
    {
        $demande->updateOrFail($request->all());
        $mail=User::all()->where('id',$demande->user_id);
        foreach($mail as $email):
            Mail::to($email->email)->send(new SendMailRejet($demande));
        endforeach;
        return redirect()->route('demandeAdmin');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demande.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'objet'=>'required|unique:demandes,objet',
            'statut'=>'required',

        ]);
        $demande = new Demande($request->all());
        $demande->statut="en attente";
       // $demande->id_admin="?";
        $demande->user_id=Auth::user()->id;
        $demande->saveOrFail();
        $emails=User::all()->where('privilege','admin');
        foreach($emails as $email):
        Mail::to($email->email)->send(new SendNewDemandeMail($demande));
        endforeach;
        return redirect()->route('demandeUser');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function show(Demande $demande)
    {
        return view('demande.show',compact('demande'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function edit(Demande $demande)
    {
         return view('demande.edit',compact('demande'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demande $demande)
    {
        $request->validate([
           'objet'=>'required|unique:demandes,objet,'.$demande->id,
           'statut'=>'required'
        ]);
        $demande->updateOrFail($request->all());
        return redirect()->route('demandeAdmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demande $demande)
    {
        $demande->deleteOrFail();
        return redirect()->route('demande.index');
    }

    public function voir_admin(){
        $demanda11= Demande::all()->where('statut','en cours de traitement');
        $demanda22= Demande::all()->where('statut','rejetée');
        $demanda33= Demande::all()->where('statut','en attente');
        $demanda44= Demande::all()->where('statut','traitée');
        $demande=Demande::all()->whereNotNull('id_admin');
        foreach ($demande as $demande) {
            $dollar=$demande->id_admin;
            $les_users=User::all()->where('id',$dollar );
        }
        if(isset($les_users)){
            return view('demande.voir_admin',compact('demanda11','demanda22','demanda33','demanda44','les_users'));
        }
        else{
            $les_users=[];
            return view('demande.voir_admin',compact('demanda11','demanda22','demanda33','demanda44','les_users'));
        }
    }

    public function gestionA(){

        $recuperation_client = User::all()->where('privilege','user');
        $recuperation_admin = User::all()->where('privilege','admin');
        return view('demande.gestionA',compact('recuperation_client','recuperation_admin'));
    }


}
