<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * solicitud
 *
 * @ORM\Table(name="solicitud")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\solicitudRepository")
 */
class solicitud
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
     * @ORM\Column(name="titulo", type="string", length=255, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=500, nullable=true)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     *
     */

    private $fecha;

    /**
     * @var Usuario
     *
     * @ORM\Column(name="usuario_solicitante_id")
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="misSolicitudes")
     */
    private $usuarioSolicitanteId;

    /**
     * @var int
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado;

    /**
     * @var int
     *
     * @ORM\Column(name="usuario_asignado_id", type="integer", nullable=true)
     */
    private $usuarioAsignadoId;

    /**
     * @var int
     *
     * @ORM\Column(name="campo_afin_id", type="integer", nullable=true)
     */
    private $campoAfinId;


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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return solicitud
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return solicitud
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

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return solicitud
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
     * Set usuarioSolicitanteId
     *
     * @param integer $usuarioSolicitanteId
     *
     * @return solicitud
     */
    public function setUsuarioSolicitanteId($usuarioSolicitanteId)
    {
        $this->usuarioSolicitanteId = $usuarioSolicitanteId;

        return $this;
    }

    /**
     * Get usuarioSolicitanteId
     *
     * @return int
     */
    public function getUsuarioSolicitanteId()
    {
        return $this->usuarioSolicitanteId;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return solicitud
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

    /**
     * Set usuarioAsignadoId
     *
     * @param integer $usuarioAsignadoId
     *
     * @return solicitud
     */
    public function setUsuarioAsignadoId($usuarioAsignadoId)
    {
        $this->usuarioAsignadoId = $usuarioAsignadoId;

        return $this;
    }

    /**
     * Get usuarioAsignadoId
     *
     * @return int
     */
    public function getUsuarioAsignadoId()
    {
        return $this->usuarioAsignadoId;
    }

    /**
     * Set campoAfinId
     *
     * @param integer $campoAfinId
     *
     * @return solicitud
     */
    public function setCampoAfinId($campoAfinId)
    {
        $this->campoAfinId = $campoAfinId;

        return $this;
    }

    /**
     * Get campoAfinId
     *
     * @return int
     */
    public function getCampoAfinId()
    {
        return $this->campoAfinId;
    }
}

