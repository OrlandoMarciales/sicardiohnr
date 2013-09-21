<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecIndicacionesconsultaexterna
 *
 * @ORM\Table(name="sec_indicacionesconsultaexterna", uniqueConstraints={@ORM\UniqueConstraint(name="sec_indiesconexter_pk", columns={"idindicacionesconsultaexterna"})}, indexes={@ORM\Index(name="muestra_fk", columns={"idhistorialclinico"})})
 * @ORM\Entity
 */
class SecIndicacionesconsultaexterna
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idindicacionesconsultaexterna", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_indicacionesconsultaexterna_idindicacionesconsultaexterna_seq", allocationSize=1, initialValue=1)
     */
    private $idindicacionesconsultaexterna;

    /**
     * @var string
     *
     * @ORM\Column(name="indicacionesmedicas", type="string", nullable=true)
     */
    private $indicacionesmedicas;

    /**
     * @var string
     *
     * @ORM\Column(name="plantratamiento", type="string", nullable=true)
     */
    private $plantratamiento;

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
