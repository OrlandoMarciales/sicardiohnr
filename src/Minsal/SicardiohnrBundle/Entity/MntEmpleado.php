<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntEmpleado
 *
 * @ORM\Table(name="mnt_empleado", indexes={@ORM\Index(name="fki_area_laboratorio_empleado", columns={"id_area_laboratorio"}), @ORM\Index(name="IDX_2138DDC969C81EBB", columns={"id_cargo_empleado_laboratorio"}), @ORM\Index(name="IDX_2138DDC96325E299", columns={"id_departamento"}), @ORM\Index(name="IDX_2138DDC97DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_2138DDC97EAD49C7", columns={"id_municipio"}), @ORM\Index(name="IDX_2138DDC9F57D32FD", columns={"id_pais"}), @ORM\Index(name="IDX_2138DDC9B13434FE", columns={"id_tipo_empleado"})})
 * @ORM\Entity
 */
class MntEmpleado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_empleado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=100, nullable=false)
     */
    private $apellido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="date", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="nit", type="string", length=17, nullable=true)
     */
    private $nit;

    /**
     * @var string
     *
     * @ORM\Column(name="dui", type="string", length=12, nullable=true)
     */
    private $dui;

    /**
     * @var string
     *
     * @ORM\Column(name="nup", type="string", length=15, nullable=true)
     */
    private $nup;

    /**
     * @var string
     *
     * @ORM\Column(name="inpep", type="string", length=15, nullable=true)
     */
    private $inpep;

    /**
     * @var string
     *
     * @ORM\Column(name="ipsfa", type="string", length=10, nullable=true)
     */
    private $ipsfa;

    /**
     * @var string
     *
     * @ORM\Column(name="isss", type="string", length=10, nullable=true)
     */
    private $isss;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_marcacion", type="string", length=5, nullable=true)
     */
    private $numeroMarcacion;

    /**
     * @var string
     *
     * @ORM\Column(name="pasaporte", type="string", length=15, nullable=true)
     */
    private $pasaporte;

    /**
     * @var string
     *
     * @ORM\Column(name="licencia_conducir", type="string", length=20, nullable=true)
     */
    private $licenciaConducir;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_junta_vigilancia", type="string", length=20, nullable=true)
     */
    private $numeroJuntaVigilancia;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_telefono", type="string", length=10, nullable=true)
     */
    private $numeroTelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_celular", type="string", length=10, nullable=true)
     */
    private $numeroCelular;

    /**
     * @var string
     *
     * @ORM\Column(name="correo_electronico", type="string", length=50, nullable=true)
     */
    private $correoElectronico;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto_emergencia", type="string", length=100, nullable=true)
     */
    private $contactoEmergencia;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_emergencia", type="string", length=10, nullable=true)
     */
    private $telefonoEmergencia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="seguro_de_vida", type="boolean", nullable=false)
     */
    private $seguroDeVida;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tiene_discapacidad", type="boolean", nullable=true)
     */
    private $tieneDiscapacidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_publico", type="date", nullable=true)
     */
    private $fechaIngresoPublico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_minsal", type="date", nullable=true)
     */
    private $fechaIngresoMinsal;

    /**
     * @var integer
     *
     * @ORM\Column(name="correlativo", type="smallint", nullable=true)
     */
    private $correlativo;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_farmacia", type="string", length=6, nullable=true)
     */
    private $codigoFarmacia;

    /**
     * @var string
     *
     * @ORM\Column(name="habilitado_farmacia", type="string", nullable=true)
     */
    private $habilitadoFarmacia = 'H';

    /**
     * @var string
     *
     * @ORM\Column(name="firma_digital", type="text", nullable=true)
     */
    private $firmaDigital;

    /**
     * @var \LabAreaLaboratorio
     *
     * @ORM\ManyToOne(targetEntity="LabAreaLaboratorio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_area_laboratorio", referencedColumnName="id")
     * })
     */
    private $idAreaLaboratorio;

    /**
     * @var \LabCargoEmpleadoLaboratorio
     *
     * @ORM\ManyToOne(targetEntity="LabCargoEmpleadoLaboratorio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cargo_empleado_laboratorio", referencedColumnName="id")
     * })
     */
    private $idCargoEmpleadoLaboratorio;

    /**
     * @var \CtlDepartamento
     *
     * @ORM\ManyToOne(targetEntity="CtlDepartamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_departamento", referencedColumnName="id")
     * })
     */
    private $idDepartamento;

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
     * @var \CtlMunicipio
     *
     * @ORM\ManyToOne(targetEntity="CtlMunicipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_municipio", referencedColumnName="id")
     * })
     */
    private $idMunicipio;

    /**
     * @var \CtlPais
     *
     * @ORM\ManyToOne(targetEntity="CtlPais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pais", referencedColumnName="id")
     * })
     */
    private $idPais;

    /**
     * @var \MntTipoEmpleado
     *
     * @ORM\ManyToOne(targetEntity="MntTipoEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_empleado", referencedColumnName="id")
     * })
     */
    private $idTipoEmpleado;


}
