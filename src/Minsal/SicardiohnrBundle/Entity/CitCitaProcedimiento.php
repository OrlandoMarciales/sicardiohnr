<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CitCitaProcedimiento
 *
 * @ORM\Table(name="cit_cita_procedimiento", indexes={@ORM\Index(name="IDX_27CD93918627A85B", columns={"id_aten_area_mod_estab"}), @ORM\Index(name="IDX_27CD9391B849D575", columns={"id_ciq"}), @ORM\Index(name="IDX_27CD9391890253C7", columns={"id_empleado"}), @ORM\Index(name="IDX_27CD93917DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_27CD93916A540E", columns={"id_estado"}), @ORM\Index(name="IDX_27CD9391701624C4", columns={"id_expediente"}), @ORM\Index(name="IDX_27CD9391DCF905A", columns={"id_rango_horas"}), @ORM\Index(name="IDX_27CD939139D50C80", columns={"idpruebacardiologia"}), @ORM\Index(name="IDX_27CD9391CF9820D5", columns={"idreferidos"})})
 * @ORM\Entity
 */
class CitCitaProcedimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cit_cita_procedimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_cita", type="string", nullable=true)
     */
    private $ipCita;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_comfirma", type="string", nullable=true)
     */
    private $ipComfirma;

    /**
     * @var integer
     *
     * @ORM\Column(name="idhistorialclinico", type="bigint", nullable=true)
     */
    private $idhistorialclinico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horacita", type="time", nullable=true)
     */
    private $horacita;

    /**
     * @var \MntAtenAreaModEstab
     *
     * @ORM\ManyToOne(targetEntity="MntAtenAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_aten_area_mod_estab", referencedColumnName="id")
     * })
     */
    private $idAtenAreaModEstab;

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
     * @var \MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empleado", referencedColumnName="id")
     * })
     */
    private $idEmpleado;

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
     * @var \CarEstadoCita
     *
     * @ORM\ManyToOne(targetEntity="CarEstadoCita")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estado", referencedColumnName="id_estado_cita")
     * })
     */
    private $idEstado;

    /**
     * @var \MntExpediente
     *
     * @ORM\ManyToOne(targetEntity="MntExpediente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_expediente", referencedColumnName="id")
     * })
     */
    private $idExpediente;

    /**
     * @var \MntRangoHoras
     *
     * @ORM\ManyToOne(targetEntity="MntRangoHoras")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rango_horas", referencedColumnName="id")
     * })
     */
    private $idRangoHoras;

    /**
     * @var \CarPruebaCardiologia
     *
     * @ORM\ManyToOne(targetEntity="CarPruebaCardiologia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpruebacardiologia", referencedColumnName="id_prueba_cardiologia")
     * })
     */
    private $idpruebacardiologia;

    /**
     * @var \CarReferido
     *
     * @ORM\ManyToOne(targetEntity="CarReferido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idreferidos", referencedColumnName="id_referido")
     * })
     */
    private $idreferidos;


}
