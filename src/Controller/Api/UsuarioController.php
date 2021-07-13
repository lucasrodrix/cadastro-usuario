<?php

namespace App\Controller\Api;

use App\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("api/v1", name="api_v1_usuario_")
 */
class UsuarioController extends AbstractController{
    
    /**
     * @Route("/listar", methods={"GET"}, name="lista")
     */
    public function listar(): JsonResponse{
        $doctrine = $this->getDoctrine()->getRepository(Usuario::class);

        return new JsonResponse($doctrine->getAll());
    }

    /**
     * @Route("/cadastrar", methods={"POST"}, name="cadastro")
     */
    public function cadastrar(Request $request): Response{
        $data = $request->query->all();

        $usuario = new Usuario;
        $usuario->setNome($data['nome']);
        $usuario->setEmail($data['email']);

        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($usuario);
        $doctrine->flush();

        if($doctrine->contains($usuario)){
            return new Response("Ok",200);
        }else{
            return new Response("não Ok", 404);
        }
    }
}