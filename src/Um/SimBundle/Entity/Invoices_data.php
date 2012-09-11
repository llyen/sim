<?php
# src/Um/SimBundle/Entity/Invoices_data.php

namespace Um\SimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="invoices_data")
 */
class Invoices_data
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="Invoices")
	 * @ORM\JoinColumn(name="invoice_id", referencedColumnName="id", nullable=false)
	 */
	protected $invoice;

	/**
	 * @ORM\ManyToOne(targetEntity="Tariffs_components")
	 * @ORM\JoinColumn(name="component_id", referencedColumnName="id", nullable=false)
	 */
	protected $component;
	

	/**
	 * @ORM\Column(type="decimal", precision=10, scale=4)
	 */
	protected $value;

}