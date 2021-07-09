<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="web_usuario_")
 */
class UsuarioController{
    /**
     * @Route("/", methods={"GET"}, name="index")
     */
    public function index(): Response{
        return new Response("implementar formulário de cadastro");
    }
    
    /**
     * @Route("/salvar", methods={"POST"}, name="salva")
     */
    public function salvar(): Response{
        return new Response("implementar gravação no BD");
    }
}