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
    return $ref;
  }

  public function getLibelle() : string
  {
    return $libelle;
  }

  public function getCategorie() : int
  {
    return $categorie;
  }

  public function getPrix() : float
  {
    return $prix;
  }

  public function getImage() : string
  {
    return $image;
  }

  public function getDescription() : string
  {
    return $description;
  }
}

?>
