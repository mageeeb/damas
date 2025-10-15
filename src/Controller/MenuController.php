<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
  #[Route('/menu', name: 'app_menu')]
  public function index(): Response
  {
    // Données fictives pour l'instant
    $menu = [
      [
        'section' => 'Entrées',
        'items' => [
          ['name' => 'Houmous bil lahme', 'description' => 'Pois chiches, tahini et huile d’olive.', 'price' => 7.00, 'image' => 'syrien/29.jpg'],
          ['name' => 'Beignet Viande', 'description' => 'Tomates, concombres, herbes fraîches.', 'price' => 7.00, 'image' => '/syrien/13.jpg'],
          ['name' => 'Beignet au épinard', 'description' => 'Tomates, concombres, herbes fraîches.', 'price' => 7.00, 'image' => 'syrien/14.jpg'],
          ['name' => 'Salade', 'description' => 'Tomates, concombres, herbes fraîches.', 'price' => 7.00, 'image' => 'syrien/24.jpg'],
          ['name' => 'Beignet au frômage', 'description' => 'Tomates, concombres, herbes fraîches.', 'price' => 7.00, 'image' => 'syrien/15.jpg'],
          ['name' => 'Warak Enab', 'description' => 'Tomates, concombres, herbes fraîches.', 'price' => 7.00, 'image' => 'syrien/30.webp'],
          ['name' => 'Chou-Fleur', 'description' => 'Tomates, concombres, herbes fraîches.', 'price' => 7.00, 'image' => 'syrien/1.webp'],





        ],
      ],
      [
        'section' => 'Plats principaux',
        'items' => [
          ['name' => 'Brochette de viande', 'description' => 'Agneau, poulet, merguez et légumes.', 'price' => 15.00, 'image' => '/syrien/4.jpg'],
          ['name' => 'Demi Poulet', 'description' => 'Poulet fermier et olives vertes.', 'price' => 15.00, 'image' => '/syrien/12.jpg'],
          ['name' => 'Brochette Royal', 'description' => 'Poulet fermier et olives vertes.', 'price' => 75.00, 'image' => '/syrien/21.jpg'],
          ['name' => 'Brochette Mix', 'description' => 'Poulet fermier et olives vertes.', 'price' => 14.00, 'image' => '/syrien/25.jpg'],
        ],
      ],
      [
        'section' => 'Desserts',
        'items' => [
          ['name' => 'Baklava', 'description' => 'Pâtisserie orientale au miel et aux noix.', 'price' => 6.00, 'image' => 'couscous.jpg'],
          ['name' => 'Thé à la menthe', 'description' => 'Thé vert, menthe fraîche, sucre.', 'price' => 3.50, 'image' => 'couscous.jpg'],
        ],
      ],
    ];

    return $this->render('menu/menu.html.twig', [
      'menu' => $menu,
    ]);
  }
}
