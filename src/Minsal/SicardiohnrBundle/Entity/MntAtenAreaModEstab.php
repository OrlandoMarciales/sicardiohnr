<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntAtenAreaModEstab
 *
 * @ORM\Table(name="mnt_aten_area_mod_estab", uniqueConstraints={@ORM\UniqueConstraint(name="idx_id_esp_id_area_mod_estab", columns={"id_atencion", "id_area_mod_estab", "id_establecimiento"})}, indexes={@ORM\Index(name="IDX_EE2A0C9ACC2F8715", columns={"id_area_mod_estab"}), @ORM\Index(name="IDX_EE2A0C9A695EA351", columns={"id_atencion"}), @ORM\Index(name="IDX_EE2A0C9A7DFA12F6", columns={"id_establecimiento"})})
 * @ORM\Entity
 */
class MntAtenAreaModEstab
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_aten_area_mod_estab_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \MntAreaModEstab
     *
     * @ORM\ManyToOne(targetEntity="MntAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_area_mod_estab", referencedColumnName="id")
     * })
     */
    private $idAreaModEstab;

    /**
     * @var \CtlAtencion
     *
     * @ORM\ManyToOne(targetEntity="CtlAtencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_atencion", referencedColumnName="id")
     * })
     */
    private $idAtencion;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;


}
