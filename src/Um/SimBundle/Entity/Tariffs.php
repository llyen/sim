<?php
# src/Um/SimBundle/Entity/Tariffs.php

namespace Um\SimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tariffs")
 */
class Tariffs
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="Tariffs_types")
	 * @ORM\JoinColumn(name="type_id", referencedColumnName="id", nullable=false)
	 */
	protected $type;

	/**
	 * @ORM\ManyToOne(targetEntity="Suppliers")
	 * @ORM\JoinColumn(name="supplier_id", referencedColumnName="id")
	 */
	protected $supplier;

	/**
	 * @ORM\Column(type="string", length=255, nullable=false)
	 */
	protected $name;

	/**
	 * @ORM\Column(type="date")
	 */
	protected $mandatory_date;

}