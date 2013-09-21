<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarLleva
 *
 * @ORM\Table(name="car_lleva", uniqueConstraints={@ORM\UniqueConstraint(name="lleva_pk", columns={"id_diagnostico", "id_cardiopatia"})}, indexes={@ORM\Index(name="lleva_fk", columns={"id_diagnostico"}), @ORM\Index(name="lleva2_fk", columns={"id_cardiopatia"})})
 * @ORM\Entity
 */
class CarLleva
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_diagnostico", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idDiagnostico;

    /**
     * @var \CarCardiopatia
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="CarCardiopatia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cardiopatia", referencedColumnName="id_cardiopatia")
     * })
     */
    private $idCardiopatia;


}
