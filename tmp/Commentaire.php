<?php



/**
 * Commentaire
 */
class Commentaire
{
    /**
     * @var int
     */
    private $id_commentaire;

    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var \DateTime
     */
    private $dateTime;

    /**
     * @var \Utilisateur
     */
    private $user;

    /**
     * @var \Message
     */
    private $message;


    /**
     * Get idCommentaire.
     *
     * @return int
     */
    public function getIdCommentaire()
    {
        return $this->id_commentaire;
    }

    /**
     * Set commentaire.
     *
     * @param string $commentaire
     *
     * @return Commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire.
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set dateTime.
     *
     * @param \DateTime $dateTime
     *
     * @return Commentaire
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Get dateTime.
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Set user.
     *
     * @param \Utilisateur|null $user
     *
     * @return Commentaire
     */
    public function setUser(\Utilisateur $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \Utilisateur|null
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set message.
     *
     * @param \Message|null $message
     *
     * @return Commentaire
     */
    public function setMessage(\Message $message = null)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message.
     *
     * @return \Message|null
     */
    public function getMessage()
    {
        return $this->message;
    }
}
