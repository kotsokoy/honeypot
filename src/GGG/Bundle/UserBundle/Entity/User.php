<?php

namespace GGG\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="GGG\Bundle\UserBundle\Entity\UserRepository")
 */
class User implements UserInterface
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, unique=true)
     */
    protected $username;

    /*
    
    il faut que $roles soit de type array dans l'annotation
    sinon probleme avec PDO au moment de l'insertion 
    
    */
    /**
     * @var array
     * 
     * @ORM\Column(name="roles", type="array")
     */
    protected $roles;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=255)
     */
    private $password;


    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation", type="date")
     */
    private $creation;



    public function __construct(){
        $this->roles = array();
    }

    public function eraseCredentials(){
    /*
        a definir si besoin, voire Symfony\Component\Security\Core\User\UserInterface
    */    
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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get nusername
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }
    

    /* 
    On fait tout pour crer un salt aléatoire en piochant au hasard dans une liste de caracteres ($alphabet) 
    En revanche le salt commence toujours par $6$, et est suivi de 16 caractres, comme ça crypt le hash avec sha512
     */

    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt()
    {   
        $alphabet ="4+0854cvbnfSDERFTG7Y8H24534567890(-__)=!:;,nb<wxc(65778fpl*rf+dq,44+7**fjSDFGHJKL_=t=tPOIUYTRCBN§VBNt=y-yihk***aplknazsdfgbnij$(uyaaqsdfghjklzertyuiop^wxcvbn,;:(-_)";
        $salt="$6$";
        $tailleSalt=16;
        for( $i = 0 ; $i < $tailleSalt ; $i++ ){
            $salt.=$alphabet[rand(1,(strlen($alphabet)-1))];
        }
        $this->salt = $salt;
        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }


    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = crypt($password,$this->getSalt());

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get Roles
     *
     * @return array
     */
    public function getRoles(){
        $roles = $this->roles;
        return array_unique($roles);
    }

    /**
     * Set Roles
     *
     * @param string $role
     */
    public function setRoles($role){
        $this->roles[] = $role;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set creation
     *
     * @param \DateTime $creation
     * @return User
     */
    public function setCreation(\DateTime $creation)
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


}
