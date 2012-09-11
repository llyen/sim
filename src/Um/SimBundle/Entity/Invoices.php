<?php
# src/Um/SimBundle/Entity/Invoices.php

namespace Um\SimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="invoices")
 */
class Invoices
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Tariffs")
	 * @ORM\JoinColumn(name="tariff_id", referencedColumnName="id")
	 */
	protected $tariff;

	/**
	 * @ORM\ManyToOne(targetEntity="Objects")
	 * @ORM\JoinColumn(name="object_id", referencedColumnName="id", nullable=false)
	 */
	protected $object;

	/**
	 * @ORM\ManyToOne(targetEntity="Suppliers")
	 * @ORM\JoinColumn(name="supplier_id", referencedColumnName="id", nullable=false)
	 */
	protected $supplier;

	/**
	 * @ORM\Column(type="date")
	 */
	protected $period_since;

	/**
	 * @ORM\Column(type="date")
	 */
	protected $period_to;

	/**
	 * @ORM\Column(type="date")
	 */
	protected $issue_date;

}