<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * estado_solicitud
 *
 * @ORM\Table(name="estado_solicitud")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\estado_solicitudRepository")
 */
class estado_solicitud
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
     * @var int
     *
     * @ORM\Column(name="solicitud_id", type="integer", nullable=true)
     */
    private $solicitudId;

    /**
     * @var int
     *
     * @ORM\Column(name="usuaario_id", type="integer", nullable=true)
     */
    private $usuaarioId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var int
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado;


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
     * Set solicitudId
     *
     * @param integer $solicitudId
     *
     * @return estado_solicitud
     */
    public function setSolicitudId($solicitudId)
    {
        $this->solicitudId = $solicitudId;

        return $this;
    }

    /**
     * Get solicitudId
     *
     * @return int
     */
    public function getSolicitudId()
    {
        return $this->solicitudId;
    }

    /**
     * Set usuaarioId
     *
     * @param integer $usuaarioId
     *
     * @return estado_solicitud
     */
    public function setUsuaarioId($usuaarioId)
    {
        $this->usuaarioId = $usuaarioId;

        return $this;
    }

    /**
     * Get usuaarioId
     *
     * @return int
     */
    public function getUsuaarioId()
    {
        return $this->usuaarioId;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return estado_solicitud
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return estado_solicitud
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return int
     */
    public function getEstado()
    {
        return $this->estado;
    }
}

