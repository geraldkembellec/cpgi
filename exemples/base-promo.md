
# Ma promo
--

## eleves
	- id_eleve (INT)	PK		A_I 	NOTNULL	: 1,2...
	- nom (VARCHAR)						NOTNULL	: Nunez, Reboul...
	- prenom (VARCHAR)					NOTNULL	: Tanya, David...

## participe
	- id_eleve (INT)		INDEX		NOTNULL : 1
	- id_cours (VARCHAR)	INDEX		NOTNULL	: USTD03
	- année (YEAR)						NOTNULL	: 2026

## cours
	- id_cours (VARCHAR)	PK			NOTNULL : USTD03
	- intitulé (VARCHAR)				NOTNULL	: Conception des dispositifs de traitement
	- commentaire (VARCHAR)				NULL	: Cours exclusivement réservé au Master CPGI 
