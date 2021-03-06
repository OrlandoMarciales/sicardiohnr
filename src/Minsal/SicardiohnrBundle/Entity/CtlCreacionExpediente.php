<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlCreacionExpediente
 *
 * @ORM\Table(name="ctl_creacion_expediente")
 * @ORM\Entity
 */
class CtlCreacionExpediente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_creacion_expediente_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="area", type="string", length=25, nullable=false)
     */
    private $area;


}
