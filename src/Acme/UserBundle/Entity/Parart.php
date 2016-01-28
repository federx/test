<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parart
 *
 * @ORM\Table(name="parart")
 * @ORM\Entity
 */
class Parart
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=50, nullable=false)
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="tweet", type="string", length=250, nullable=false)
     */
    private $tweet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="time", nullable=false)
     */
    private $hora;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Realizado", type="boolean", nullable=false)
     */
    private $realizado;


}

