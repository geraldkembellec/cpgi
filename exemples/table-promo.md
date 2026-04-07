
# Ma promo
--

## eleves
	- id_eleve (INT)	PK		A_I	: 1,2...
	- nom (VARCHAR)					: Nunez, Reboul...
	- prenom (VARCHAR)				: Tanya, David...

## participe
	- id_eleve (INT)		INDEX	: 1
	- id_cours (VARCHAR)	INDEX	: USTD03
	- année (YEAR)					: 2026

## cours
	- id_cours (VARCHAR)	PK		: USTD03
	- intitulé (VARCHAR)			: Conception des dispositifs de traitement
