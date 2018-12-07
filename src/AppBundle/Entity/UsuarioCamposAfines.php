<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuarioCamposAfines
 *
 * @ORM\Table(name="usuario_campos_afines")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\usuarioCamposAfinesRepository")
 */
class UsuarioCamposAfines
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
     * @var CamposAfines
     * @ORM\ManyToOne(targetEntity="CamposAfines", inversedBy="CamposAfinesUsuarios")
     * @ORM\JoinColumn(name="campo_afine", referencedColumnName="id")
     */
    private $CampoAfine;
    /**
     * @var Usuario
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="UsuariosCamposAfines")
     * @ORM\JoinColumn(name="usuario", referencedColumnName="id")
     */
    private $usuario;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

