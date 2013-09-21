<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabExamenEstablecimiento
 *
 * @ORM\Table(name="lab_examen_establecimiento", indexes={@ORM\Index(name="IDX_60C8941A201643FA", columns={"id_establacimiento"}), @ORM\Index(name="IDX_60C8941A777B3A01", columns={"id_examen"})})
 * @ORM\Entity
 */
class LabExamenEstablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lab_examen_establecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="condicion", type="string", nullable=true)
     */
    private $condicion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_formulario", type="integer", nullable=true)
     */
    private $idFormulario;

    /**
     * @var string
     *
     * @ORM\Column(name="id_estandar_rep", type="string", nullable=true)
     */
    private $idEstandarRep;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_suministro", type="string", nullable=true)
     */
    private $codigoSuministro;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establacimiento", referencedColumnName="id")
     * })
     */
    private $idEstablacimiento;

    /**
     * @var \LabExamen
     *
     * @ORM\ManyToOne(targetEntity="LabExamen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_examen", referencedColumnName="id")
     * })
     */
    private $idExamen;


}
