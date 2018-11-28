<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * solicitud_notas
 *
 * @ORM\Table(name="solicitud_notas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\solicitud_notasRepository")
 */
class solicitud_notas
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
     * @var string
     *
     * @ORM\Column(name="nota", type="string", length=500, nullable=true)
     */
    private $nota;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var int
     *
     * @ORM\Column(name="usuario_id", type="integer", nullable=true)
     */
    private $usuarioId;


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
     * @return solicitud_notas
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
     * Set nota
     *
     * @param string $nota
     *
     * @return solicitud_notas
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return solicitud_notas
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
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return solicitud_notas
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    /**
     * Get usuarioId
     *
     * @return int
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }
}

