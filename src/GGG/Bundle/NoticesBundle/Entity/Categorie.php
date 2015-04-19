<?php

namespace GGG\Bundle\NoticesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Categorie
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="GGG\Bundle\NoticesBundle\Entity\CategorieRepository")
 */
class Categorie
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
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="GGG\Bundle\NoticesBundle\Entity\Appareil", mappedBy="appareils")
     */
    private $appareils;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


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
     * @return Categorie
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
     * @param Appareil $appareil
     * @return boolean
     */
    public function addAppareil(Appareil $appareil){
      return array_push($this->appareil,$apapreil);
    }

    /**
     * @param Appareil $appareil
     * @return boolean
     */
    public function removeAppareil(Appareil $appareil){
        return $this->appareil->removeElement($appareil);
    }

    /**
     * @return ArrayCollection
     */
    public function getAppareils(){
        return $this->appareils;
    }

}