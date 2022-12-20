function transport1()
{
    const a = "vous voulez acheter des tickets?->taper 1 \n  Vous voulez faire un abonnement mensuel?->taper2 \n une autre numero pour quitter\n ";
    a1=prompt(a);
    if(a1==1){
        const b="un ticket vaut 50francs\n vous voulez acheter un certain nombre de tickets ? -> taper 1\n autre numero pour quitter";
        b1=prompt(b);
        if(b1==1)
        {
            const c1="combien de tickets ?";
            c11=prompt(c1);
            c22=c11*50;
            alert("cela vous revient :"+c22+"francs");
        }
        
    }
    else
    if(a1==2)
    {
        a2=50*60;
        alert("un abonnement mensuel pour un aller-retour vous coutera: "+a2+"F");
    }
    else alert("erreur!!!");
}
function transport2 ()
{
    const a = "Vous souhaitez effectuer quel trajet ?\n Site VCN -> hotel du rain (taper 1)\n hotel du rail -> Site VCN (taper 2)\n Un autre numero pour quitter\n";
    a1=prompt(a);
    if(a1==1 || a1==2)
    {
        alert("Le Bus fera environ 30min de trajet sur 10km ")
    }
}
function menujour()
{
    const a = "Le menu de Quel jour ?\n1-Lundi\n2-Mardi\n3-Mercredi\n4-Jeudi\n5-Vendredi\n6-Samedi\n7-Dimache\nautre pour quitter";
    const b=prompt(a);
        if(b==1)
            {const aa="1-Dejeuner \n2-Diner \n autre pour quitter ";
            bb=prompt(aa);
            if(bb==1) alert("12h-14h: Thebouyapp garnie aux niebes");
            else if(bb==2) alert("19h-21h: Saute de boeuf aux lentilles");
            else alert("chosir entre 1 et 2!!!");
           }
        else if(b==2){
            const aa="1-Dejeuner \n2-Diner \n autre pour quitter ";
            bb=prompt(aa);
            if(bb==1) alert("12h-14h: Yassa Poisson au citront vert");
            else if(bb==2) alert("19h-21h: Corne Boeuf a la mayonnaise ");
            else alert("chosir entre 1 et 2!!!");
            }
           else  if(b==3){
            const aa="1-Dejeuner \n2-Diner \n autre pour quitter ";
            bb=prompt(aa);
            if(bb==1) alert("12h-14h: Mafe ou Mbahal");
            else if(bb==2) alert("19h-21h: Saute de boeuf aux vermissels");
            else alert("chosir entre 1 et 2!!!");
            
            }
            else if(b==4){
            const aa="1-Dejeuner \n2-Diner \n autre pour quitter ";
            bb=prompt(aa);
            if(bb==1) alert("12h-14h: Paella    ");
            else if(bb==2) alert("19h-21h: Poissons, frites, oeuf dur");
            else alert("chosir entre 1 et 2!!!");
            }

            else if(b==5){
            const aa="1-Dejeuner \n2-Diner \n autre pour quitter ";
            bb=prompt(aa);
            if(bb==1) alert("12h-14h: ThebouDieune a la tomate");
            else if(bb==2) alert("19h-21h: Couscous ou thiere");
            else alert("chosir entre 1 et 2!!!");
            }

            else if(b==6){
            const aa="1-Dejeuner \n2-Diner \n autre pour quitter ";
            bb=prompt(aa);
            if(bb==1) alert("12h-14h: Thebouyapp");
            else if(bb==2) alert("19h-21h: POulet Roti , frites");
            else alert("chosir entre 1 et 2!!!");
            
}
            else if(b==7) {
            const aa="1-Dejeuner \n2-Diner \n autre pour quitter ";
            bb=prompt(aa);
            if(bb==1) alert("12h-14h: Mbahalou Saloum");
            else if(bb==2) alert("19h-21h: Boeuf aux coquiettes");
            else alert("chosir entre 1 et 2!!!");
            }
            else alert("choisir un jour de la semaine!");
    }
    function ici()
{
    const a = "Que souhaitez vous cherchez?\nune salle de classe(Choisissez loption 1)\nUne chambre(Choisissez loption 2)\n"
    a1 = prompt(a);
    if(a1==1 )
    {
        const b="vous voulez cherchez une salle de classe de luniversite\n veuillez reseigner la filiere correspondante dabord\n pour SEG(taper 1)\n pour LEA(taper 2 )\n pour TH(taper 3)\n pour LGI (taper 4)\n pour LMI(taper 5)\n pour LSEE(taper 6)\n pour LPC (taper 7)\n"
        b1=prompt(b);
        if(b1==1 || b1==2 || b1==3 || b1==4 || b1==5){
            const c = "entrer le numero de salle\n";
            c1=prompt(c);
            if(c1>6) alert("la salle que vous recherchez nexiste pas ");
            else alert("salle bien presente");
        }
        else alert("erreur ");
    }
    else if (a1==2)
    {
        const bb="vous voulez verifier une chambre dans le pavillon A (taper 1) ou dans le pavillon B (taper 2)";
        bb1=prompt(bb);
        if (bb1== 1 || bb1 ==2)
        {
            const cc="entrer le numero de chambre";
            cc1=prompt(cc);
            if(cc1>53)
            {
                alert("les chambres sont au nombre de 53 \n le numero saisi est introuvable");

            }
            else {
                alert("chambre presente ");
            }
        }
        else alert("les pavillons sont au nmbre de 2 ");
    }
    else
    alert("option non disponible!");


}
function menuticket()
{
    const a = "Voulez vous acheter des ticket \n 1-Petit dejeuner? \n 2-Dejeuner/Diner? \n Autre numero pour quitter!";
    aa=prompt(a);
    if (aa==1)
    {
        const b = "un ticket (petit dejeuner) coute 50francs\nCombien voulez vous en acheter?";
        bb=prompt(b);
        bbb=50*bb;
        const bbbb="Cela vous revient a:"+bbb+"\n"+" Voulez vous acheter par la meme occasion des tickets dej\n1-Oui\n2-Non\nAutre pour quitter";
        bbbbb=prompt(bbbb);
        if(bbbbb==1)
        {
            const c ="un ticket (dejeuner) coute 100francs\nCombien voulez vous en acheter?";
        cc=prompt(c);
        ccc=100*cc;
        alert("Cela vous revient a : "+ccc+"pour les ticket dej \nAu total"+(ccc+bbb));
        }
        else alert("A bientot");

    }
    else if(aa==2)
    {
        const c ="un ticket (dejeuner) coute 100francs\nCombien voulez vous en acheter?";
        cc=prompt(c);
        ccc=100*cc;
        const cccc="Cela vous revient a:"+ccc+"\n"+" francs Voulez vous acheter par la meme occasion des tickets petit dej\n1-Oui\n2-Non\nAutre pour quitter";
        ccccc=prompt(cccc);
        if(ccccc==1)
        {
            const b ="un ticket (petit dejeuner) coute 50francs\nCombien voulez vous en acheter?";
        bb=prompt(b);
        bbb=50*bb;
        alert("Cela vous revient a : "+bbb+"pour les ticket dej \nAu total"+(ccc+bbb)+"francs");
        }
        else alert("A bientot");
        
    }
    else alert("choisir entre petit dej et dej!!!!\n");
}