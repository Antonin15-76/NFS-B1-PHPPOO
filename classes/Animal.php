<?php


abstract class Animal
{
    protected $largeur;
    protected $hauteur;
    protected $masse;
    protected $couleurDominante;
    protected $typeNourriture;
    protected $locomotion;
    protected $nom;
    protected $appareilRespiratoire = true;
    protected $appareilDigestif = true;
    protected function seNourrir()
    {
        echo "je bouffe";
    }
}