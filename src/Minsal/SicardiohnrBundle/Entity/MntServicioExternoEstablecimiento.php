<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntServicioExternoEstablecimiento
 *
 * @ORM\Table(name="mnt_servicio_externo_establecimiento", indexes={@ORM\Index(name="IDX_6C7E62007DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_6C7E620088863BBD", columns={"id_servicio_externo"})})
 * @ORM\Entity
 */
class MntServicioExternoEstablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_servicio_externo_establecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;

    /**
     * @var \CtlServicioExterno
     *
     * @ORM\ManyToOne(targetEntity="CtlServicioExterno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_servicio_externo", referencedColumnName="id")
     * })
     */
    private $idServicioExterno;


}
