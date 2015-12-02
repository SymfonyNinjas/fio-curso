<?php

namespace FioCruz\TarefasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TarefaStatus
 *
 * @ORM\Table(name="tb_tarefa_status")
 * @ORM\Entity
 */
class TarefaStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_tarefa_status", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $coTarefaStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_status_tarefa", type="string", length=20)
     */
    private $statusTarefa;

    /**
     * Get coTarefaStatus
     *
     * @return integer
     */
    public function getCoTarefaStatus()
    {
        return $this->coTarefaStatus;
    }

    /**
     * Set statusTarefa
     *
     * @param string $statusTarefa
     *
     * @return TarefaStatus
     */
    public function setStatusTarefa($statusTarefa)
    {
        $this->statusTarefa = $statusTarefa;

        return $this;
    }

    /**
     * Get statusTarefa
     *
     * @return string
     */
    public function getStatusTarefa()
    {
        return $this->statusTarefa;
    }
}

