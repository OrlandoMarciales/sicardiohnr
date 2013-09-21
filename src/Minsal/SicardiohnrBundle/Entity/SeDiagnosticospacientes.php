<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SeDiagnosticospacientes
 *
 * @ORM\Table(name="se_diagnosticospacientes", indexes={@ORM\Index(name="IDX_7B1C0982BF396750", columns={"id"})})
 * @ORM\Entity
 */
class SeDiagnosticospacientes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddiagnostico", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="se_diagnosticospacientes_iddiagnostico_seq", allocationSize=1, initialValue=1)
     */
    private $iddiagnostico;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostico1", type="string", nullable=true)
     */
    private $diagnostico1;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostico2", type="string", nullable=true)
     */
    private $diagnostico2;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostico3", type="string", nullable=true)
     */
    private $diagnostico3;

    /**
     * @var string
     *
     * @ORM\Column(name="procedimientos", type="string", nullable=true)
     */
    private $procedimientos;

    /**
     * @var string
     *
     * @ORM\Column(name="examenesgabinete", type="string", nullable=true)
     */
    private $examenesgabinete;

    /**
     * @var \CtlCie10
     *
     * @ORM\ManyToOne(targetEntity="CtlCie10")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;


}
