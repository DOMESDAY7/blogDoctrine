<?php



/**
 * Message
 */
class Message
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $texte;

    /**
     * @var \DateTime
     */
    private $datepost;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var \Utilisateur
     */
    private $utilisateur;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set texte.
     *
     * @param string $texte
     *
     * @return Message
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte.
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set datepost.
     *
     * @param \DateTime $datepost
     *
     * @return Message
     */
    public function setDatepost($datepost)
    {
        $this->datepost = $datepost;

        return $this;
    }

    /**
     * Get datepost.
     *
     * @return \DateTime
     */
    public function getDatepost()
    {
        return $this->datepost;
    }

    /**
     * Set titre.
     *
     * @param string $titre
     *
     * @return Message
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre.
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set utilisateur.
     *
     * @param \Utilisateur|null $utilisateur
     *
     * @return Message
     */
    public function setUtilisateur(\Utilisateur $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur.
     *
     * @return \Utilisateur|null
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}
