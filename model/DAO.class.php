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

    public function getCat($id) : Categorie
    {
      $req = "SELECT * FROM categorie where id = $id";
      $sth = $this->db->query($req);
      $result=array();
      $result = $sth->fetchAll(PDO::FETCH_CLASS, 'Categorie');

      return $result[0];
    }

    public function getAllCat() : array {
        $req = "SELECT * FROM categorie";
        $sth = $this->db->query($req);

        $result=array();
        $result = $sth->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Categorie');
        return $result;
    }

    public function getArt($ref) : Article{
      $req = "SELECT * FROM article WHERE ref = $ref";
      $sth = $this->db->query($req);
      $result=array();
      $result = $sth->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Article');
      return $result[0];
    }
}
?>
