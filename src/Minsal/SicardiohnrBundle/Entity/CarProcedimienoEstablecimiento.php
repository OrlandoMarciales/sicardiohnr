<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarProcedimienoEstablecimiento
 *
 * @ORM\Table(name="car_procedimieno_establecimiento", indexes={@ORM\Index(name="IDX_3D17DC3A7DFF5D04", columns={"id_area_de_estableciemiento"})})
 * @ORM\Entity
 */
class CarProcedimienoEstablecimiento
{
    /**
     * @var string
     *
     * @ORM\Column(name="procedimiento_establecimiento_descripcion", type="text", nullable=true)
     */
    private $procedimientoEstablecimientoDescripcion;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_area_de_estableciemiento", referencedColumnName="id")
     * })
     */
    private $idAreaDeEstableciemiento;

    /**
     * @var \CarCtlProcedimientos
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="CarCtlProcedimientos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_procedimiento", referencedColumnName="idcatalogoprocedimientos")
     * })
     */
    private $idProcedimiento;


}
