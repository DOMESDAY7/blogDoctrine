<?php

/** @Entity**/
class Categorie
{
    /**
     * @id @Column(type="integer") @GeneratedValue
     */
    private $id;
    /**
     *  @categorie_nom @Column(type="string",length=50,nullable=false) 
     * 
     */
    private $categorie_nom;
    
    public function setId(Int $id)
    {
        $this->id = $id;

        return $this;
    }

   
    public function getId()
    {
        return $this->id;
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
