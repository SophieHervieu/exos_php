<?php
class Maison {
    private ?string $nom;
    private ?int $longueur;
    private ?int $largeur;

    public function __construct(?string $nom, int $longueur = 110 , int $largeur = 130) {
        $this->nom = $nom;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
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

    public function surface(): int | float {
        return $this->longueur * $this->largeur;
    }
}