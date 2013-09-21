<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarBitacora
 *
 * @ORM\Table(name="car_bitacora", uniqueConstraints={@ORM\UniqueConstraint(name="car_bitacora_pk", columns={"id_bitacora"})}, indexes={@ORM\Index(name="registra_fk", columns={"id_usuario"}), @ORM\Index(name="IDX_1FB1CBFDBF396750", columns={"id"})})
 * @ORM\Entity
 */
class CarBitacora
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_bitacora", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="car_bitacora_id_bitacora_seq", allocationSize=1, initialValue=1)
     */
    private $idBitacora;

    /**
     * @var string
     *
     * @ORM\Column(name="evento", type="string", nullable=true)
     */
    private $evento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bitacora_fecha", type="date", nullable=true)
     */
    private $bitacoraFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bitacora_hora", type="time", nullable=true)
     */
    private $bitacoraHora;

    /**
     * @var string
     *
     * @ORM\Column(name="bitacora_tabla", type="string", nullable=true)
     */
    private $bitacoraTabla;

    /**
     * @var \MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     * })
     */
    private $idUsuario;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;


}
