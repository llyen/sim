<?php
# src/Um/SimBundle/Entity/Counters_readings.php

namespace Um\SimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="counters_readings")
 */
class Counters_readings
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Counters")
	 * @ORM\JoinColumn(name="counter_id", referencedColumnName="id", nullable=false)
	 */
	protected $counter;
	
	/**
	 * @ORM\Column(type="date", nullable=false)
	 */
	protected $reading_date;
	
	/**
	 * @ORM\Column(type="decimal", precision=10, scale=4, nullable=false)
	 */
	protected $counter_state;
	
	/**
	 * @ORM\Column(type="decimal", precision=10, scale=4, nullable=false)
	 */
	protected $use;

}