<?php

//Pour inclure un fichier en php require ou include . Require_once et include_once existent aussi. 

// include et le require sont similaires mais l'include ne vous fera d'erreur fatal et affichera la page. Le require non.
require 'Editor.php';
require 'Auteur.php';
require 'Livre.php';

$e1 = new Editor ('Gallimard');
$a1 = new Author ('Hugo', 'Victor');
$a2 = new Author ('Stendhal');
$a2 = new Author ('Dahl', 'Roald');
$l1 = new Livre ('Les Misérables', 2586, '1890', '35€', $a1, $e1);
$l2 = new Livre ('Notre Dame de Paris', 886, '1830', '25€', $a1, $e1);
$l3 = new Livre ('Ruy Blas', 1886, '1964', '15€', $a1, $e1);


$tableauAuthor = array ($a1, $a2, $a3);
$tableauLivres = array ($l1, $l2, $l3);

echo $l1;

echo $a1-> bibliographie($tableauLivres, $a1);


// un livre a un auteur et un auteur peut avoir plusieurs livres.
// Les relations doivent être faites par des clés étrangères.
// Les clefs étrangères représentent la classe à laquelle ils font référence.
// 



//créer une classe Editor 
// Une maison d'édition à plusieurs auteurs et un auteur a une seule maison  d'édition. 

// On affiche l'auteur avec sa maison d'edition. 