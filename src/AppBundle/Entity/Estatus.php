<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estatus
 *
 * @ORM\Table(name="estatus")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\estatusRepository")
 */
class Estatus
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
     * @ORM\OneToMany(targetEntity="Solicitud", mappedBy="estatus")
     */
    private $solicitudes;
    /**
     * @ORM\OneToMany(targetEntity="SolicitudNotas", mappedBy="estatus")
     */
    private $SolicitudesEstatus;
    /**
     * @ORM\OneToMany(targetEntity="SolicitudEstatus", mappedBy="estatus")
     */
    private $SolicitudEstatus;
    public function __construct()
    {
        $this->solicitudes = new ArrayCollection();
        $this->SolicitudesEstatus = new ArrayCollection();
        $this->SolicitudEstatus = new ArrayCollection();
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return estatus
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}

