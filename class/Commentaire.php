<?php
/** @Entity */
class Commentaire{
  /**
     * @id @Column(type="integer") @GeneratedValue
     */
    private $id_commentaire;
       /**
     * @commentaire @Column(type="text") 
     */
    private $contenu;
   /**
     * @ManyToOne(targetEntity="Utilisateur")
     */
    private $utilisateur;
    /**
     * @dateTime @Column(type="date")
     */
    private $dateTime;
     /**
     * @ManyToOne(targetEntity="Article")
     */
    private $article;

    public function setIdCommentaire(Int $idCommentaire)
    {
        $this->id_commentaire = $idCommentaire;

        return $this;
    }

   
    public function getIdCommentaire()
    {
        return $this->id_commentaire;
    }


    public function setContenu(String $contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getContenu()
    {
        return $this->contenu;
    }

 
    public function setUtilisateur(Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

  
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
    public function setDateTime()
    {
        $this->dateTime =new DateTime();

        return $this;
    }

    public function getDateTime()
    {
        return $this->dateTime;
    }
    public function setArticle(Article $article)
    {
        $this->article = $article;

        return $this;
    }

    // public function getExtMessage()
    // {
    //     return $this->ext_message;
    // }
    public function __construct(array $array)
    {
        $this->hydrate($array);
    }

    public function hydrate(array $array)
    {
        foreach ($array as $key => $value) {

            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

}