<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarImagen
 *
 * @ORM\Table(name="car_imagen", uniqueConstraints={@ORM\UniqueConstraint(name="car_imagen_pk", columns={"id_imagen"})})
 * @ORM\Entity
 */
class CarImagen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_imagen", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="car_imagen_id_imagen_seq", allocationSize=1, initialValue=1)
     */
    private $idImagen;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen_nombre", type="string", nullable=true)
     */
    private $imagenNombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="imagen_fecha", type="date", nullable=true)
     */
    private $imagenFecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="imagen_tamanio", type="integer", nullable=true)
     */
    private $imagenTamanio;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen_tipo", type="string", nullable=true)
     */
    private $imagenTipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="imagen", type="integer", nullable=true)
     */
    private $imagen;


}
