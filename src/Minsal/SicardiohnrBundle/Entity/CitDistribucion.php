<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CitDistribucion
 *
 * @ORM\Table(name="cit_distribucion", indexes={@ORM\Index(name="IDX_714607E890253C7", columns={"id_empleado"}), @ORM\Index(name="IDX_714607EDCF905A", columns={"id_rango_horas"})})
 * @ORM\Entity
 */
class CitDistribucion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer", nullable=true)
     */
    private $codigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_distribucion_medico", type="integer", nullable=true)
     */
    private $idDistribucionMedico;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_consulta", type="integer", nullable=true)
     */
    private $idTipoConsulta;

    /**
     * @var integer
     *
     * @ORM\Column(name="primera", type="smallint", nullable=true)
     */
    private $primera;

    /**
     * @var integer
     *
     * @ORM\Column(name="subsecuente", type="integer", nullable=true)
     */
    private $subsecuente;

    /**
     * @var integer
     *
     * @ORM\Column(name="mes", type="integer", nullable=true)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="yrs", type="integer", nullable=true)
     */
    private $yrs;

    /**
     * @var integer
     *
     * @ORM\Column(name="dia", type="integer", nullable=true)
     */
    private $dia;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_consultorio", type="integer", nullable=true)
     */
    private $idConsultorio;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_atenc_are_mod_estab", type="integer", nullable=true)
     */
    private $idAtencAreModEstab;

    /**
     * @var \MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empleado", referencedColumnName="id")
     * })
     */
    private $idEmpleado;

    /**
     * @var \MntAtenAreaModEstab
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="MntAtenAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

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
