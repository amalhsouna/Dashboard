<?php

namespace Suivi\SuiviBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ventes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Suivi\SuiviBundle\Entity\VentesRepository")
 */
class Ventes
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
     * @var float
     *
     * @ORM\Column(name="quantite", type="float")
     */
    private $quantite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

  

    /**
     * @var string
     *
     * @ORM\Column(name="espacett", type="string", length=255)
     */
    private $espacett;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set quantite
     *
     * @param float $quantite
     * @return Ventes
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return float 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Ventes
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Ventes
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set espacett
     *
     * @param string $espacett
     * @return Ventes
     */
    public function setEspacett($espacett)
    {
        $this->espacett = $espacett;

        return $this;
    }

    /**
     * Get espacett
     *
     * @return string 
     */
    public function getEspacett()
    {
        return $this->espacett;
    }
	
	 //jointure
    /**
     * @ORM\ManyToOne(targetEntity="Offres", inversedBy="vent", cascade={"remove"})
     * @ORM\JoinColumn(name="id_offre", referencedColumnName="id",onDelete="SET NULL")
     */

    protected $offres;

    /**
     * Set offres
     *
     * @param \Suivi\SuiviBundle\Entity\Offres $offres
     * @return Offres
     */
    public function setOffrelcle(\Suivi\SuiviBundle\Entity\Offres $offres = null)
    {
        $this->offres = $offres;

        return $this;
    }

    /**
     * Get offres
     *
     * @return \Suivi\SuiviBundle\Entity\Offres
     */
    public function getOffres()
    {
        return $this->offres;
    }
    public function NometPrenom(){

        return $this->quantite;
    }


    public function __construct()
    {

        $this->date = new \Datetime();
       
    }
}
