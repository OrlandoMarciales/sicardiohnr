<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarCardiopatia
 *
 * @ORM\Table(name="car_cardiopatia", uniqueConstraints={@ORM\UniqueConstraint(name="car_cardiopatias_pk", columns={"id_cardiopatia"})})
 * @ORM\Entity
 */
class CarCardiopatia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cardiopatia", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="car_cardiopatia_id_cardiopatia_seq", allocationSize=1, initialValue=1)
     */
    private $idCardiopatia;

    /**
     * @var integer
     *
     * @ORM\Column(name="cardiopatia_nombre", type="integer", nullable=true)
     */
    private $cardiopatiaNombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="cardiopatia_alto", type="integer", nullable=true)
     */
    private $cardiopatiaAlto;

    /**
     * @var integer
     *
     * @ORM\Column(name="cardiopatia_medio", type="integer", nullable=true)
     */
    private $cardiopatiaMedio;

    /**
     * @var integer
     *
     * @ORM\Column(name="cardiopatia_bajo", type="integer", nullable=true)
     */
    private $cardiopatiaBajo;

    /**
     * @var string
     *
     * @ORM\Column(name="cie10", type="string", nullable=true)
     */
    private $cie10;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="LabExamen", inversedBy="idCardiopatia")
     * @ORM\JoinTable(name="car_asignado",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_cardiopatia", referencedColumnName="id_cardiopatia")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_lab_examen", referencedColumnName="id")
     *   }
     * )
     */
    private $idLabExamen;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idLabExamen = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
