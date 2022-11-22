<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Articles;
use App\Form\ArticlesType;
use App\Repository\ArticlesRepository;
use Doctrine\ORM\EntityManagerInterface;

class HomeController extends AbstractController
{
/*     #[Route('/home', name: 'app_home')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $article = new Articles();
        $article->setTitre('PlayStation 1')
            ->setPrix(441)
            ->setDescription("La PlayStation (プレイステーション, Purei Sutēshon) est une console de jeux vidéo de cinquième génération, produite par Sony Computer Entertainment à partir de 1994. La PlayStation originale fut la première machine de la gamme PlayStation, déclinée ensuite en PSone (une version plus petite et plus légère que l'originale).")
            ->setDate( new \DateTime('1994-09-03'));
        $entityManager = $doctrine->getManager();
        $entityManager->persist($article);
        $entityManager->flush();

        return $this->render('home/index.html.twig', [
            'test' => 'HomeController',
        ]);
    } */

/*     #[Route('/home', name: 'app_home')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $article = new Articles();
        $article->setTitre('PlayStation 2')
            ->setPrix(599)
            ->setDescription("La PlayStation 2 est aujourd'hui la console la plus vendue de l'histoire du jeu vidéo.")
            ->setDate( new \DateTime('2000-03-04'));

        $entityManager->persist($article);
        $entityManager->flush();

        return $this->render('home/index.html.twig', [
            'test' => 'HomeController',
        ]);
    }  */

/*     private $repository;

    public function __construct(ArticlesRepository $repository)
    {
        $this->repository = $repository;
    } */

    #[Route('/home', name: 'app_home')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $repository = $entityManager->getRepository(Articles::class);
        $articles = $repository->findAll();

        $tab = $this->listYears(1990, 40);
        return $this->render('home/index.html.twig', [
            'articles' => $articles,
            'annee' => $tab,
        ]);
    }

    #[Route('/home/{id}', name: 'show_article')]
    public function show(Articles $articles): Response
    {


        return $this->render('home/show.html.twig', [
            'articles' => $articles,
        ]);
    }

    #[Route('/home/articles/{titre}-{id}', name: 'edit_article_annee')]
    public function editArticle(Articles $articles): Response
    {
        $form = $this->createForm(ArticlesType::class, $articles);

        return $this->render('home/edit.article.html.twig', [
            'articles' => $articles,
            'form' => $form->createView(),
        ]);
    }

    public function listYears($year, $nbr) 
    {
        $tab = ['Année'];
        $nbr = isset($nbr) ? $nbr : 1;
        for($i = 0; $i < $nbr + 1; $i++) {
            array_push($tab, $year++);
        }
        return $tab;
    }
}


