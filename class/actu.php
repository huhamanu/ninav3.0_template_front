<?php
class actu{
    private $titre;
    private $lien;
    private $image;
    private $dateA;
    private $texte;
 
    public function actu($titreActu, $lienActu, $imageActu, $dateActu, $texteActu){
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