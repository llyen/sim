<?php
# src/Um/SimBundle/Entity/Other_connections.php

namespace Um\SimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="other_connections")
 */
class Other_connections
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="Mediums")
	 * @ORM\JoinColumn(name="medium_id", referencedColumnName="id", nullable=false)
	 */
	protected $medium;

	/**
	 * @ORM\Column(type="string", length=10)
	 */
	protected $unit;

	/**
	 * @ORM\Column(type="decimal", precision=10, scale=4)
	 */
	protected $use;
	
}