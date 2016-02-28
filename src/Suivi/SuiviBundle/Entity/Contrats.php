<?php

namespace Suivi\SuiviBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrats
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Suivi\SuiviBundle\Entity\ContratsRepository")
 */
class Contrats
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
     * @var string
     *
     * @ORM\Column(name="raison_social", type="string", length=255)
     */
    private $raisonSocial;

    /**
     * @var integer
     *
     * @ORM\Column(name="n_cin", type="integer")
     */
    private $nCin;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="ligne", type="integer")
     */
    private $ligne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date")
     */
    private $dateFin;

    

    /**
     * @var float
     *
     * @ORM\Column(name="montant_forfait", type="float")
     */
    private $montantForfait;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_facture", type="integer")
     */
    private $nbreFacture;
/**
     *
     *@ORM\ManyToOne(targetEntity="Produit",inversedBy="contrat", cascade={"remove", "persist"})
     *@ORM\JoinColumn(name="prod_id", referencedColumnName="id")
     */
	 
    protected  $prod;
    
     /**
     * @ORM\OneToMany(targetEntity="Factures", mappedBy="contrat", cascade={"remove", "persist"})
     */
    protected $facture;
    
  /**
     * Set prod
     *
     * @param \Suivi\SuiviBundle\Entity\Produit $prod
     * @return Produits
     */
    public function setProd(\Suivi\SuiviBundle\Entity\Produit $prod = null)
    {
        $this->prod = $prod;

        return $this;
    }

    /**
     * Get prod
     * @return \Suivi\SuiviBundle\Entity\Produit 
     */
    public function getProd()
    {
        return $this->prod;
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

    /**
     * Set raisonSocial
     *
     * @param string $raisonSocial
     *
     * @return Contrats
     */
    public function setRaisonSocial($raisonSocial)
    {
        $this->raisonSocial = $raisonSocial;

        return $this;
    }

    /**
     * Get raisonSocial
     *
     * @return string
     */
    public function getRaisonSocial()
    {
        return $this->raisonSocial;
    }

    /**
     * Set nCin
     *
     * @param integer $nCin
     *
     * @return Contrats
     */
    public function setNCin($nCin)
    {
        $this->nCin = $nCin;

        return $this;
    }

    /**
     * Get nCin
     *
     * @return integer
     */
    public function getNCin()
    {
        return $this->nCin;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Contrats
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ligne
     *
     * @param integer $ligne
     *
     * @return Contrats
     */
    public function setLigne($ligne)
    {
        $this->ligne = $ligne;

        return $this;
    }

    /**
     * Get ligne
     *
     * @return integer
     */
    public function getLigne()
    {
        return $this->ligne;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Contrats
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Contrats
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set produit
     *
     * @param string $produit
     *
     * @return Contrats
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return string
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set montantForfait
     *
     * @param float $montantForfait
     *
     * @return Contrats
     */
    public function setMontantForfait($montantForfait)
    {
        $this->montantForfait = $montantForfait;

        return $this;
    }

    /**
     * Get montantForfait
     *
     * @return float
     */
    public function getMontantForfait()
    {
        return $this->montantForfait;
    }

    /**
     * Set nbreFacture
     *
     * @param integer $nbreFacture
     *
     * @return Contrats
     */
    public function setNbreFacture($nbreFacture)
    {
        $this->nbreFacture = $nbreFacture;

        return $this;
    }

    /**
     * Get nbreFacture
     *
     * @return integer
     */
    public function getNbreFacture()
    {
        return $this->nbreFacture;
    }
    /**
     *
     *@ORM\ManyToOne(targetEntity="Contact",inversedBy="contrat", cascade={"remove", "persist"})
     *@ORM\JoinColumn(name="contact_id", referencedColumnName="id")
     */
	 
    protected  $contact;

    /**
     * Set contact
     *
     * @param \Suivi\SuiviBundle\Entity\Contact $contact
     * @return Contrats
     */
    public function setContact(\Suivi\SuiviBundle\Entity\Contact $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return \Suivi\SuiviBundle\Entity\Contact 
     */
    public function getContact()
    {
        return $this->contact;
    }
}

