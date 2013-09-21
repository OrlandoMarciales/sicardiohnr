<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecSolicitudestudios
 *
 * @ORM\Table(name="sec_solicitudestudios", indexes={@ORM\Index(name="pide_fk", columns={"idhistorialclinico"})})
 * @ORM\Entity
 */
class SecSolicitudestudios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idsolicitudestudio", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_solicitudestudios_idsolicitudestudio_seq", allocationSize=1, initialValue=1)
     */
    private $idsolicitudestudio;

    /**
     * @var string
     *
     * @ORM\Column(name="solicitudestudioestado", type="string", nullable=true)
     */
    private $solicitudestudioestado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="solicitudestudiofecha", type="date", nullable=true)
     */
    private $solicitudestudiofecha;

    /**
     * @var \SecHistorialClinico
     *
     * @ORM\ManyToOne(targetEntity="SecHistorialClinico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idhistorialclinico", referencedColumnName="idhistorialclinico")
     * })
     */
    private $idhistorialclinico;


}
