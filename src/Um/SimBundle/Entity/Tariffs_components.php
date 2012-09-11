<?php
# src/Um/SimBundle/Entity/Tariffs_components.php

namespace Um\SimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tariffs_components")
 */
class Tariffs_components
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="Tariffs")
	 * @ORM\JoinColumn(name="tariff_id", referencedColumnName="id", nullable=false)
	 */
	protected $tariff;

	/**
	 * @ORM\ManyToOne(targetEntity="Tariffs_types")
	 * @ORM\JoinColumn(name="type_id", referencedColumnName="id", nullable=false)
	 */
	protected $type;

	/**
	 * @ORM\ManyToOne(targetEntity="Mediums")
	 * @ORM\JoinColumn(name="medium_id", referencedColumnName="id", nullable=false)
	 */
	protected $medium;
	
	/**
	 * @ORM\Column(type="string", length=255, nullable=false)
	 */
	protected $name;
	
	/**
	 * @ORM\Column(type="string", length=10)
	 */
	protected $unit;

	/**
	 * @ORM\Column(type="date")
	 */
	protected $mandatory_date;

	/**
	 * @ORM\Column(type="decimal", precision=10, scale=4)
	 */
	protected $price_per_unit;

	/**
	 * @ORM\Column(type="integer")
	 */
	protected $vat;

	/**
	 * @ORM\Column(type="decimal", precision=10, scale=4)
	 */
	protected $multiplier;

	/**
	 * @ORM\Column(type="boolean")
	 */
	protected $archival;

}