<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntAmbienteAreaEstablecimiento
 *
 * @ORM\Table(name="mnt_ambiente_area_establecimiento", uniqueConstraints={@ORM\UniqueConstraint(name="fk_id_id_establecimiendo", columns={"id_establecimiento", "id_aten_area_mod_estab"})}, indexes={@ORM\Index(name="IDX_90D3D5118627A85B", columns={"id_aten_area_mod_estab"}), @ORM\Index(name="IDX_90D3D5117DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_90D3D51188863BBD", columns={"id_servicio_externo"})})
 * @ORM\Entity
 */
class MntAmbienteAreaEstablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_ambiente_area_establecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=80, nullable=false)
     */
    private $nombre;

    /**
     * @var \MntAtenAreaModEstab
     *
     * @ORM\ManyToOne(targetEntity="MntAtenAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_aten_area_mod_estab", referencedColumnName="id")
     * })
     */
    private $idAtenAreaModEstab;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;

    /**
     * @var \CtlServicioExterno
     *
     * @ORM\ManyToOne(targetEntity="CtlServicioExterno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_servicio_externo", referencedColumnName="id")
     * })
     */
    private $idServicioExterno;


}
