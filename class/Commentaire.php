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
    private $commentaire;
   /**
     * @ManyToOne(targetEntity="Utilisateur")
     */
    private $user;
    /**
     * @dateTime @Column(type="date")
     */
    private $dateTime;
     /**
     * @ManyToOne(targetEntity="Message")
     */
    private $message;

    public function setIdCommentaire($idCommentaire)
    {
        $this->id_commentaire = $idCommentaire;

        return $this;
    }

   
    public function getIdCommentaire()
    {
        return $this->id_commentaire;
    }


    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getCommentaire()
    {
        return $this->commentaire;
    }

 
    public function setExtUser($extUser)
    {
        $this->ext_user = $extUser;

        return $this;
    }

  
    public function getExtUser()
    {
        return $this->ext_user;
    }
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    public function getDateTime()
    {
        return $this->dateTime;
    }
    public function setExtMessage($extMessage)
    {
        $this->ext_message = $extMessage;

        return $this;
    }

    public function getExtMessage()
    {
        return $this->ext_message;
    }

}