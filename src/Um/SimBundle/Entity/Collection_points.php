<?php
# src/Um/SimBundle/Entity/Collection_points.php

namespace Um\SimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="collection_points")
 */
class Collection_points
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="Objects")
	 * @ORM\JoinColumn(name="object_id", referencedColumnName="id")
	 */
	protected $object;

	/**
	 * @ORM\Column(type="string", length=255, nullable=false, unique=true)
	 */
	protected $symbol;

	/**
	 * @ORM\Column(type="decimal", precision=10, scale=4, nullable=true)
	 */
	protected $multiplicand;
}