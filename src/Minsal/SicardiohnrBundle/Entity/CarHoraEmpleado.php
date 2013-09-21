<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarHoraEmpleado
 *
 * @ORM\Table(name="car_hora_empleado", indexes={@ORM\Index(name="IDX_26B165DD890253C7", columns={"id_empleado"})})
 * @ORM\Entity
 */
class CarHoraEmpleado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_hora_empeado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="car_hora_empleado_id_hora_empeado_seq", allocationSize=1, initialValue=1)
     */
    private $idHoraEmpeado;

    /**
     * @var string
     *
     * @ORM\Column(name="dia_de_trabajo", type="string", nullable=true)
     */
    private $diaDeTrabajo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_inicial", type="time", nullable=true)
     */
    private $horaInicial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_final", type="time", nullable=true)
     */
    private $horaFinal;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_de_procedimiento", type="integer", nullable=true)
     */
    private $cantidadDeProcedimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_procedimiento_extra", type="integer", nullable=true)
     */
    private $cantidadProcedimientoExtra;

    /**
     * @var \MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empleado", referencedColumnName="id")
     * })
     */
    private $idEmpleado;


}
