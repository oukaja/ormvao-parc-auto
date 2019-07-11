<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VehiculeRepository")
 */
class Vehicule
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
     * @ORM\Column(name="matricule", type="string", length=255, unique=true)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=255)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=255)
     */
    private $modele;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="chassis", type="string", length=255)
     */
    private $chassis;

    /**
     * @var string
     *
     * @ORM\Column(name="serie", type="string", length=255)
     */
    private $serie;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="inventaire", type="string", length=255)
     */
    private $inventaire;

    /**
     * @var string
     *
     * @ORM\Column(name="places", type="string", length=255)
     */
    private $places;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=255)
     */
    private $couleur;

    /**
     * @var string
     *
     * @ORM\Column(name="longeur", type="string", length=255)
     */
    private $longeur;

    /**
     * @var string
     *
     * @ORM\Column(name="largeur", type="string", length=255)
     */
    private $largeur;

    /**
     * @var string
     *
     * @ORM\Column(name="hauteur", type="string", length=255)
     */
    private $hauteur;

    /**
     * @var string
     *
     * @ORM\Column(name="poidtotal", type="string", length=255)
     */
    private $poidtotal;

    /**
     * @var string
     *
     * @ORM\Column(name="cylindre", type="string", length=255)
     */
    private $cylindre;

    /**
     * @var string
     *
     * @ORM\Column(name="puissancefiscale", type="string", length=255)
     */
    private $puissancefiscale;

    /**
     * @var string
     *
     * @ORM\Column(name="puissancedin", type="string", length=255)
     */
    private $puissancedin;

    /**
     * @var string
     *
     * @ORM\Column(name="rapport", type="string", length=255)
     */
    private $rapport;

    /**
     * @var string
     *
     * @ORM\Column(name="pneuav", type="string", length=255)
     */
    private $pneuav;

    /**
     * @var string
     *
     * @ORM\Column(name="pneuar", type="string", length=255)
     */
    private $pneuar;

    /**
     * @var string
     *
     * @ORM\Column(name="equipement", type="string", length=255)
     */
    private $equipement;

    /**
     * @var string
     *
     * @ORM\Column(name="compteurmax", type="string", length=255)
     */
    private $compteurmax;

    /**
     * @var string
     *
     * @ORM\Column(name="accessoire", type="string", length=255)
     */
    private $accessoire;

     /**
     * @ORM\ManyToOne(targetEntity="Acquisition", inversedBy="vehicules")
     */
    private $acquisition;

    /**
     * @ORM\OneToMany(targetEntity="Reforme", mappedBy="vehicule")
     */
    private $proposition;

    public function __construct()
    {
        $this->proposition = new ArrayCollection();
    }

    /**
     * Get fournisseur
     *
     * @return \AppBundle\Entity\Acquisition
     */
    public function getAcquisition() {
        return $this->acquisition;
    }

    /**
     * Set produit
     *
     * @param \AppBundle\Entity\Acquisition$acquisition
     * @return Acquisition
     */
    public function setAcquisition(\AppBundle\Entity\Acquisition $acquisition = null) {
        $this->acquisition = $acquisition;
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
     * Set matricule
     *
     * @param string $matricule
     *
     * @return Vehicule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Vehicule
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set marque
     *
     * @param string $marque
     *
     * @return Vehicule
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set modele
     *
     * @param string $modele
     *
     * @return Vehicule
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Vehicule
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set chassis
     *
     * @param string $chassis
     *
     * @return Vehicule
     */
    public function setChassis($chassis)
    {
        $this->chassis = $chassis;

        return $this;
    }

    /**
     * Get chassis
     *
     * @return string
     */
    public function getChassis()
    {
        return $this->chassis;
    }

    /**
     * Set serie
     *
     * @param string $serie
     *
     * @return Vehicule
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return string
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Vehicule
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
     * Set inventaire
     *
     * @param string $inventaire
     *
     * @return Vehicule
     */
    public function setInventaire($inventaire)
    {
        $this->inventaire = $inventaire;

        return $this;
    }

    /**
     * Get inventaire
     *
     * @return string
     */
    public function getInventaire()
    {
        return $this->inventaire;
    }

    /**
     * Set places
     *
     * @param string $places
     *
     * @return Vehicule
     */
    public function setPlaces($places)
    {
        $this->places = $places;

        return $this;
    }

    /**
     * Get places
     *
     * @return string
     */
    public function getPlaces()
    {
        return $this->places;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     *
     * @return Vehicule
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set longeur
     *
     * @param string $longeur
     *
     * @return Vehicule
     */
    public function setLongeur($longeur)
    {
        $this->longeur = $longeur;

        return $this;
    }

    /**
     * Get longeur
     *
     * @return string
     */
    public function getLongeur()
    {
        return $this->longeur;
    }

    /**
     * Set largeur
     *
     * @param string $largeur
     *
     * @return Vehicule
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get largeur
     *
     * @return string
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set hauteur
     *
     * @param string $hauteur
     *
     * @return Vehicule
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    /**
     * Get hauteur
     *
     * @return string
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * Set poidtotal
     *
     * @param string $poidtotal
     *
     * @return Vehicule
     */
    public function setPoidtotal($poidtotal)
    {
        $this->poidtotal = $poidtotal;

        return $this;
    }

    /**
     * Get poidtotal
     *
     * @return string
     */
    public function getPoidtotal()
    {
        return $this->poidtotal;
    }

    /**
     * Set cylindre
     *
     * @param string $cylindre
     *
     * @return Vehicule
     */
    public function setCylindre($cylindre)
    {
        $this->cylindre = $cylindre;

        return $this;
    }

    /**
     * Get cylindre
     *
     * @return string
     */
    public function getCylindre()
    {
        return $this->cylindre;
    }

    /**
     * Set puissancefiscale
     *
     * @param string $puissancefiscale
     *
     * @return Vehicule
     */
    public function setPuissancefiscale($puissancefiscale)
    {
        $this->puissancefiscale = $puissancefiscale;

        return $this;
    }

    /**
     * Get puissancefiscale
     *
     * @return string
     */
    public function getPuissancefiscale()
    {
        return $this->puissancefiscale;
    }

    /**
     * Set puissancedin
     *
     * @param string $puissancedin
     *
     * @return Vehicule
     */
    public function setPuissancedin($puissancedin)
    {
        $this->puissancedin = $puissancedin;

        return $this;
    }

    /**
     * Get puissancedin
     *
     * @return string
     */
    public function getPuissancedin()
    {
        return $this->puissancedin;
    }

    /**
     * Set rapport
     *
     * @param string $rapport
     *
     * @return Vehicule
     */
    public function setRapport($rapport)
    {
        $this->rapport = $rapport;

        return $this;
    }

    /**
     * Get rapport
     *
     * @return string
     */
    public function getRapport()
    {
        return $this->rapport;
    }

    /**
     * Set pneuav
     *
     * @param string $pneuav
     *
     * @return Vehicule
     */
    public function setPneuav($pneuav)
    {
        $this->pneuav = $pneuav;

        return $this;
    }

    /**
     * Get pneuav
     *
     * @return string
     */
    public function getPneuav()
    {
        return $this->pneuav;
    }

    /**
     * Set pneuar
     *
     * @param string $pneuar
     *
     * @return Vehicule
     */
    public function setPneuar($pneuar)
    {
        $this->pneuar = $pneuar;

        return $this;
    }

    /**
     * Get pneuar
     *
     * @return string
     */
    public function getPneuar()
    {
        return $this->pneuar;
    }

    /**
     * Set equipement
     *
     * @param string $equipement
     *
     * @return Vehicule
     */
    public function setEquipement($equipement)
    {
        $this->equipement = $equipement;

        return $this;
    }

    /**
     * Get equipement
     *
     * @return string
     */
    public function getEquipement()
    {
        return $this->equipement;
    }

    /**
     * Set compteurmax
     *
     * @param string $compteurmax
     *
     * @return Vehicule
     */
    public function setCompteurmax($compteurmax)
    {
        $this->compteurmax = $compteurmax;

        return $this;
    }

    /**
     * Get compteurmax
     *
     * @return string
     */
    public function getCompteurmax()
    {
        return $this->compteurmax;
    }

    /**
     * Set accessoire
     *
     * @param string $accessoire
     *
     * @return Vehicule
     */
    public function setAccessoire($accessoire)
    {
        $this->accessoire = $accessoire;

        return $this;
    }

    /**
     * Get accessoire
     *
     * @return string
     */
    public function getAccessoire()
    {
        return $this->accessoire;
    }

    public function __toString()
    {
        return $this->getMatricule();
    }
}

