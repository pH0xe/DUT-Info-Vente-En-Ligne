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

  public function getRef() : int
  {
    return $this->ref;
  }

  public function getLibelle() : string
  {
    return $this->libelle;
  }

  public function getCategorie() : int
  {
    return $this->categorie;
  }

  public function getPrix() : float
  {
    return $this->prix;
  }

  public function getImage() : string
  {
    return $this->image;
  }

  public function getDescription() : string
  {
    return $this->description;
  }
}

?>
