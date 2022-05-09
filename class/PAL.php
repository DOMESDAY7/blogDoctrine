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
    public function getUtilisateur() {
        return $this->utilisateur;
    }
    public function setUtilisateur(Utilisateur $utilisateur) {
        $this->utilisateur = $utilisateur;
    }
    public function getArticle() {
        return $this->article;
    }
    public function setArticle(Article $article) {
        $this->article = $article;
    }
   
}