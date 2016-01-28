<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity
 */
class Cliente
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
     * @var integer
     *
     * @ORM\Column(name="cliente", type="integer", nullable=false)
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=250, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=50, nullable=false)
     */
    private $telefono;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false)
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="xDia", type="integer", nullable=false)
     */
    private $xdia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="termino", type="date", nullable=false)
     */
    private $termino;

    /**
     * @var string
     *
     * @ORM\Column(name="screen_name", type="string", length=100, nullable=false)
     */
    private $screenName;

    /**
     * @var string
     *
     * @ORM\Column(name="oauth_token", type="string", length=100, nullable=false)
     */
    private $oauthToken;

    /**
     * @var string
     *
     * @ORM\Column(name="oauth_token_secret", type="string", length=100, nullable=false)
     */
    private $oauthTokenSecret;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Programar", type="boolean", nullable=false)
     */
    private $programar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Autorizado", type="boolean", nullable=false)
     */
    private $autorizado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Activado", type="boolean", nullable=false)
     */
    private $activado = '1';


}

