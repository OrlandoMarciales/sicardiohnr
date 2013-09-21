<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarDocumento
 *
 * @ORM\Table(name="car_documento", uniqueConstraints={@ORM\UniqueConstraint(name="car_documento_pk", columns={"id_documento"})})
 * @ORM\Entity
 */
class CarDocumento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_documento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="car_documento_id_documento_seq", allocationSize=1, initialValue=1)
     */
    private $idDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="documento_nombre", type="string", nullable=true)
     */
    private $documentoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="documento_fecha", type="string", nullable=true)
     */
    private $documentoFecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="documento_documento", type="integer", nullable=true)
     */
    private $documentoDocumento;


}
