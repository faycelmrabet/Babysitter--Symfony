<?php

namespace Bs\FrontOfficeBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Mapping as ORM;

/**
 * Garderie
 *
 * @ORM\Table(name="garderie")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Garderie {

    /**
     * @var integer
     *
     * @ORM\Column(name="idGarderie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgarderie;

    /**
     * @var string
     *
     * @ORM\Column(name="nomGarderie", type="string", length=255, nullable=false)
     */
    private $nomgarderie;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=2000, nullable=false)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="tarif", type="float", precision=10, scale=0, nullable=false)
     */
    private $tarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="codePostale", type="integer", nullable=false)
     */
    private $codepostale;

    /**
     * @var string
     *
     * @ORM\Column(name="nomResponsable", type="string", length=255, nullable=false)
     */
    private $nomresponsable;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;

    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;

    public function getWebPath() {
        return null === $this->path ? null : $this->getUploadDir() . '/' . $this->path;
    }

    protected function getUploadRootDir() {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads/files';
    }

    private $filenameForRemove;

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload() {
        if (null !== $this->file) {
            $this->path = $this->file->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload() {
        if (null === $this->file) {
            return;
        }

        // vous devez lancer une exception ici si le fichier ne peut pas
        // être déplacé afin que l'entité ne soit pas persistée dans la
        // base de données comme le fait la méthode move() de UploadedFile
        $this->file->move($this->getUploadRootDir(), $this->idgarderie . '.' . $this->file->guessExtension());

        unset($this->file);
    }

    /**
     * @ORM\PreRemove()
     */
    public function storeFilenameForRemove() {
        $this->filenameForRemove = $this->getAbsolutePath();
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload() {
        if ($this->filenameForRemove) {
            unlink($this->filenameForRemove);
        }
    }

    public function getAbsolutePath() {
        return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->idgarderie . '.' . $this->path;
    }

    /**
     * Get idgarderie
     *
     * @return integer 
     */
    public function getIdgarderie() {
        return $this->idgarderie;
    }

    /**
     * Set nomgarderie
     *
     * @param string $nomgarderie
     * @return Garderie
     */
    public function setNomgarderie($nomgarderie) {
        $this->nomgarderie = $nomgarderie;

        return $this;
    }

    /**
     * Get nomgarderie
     *
     * @return string 
     */
    public function getNomgarderie() {
        return $this->nomgarderie;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Garderie
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set tarif
     *
     * @param float $tarif
     * @return Garderie
     */
    public function setTarif($tarif) {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return float 
     */
    public function getTarif() {
        return $this->tarif;
    }

    /**
     * Set codepostale
     *
     * @param integer $codepostale
     * @return Garderie
     */
    public function setCodepostale($codepostale) {
        $this->codepostale = $codepostale;

        return $this;
    }

    /**
     * Get codepostale
     *
     * @return integer 
     */
    public function getCodepostale() {
        return $this->codepostale;
    }

    /**
     * Set nomresponsable
     *
     * @param string $nomresponsable
     * @return Garderie
     */
    public function setNomresponsable($nomresponsable) {
        $this->nomresponsable = $nomresponsable;

        return $this;
    }

    /**
     * Get nomresponsable
     *
     * @return string 
     */
    public function getNomresponsable() {
        return $this->nomresponsable;
    }

    /**
     * Set iduser
     *
     * @param \Bs\FrontOfficeBundle\Entity\User $iduser
     * @return Garderie
     */
    public function setIduser(\Bs\FrontOfficeBundle\Entity\User $iduser = null) {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \Bs\FrontOfficeBundle\Entity\User 
     */
    public function getIduser() {
        return $this->iduser;
    }

    public function getPath() {
        return $this->path;
    }

    public function getFile() {
        return $this->file;
    }



}
