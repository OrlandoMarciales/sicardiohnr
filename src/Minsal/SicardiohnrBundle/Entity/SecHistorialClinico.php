<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecHistorialClinico
 *
 * @ORM\Table(name="sec_historial_clinico", uniqueConstraints={@ORM\UniqueConstraint(name="sec_historial_clinico_pk", columns={"idhistorialclinico"})}, indexes={@ORM\Index(name="relaciona_fk", columns={"idexpediente"}), @ORM\Index(name="IDX_B5886216BF396750", columns={"id"}), @ORM\Index(name="IDX_B5886216303771D6", columns={"iddiagnosticopaciente"}), @ORM\Index(name="IDX_B58862163B65793E", columns={"idmtnareamodestable"})})
 * @ORM\Entity
 */
class SecHistorialClinico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idhistorialclinico", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_historial_clinico_idhistorialclinico_seq", allocationSize=1, initialValue=1)
     */
    private $idhistorialclinico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaconsulta", type="date", nullable=true)
     */
    private $fechaconsulta;

    /**
     * @var integer
     *
     * @ORM\Column(name="piloto", type="integer", nullable=true)
     */
    private $piloto;

    /**
     * @var \MntExpediente
     *
     * @ORM\ManyToOne(targetEntity="MntExpediente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    /**
     * @var \SeDiagnosticospacientes
     *
     * @ORM\ManyToOne(targetEntity="SeDiagnosticospacientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddiagnosticopaciente", referencedColumnName="iddiagnostico")
     * })
     */
    private $iddiagnosticopaciente;

    /**
     * @var \MntAtenAreaModEstab
     *
     * @ORM\ManyToOne(targetEntity="MntAtenAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idmtnareamodestable", referencedColumnName="id")
     * })
     */
    private $idmtnareamodestable;

    /**
     * @var \MntExpediente
     *
     * @ORM\ManyToOne(targetEntity="MntExpediente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idexpediente", referencedColumnName="id")
     * })
     */
    private $idexpediente;


}
