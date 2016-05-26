<?php
// src/Acme/UserBundle/Entity/User.php

namespace Utilisateur\UtilisateurBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class Utilisateur extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
  
    /**
     * @ORM\Column(type="text",nullable=false)
     */
    protected $espace;
    /**
     * Set espace
     *
     * @param string $espace
     * @return User
     */
    public function setEspace($espace)
    {
        $this->espace = $espace;

        return $this;
    }

    /**
     * Get espace
     *
     * @return string
     */
    public function getEspace()
    {
        return $this->espace;
    }
    
    public function __construct() {
        parent::__construct();
// your own logic
    }

}