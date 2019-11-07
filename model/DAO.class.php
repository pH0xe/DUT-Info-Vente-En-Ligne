<?php
  require_once '../model/Article.class.php';
  require_once '../model/Categorie.class.php';

  /**
   *
   */
  class DAO
  {
    private $db;
    function __construct(){
      $paths = parse_ini_file("../config/config.ini");
      $path = $paths["database_path"];
      $database = "sqlite:$path";
      try {
        $this->db = new PDO($database);
      } catch (PDOException $e) {
        die("Erreur de connexion : ".$e->getMessage());
      }
    }

    // on recupere la categorie a partir de l'id d'un article
    public function getCat($id) : Categorie
    {
      $req = "SELECT * FROM categorie where id = $id";
      $sth = $this->db->query($req);
      $result=array();
      $result = $sth->fetchAll(PDO::FETCH_CLASS, 'Categorie');

      return $result[0];
    }

// on recupere toute les categories de la BD
    public function getAllCat() : array {
        $req = "SELECT * FROM categorie";
        $sth = $this->db->query($req);

        $result=array();
        $result = $sth->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Categorie');
        return $result;
    }

// on recupere un objet article a partir d'une reference.
    public function getArt($ref) : Article{
      $req = "SELECT * FROM article WHERE ref = $ref";
      $sth = $this->db->query($req);
      $result=array();
      $result = $sth->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Article');
      return $result[0];
    }

// on recupere tout les article fille d'un article pere
    public function getAllFille($pere) : array {
      $req = "SELECT id FROM categorie WHERE pere = $pere";
      $sth = $this->db->query($req);

      $result = array();
      $result = $sth->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Categorie');
      return $result;
    }

// on recupere tout les article d'une categories.
    public function getAllArt(int $categorie) : array {
      $categorie = strval($categorie);
      $req = "SELECT * FROM article WHERE categorie = $categorie ";
      $sth = $this->db->query($req);
      $result = array();
      $result = $sth->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Article');
      return $result;
    }

    //on verifie que la categorie est valide.
    public function estTropGrand(int $id) : bool {
      $req  = "SELECT max(id) FROM Categorie";
      $sth = $this->db->query($req);
      $result = $sth->fetch(PDO::FETCH_NUM);
      return ($result[0] >= $id);
    }
}
?>
