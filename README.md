# Attendus du livrable technique et du POC

Dans cette unité d’enseignement, votre travail consiste à passer d’une analyse fonctionnelle validée à une proposition technique argumentée et planifiée. L’objectif n’est pas de produire une solution unique correcte, mais de construire une réponse cohérente avec votre propre interprétation du besoin.

## 1. Premier livrable : le cahier des charges technique

Le premier livrable attendu est un cahier des charges technique complet, circonstancié et argumenté.

Il devra notamment comporter :
- une architecture technique explicitée (structure des données qui sous-tendent la *complexité* info-documentaire, gestion des droits, sécurité, accès distant, archivage et potentielement *versioning* ) ;
- des *scenarii* d’implémentation possibles ;
- plusieurs options technologiques lorsque cela est pertinent ;
- une planification projet structurée (avec Gannt);
- une analyse des ressources ;
- une stratégie de tests et de recette ;
- une gestion des risques ;
- une stratégie de conduite du changement ;
- une budgétisation globale ;
- une stratégie de communication projet.

Ce document constitue un livrable d’ingénierie. Il ne s’agit ni d’un rapport descriptif et **encore moins d’une synthèse théorique** (vous aurez tout votre mémoire de fin d'études pour vous épanouir dans cet exercice).

### Positionnement pédagogique de l’enseignement technique

Dans mes séances, vous manipulerez des briques techniques élémentaires de systèmes d’information documentaires :
- serveur web local ;
- bases de données ;
- scripts côté serveur ;
- structuration documentaire (divers XML par exemple);
- principes d’indexation ;
- circulation de l’information ;
- architecture simple de services documentaires.

Ces éléments sont fournis comme ressources mobilisables, non comme solutions imposées, certains sont redondants dans le cadre du projet, d'autres concourent à un *continuum* informationnel depuis les gisement de donnée jusqu'à la réalisation d'un système infodocumentaire stabilisé.

Je ne proposerai volontairement pas d'exercice de modélisation directement appliquée au cas *Wooden Home*. En revanche, les exemples resteront situés dans le champ des systèmes d’information documentaires d’entreprise.

Une partie du travail consiste en imaginer et effectuer la transposition.

## Construction du POC

Le second livrable est un prototype fonctionnel documenté (POC).

Il doit :
- illustrer une hypothèse d’architecture ;
- démontrer la faisabilité d’un sous-ensemble du système ;
- expliciter les choix techniques retenus ;
- documenter les limites observées ;
- alimenter la rédaction du cahier des charges technique.

L’objectif n’est pas de produire un système complet, mais une preuve argumentée de cohérence technique.

L’environnement principal proposé repose sur un serveur web local (je vous montrerai [MAMP](https://www.mamp.info/en/downloads/ 'Téléchargez MAMP')). 
Toutefois, vous êtes libres de vos choix, vous pouvez utiliser :
- une [solution d’hébergement gratuite en ligne](https://lesbases.anct.gouv.fr/ressources/hebergeur-php-et-mysql-gratuit) ;
- une base de données distante ;
- un environnement PHP mutualisé.

Ces choix relèvent de votre stratégie projet.


## Articulation avec les autres enseignements

Certains exercices seront réalisés en collaboration avec le [Crépac](https://portaildoc-intd.cnam.fr/) et Christelle. Ils participent à la structuration méthodologique du projet.

Les enseignements d’Illan Obadia sont centrés sur l’écosystème *SharePoint*. Ils correspondent à une approche réaliste de déploiement en environnement organisationnel standardisé, typique d’une PME ou d’une grande entreprise.

Votre travail consiste également à comparer :
- une solution pré-packagée d’entreprise,
- des architectures modulaires,
- des solutions hybrides,
- ou des dispositifs plus légers.

Il n’existe pas de (bonne) solution universelle. Il existe uniquement des solutions adaptées à un cahier des charges donné.

## Démarche attendue

Vous devez adopter une posture d’ingénierie réflexive.

Cela implique :
- Analyser en profondeur votre cahier des charges fonctionnel ;
- sélectionner des modèles pertinents pour y répondre ;
- mobiliser des technologies adaptées ;
- justifier vos arbitrages ;
- documenter vos choix ;
- démontrer la cohérence globale de votre solution.

Votre réponse technique doit être argumentée, située et reproductible.

C’est cette capacité d’arbitrage qui constitue le cœur de l’évaluation. Je vous montrerai l'usage de GitHub pour le suivi et le *versionning* de projet. Son usage reste de votre choix.
