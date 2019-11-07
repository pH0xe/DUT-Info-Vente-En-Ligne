<?php
/**
 *
 */
class Article
{
  private $ref; // int
  private $libelle; // text
  private $categorie; // int
  private $prix; // float
  private $image; // text
  private $description; // text

  // Récuperation de la Reference du produit
  public function getRef() : int
  {
    return $this->ref;
  }

// Récuperation du libelle
  public function getLibelle() : string
  {
    return $this->libelle;
  }

// Récuperation de la catégories a laquelle appartient l'article
  public function getCategorie() : int
  {
    return $this->categorie;
  }

// Récuperation du prix de l'article
  public function getPrix() : float
  {
    return $this->prix;
  }

// Récuperation de l'image
  public function getImage() : string
  {
    return $this->image;
  }

// recuperation de la description du produit 
  public function getDescription() : string
  {
    return $this->description;
  }
}

?>
