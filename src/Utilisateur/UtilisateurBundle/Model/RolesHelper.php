<?php


namespace Utilisateur\UtilisateurBundle\Model;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


class RolesHelper
{
    private $rolesHierarchy;

    public function __construct($rolesHierarchy)
    {
        $this->rolesHierarchy = $rolesHierarchy;
    }

    public function getRoles()
    {
        $roles = array();

        array_walk_recursive($this->rolesHierarchy, function($val) use (&$roles) {
            $roles[] = $val;
        });

        return array_unique($roles);
    }
}