<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("api/v1", name="api_v1_usuario_")
 */
class UsuarioController{
    /**
     * @Route("/listar", methods={"GET"}, name="lista")
     */
    public function listar(): JsonResponse{
        return new JsonResponse(["Implementar listagem na API"], 404);
    }

    /**
     * @Route("/cadastrar", methods={"POST"}, name="cadastro")
     */
    public function cadastrar(): JsonResponse{
        return new JsonResponse(["Implementar cadastro na API"], 404);
    }
}