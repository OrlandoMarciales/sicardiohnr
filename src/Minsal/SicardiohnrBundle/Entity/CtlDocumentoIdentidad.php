<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlDocumentoIdentidad
 *
 * @ORM\Table(name="ctl_documento_identidad")
 * @ORM\Entity
 */
class CtlDocumentoIdentidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_documento_identidad_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=20, nullable=true)
     */
    private $nombre;


}
