<?php

namespace Suivi\SuiviBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factures
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Suivi\SuiviBundle\Entity\FacturesRepository")
 */
class Factures
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

 /**
     *
     *@ORM\ManyToOne(targetEntity="Contrats",inversedBy="facture", cascade={"remove", "persist"})
     *@ORM\JoinColumn(name="contrat_id", referencedColumnName="id")
     */
	 
    protected  $contrat;
    
    /**
     * Set contrat
     *
     * @param \Suivi\SuiviBundle\Entity\Contrats $contrat
     * @return Factures
     */
    public function setContart(\Suivi\SuiviBundle\Entity\Contrats $contrat = null)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return \Suivi\SuiviBundle\Entity\Contrats
     */
    public function getContrat()
    {
        return $this->contrat;
    }
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

