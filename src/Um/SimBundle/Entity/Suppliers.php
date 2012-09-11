<?php
# src/Um/SimBundle/Entity/Suppliers.php

namespace Um\SimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="suppliers")
 */
class Suppliers
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="Mediums")
	 * @ORM\JoinColumn(name="medium_id", referencedColumnName="id")
	 */
	protected $medium;

	/**
	 * @ORM\Column(type="string", length=150)
	 */
	protected $name;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $address;

}