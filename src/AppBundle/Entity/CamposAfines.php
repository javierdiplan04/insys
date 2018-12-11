<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * CamposAfines
 *
 * @ORM\Table(name="campos_afines")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CamposAfines")
 */
class CamposAfines
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity="UsuarioCamposAfines", mappedBy="CampoAfine")
     */
    private $CamposAfinesUsuarios;
    /**
     * @ORM\OneToMany(targetEntity="Solicitud", mappedBy="CampoAfine")
     */
    private $SolicitudCamposAfines;

    public function __construct()
    {
        $this->SolicitudCamposAfines = new ArrayCollection();
        $this->CamposAfinesUsuarios = new ArrayCollection();
    }



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return CamposAfines
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}

