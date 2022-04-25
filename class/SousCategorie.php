<?php

/** @Entity**/
class SousCategorie
{
    /**
     * @id @Column(type="integer") @GeneratedValue
     */
    private $id;
    /**
     *  @Column(type="string",length=50,nullable=false) 
     * 
     */
    private $sous_categorie;
     /**
     * @ManyToOne(targetEntity="Categorie")
     */
    private $categorie;
    
    public function setId(Int $id)
    {
        $this->id = $id;

        return $this;
    }

   
    public function getId()
    {
        return $this->id;
    }
    
    public function setSous_categorie(Int $sous_categorie)
    {
        $this->sous_categorie = $sous_categorie;

        return $this;
    }

   
    public function getSous_categorie()
    {
        return $this->sous_categorie;
    }

    public function setCategorie(Int $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

   
    public function getCategorie()
    {
        return $this->categorie;
    }
}
