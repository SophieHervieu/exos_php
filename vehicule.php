<?php
class Vehicule{
    //Attribut
    private ?string $nom;
    private ?int $nbrRoue;
    private ?string $couleur;
    private ?string $propriétaire;
    private ?int $vitesseMax = 250;

    //Constructeur
    //De base, PHP possède déjà une méthode magique qui s'appelle __construc(), et servant à instancier des objets sans donner de valeur à leur attribut
    //Je peux cependant redéfinir le comportement du constructeur au sein d'un classe
    public function __construct(?string $nom, ?int $nbrRoue, string $couleur = "Noire"){
        $this->nom = $nom;
        $this->nbrRoue = $nbrRoue;
        $this->couleur = $couleur;
    }

    //GETTER ET SETTER
    public function getNom():?string{
        return $this->nom;
    }

    public function getNbrRoue():?int{
        return $this->nbrRoue;
    }

    public function getCouleur():?string{
        return $this->couleur;
    }

    public function getProprietaire():?string{
        return $this->proprietaire;
    }

    public function getVitesseMax():?int{
        return $this->vitesseMax;
    }

    public function setNom(?string $newNom):Vehicule{
        $this->nom = $newNom;
        return $this;
    }

    public function setNbrRoue(?int $newNbrRoue):Vehicule{
        $this->nbrRoue = $newNbrRoue;
        return $this;
    }

    public function setCouleur(?string $newCouleur):Vehicule{
        $this->couleur = $newCouleur;
        return $this;
    }

    public function setVitesseMax(?int $newVitesseMax):Vehicule{
        $this->vitesseMax = $newVitesseMax;
        return $this;
    }

    //METHODE
    public function accelerer(?int $newVitesse):void{
        $this->setVitesseMax(($this->getVitesseMax() + $newVitesse));
        echo '<br>Je file maintenant à '.$this->getVitesseMax().' km/h !';
    }

    public function detect(): string {
        if ($this->nbrRoue === 2) {
            return 'moto';
        } else if ($this->nbrRoue > 2) {
            return 'voiture';
        }
    }

    public function boost(): int{
        return $this->vitesseMax + 50;
    }

    public function plusRapide(): int {
        
    }
}