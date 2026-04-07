# Cas d'études "Podcast"
## Conception d’un système de gestion et de diffusion de podcasts documentaires pour le Crépac (INTD–Cnam)
### Contexte
Christelle Magdelaine souhaite mettre en place une série de podcasts documentaires audio et vidéo destinés à être diffusés dans le [portail documentaire de l’INTD](https://portaildoc-intd.cnam.fr/ListRecord.htm?list=table&table=3&type=Podcasts).

## Lot 1 : Exercice de modélisation Merise
### Objectifs pédagogiques
Cet exercice vise à :
- identifier les entités d’un système documentaire audiovisuel ;
- produire un modèle conceptuel de données (MCD) conforme à Merise ;
- traduire ce modèle en modèle logique de données (MLD) relationnel ;
- préparer la génération automatisée ultérieure d’un flux RSS documentaire.
### Portail documentaire INTD-Cnam podcasts
Ces podcasts relèvent de deux logiques éditoriales :
- un flux INTD, comprenant des interventions d’enseignants, ingénieurs, personnels administratifs ou invités extérieurs ;
- d’autres séries documentaires thématiques produites par le Crépac.

Les fichiers (MP3 ou MPEG) seront hébergés sur [le média serveur du Cnam pour le stockage pérenne](https://mediaserver.lecnam.net/channels/musee-des-arts-et-metiers). Dans Mocodo, une possibilié de n'attribuer que quelques valeurs possibles peut être présentée ainsi avec `[enum('type1','type2')]`: 
```SQL
Prof: id_prof, nom, prenom, genre[enum('h','f','NSP')]
```

L’objectif est de concevoir un modèle de données structuré permettant :
- la description documentaire des podcasts ;
- leur indexation ;
- leur organisation en collections ;
- leur diffusion via flux RSS.
  
## Description du système à modéliser
Le Crépac publie régulièrement des podcasts audio ou vidéo produits dans le cadre de ses activités pédagogiques et scientifiques.

Chaque podcast possède :
- un titre ;
- un résumé ;
- une date de publication ;
- une durée ;
- une langue ;
- un format technique (MP3 ou MPEG) ;
- une URL de diffusion sur le média serveur ;
- éventuellement une vignette illustrative.

Un podcast peut :
- comporter un ou plusieurs intervenants ;
- être rattaché à un événement (conférence, séminaire, journée d’étude, soutenance) ;
- appartenir à une ou plusieurs collections ;
- être indexé par des mots-clés ;
- être diffusé dans un flux RSS.

Un intervenant peut :
- participer à plusieurs podcasts.
- Un événement peut produire plusieurs podcasts.

Certaines capsules de podcast peuvent être indépendantes de tout événement.
Un flux RSS contient plusieurs podcasts.

## Travail demandé
Vous devez produire successivement :

### 1. Un modèle conceptuel des données (MCD)
Votre MCD devra :
- identifier les entités pertinentes ;
- définir leurs attributs ;
- identifier les associations ;
- préciser les cardinalités ;
- respecter les conventions Merise.

Le modèle devra permettre de représenter :
- un podcast avec plusieurs intervenants ;
- un intervenant participant à plusieurs podcasts ;
- un podcast appartenant à plusieurs collections ;
- une collection contenant plusieurs podcasts ;
- un podcast associé ou non à un événement ;
- un podcast indexé par plusieurs mots-clés ;
- un flux RSS contenant plusieurs podcasts ;
- deux types de flux éditoriaux distincts (dont le flux INTD).

### 2. Un modèle logique des données (MLD)

À partir de votre MCD, vous produirez un MLD relationnel comprenant :
- les tables ;
- les clés primaires ;
- les clés étrangères ;
- les tables d’association ;
- les contraintes d’intégrité référentielle.

Le passage MCD → MLD devra être explicitement justifié.

### Contraintes techniques à intégrer dans la modélisation

Votre modèle devra permettre de représenter :
- la **localisation pérenne** des **fichiers médias** sur le media server du Cnam ;
- la coexistence de podcasts audio et vidéo ;
- la structuration en **collections documentaires** ;
- l’**indexation** par **mots-clés** ;

dans l'optique de la génération automatisable d’un flux RSS.

### Production attendue
#### Votre rendu comprendra :
##### Partie 1. Un diagramme MCD lisible  comportant :
- entités ;
  - attributs ;
  - identifiants ;
- associations ;
- cardinalités.

##### Partie 2. Un schéma MLD comprenant :
- la liste des tables ;
- leurs attributs ;
- les clés primaires ;
- les clés étrangères ;
- les tables d’association issues des relations n–n.

#### Présentation attendue sous forme :
- soit d’un schéma relationnel,
- soit d’une notation tabulaire normalisée.

### Lien Mocodo lot 1 stabilisé : 
cf. [lien](https://www.mocodo.net/?mcd=eNqNUVFqxCAQ_d9TCGH_PIEfhZJtINCWpSz9LZIMu0J0xJiyvVFzjlys45oahVIWg5lx3sx7Pvd7jR32uNuJ23pBP9bDMo-CtX1KODtdlm8NBGhND1dwglVZnT2wPC46Pwh4xL6To6fSFqVTGvr0CQY0GB9YU0Ksyjvg7CB9oKavxmGAzis0AbllCRp1ctag09KPB2hUd1HgqPfRWum8urFUeTOJKZJy8D3610hsh0nQG4yTXuZ4Cdont8x_6OPsmZTRLs15ovq7OhvwoaPKHCHaPM4qQUS4Xafs-jj_ao7Xao0HRxNknFZmeTWa_7tq1BadX3maYboSfv3F_D7XMgJR8nF2JJsMas5eUZfsYb5IPKvL0bzTl4WI-gFbp_Pz 'Corrigé')

## Lot 2 : Création de la base de données avec MAMP (ou autre [^1]) /  / MySQL
### Objectifs pédagogiques
Transformer le MLD en en un MPD (Modèle Physique de Données) qui va s'intégrer dans la base via le SGBD.
On va traduire chaque attribut de chaque table en un type de données, déclarer les clés primaires et étrangères.

### Rendus dans la base de données
#### Créer les tables dans MySQL
#### Intégrer les attributs (champs) avec leurs types
Pensez à déclarer :
- Les clés primaires,
- Les champs auto-incrémentés [A_I],
- Les clés étrangères (Index)

En mode concepteur :
Réalisez les liaisons entre les clés étrangères et les clés primaires associées.

NB, si ça ne marche pas vérifiez bien : 
- Que les clés sont bien du __même__ type,
- Que la clé étrangère est bien typée "index"

#### Intégrer les 
### Question complémentaire (approfondissement à traiter ultérieurement)
On produira à terme un format XML / RSS de podcast (sur le modèle RSS clasique [iTunes](https://podcasters.apple.com/fr-fr/support/823-podcast-requirements) cf: [https://www.ausha.co/fr/blog/creer-flux-rss-podcast-soi-meme/](https://www.ausha.co/fr/blog/creer-flux-rss-podcast-soi-meme/)
On attend ici une mise en relation explicite entre structure documentaire et structure [XML RSS](https://aide.podcloud.fr/question/comment-ca-marche-un-podcast-cest-quoi-un-flux-rss/) (ça sera un autre exercice).
Expliquez en quelques lignes comment votre modèle permettrait de générer automatiquement les éléments suivants d’un flux RSS :
```xml
<channel>
  <item>
  <title>
  <description>
  <pubDate>
  <enclosure>
  <category>
```
![Le schema d'un podcast](https://aide.podcloud.fr/wp-content/uploads/2023/02/podcast_how_1.png)
On aura ici une base pour l'exercice de XML.
![flux rss](https://img.ausha.co/cb:-U1P~1ddd7/w:781/h:184/q:mauto/f:best/https://www.ausha.co/wp-content/uploads/2021/05/Code-flux-rss-episode.png)
