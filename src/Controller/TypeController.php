<?php

namespace App\Controller;

use App\Entity\Type;
use App\Repository\TypeRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/type', name: 'app_')]
class TypeController extends AbstractController
{
    #[Route('', name: 'type')]
    public function index(TypeRepository $typeRepository): Response
    {
        return $this->render('type/index.html.twig', [
            'typeList' => $typeRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'show_type')]
    public function show(Type $type): Response
    {
        return $this->render('type/show.html.twig', [
            'typePokemonList' => $type,
        ]);
    }
}
