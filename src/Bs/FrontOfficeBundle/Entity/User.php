<?php

namespace Bs\FrontOfficeBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom="";
    
    /**
* 
* @ORM\Column(type="integer")
* 
 * 
 */
protected $facebookId=0;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom="";

    /**
     * @var string
     *
     * @ORM\Column(name="dateNaissance", type="string", length=50, nullable=true)
     * 
     *  @Assert\Date()
     */
    private $datenaissance="";

    /**
     * @var integer
     *
     * @ORM\Column(name="cin", type="integer", nullable=false)
     */
    private $cin=0;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse="";

    /**
     * @var string
     *
     * @ORM\Column(name="codePostale", type="string", length=255, nullable=false)
     */
    private $codepostale=0;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=false)
     */
    private $telephone=0;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbreEnfant", type="integer", nullable=true)
     */
    private $nbreenfant=0;

    /**
     * @var string
     *
     * @ORM\Column(name="typeUser", type="string", length=255, nullable=false)
     */
    private $typeuser="";

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat=0;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    private $note=0;



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
     * @return User
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
     * @return User
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
     * Set datenaissance
     *
     * @param string $datenaissance
     * @return User
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return string 
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set cin
     *
     * @param integer $cin
     * @return User
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return integer 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return User
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
     * Set codepostale
     *
     * @param string $codepostale
     * @return User
     */
    public function setCodepostale($codepostale)
    {
        $this->codepostale = $codepostale;

        return $this;
    }

    /**
     * Get codepostale
     *
     * @return string 
     */
    public function getCodepostale()
    {
        return $this->codepostale;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set nbreenfant
     *
     * @param integer $nbreenfant
     * @return User
     */
    public function setNbreenfant($nbreenfant)
    {
        $this->nbreenfant = $nbreenfant;

        return $this;
    }

    /**
     * Get nbreenfant
     *
     * @return integer 
     */
    public function getNbreenfant()
    {
        return $this->nbreenfant;
    }

    /**
     * Set typeuser
     *
     * @param string $typeuser
     * @return User
     */
    public function setTypeuser($typeuser)
    {
        $this->typeuser = $typeuser;

        return $this;
    }

    /**
     * Get typeuser
     *
     * @return string 
     */
    public function getTypeuser()
    {
        return $this->typeuser;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     * @return User
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return User
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }
    public function getFacebookId() {
        return $this->facebookId;
    }

    public function setFacebookId($facebookId) {
        $this->facebookId = $facebookId;
    }

        public function __toString() {
        return $this->nom." ".$this->prenom;
    }
}
