* Apres avoir fait git clone ...
* composer install donc PHP 8.2 ou superieur
* php artisan key:generate
* migration faite


#  Plateforme Solution pour Carnet de Soins Electronique

*| Mise en relation entre Patient et Personnel de Sante via rendez-vous |*
*| Rendez vous devra etre confirmer par secretaire ou medecin |*
*| Rendez-vous qui mene a une Consultation ou le medecin releve les information necessaire |*
* A la fin le patient aura son carnet avec les prescription du medecin jusqu'a la liste des medicament sans oublie la consultation qu'il a paye 
* Le syteme conportera plusieurs role comme : Medecin-Secretaire-Patient


###### Laravel: Migration : text== 64 KB ; mediumText==16 MB; longtext==4G;

Les Acteurs sont: Patient - Medecin - Secretaire

Tout acteur qui vient prendre RDV devient **Patient** 
Donc la secretaire l'enreigistre dans la Bdd
Ainsi enreigistre son RDV en precisant l'heure - la date - motif - le docteur concerne ``Si`` il est dispo

Le **Medecin** voient les RDV  etn attendant le patient comme prise
Une fois le moment venu il consulste et pour la prise de notes en relevant les informations necessaire comme la temperature
``Si`` c'est la premiere fois qu'il se fait consulter dans l'hopital des infos supplementaires seront requis comme Groupe Sanguin - Allergie - Antecedent medical donc des infos Statics
``Sinon`` il continu uniquement avec la consultation avec juste la prise des constantante vital comme le Poid - la Taille - La Temperature
`` Et aussi `` pourra planifier de prochain RDV car souvent un mal se fera traiter a plusieurs fois
A la fin de la consultation un message sera envoyer a l'adresse mail fourni par le patient lors de son enreigistrement dans la bdd de la clinique

Le logiciel est livre avec un seul compte **Secretaire** par defaut
Cette secretaire aura un mdp et un email qu'elle devra vite changer pour personnaliser
elle sera charger uniquement de la prise de RDV et l'enreigistrement de nouveau acteur patient dans la bdd

Interactions avec le Logiciel de Gestion :
•	Médecins :
o	Pourraient utiliser le logiciel pour consulter les dossiers médicaux des patients, saisir des diagnostics, prescrire des traitements, planifier des rendez-vous, etc.

•	Secrétaires/Réceptionnistes :
o	Saisiraient les rendez-vous des patients, géreraient les plannings des médecins, traiteraient les appels et les demandes de rendez-vous, etc.

Organisation des Rôles dans le Logiciel de Gestion :
1.	Service Informatique (Administrateur) :
o	Aura les droits d'administration complets sur le logiciel, y compris la gestion des utilisateurs, des autorisations, des paramètres du système, etc.
2.	Médecin :
o	Devra s'inscrire sur le logiciel et attendre l'approbation de l'administrateur.
o	Une fois approuvé, l'administrateur lui attribuera un rôle de médecin avec les autorisations nécessaires pour accéder aux dossiers des patients, saisir des diagnostics, etc.
3.	Secrétaire/Réceptionniste :
o	Devra également s'inscrire et attendre l'approbation de l'administrateur.
o	Après validation, l'administrateur lui attribuera un rôle de secrétaire/réceptionniste pour gérer les rendez-vous, les plannings, les appels, etc.

### Menu du Médecin :
1.	Dashboard :
o	Vue d'ensemble personnalisée avec les rendez-vous du jour, les tâches à accomplir, les alertes médicales, etc.
2.	Consultations :
o	Permet au médecin de gérer ses consultations et d'accéder aux dossiers médicaux des patients.
o	Sous-menu "Patients" :
	Liste des patients du médecin avec des informations de base (nom, âge, historique).
	Possibilité d'ajouter de nouveaux patients, de rechercher des patients spécifiques, etc.
o	Sous-menu "Dossier Patient" :
	Vue détaillée du dossier médical d'un patient spécifique.
	Sections pour les antécédents médicaux, les allergies, les traitements en cours, les résultats d'examens, les prescriptions, etc.
	Possibilité d'ajouter des notes, des observations, des documents, etc.
3.	Prescriptions :
o	Permet au médecin de saisir et d'imprimer des ordonnances pour les patients.
4.	Examens et Résultats :
o	Accès aux résultats d'examens et de tests médicaux des patients.
5.	Agenda :
o	Visualisation des rendez-vous à venir, possibilité de planifier de nouveaux rendez-vous.
6.	Paramètres :
o	Profil

 
Pour l'interface de l'infirmière dans votre système de gestion de clinique, voici une suggestion de structure de menus similaire à celle du médecin :
### Menu de la Secretaire
•	Dashboard : Tableau de bord principal avec un aperçu des tâches et informations importantes.
•	Patients :
o	Liste des Patients : Affichage de tous les patients sous la responsabilité de l'infirmière.
o	Détails du Patient : Vue détaillée des informations médicales et personnelles d'un patient spécifique.
o	Ajouter un Patient : Formulaire pour ajouter un nouveau patient au système.
•	Rendez-vous :
o	Calendrier des Rendez-vous : Visualisation des rendez-vous à venir avec les patients.
o	Ajouter un Rendez-vous : Permet à l'infirmière de planifier de nouveaux rendez-vous.
•	Observations :
o	Observations Médicales : Enregistrement des observations et notes sur les patients.
o	Historique des Observations : Consultation des observations précédentes.
•	Médicaments :
o	Liste des Médicaments : Gestion des médicaments prescrits aux patients.
o	Ajouter un Médicament : Ajout de nouveaux médicaments au système.
•	Profil :
o	Mon Profil : Gestion des informations personnelles de l'infirmière.
o	Paramètres : Personnalisation des préférences et réglages de l'interface.


# Dashboard Specialiste
- Vu des totaux de la clinique
- Vu patielle des Patient de la clinique avec un tableau

## Consultation
 Deux sous menu - liste de consultation - les consulter
- Liste des consultation: Tableau presentation toutes les consultation effectuer par le medecin  connect3r
- Les consulter ``annuler``

## Rendez-vous
- Tout les rendez
-- Secretaire possibiliter d'effectuer une prise de rendez pour un medecin concerner et a une heure auquelle le patient demande ```si``` il est dispo
-- Secretaire possibiliter d'enreigistrer un nouveau patient dans la bdd
-- Medecin peut programmer un RDV pour un patient aussi apres une consultation recente

## Patients
- Tout les patients
tableau presentant l'ensemble des patient enreigistre dans la clinique
- Nouveau Patient
Enreigistrer de nouveau patient dans la clinique

# Personnels
Admin
- Tous le personnel
vu de l'ensemble du personnel de l'entreprise
Nouveau Patient
Enreigistrement de nouveau membre dans la clinique