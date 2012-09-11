<?php
# src/Um/SimBundle/Entity/Units.php
namespace Um\SimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="units")
 */
class Units
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

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $address;
}