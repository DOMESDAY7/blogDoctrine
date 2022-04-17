<?php

/** @Entity**/
class Categorie
{
    /**
     * @id @Column(type="integer") @GeneratedValue
     */
    private $id_categorie;
    /**
     *  @categorie_nom @Column(type="string",length=50,nullable=false) 
     * 
     */
    private $categorie_nom;
    
    public function setId_categorie(Int $id_categorie)
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }

   
    public function getId_categorie()
    {
        return $this->id_categorie;
    }
    
    public function setCategorie_nom(Int $categorie_nom)
    {
        $this->categorie_nom = $categorie_nom;

        return $this;
    }

   
    public function getCategorie_nom()
    {
        return $this->categorie_nom;
    }
}
