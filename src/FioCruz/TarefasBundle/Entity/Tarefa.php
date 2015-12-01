<?php

namespace FioCruz\TarefasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarefa
 *
 * @ORM\Table(name="tb_tarefa")
 * @ORM\Entity(repositoryClass="FioCruz\TarefasBundle\Repository\TarefaRepository")
 */
class Tarefa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_task", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $coTask;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_titulo", type="string", length=255)
     */
    private $dsTitulo;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_tarefa", type="string", length=1024)
     */
    private $dsTarefa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_inicio", type="datetime", nullable=true)
     */
    private $dtInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_fim", type="datetime", nullable=true)
     */
    private $dtFim;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_criacao", type="datetime")
     */
    private $dtCriacao;


    /**
     * Get co_task
     *
     * @return integer
     */
    public function getCoTask()
    {
        return $this->coTask;
    }

    /**
     * Set dsTitulo
     *
     * @param string $dsTitulo
     *
     * @return Tarefa
     */
    public function setDsTitulo($dsTitulo)
    {
        $this->dsTitulo = $dsTitulo;

        return $this;
    }

    /**
     * Get dsTitulo
     *
     * @return string
     */
    public function getDsTitulo()
    {
        return $this->dsTitulo;
    }

    /**
     * Set dsTarefa
     *
     * @param string $dsTarefa
     *
     * @return Tarefa
     */
    public function setDsTarefa($dsTarefa)
    {
        $this->dsTarefa = $dsTarefa;

        return $this;
    }

    /**
     * Get dsTarefa
     *
     * @return string
     */
    public function getDsTarefa()
    {
        return $this->dsTarefa;
    }

    /**
     * Set dtInicio
     *
     * @param \DateTime $dtInicio
     *
     * @return Tarefa
     */
    public function setDtInicio($dtInicio)
    {
        $this->dtInicio = $dtInicio;

        return $this;
    }

    /**
     * Get dtInicio
     *
     * @return \DateTime
     */
    public function getDtInicio()
    {
        return $this->dtInicio;
    }

    /**
     * Set dtFim
     *
     * @param \DateTime $dtFim
     *
     * @return Tarefa
     */
    public function setDtFim($dtFim)
    {
        $this->dtFim = $dtFim;

        return $this;
    }

    /**
     * Get dtFim
     *
     * @return \DateTime
     */
    public function getDtFim()
    {
        return $this->dtFim;
    }

    /**
     * Set dtCriacao
     *
     * @param \DateTime $dtCriacao
     *
     * @return Tarefa
     */
    public function setDtCriacao($dtCriacao)
    {
        $this->dtCriacao = $dtCriacao;

        return $this;
    }

    /**
     * Get dtCriacao
     *
     * @return \DateTime
     */
    public function getDtCriacao()
    {
        return $this->dtCriacao;
    }
}
