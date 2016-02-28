<?php

namespace Suivi\SuiviBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Suivi\SuiviBundle\Entity\ContactRepository")
 */
class Contact
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
     * @ORM\Column(name="Nom", type="string", length=150)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Nomentreprise", type="string", length=255)
     */
    private $nomentreprise;
    
    /**
     * @var string
     *
     * @ORM\Column(name="TypeContact", type="string", length=255)
     */
    private $typecontact;
    
     /**
     * @var string
     *
     * @ORM\Column(name="siteweb", type="string", length=255)
     */
    private $siteweb;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer")
     */
    private $tel;
    
    /**
     * @var text
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;
    
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

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
     * Set nom
     *
     * @param string $nom
     * @return Contact
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Contact
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nomentreprise
     *
     * @param string $nomentreprise
     * @return Contact
     */
    public function setNomentreprise($nomentreprise)
    {
        $this->nomentreprise = $nomentreprise;

        return $this;
    }

    /**
     * Get nomentreprise
     *
     * @return string 
     */
    public function getNomentreprise()
    {
        return $this->nomentreprise;
    }
    /**
     * Set typecontact
     *
     * @param string $typecontact
     * @return Contact
     */
    public function setTypecontact($typecontact)
    {
        $this->typecontact = $typecontact;

        return $this;
    }

    /**
     * Get typecontact
     *
     * @return string 
     */
    public function getTypecontact()
    {
        return $this->typecontact;
    }
    
    /**
     * Set siteweb
     *
     * @param string $siteweb
     * @return Contact
     */
    public function setSiteweb($siteweb)
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    /**
     * Get siteweb
     *
     * @return string 
     */
    public function getSiteweb()
    {
        return $this->siteweb;
    }
    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Contact
     */
    public function setAdresse($adresse)
    {
        $this->adresse= $adresse;

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
     * Set tel
     *
     * @param integer $tel
     * @return Contact
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer 
     */
    public function getTel()
    {
        return $this->tel;
    }
    /**
     * Set status
     *
     * @param string $status
     * @return Contact
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getstatus()
    {
        return $this->status;
    }
    /**
     * @ORM\OneToOne(targetEntity="Suivi\SuiviBundle\Entity\Image", cascade={"persist"})
     */
    private $image;
    // Vos autres attributs…

    public function setImage(Image $image = null)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }
    
}
