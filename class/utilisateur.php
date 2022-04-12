<?php

/** @Entity */
class Utilisateur
{
    /**
     * @id @Column(type="integer") @GeneratedValue
     */
    private $id;
    /**
     * @login @Column(type="string",length=255) 
     */
    private $login;
    /**
     * @passwd @Column(type="string",length=255) 
     */
    private $passwd;
    /**
     * @pseudo @Column(type="string",length=50,nullable=false) 
     * 
     */
    private $pseudo;
    /**
     * @cite @Column(type="text",nullable=true) 
     * 
     */
    private $cite;
    /**
     * @cite_author @Column(type="text",nullable=true) 
     * 
     */
    private $cite_author;
    public function getId()
    {
        return $this->id;
    }


    public function setLogin($login)
    {
        $login = htmlspecialchars($login);
        $this->login = $login;

        return $this;
    }
    

    public function getLogin()
    {
        return $this->login;
    }
    public function setCite_author($cite_author)
    {
        $cite_author = htmlspecialchars($cite_author);
        $this->cite_author = $cite_author;

        return $this;
    }
    

    public function getCite_author()
    {
        return $this->cite_author;
    }
    public function setCite($cite)
    {
        $cite = htmlspecialchars($cite);
        $this->cite = $cite;

        return $this;
    }

    public function getCite()
    {
        return $this->cite;
    }

    public function setPasswd($passwd)
    {
        $passwd = htmlspecialchars($passwd);
        $passwd = password_hash($passwd, PASSWORD_DEFAULT);
        $this->passwd = $passwd;

        return $this;
    }


    public function getPasswd()
    {
        return $this->passwd;
    }
    public function __construct(array $array)
    {
        $this->hydrate($array);
    }
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getPseudo()
    {
        return $this->pseudo;
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
