<?php

/** @Entity**/
class SousCategorie
{
    /**
     * @id @Column(type="integer") @GeneratedValue
     */
    private $id_sous_categorie;
    /**
     *  @Column(type="string",length=50,nullable=false) 
     * 
     */
    private $sous_categorie;
     /**
     * @ManyToOne(targetEntity="Categorie")
     */
    private $categorie;
    
    public function setId_Sous_categorie(Int $id_sous_categorie)
    {
        $this->id_sous_categorie = $id_sous_categorie;

        return $this;
    }

   
    public function getIdSous_categorie()
    {
        return $this->id_sous_categorie;
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
}
