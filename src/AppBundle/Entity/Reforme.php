<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reforme
 *
 * @ORM\Table(name="reforme")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReformeRepository")
 */
class Reforme
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateproposition", type="date")
     */
    private $dateproposition;

    /**
     * @var string
     *
     * @ORM\Column(name="motif", type="text")
     */
    private $motif;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity="Vehicule", inversedBy="proposition")
     */
    private $vehicule;

    /**
     * @ORM\OneToMany(targetEntity="Decision", mappedBy="decision")
     */
    private $decision;

    public function __construct()
    {
        $this->decision = new ArrayCollection();
    }

        /**
     * Get Vehicule
     *
     * @return \AppBundle\Entity\Vehicule
     */
    public function getVehicule() {
        return $this->vehicule;
    }

    /**
     * Set produit
     *
     * @param \AppBundle\Entity\Vehicule$vehicule
     * @return Reforme
     */
    public function setVehicule(\AppBundle\Entity\Vehicule $vehicule = null) {
        $this->vehicule = $vehicule;
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
     * Set dateproposition
     *
     * @param \DateTime $dateproposition
     *
     * @return Reforme
     */
    public function setDateproposition($dateproposition)
    {
        $this->dateproposition = $dateproposition;

        return $this;
    }

    /**
     * Get dateproposition
     *
     * @return \DateTime
     */
    public function getDateproposition()
    {
        return $this->dateproposition;
    }

    /**
     * Set motif
     *
     * @param string $motif
     *
     * @return Reforme
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string
     */
    public function getMotif()
    {
        return $this->motif;
    }

     /**
     * Set motif
     *
     * @param boolean $etat
     *
     * @return Reforme
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get motif
     *
     * @return boolean
     */
    public function getEtat()
    {
        return $this->etat;
    }

    public function __toString()
    {
        return (string) $this->getId();
    }
}

