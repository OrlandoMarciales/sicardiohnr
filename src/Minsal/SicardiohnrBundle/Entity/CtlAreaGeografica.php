<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlAreaGeografica
 *
 * @ORM\Table(name="ctl_area_geografica")
 * @ORM\Entity
 */
class CtlAreaGeografica
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_area_geografica_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=15, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviatura", type="string", nullable=false)
     */
    private $abreviatura;


}
