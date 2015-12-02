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
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
        return array('tarefa' => new Tarefa());
    }

    /**
     * @Route("/tarefas/salvar", methods={"POST", "PUT"})
     */
    public function salvarAction(Request $request)
    {
        $tarefa = new Tarefa();

        if ($request->get('coTarefa', false)) {
            $tarefa = $this->get('doctrine.orm.entity_manager')
                ->getRepository('FioCruzTarefasBundle:Tarefa')
                ->find($request->get('coTarefa'));
        }

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
        } catch (NotFoundHttpException $e) {
            return new Response($e->getMessage(), 404);
        }
    }

    /**
     * @Route("/tarefas/{coTarefa}", methods={"DELETE", "GET"})
     */
    public function deletarAction(Tarefa $tarefa)
    {
        /** @var TarefaService $tarefaService */
        $tarefaService = $this->get('FioCruzTarefasBundle.TarefasService');
        $tarefaService->deletar($tarefa);

        return $this->redirectToRoute('fiocruz_tarefas_default_index');
    }

    /**
     * @Route("/tarefas/{coTarefa}/edit", methods={"GET"})
     * @Template(template="@FioCruzTarefas/Default/criar.html.twig")
     */
    public function editarAction(Tarefa $tarefa)
    {
        return array('tarefa' => $tarefa);
    }
}
