<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntProcedimientoEstablecimiento
 *
 * @ORM\Table(name="mnt_procedimiento_establecimiento", indexes={@ORM\Index(name="IDX_D5FA33335CB4216A", columns={"id_area"}), @ORM\Index(name="IDX_D5FA3333B849D575", columns={"id_ciq"}), @ORM\Index(name="IDX_D5FA33337DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_D5FA3333DCF905A", columns={"id_rango_horas"})})
 * @ORM\Entity
 */
class MntProcedimientoEstablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_procedimiento_establecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="techo_maximo", type="integer", nullable=true)
     */
    private $techoMaximo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_a_cupo", type="integer", nullable=true)
     */
    private $cantidadACupo;

    /**
     * @var integer
     *
     * @ORM\Column(name="tiempo_previo", type="integer", nullable=true)
     */
    private $tiempoPrevio;

    /**
     * @var integer
     *
     * @ORM\Column(name="dia", type="integer", nullable=true)
     */
    private $dia;

    /**
     * @var integer
     *
     * @ORM\Column(name="yrs", type="integer", nullable=true)
     */
    private $yrs;

    /**
     * @var \MntAreaModEstab
     *
     * @ORM\ManyToOne(targetEntity="MntAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_area", referencedColumnName="id")
     * })
     */
    private $idArea;

    /**
     * @var \CtlCiq
     *
     * @ORM\ManyToOne(targetEntity="CtlCiq")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ciq", referencedColumnName="id")
     * })
     */
    private $idCiq;

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
     * @var \MntRangoHoras
     *
     * @ORM\ManyToOne(targetEntity="MntRangoHoras")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rango_horas", referencedColumnName="id")
     * })
     */
    private $idRangoHoras;


}
