<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarEstadoCita
 *
 * @ORM\Table(name="car_estado_cita", uniqueConstraints={@ORM\UniqueConstraint(name="car_estado_cita_pk", columns={"id_estado_cita"})})
 * @ORM\Entity
 */
class CarEstadoCita
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_estado_cita", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="car_estado_cita_id_estado_cita_seq", allocationSize=1, initialValue=1)
     */
    private $idEstadoCita;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_descripcion", type="string", nullable=true)
     */
    private $estadoDescripcion;


}
