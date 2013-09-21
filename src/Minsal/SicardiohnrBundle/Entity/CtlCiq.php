<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlCiq
 *
 * @ORM\Table(name="ctl_ciq")
 * @ORM\Entity
 */
class CtlCiq
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_ciq_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=6, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="procedimiento", type="text", nullable=false)
     */
    private $procedimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_procedimiento", type="integer", nullable=true)
     */
    private $idTipoProcedimiento;


}
