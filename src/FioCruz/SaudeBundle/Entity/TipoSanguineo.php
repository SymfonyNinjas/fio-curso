<?php

namespace FioCruz\SaudeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoSanguineo
 *
 * @ORM\Table(name="tb_tipo_sanguineo")
 * @ORM\Entity
 */
class TipoSanguineo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_tipo_sanguineo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $coTipoSanguineo;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_tipo_sanguineo", type="string", length=3)
     */
    private $dsTipoSanguineo;


    /**
     * Get coTipoSanguineo
     *
     * @return integer
     */
    public function getCoTipoSanguineo()
    {
        return $this->coTipoSanguineo;
    }

    /**
     * Set dsTipoSanguineo
     *
     * @param string $dsTipoSanguineo
     *
     * @return TipoSanguineo
     */
    public function setDsTipoSanguineo($dsTipoSanguineo)
    {
        $this->dsTipoSanguineo = $dsTipoSanguineo;

        return $this;
    }

    /**
     * Get dsTipoSanguineo
     *
     * @return string
     */
    public function getDsTipoSanguineo()
    {
        return $this->dsTipoSanguineo;
    }
}

