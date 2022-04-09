<?php

/** @Entity**/
class Article
{
    /** @Id @Column(type="integer") @GeneratedValue**/
    private $id;
    /** @texte @Column(type="text") **/
    private $texte;
    /** @datepost @Column(type="date") **/
    private $datepost;
    /**
     * @ManyToOne(targetEntity="Utilisateur")
     */
    private $utilisateur;
    /** @texte @Column(type="string",length=55) **/
    private $titre;

    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }
    public function getTitre()
    {
        return $this->titre;
    }
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }



    public function getId()
    {
        return $this->id;
    }
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }


    public function getTexte()
    {
        return $this->texte;
    }

    public function setDatepost($datepost)
    {
        
        $this->datepost = $datepost;

        return $this;
    }


    public function getDatepost()
    {
        return $this->datepost;
    }
    
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
