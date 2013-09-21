<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlAtencion
 *
 * @ORM\Table(name="ctl_atencion", indexes={@ORM\Index(name="IDX_5075A312C5DC305D", columns={"id_atencion_padre"}), @ORM\Index(name="IDX_5075A3125168C468", columns={"id_tipo_atencion"})})
 * @ORM\Entity
 */
class CtlAtencion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_atencion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var \CtlAtencion
     *
     * @ORM\ManyToOne(targetEntity="CtlAtencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_atencion_padre", referencedColumnName="id")
     * })
     */
    private $idAtencionPadre;

    /**
     * @var \CtlTipoAtencion
     *
     * @ORM\ManyToOne(targetEntity="CtlTipoAtencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_atencion", referencedColumnName="id")
     * })
     */
    private $idTipoAtencion;


}
