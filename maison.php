<?php
class Maison {
    private ?string $nom;
    private ?int $longueur;
    private ?int $largeur;
    private ?int $nbrEtage;

    public function __construct(?string $nom, int $longueur = 10 , int $largeur = 20, int $nbrEtage = 2) {
        $this->nom = $nom;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->nbrEtage = $nbrEtage;
    }

    public function getNom(): ?string {
        return $this->nom;
    }

    public function getLongueur(): ?int {
        return $this->longueur;
    }

    public function getLargeur(): ?int {
        return $this->largeur;
    }

    public function getNbrEtage(): ?int {
        return $this->nbrEtage;
    }

    public function setNom(?string $newNom): Maison {
        $this->nom = $newNom;
        return $this;
    }

    public function setLongueur(?int $newLongueur): Maison {
        $this->longueur = $newLongueur;
        return $this;
    }

    public function setLargeur(?int $newLargeur): Maison {
        $this->largeur = $newLargeur;
        return $this;
    }

    public function setNbrEtage(?int $newNbrEtage): Maison {
        $this->nbrEtage = $newNbrEtage;
        return $this;
    }

    public function surface(): int | float {
        return $this->nbrEtage * ($this->longueur * $this->largeur);
    }
}