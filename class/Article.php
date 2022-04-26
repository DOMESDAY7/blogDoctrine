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
    /** @texte @Column(type="string",length=55) **/
    private $titre;
    /** @texte @Column(type="string",length=525) **/
    private $miniature;
    /** @texte @Column(type="string",length=525) **/
    private $img1;
    /** @texte @Column(type="string",length=525) **/
    private $img2;
    /**
     * @ManyToOne(targetEntity="SousCategorie")
     * 
     */
    private $sousCategorie;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }
    public function getTitre()
    {
        return $this->titre;
    }
    public function setSousCategorie($sousCategorie)
    {
        $this->sousCategorie = $sousCategorie;

        return $this;
    }
    public function getSousCategorie()
    {
        return $this->sousCategorie;
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

    public function setMiniature($miniature)
    {
        $this->miniature = $miniature;

        return $this;
    }


    public function getMiniature()
    {
        return $this->miniature;
    }

    public function setImg1($img1)
    {
        $this->img1 = $img1;

        return $this;
    }


    public function getImg1()
    {
        return $this->img1;
    }


    public function setImg2($img2)
    {
        $this->img2 = $img2;

        return $this;
    }


    public function getImg2()
    {
        return $this->img2;
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
