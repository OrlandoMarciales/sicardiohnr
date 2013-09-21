<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarReferido
 *
 * @ORM\Table(name="car_referido", indexes={@ORM\Index(name="IDX_83C416A7DFA12F6", columns={"id_establecimiento"})})
 * @ORM\Entity
 */
class CarReferido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_referido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="car_referido_id_referido_seq", allocationSize=1, initialValue=1)
     */
    private $idReferido;

    /**
     * @var string
     *
     * @ORM\Column(name="referido_primer_nombre", type="string", nullable=true)
     */
    private $referidoPrimerNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="referido_primer_apellido", type="string", nullable=true)
     */
    private $referidoPrimerApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="referido_dui", type="string", nullable=true)
     */
    private $referidoDui;

    /**
     * @var string
     *
     * @ORM\Column(name="referido_numero_expediente", type="string", nullable=true)
     */
    private $referidoNumeroExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="referido_direccion", type="string", nullable=true)
     */
    private $referidoDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="referido_telefono", type="string", nullable=true)
     */
    private $referidoTelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="referido_segundo_nombre", type="string", nullable=true)
     */
    private $referidoSegundoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="referido_segundo_apellido", type="string", nullable=true)
     */
    private $referidoSegundoApellido;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;


}
