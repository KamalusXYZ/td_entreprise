<?php

declare(strict_types=1);



class Employe

{
    public int $idEmploye;
    public int $idService;
    public string $nom;
    public string $prenom;
    public string $sexe;
    public int $salaire;
    public string $dateContrat;


    public function __construct(int $idEmploye, int $idService, string $nom, string $prenom, string $sexe, int $salaire, string $dateContrat,)
    {
        $this->marque = $idEmploye;
        $this->modele = $idService;
        $this->marque = $nom;
        $this->modele = $prenom;
        $this->marque = $sexe;
        $this->modele = $salaire;
        $this->modele = $dateContrat;
    }
}