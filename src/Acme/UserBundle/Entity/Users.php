<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
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
     * @ORM\Column(name="deck", type="integer", nullable=false)
     */
    private $deck;

    /**
     * @var string
     *
     * @ORM\Column(name="oauth_uid", type="string", length=100, nullable=false)
     */
    private $oauthUid;

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
     * @var \DateTime
     *
     * @ORM\Column(name="FechaIngreso", type="datetime", nullable=false)
     */
    private $fechaingreso = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo", type="integer", nullable=false)
     */
    private $tipo;


}

