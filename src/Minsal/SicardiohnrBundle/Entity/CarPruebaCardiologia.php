<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarPruebaCardiologia
 *
 * @ORM\Table(name="car_prueba_cardiologia", uniqueConstraints={@ORM\UniqueConstraint(name="car_pruebas_cardiologia_pk", columns={"id_prueba_cardiologia"})}, indexes={@ORM\Index(name="agrega_fk", columns={"id_imagen"}), @ORM\Index(name="realiza_fk", columns={"id_usuario"}), @ORM\Index(name="tiene_fk", columns={"id_historial_clinico"}), @ORM\Index(name="agregan_fk", columns={"id_documento"}), @ORM\Index(name="IDX_C0BB7B27B480604", columns={"id_fos_user_user"})})
 * @ORM\Entity
 */
class CarPruebaCardiologia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_prueba_cardiologia", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="car_prueba_cardiologia_id_prueba_cardiologia_seq", allocationSize=1, initialValue=1)
     */
    private $idPruebaCardiologia;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_usuario", type="bigint", nullable=true)
     */
    private $idUsuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_historial_clinico", type="bigint", nullable=true)
     */
    private $idHistorialClinico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_prueba", type="date", nullable=true)
     */
    private $fechaPrueba;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_prueba", type="time", nullable=true)
     */
    private $horaPrueba;

    /**
     * @var string
     *
     * @ORM\Column(name="lectura_de_prueba", type="text", nullable=true)
     */
    private $lecturaDePrueba;

    /**
     * @var \CarImagen
     *
     * @ORM\ManyToOne(targetEntity="CarImagen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_imagen", referencedColumnName="id_imagen")
     * })
     */
    private $idImagen;

    /**
     * @var \CarDocumento
     *
     * @ORM\ManyToOne(targetEntity="CarDocumento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_documento", referencedColumnName="id_documento")
     * })
     */
    private $idDocumento;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fos_user_user", referencedColumnName="id")
     * })
     */
    private $idFosUserUser;


}
