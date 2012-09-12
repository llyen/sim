<?php
# src/Um/SimBundle/Entity/Users.php
namespace Um\SimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="Um\SimBundle\Entity\UsersRepository")
 * @ORM\Table(name="users")
 */
class Users implements UserInterface
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="Units")
	 * @ORM\JoinColumn(name="unit_id", referencedColumnName="id")
	 */
	protected $unit;

	/**
	 * @ORM\ManyToOne(targetEntity="Roles")
	 * @ORM\JoinColumn(name="role_id", referencedColumnName="id", nullable=false)
	 */
	protected $role;

	/**
	 * @ORM\Column(type="string", length=100, nullable=false, unique=true)
	 */
	protected $username;

	/**
	 * @ORM\Column(type="string", length=100, nullable=false)
	 */
	protected $password;

	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $salt;

	/**
	 * @ORM\Column(name="is_active", type="boolean")
	 */
	protected $isActive;


    public function __construct()
    {
        $this->isActive = true;
        $this->salt = md5(uniqid(null, true));
    }

    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @inheritDoc
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array('ROLE_USER');
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {

    }
    
}