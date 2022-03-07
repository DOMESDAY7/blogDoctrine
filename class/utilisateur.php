<?php
/** @Entity */
class Utilisateur{
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
  
}