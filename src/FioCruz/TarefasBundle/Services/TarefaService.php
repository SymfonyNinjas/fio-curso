<?php

namespace FioCruz\TarefasBundle\Services;

use Doctrine\ORM\EntityManager;
use FioCruz\TarefasBundle\Entity\Tarefa;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * Class TarefaService
 * @package FioCruz\TarefasBundle\Service
 */
class TarefaService
{

    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @param EntityManager $em
     */
    public function setEm(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * https://github.com/SymfonyNinjas
     */
    public function salvar(Tarefa $tarefa)
    {
        if (!$tarefa->getDsTarefa()) {
            throw new BadRequestHttpException('Preencha o campo Tarefa');
        }

        if (!$tarefa->getDsTitulo()) {
            throw new BadRequestHttpException('Preencha o campo Título');
        }

        $this->em->persist($tarefa);
        $this->em->flush();
    }

    /**
     * @return array
     */
    public function getTarefas()
    {
        return $this->em->getRepository('FioCruzTarefasBundle:Tarefa')
            ->getTarefas();
    }

}