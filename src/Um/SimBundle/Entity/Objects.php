<?php
# src/Um/SimBundle/Entity/Objects.php
namespace Um\SimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="objects")
 */
class Objects
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
	 * @ORM\Column(type="string", length=100)
	 */
	protected $name;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $address;
}