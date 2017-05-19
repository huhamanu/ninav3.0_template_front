<?php
class actu{
    private $idActu;
    private $titre;
    private $lien;
    private $image;
    private $dateA;
    private $texte;
     private $conn;

    public function __construct($idActu, $conn){
        $requeteListeActus = "SELECT * FROM actus WHERE idActu=$idActu";
        $resultatListeActus = $conn->query($requeteListeActus);
        $data=mysqli_fetch_array($resultatListeActus);
        extract($data);
        $this->titre=$titreActu;
        $this->lien=$lienActu;
        $this->image=$imageActu;
        $this->dateA=$dateActu;
        $this->texte=$texteActu;
    }
    
    public function getTitre(){
        return $this->titre;
    }
    
    public function getLien(){
        return $this->lien;
    }
    
    public function getImage(){
        return $this->image;
    }
    
    public function getDate(){
        return $this->dateA;
    }
    
    public function getTexte(){
        return $this->texte;
    }
}
?>