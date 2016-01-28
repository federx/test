<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deck
 *
 * @ORM\Table(name="deck")
 * @ORM\Entity
 */
class Deck
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
     * @ORM\Column(name="CuentaOrigen", type="string", length=50, nullable=false)
     */
    private $cuentaorigen;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreDeLaApp", type="string", length=100, nullable=false)
     */
    private $nombredelaapp;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre del Deck", type="string", length=250, nullable=false)
     */
    private $nombreDelDeck;

    /**
     * @var string
     *
     * @ORM\Column(name="APIkey", type="string", length=250, nullable=false)
     */
    private $apikey;

    /**
     * @var string
     *
     * @ORM\Column(name="APISecret", type="string", length=250, nullable=false)
     */
    private $apisecret;

    /**
     * @var integer
     *
     * @ORM\Column(name="MinDeck", type="integer", nullable=false)
     */
    private $mindeck;

    /**
     * @var integer
     *
     * @ORM\Column(name="RTxH", type="integer", nullable=false)
     */
    private $rtxh;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaCreacion", type="datetime", nullable=false)
     */
    private $fechacreacion = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaDeProceso", type="date", nullable=false)
     */
    private $fechadeproceso;


}

