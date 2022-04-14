<?php

/** @Entity**/
class Categorie
{
    /**
     * @id @Column(type="integer") @GeneratedValue
     */
    private $id;
    /**
     *  @Column(type="string",length=50,nullable=false) 
     * 
     */
    private $categorie_nom;
}
