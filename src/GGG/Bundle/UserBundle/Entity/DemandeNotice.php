<?php

namespace GGG\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * DemandeNotice
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GGG\Bundle\UserBundle\Entity\DemandeNoticeRepository")
 */
class DemandeNotice
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
     * @ORM\ManyToOne(targetEntity="GGG\Bundle\NoticesBundle\Entity\Appareil")
     *
     */
    private $appareil;

    /**
     * @ORM\ManyToOne(targetEntity="GGG\Bundle\UserBundle\Entity\User")
     *
     */
    private $user;

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
     * Set user
     *
     * @param \GGG\Bundle\UserBundle\Entity\User $user
     * @return DemandeNotice
     */
    public function setUser(\GGG\Bundle\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \GGG\Bundle\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set appareil
     *
     * @param \GGG\Bundle\NoticesBundle\Entity\Appareil $appareil
     * @return DemandeNotice
     */
    public function setAppareil(\GGG\Bundle\NoticesBundle\Entity\Appareil $appareil = null)
    {
        $this->appareil = $appareil;

        return $this;
    }

    /**
     * Get appareil
     *
     * @return \GGG\Bundle\NoticesBundle\Entity\Appareil 
     */
    public function getAppareil()
    {
        return $this->appareil;
    }
}
