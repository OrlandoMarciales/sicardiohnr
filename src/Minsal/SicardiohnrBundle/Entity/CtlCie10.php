<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlCie10
 *
 * @ORM\Table(name="ctl_cie10")
 * @ORM\Entity
 */
class CtlCie10
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_cie10_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=5, nullable=false)
     */
    private $codigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo_grupo", type="integer", nullable=false)
     */
    private $codigoGrupo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="grupo_m", type="integer", nullable=false)
     */
    private $grupoM = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostico", type="string", length=130, nullable=false)
     */
    private $diagnostico = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="alarma", type="integer", nullable=true)
     */
    private $alarma = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sexo", type="integer", nullable=true)
     */
    private $sexo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="salida", type="integer", nullable=true)
     */
    private $salida;

    /**
     * @var integer
     *
     * @ORM\Column(name="mayor", type="integer", nullable=true)
     */
    private $mayor;

    /**
     * @var integer
     *
     * @ORM\Column(name="menor", type="integer", nullable=true)
     */
    private $menor;

    /**
     * @var integer
     *
     * @ORM\Column(name="critico", type="integer", nullable=true)
     */
    private $critico = '0';


}
