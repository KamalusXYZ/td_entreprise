<?php

namespace classes;

class Employe

{
    public ?int $idEmploye = null;
    public ?int $idService = null;
    public ?string $nom = null;
    public ?string $prenom = null;
    public ?string $sexe = null;
    public ?int $salaire = null;
    public ?string $dateContrat = null;
    protected  ?Service $service = null;

    public function __get(string $nomProp)
    {
        echo  $nomProp;
    }
}
