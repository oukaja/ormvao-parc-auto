<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Fournisseur;

/**
 * Acquisition
 *
 * @ORM\Table(name="acquisition")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AcquisitionRepository")
 * @Vich\Uploadable
 */
class Acquisition
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=255)
     */
    private $ref;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAcq", type="date")
     */
    private $dateAcq;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="voie", type="string", length=255)
     */
    private $voie;

     /**
     * @ORM\ManyToOne(targetEntity="Fournisseur", inversedBy="acquisitions")
     */
    private $fournisseur;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $file;

    /**
     * @Vich\UploadableField(mapping="pdf", fileNameProperty="file")
     * @var File
     */
    private $filename;

    /**
     * @ORM\OneToMany(targetEntity="Vehicule", mappedBy="acquisition")
     */
    private $vehicules;

    public function __construct()
    {
        $this->vehicules = new ArrayCollection();
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $pdf
     *
     * @return pdf
    */
    public function setFilename(File $pdf = null)
    {
        $this->filename = $pdf;

        if ($pdf) 
            $this->updatedAt = new \DateTimeImmutable();
        
        return $this;
    }

    /**
     * @return File|null
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set file
     *
     * @param string $file
     *
     * @return Acquisition
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }


    /**
     * Get fournisseur
     *
     * @return \AppBundle\Entity\Fournisseur
     */
    public function getFournisseur() {
        return $this->fournisseur;
    }

    /**
     * Set produit
     *
     * @param \AppBundle\Entity\Fournisseur$fournisseur
     * @return Acquisition
     */
    public function setFournisseur(\AppBundle\Entity\Fournisseur $fournisseur = null) {
        $this->fournisseur = $fournisseur;
        return $this;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ref
     *
     * @param string $ref
     *
     * @return Acquisition
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set dateAcq
     *
     * @param \DateTime $dateAcq
     *
     * @return Acquisition
     */
    public function setDateAcq($dateAcq)
    {
        $this->dateAcq = $dateAcq;

        return $this;
    }

    /**
     * Get dateAcq
     *
     * @return \DateTime
     */
    public function getDateAcq()
    {
        return $this->dateAcq;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return Acquisition
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set voie
     *
     * @param string $voie
     *
     * @return Acquisition
     */
    public function setVoie($voie)
    {
        $this->voie = $voie;

        return $this;
    }

    /**
     * Get voie
     *
     * @return string
     */
    public function getVoie()
    {
        return $this->voie;
    }

    public function __toString()
    {
        return $this->getRef();
    }

}

