<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarExamenesperfil
 *
 * @ORM\Table(name="car_examenesperfil", indexes={@ORM\Index(name="corresponden_fk", columns={"id_perfil_lab_examen"}), @ORM\Index(name="corresponde_fk", columns={"id_lab_examen"})})
 * @ORM\Entity
 */
class CarExamenesperfil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_examen_perfil", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="car_examenesperfil_id_examen_perfil_seq", allocationSize=1, initialValue=1)
     */
    private $idExamenPerfil;

    /**
     * @var \LabExamen
     *
     * @ORM\ManyToOne(targetEntity="LabExamen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_lab_examen", referencedColumnName="id")
     * })
     */
    private $idLabExamen;

    /**
     * @var \CarPerfilLabexamen
     *
     * @ORM\ManyToOne(targetEntity="CarPerfilLabexamen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_perfil_lab_examen", referencedColumnName="id_perfil_lab_examen")
     * })
     */
    private $idPerfilLabExamen;


}
