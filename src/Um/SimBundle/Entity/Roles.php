<?php
# src/Um/SimBundle/Entity/Roles.php
namespace Um\SimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="roles")
 */
class Roles
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;

	/**
	 * @ORM\Column(type="string", length=100, nullable=false)
	 */
	protected $name;
}