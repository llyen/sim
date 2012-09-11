<?php
# src/Um/SimBundle/Entity/Tariffs_components_types.php

namespace Um\SimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tariffs_components_types")
 */
class Tariffs_components_types
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string", length=255, nullable=false)
	 */
	protected $type;
}