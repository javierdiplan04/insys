<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * usuario_campos_afin
 *
 * @ORM\Table(name="usuario_campos_afin")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\usuario_campos_afinRepository")
 */
class usuario_campos_afin
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
     * @ORM\Column(name="usuario_id", type="integer", nullable=true)
     */
    private $usuarioId;

    /**
     * @var int
     *
     * @ORM\Column(name="campos_afin_id", type="integer", nullable=true)
     */
    private $camposAfinId;


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
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return usuario_campos_afin
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

    /**
     * Set camposAfinId
     *
     * @param integer $camposAfinId
     *
     * @return usuario_campos_afin
     */
    public function setCamposAfinId($camposAfinId)
    {
        $this->camposAfinId = $camposAfinId;

        return $this;
    }

    /**
     * Get camposAfinId
     *
     * @return int
     */
    public function getCamposAfinId()
    {
        return $this->camposAfinId;
    }
}

