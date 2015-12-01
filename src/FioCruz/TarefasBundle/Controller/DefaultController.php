<?php

namespace FioCruz\TarefasBundle\Controller;

use FioCruz\TarefasBundle\Entity\Tarefa;
use FioCruz\TarefasBundle\Services\TarefaService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class DefaultController extends Controller
{
    /**
     * @Route("/tarefas")
     * @Template()
     */
    public function indexAction()
    {
        $tarefaService = $this->get('FioCruzTarefasBundle.TarefasService');
        return array('tarefas' => $tarefaService->getTarefas());
    }

    /**
     * @Route("/tarefas/nova")
     * @Template()
     */
    public function criarAction()
    {
        return array();
    }

    /**
     * @Route("/tarefas/salvar", methods={"POST", "PUT"})
     */
    public function salvarAction(Request $request)
    {
        $tarefa = new Tarefa();
        $tarefa->setDsTitulo($request->get('dsTitulo'));
        $tarefa->setDsTarefa($request->get('dsTarefa'));
        $tarefa->setDtCriacao(new \DateTime());

        try {
            /** @var TarefaService $tarefaService */
            $tarefaService = $this->get('FioCruzTarefasBundle.TarefasService');
            $tarefaService->salvar($tarefa);

            return $this->redirectToRoute('fiocruz_tarefas_default_index');
        } catch (BadRequestHttpException $e) {
            return new Response($e->getMessage(), 400);
        }
    }
}
