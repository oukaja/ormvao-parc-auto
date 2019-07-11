<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Decision
 *
 * @ORM\Table(name="decision")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DecisionRepository")
 * @Vich\Uploadable
 */
class Decision
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
     * @ORM\Column(name="numdecision", type="string", length=255)
     */
    private $numdecision;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datereforme", type="date")
     */
    private $datereforme;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datevente", type="date")
     */
    private $datevente;

    /**
     * @var string
     *
     * @ORM\Column(name="acquirreur", type="text")
     */
    private $acquirreur;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity="Reforme", inversedBy="decision")
     */
    private $reforme;

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
     * Get Vehicule
     *
     * @return \AppBundle\Entity\Reforme
     */
    public function getReforme() {
        return $this->reforme;
    }

    /**
     * Set produit
     *
     * @param \AppBundle\Entity\Reforme$reforme
     * @return Decision
     */
    public function setReforme(\AppBundle\Entity\Reforme $reforme = null) {
        $this->reforme = $reforme;
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
     * Set numdecision
     *
     * @param string $numdecision
     *
     * @return Decision
     */
    public function setNumdecision($numdecision)
    {
        $this->numdecision = $numdecision;

        return $this;
    }

    /**
     * Get numdecision
     *
     * @return string
     */
    public function getNumdecision()
    {
        return $this->numdecision;
    }

    /**
     * Set datereforme
     *
     * @param \DateTime $datereforme
     *
     * @return Decision
     */
    public function setDatereforme($datereforme)
    {
        $this->datereforme = $datereforme;

        return $this;
    }

    /**
     * Get datereforme
     *
     * @return \DateTime
     */
    public function getDatereforme()
    {
        return $this->datereforme;
    }

    /**
     * Set datevente
     *
     * @param \DateTime $datevente
     *
     * @return Decision
     */
    public function setDatevente($datevente)
    {
        $this->datevente = $datevente;

        return $this;
    }

    /**
     * Get datevente
     *
     * @return \DateTime
     */
    public function getDatevente()
    {
        return $this->datevente;
    }

    /**
     * Set acquirreur
     *
     * @param string $acquirreur
     *
     * @return Decision
     */
    public function setAcquirreur($acquirreur)
    {
        $this->acquirreur = $acquirreur;

        return $this;
    }

    /**
     * Get acquirreur
     *
     * @return string
     */
    public function getAcquirreur()
    {
        return $this->acquirreur;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Decision
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }
}

