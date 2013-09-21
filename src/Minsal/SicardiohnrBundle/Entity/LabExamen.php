<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabExamen
 *
 * @ORM\Table(name="lab_examen")
 * @ORM\Entity
 */
class LabExamen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lab_examen_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", nullable=true)
     */
    private $codigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_estandar", type="integer", nullable=true)
     */
    private $idEstandar;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_area", type="integer", nullable=true)
     */
    private $idArea;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", nullable=true)
     */
    private $observacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="habilitado", type="boolean", nullable=true)
     */
    private $habilitado;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_plantilla", type="integer", nullable=true)
     */
    private $idPlantilla;

    /**
     * @var string
     *
     * @ORM\Column(name="impresion", type="string", nullable=true)
     */
    private $impresion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ubicacion", type="integer", nullable=true)
     */
    private $ubicacion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CarCardiopatia", mappedBy="idLabExamen")
     */
    private $idCardiopatia;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCardiopatia = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
