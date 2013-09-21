<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarCtlProcedimientos
 *
 * @ORM\Table(name="car_ctl_procedimientos", uniqueConstraints={@ORM\UniqueConstraint(name="car_ctl_procedimientos_pk", columns={"idcatalogoprocedimientos"})}, indexes={@ORM\Index(name="tiende_fk", columns={"car_idcatalogoprocedimientos"}), @ORM\Index(name="IDX_4DBEE3BBF396750", columns={"id"})})
 * @ORM\Entity
 */
class CarCtlProcedimientos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcatalogoprocedimientos", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="car_ctl_procedimientos_idcatalogoprocedimientos_seq", allocationSize=1, initialValue=1)
     */
    private $idcatalogoprocedimientos;

    /**
     * @var integer
     *
     * @ORM\Column(name="catalogopadre", type="integer", nullable=true)
     */
    private $catalogopadre;

    /**
     * @var integer
     *
     * @ORM\Column(name="catalogohijo", type="integer", nullable=true)
     */
    private $catalogohijo;

    /**
     * @var string
     *
     * @ORM\Column(name="catalogovalornormal", type="string", nullable=true)
     */
    private $catalogovalornormal;

    /**
     * @var string
     *
     * @ORM\Column(name="catalogonombre", type="string", nullable=true)
     */
    private $catalogonombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="catalogoestado", type="boolean", nullable=true)
     */
    private $catalogoestado;

    /**
     * @var \CtlCiq
     *
     * @ORM\ManyToOne(targetEntity="CtlCiq")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    /**
     * @var \CarCtlProcedimientos
     *
     * @ORM\ManyToOne(targetEntity="CarCtlProcedimientos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="car_idcatalogoprocedimientos", referencedColumnName="idcatalogoprocedimientos")
     * })
     */
    private $carcatalogoprocedimientos;


}
