<?php
class actu{
    private $idPage;
    private $titre;
    private $lien;
    private $image;
    private $dateA;
    private $texte;
    private $conn;

    public function __construct($idPage, $conn){
        $requeteListeActus = "SELECT * FROM page WHERE idPage=$idPage";
        $resultatListeActus = $conn->query($requeteListeActus);
        $data=mysqli_fetch_array($resultatListeActus);
        extract($data);
        $this->titre=$titrePage;
        $this->lien=$lienPage;
        $this->image=$imagePage;
        $this->dateA=$datePage;
        $this->texte=$textePage;
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