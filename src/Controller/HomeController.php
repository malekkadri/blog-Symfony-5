<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Tag;
use App\Repository\ArticleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @param ArticleRepository $repo
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function index(ArticleRepository $repo, Request $request, PaginatorInterface $paginator): Response
    {
        $data_articles = $this->getDoctrine()->getRepository(Article::class)->findBy(['is_active' => true],['created_at' => 'desc']);
        $articles = $paginator->paginate(
            $data_articles,
            $request->query->getInt('page', 1),
            3
        );

        $categories = $this->getDoctrine()->getRepository(Category::class)->findBy([],['title' => 'desc']);

        $tags = $this->getDoctrine()->getRepository(Tag::class)->findBy([],['title' => 'desc']);

        return $this->render('home/index.html.twig', [
            //'controller_name' => 'HomeController',
            'articles' => $articles,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {
        return $this->render('home/about.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
