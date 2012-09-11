<?php
# src/Um/SimBundle/Entity/Users.php
namespace Um\SimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class Users
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
	protected $login;

	/**
	 * @ORM\Column(type="string", length=100, nullable=false)
	 */
	protected $password;
}