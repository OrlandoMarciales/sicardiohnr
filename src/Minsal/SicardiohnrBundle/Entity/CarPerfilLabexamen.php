<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarPerfilLabexamen
 *
 * @ORM\Table(name="car_perfil_labexamen")
 * @ORM\Entity
 */
class CarPerfilLabexamen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_perfil_lab_examen", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="car_perfil_labexamen_id_perfil_lab_examen_seq", allocationSize=1, initialValue=1)
     */
    private $idPerfilLabExamen;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_perfil_lab_examen", type="string", nullable=true)
     */
    private $nombrePerfilLabExamen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_perfil_lab_examen", type="boolean", nullable=true)
     */
    private $estadoPerfilLabExamen;


}
