# Site jeux vidéo

RocketLeague-RedSky.fr est un site pour les joueurs de RocketLeague.Vous pourrez trouvez des News et un system de 
Findteam pour trouvez vos coéquipier.
Une connexion, une inscription, un contact et un systeme de DON pour nous soutenir.
Have fun Enjoy !


# Cahier des charges :

**-Domaine :** RocketLeague-RedSky.fr

**-Nom du site :** RedSkyRL.

**-Les couleurs :** Noir,Rouge,Gris. (Les couleurs du logo)

**-Logo :** </br>
![Logo Site](www/public/assets/img/Logo.jpg)

**-Nombres pages :** 7

**-Nom des pages :** Home, Inscription, Connexion, Contact, MentionLegales, FindTeam, Team, Don

**-URL des futures pages :** /home, /subscribe, /login, /contact, /mentionlegales, /findteam, /team, /givegift

## **-*Future fonctionalité du site* :** 

**-Inscription :** -Ajout de l'utilisateur en BDD

**-Connexion :** -Récupération des données utilisateurs en BDD

**-Contact :** -Récupération des données utilisateurs en BDD
               -Envoie de mail a l'entreprise du site.

**-FindTeam :**  -Plusieurs catégories selon le rank de l'utilisateurs </br>
**(1 2 3 correspond a la division du rank cibler)** </br>
*(Bronze(1,2,3)),* </br>
*(Silver(1,2,3)),* </br>
*(Or(1,2,3)),* </br>
*(Platine(1,2,3)),* </br>
*(Diamand(1,2,3)),* </br>
*(Champion(1,2,3)),* </br>
*(Grand Champion)* </br>
![Ranks Illustration](www/public/assets/img/Ranks.jpg)
                -Création d'un groupe par l'utilisateur, ou choisir de rejoindre un groupe déjà existant </br>
                -Insertion de l'utilisateur dans le groupe rank choisit </br>
                -Chat online du groupe entre les joueurs pour l'accord ou non de leurs objectifs </br> 
                -Si deux ou trois joueurs (selon le mode de jeu) on compléter le groupe, alors attendre la validation de tous les joueurs du groupe </br>
                -Envoie d'une requete automatique invitation Steam pour que les deux joueurs puissent lancez leurs parties

**-Don :** - Page simple qui redirigeras sur un paypal pour un Don. 




# Maquettes mobile first
## Vue du haut de la page Home deconnecter
![Maquette Accueil Deco](www/public/assets/img/VueAccueilHautDeco.jpg)
## Vue du haut de la page Home connecter
![Maquette Accueil Co](www/public/assets/img/VueAccueilHautCo.jpg)
## Vue de la home 'une fois scroll' avec des news (texte et video)
![Maquettes Accueil](www/public/assets/img/News.jpg)
## Burger menu ouvert une fois cliquer
![Maquettes Menu Déroulant](www/public/assets/img/BurgerDeco.jpg)
## Burger menu ouvert une fois connecter et cliquer
![Maquettes Menu Déroulant Connecter](www/public/assets/img/Deroulantconnecter.jpg)
## Page connexion
![Maquettes Connexion](www/public/assets/img/connexion.jpg)
## Page inscription
![Maquettes Inscription](www/public/assets/img/inscription.jpg)
## Page contact
![Maquettes Contact](www/public/assets/img/Contact.jpg)
## Page de recherche d'equipe quand on a pas de groupe
![Maquettes FindTeamPasGroupe](www/public/assets/img/FindTeamPasGroupe.jpg)
## Page de recherche d'equipe quand on a trouver le groupe
![Maquettes Team](www/public/assets/img/FindTeamAvecGroupe.jpg)
## Page de don
![Maquettes Don](www/public/assets/img/Don.jpg)
## Page footer default
![Maquettes Footer](www/public/assets/img/footerDefault.jpg)</br>




# Maquettes full screen
## Vue du haut de la page home deconnecter
![Maquette Full Accueil Deco](www/public/assets/img/FullAccueilHautDeco.jpg)
## Vue du haut de la page home connecter
![Maquette Full Accueil Co](www/public/assets/img/FullAccueilHautCo.jpg)
## Vue de la home une fois scroll
![Maquette Full Accueil Scroll](www/public/assets/img/FullVueHomeScroll.jpg)
## Page de connexion
![Maquette Full Login](www/public/assets/img/FullLogin.jpg)
## Page Inscription
![Maquette Full Inscription](www/public/assets/img/FullInscription.jpg)
## Page Contact
![Maquette Full Contact](www/public/assets/img/FullContact.jpg)
## Page de recherche d'equipe
![Maquette Full Pas d'Equipe](www/public/assets/img/FullPasEquipe.jpg)
## Page de  l'equipe
![Maquette Full Equipe](www/public/assets/img/FullGroupe.jpg)
## Page de don
![Maquette Full Don](www/public/assets/img/FullDon.jpg)
## Page du footer
![Maquette Full Footer](www/public/assets/img/FullFooter.jpg)


# Precision a donner

-Le Header dans la version mobile et full screen va suivre l'utilisateur lorsque celui ci va scroll</br>
-Le titre du site est un boutton home et sera réadapter a l'ecriture du logo </br>
-Rajout boutton déja inscrit ? sur la page inscription</br>
-Rajout boutton pas encore inscrit ? sur la page connexion</br>
-Rajout boutton deconnexion dans le burger une fois connecter</br>
-Les boutons du footer don et nous contactez /deconnexion celon la version de l'ecran seront bien évidemment changer par connexion et inscription lorsque l'utilisateur seras offline.

# UML
## diagramme uml
![UML](www/public/assets/img/UML.jpg)