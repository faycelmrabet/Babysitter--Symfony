<?php

namespace Bs\FrontOfficeBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Evenement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEvenement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevenement;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEvenement", type="string", length=255, nullable=false)
     */
    private $nomevenement;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuEvenement", type="string", length=255, nullable=false)
     */
    private $lieuevenement;

    /**
     * @var string
     *
     * @ORM\Column(name="dateEvenement", type="date", length=50, nullable=false)
     */
    private $dateevenement;

    /**
     * @var string
     *
     * @ORM\Column(name="organisateur", type="string", length=255, nullable=false)
     */
    private $organisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbreVisiteur", type="integer", nullable=false)
     */
    private $nbrevisiteur;
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
        return 'uploads/documents';
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
        $this->file->move($this->getUploadRootDir(), $this->idevenement . '.' . $this->file->guessExtension());

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
        return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->idevenement . '.' . $this->path;
    }



    /**
     * Get idevenement
     *
     * @return integer 
     */
    public function getIdevenement()
    {
        return $this->idevenement;
    }

    /**
     * Set nomevenement
     *
     * @param string $nomevenement
     * @return Evenement
     */
    public function setNomevenement($nomevenement)
    {
        $this->nomevenement = $nomevenement;

        return $this;
    }

    /**
     * Get nomevenement
     *
     * @return string 
     */
    public function getNomevenement()
    {
        return $this->nomevenement;
    }

    /**
     * Set lieuevenement
     *
     * @param string $lieuevenement
     * @return Evenement
     */
    public function setLieuevenement($lieuevenement)
    {
        $this->lieuevenement = $lieuevenement;

        return $this;
    }

    /**
     * Get lieuevenement
     *
     * @return string 
     */
    public function getLieuevenement()
    {
        return $this->lieuevenement;
    }

    /**
     * Set dateevenement
     *
     * @param string $dateevenement
     * @return Evenement
     */
    public function setDateevenement($dateevenement)
    {
        $this->dateevenement = $dateevenement;

        return $this;
    }

    /**
     * Get dateevenement
     *
     * @return string 
     */
    public function getDateevenement()
    {
        return $this->dateevenement;
    }

    /**
     * Set organisateur
     *
     * @param string $organisateur
     * @return Evenement
     */
    public function setOrganisateur($organisateur)
    {
        $this->organisateur = $organisateur;

        return $this;
    }

    /**
     * Get organisateur
     *
     * @return string 
     */
    public function getOrganisateur()
    {
        return $this->organisateur;
    }

    /**
     * Set nbrevisiteur
     *
     * @param integer $nbrevisiteur
     * @return Evenement
     */
    public function setNbrevisiteur($nbrevisiteur)
    {
        $this->nbrevisiteur = $nbrevisiteur;

        return $this;
    }

    /**
     * Get nbrevisiteur
     *
     * @return integer 
     */
    public function getNbrevisiteur()
    {
        return $this->nbrevisiteur;
    }
    public function getPath() {
        return $this->path;
    }


}
