<?php

namespace GGG\Bundle\NoticesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appareil
 *
 * @ORM\Table(name="appareils")
 * @ORM\Entity(repositoryClass="GGG\Bundle\NoticesBundle\Entity\AppareilRepository")
 */
class Appareil
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
     * @ORM\ManyToOne(targetEntity="GGG\Bundle\NoticesBundle\Entity\Notice", cascade={"persist", "remove"})
     */
    private $notice;

    /**
     * @ORM\ManyToOne(targetEntity="GGG\Bundle\NoticesBundle\Entity\Categorie", inversedBy="categories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;

    /**
     * @ORM\ManyToOne(targetEntity="GGG\Bundle\NoticesBundle\Entity\Marque", cascade="persist");
     */
    private $marque;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation", type="date")
     */
    private $creation;




    public function construct(){
        $this->setCreation(new \DateTime('NOW'));
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
     * Set nom
     *
     * @param string $nom
     * @return Appareil
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
     * Set photo
     *
     * @param string $photo
     * @return Appareil
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set creation
     *
     * @param \DateTime $creation
     * @return Appareil
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;

        return $this;
    }

    /**
     * Get creation
     *
     * @return \DateTime 
     */
    public function getCreation()
    {
        return $this->creation;
    }


    /**
     * Set notice
     *
     * @param \GGG\Bundle\NoticesBundle\Entity\Notice $notice
     * @return Appareil
     */
    public function setNotice(\GGG\Bundle\NoticesBundle\Entity\Notice $notice = null)
    {
        $this->notice = $notice;

        return $this;
    }

    /**
     * Get notice
     *
     * @return \GGG\Bundle\NoticesBundle\Entity\Notice 
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * Set categorie
     *
     * @param \GGG\Bundle\NoticesBundle\Entity\Categorie $categorie
     * @return Appareil
     */
    public function setCategorie(\GGG\Bundle\NoticesBundle\Entity\Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \GGG\Bundle\NoticesBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set marque
     *
     * @param \GGG\Bundle\NoticesBundle\Entity\Marque $marque
     * @return Appareil
     */
    public function setMarque(\GGG\Bundle\NoticesBundle\Entity\Marque $marque = null)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return \GGG\Bundle\NoticesBundle\Entity\Marque
     */
    public function getMarque()
    {
        return $this->marque;
    }
}
