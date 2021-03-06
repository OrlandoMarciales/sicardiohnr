<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlEstadoCivil
 *
 * @ORM\Table(name="ctl_estado_civil")
 * @ORM\Entity
 */
class CtlEstadoCivil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_estado_civil_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=15, nullable=false)
     */
    private $nombre;


}
