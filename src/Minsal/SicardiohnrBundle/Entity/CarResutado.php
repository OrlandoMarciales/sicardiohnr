<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarResutado
 *
 * @ORM\Table(name="car_resutado", uniqueConstraints={@ORM\UniqueConstraint(name="car_resutado_pk", columns={"id_resultado"})}, indexes={@ORM\Index(name="determinan_fk", columns={"id_prueba_cardiologia"}), @ORM\Index(name="determina_fk", columns={"id_catalogo_procedimiento"})})
 * @ORM\Entity
 */
class CarResutado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_resultado", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="car_resutado_id_resultado_seq", allocationSize=1, initialValue=1)
     */
    private $idResultado;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado_valor", type="string", nullable=true)
     */
    private $resultadoValor;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado_medida", type="string", nullable=true)
     */
    private $resultadoMedida;

    /**
     * @var \CarCtlProcedimientos
     *
     * @ORM\ManyToOne(targetEntity="CarCtlProcedimientos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_catalogo_procedimiento", referencedColumnName="idcatalogoprocedimientos")
     * })
     */
    private $idCatalogoProcedimiento;

    /**
     * @var \CarPruebaCardiologia
     *
     * @ORM\ManyToOne(targetEntity="CarPruebaCardiologia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_prueba_cardiologia", referencedColumnName="id_prueba_cardiologia")
     * })
     */
    private $idPruebaCardiologia;


}
