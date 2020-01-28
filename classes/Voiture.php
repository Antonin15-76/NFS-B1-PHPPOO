<?php

class Voiture extends Vehicule
{

    public function __construct(string $mar, string $mod, string $cou, array $dim, int $mas)
    {
        $this->marque = $mar;
        $this->modele = $mod;
        $this->couleur = $cou;
        $this->dimensions = $dim;
        $this->masse = $mas;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($m) : void
    {
        $this->marque = $m;
    }
    public function calculEnergetiqueCinetique() : float
    {
        return 0.5 * $this->masse * $this->vitesse ** 2;
    }

    public function afficherMessage(){
        echo "je suis Michel";
    }
}