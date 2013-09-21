<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntRangoHoras
 *
 * @ORM\Table(name="mnt_rango_horas")
 * @ORM\Entity
 */
class MntRangoHoras
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_rango_horas_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_inicio", type="time", nullable=true)
     */
    private $horaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_fin", type="time", nullable=true)
     */
    private $horaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="modulo", type="string", nullable=true)
     */
    private $modulo;


}
