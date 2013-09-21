<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecDetallesolicitudestudio
 *
 * @ORM\Table(name="sec_detallesolicitudestudio", uniqueConstraints={@ORM\UniqueConstraint(name="sec_detallesolicitudestudio_pk", columns={"iddetallesolicitud"})}, indexes={@ORM\Index(name="detalla_fk", columns={"idsolicitudestudio"}), @ORM\Index(name="selecciona_fk", columns={"idlabexamen"})})
 * @ORM\Entity
 */
class SecDetallesolicitudestudio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idseguimiento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idseguimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="idhistorialclinico", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idhistorialclinico;

    /**
     * @var string
     *
     * @ORM\Column(name="control", type="string", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $control;

    /**
     * @var string
     *
     * @ORM\Column(name="ingreso", type="string", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ingreso;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alta", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $alta;

    /**
     * @var integer
     *
     * @ORM\Column(name="iddetallesolicitud", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $iddetallesolicitud;

    /**
     * @var string
     *
     * @ORM\Column(name="estadodetalle", type="string", nullable=true)
     */
    private $estadodetalle;

    /**
     * @var string
     *
     * @ORM\Column(name="indicacion", type="string", nullable=true)
     */
    private $indicacion;

    /**
     * @var \LabExamen
     *
     * @ORM\ManyToOne(targetEntity="LabExamen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idlabexamen", referencedColumnName="id")
     * })
     */
    private $idlabexamen;

    /**
     * @var \SecSolicitudestudios
     *
     * @ORM\ManyToOne(targetEntity="SecSolicitudestudios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsolicitudestudio", referencedColumnName="idsolicitudestudio")
     * })
     */
    private $idsolicitudestudio;


}
