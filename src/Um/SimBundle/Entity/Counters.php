<?php
# src/Um/SimBundle/Entity/Counters.php

namespace Um\SimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="counters")
 */
class Counters
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="Collection_points")
	 * @ORM\JoinColumn(name="collection_point_id", referencedColumnName="id", nullable=false)
	 */
	protected $collection_point;

	/**
	 * @ORM\ManyToOne(targetEntity="Mediums")
	 * @ORM\JoinColumn(name="medium_id", referencedColumnName="id", nullable=false)
	 */
	protected $medium;

	/**
	 * @ORM\Column(type="string", length=255, nullable=false)
	 */
	protected $symbol;

	/**
	 * @ORM\Column(type="string", length=10, nullable=false)
	 */
	protected $unit;

	/**
	 * @ORM\Column(type="decimal", precision=10, scale=4)
	 */
	protected $initial_state;

	/**
	 * @ORM\Column(type="date")
	 */
	protected $installation_date;

	/**
	 * @ORM\Column(type="boolean")
	 */
	protected $archival;

}