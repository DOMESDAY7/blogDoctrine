<?php
/** @Entity */
class PAL {
    /**
     * @id @Column(type="integer") @GeneratedValue
     */
    private $id;
    /**
     * @ManyToOne(targetEntity="Utilisateur")
     * 
     */
    private $utilisateur;
    /**
     * @ManyToOne(targetEntity="article")
     * 
     */
    private $article;
    public function getId() {
        return $this->id;
    }
   
}