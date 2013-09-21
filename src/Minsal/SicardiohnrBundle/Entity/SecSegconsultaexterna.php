<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecSegconsultaexterna
 *
 * @ORM\Table(name="sec_segconsultaexterna", uniqueConstraints={@ORM\UniqueConstraint(name="sec_segconsultaexterna_pk", columns={"idseguimiento"})}, indexes={@ORM\Index(name="contiene_fk", columns={"idhistorialclinico"})})
 * @ORM\Entity
 */
class SecSegconsultaexterna
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idseguimiento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_segconsultaexterna_idseguimiento_seq", allocationSize=1, initialValue=1)
     */
    private $idseguimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="control", type="string", nullable=true)
     */
    private $control;

    /**
     * @var string
     *
     * @ORM\Column(name="ingreso", type="string", nullable=true)
     */
    private $ingreso;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alta", type="boolean", nullable=true)
     */
    private $alta;

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
