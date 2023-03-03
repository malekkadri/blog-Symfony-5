<?php

namespace App\Controller;

use App\Form\SearchType;
use App\Repository\ArticleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

 
class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     */
    public function index()
    {
        return $this->render('search/index.html.twig', [
            'controller_name' => 'SearchController'
        ]);
    }

    public function searchBar()
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('handleSearch'))
            ->add('query', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Search'
                ]
            ])
            ->add('search', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ])
            ->getForm();

        return $this->render('search/searchBar.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/handleSearch", name="handleSearch")
     * @param Request $request
     */
    public function handleSearch(Request $request, ArticleRepository $repo)
    {
        $query = $request->request->get('form')['query'];

        if($query) {
            $articles = $repo->findArticlesByName($query);
        }

        //dd($articles);
        //dd($request->request->get('form')['query']);

        return $this->render('search/index.html.twig', [
            'articles' => $articles
        ]);
    }


    /*
    public function index(Request $request, ArticleRepository $repo, PaginatorInterface $paginator): Response
    {
        $searchForm = $this->createForm(SearchType::class);
        $searchForm->handleRequest($request);

        $data = $repo->findArticles();

        if ($searchForm->isSubmitted() && $searchForm->isValid())
        {
            $title = $searchForm->getData()->getTitle();
            $data = $repo->search($title);
        }

        $articles = $paginator->paginate(
            $data, // Doctrine Query, not results
            $request->query->getInt('page', 1), // Define the page parameter
            10 // Items per page
        );

        return $this->render('search/index.html.twig', [
            //'controller_name' => 'SearchController',
            'articles' => $articles,
            'searchForm' => $searchForm->createView()
        ]);
    }
    */
}
