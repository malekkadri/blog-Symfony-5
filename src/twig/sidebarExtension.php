<?php

namespace App\twig;

use Twig\Environment;
use Twig\TwigFunction;
use Twig\Error\LoaderError;
use Twig\Error\SyntaxError;
use Twig\Error\RuntimeError;
use App\Repository\TagRepository;
use App\Repository\UserRepository;
use App\Repository\ArticleRepository;
use Twig\Extension\AbstractExtension;
use App\Repository\CategoryRepository;
use App\Repository\CommentRepository;
use App\Repository\LinkRepository;

class sidebarExtension extends AbstractExtension
{
    /**
     * @var ArticleRepository
     */
    private $articleRepository;

    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * @var TagRepository
     */
    private $tagRepository;

    /**
     * @var CommentRepository
     */
    private $commentRepository;
    
    /**
     * @var LinkRepository
     */
    private $linkRepository;

    /**
     * @var Environment
     */
    private $twig;


    public function __construct(
        ArticleRepository $articleRepository,
        CategoryRepository $categoryRepository,
        UserRepository $userRepository,
        TagRepository $tagRepository,
        CommentRepository $commentRepository,
        LinkRepository $linkRepository,
        Environment $twig
    )
    {
        $this->articleRepository = $articleRepository;
        $this->categoryRepository = $categoryRepository;
        $this->userRepository = $userRepository;
        $this->tagRepository = $tagRepository;
        $this->commentRepository = $commentRepository;
        $this->linkRepository = $linkRepository;
        $this->twig = $twig;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('sidebar', [$this, 'getSidebar'], ['is_safe' => ['html']])
        ];
    }

    public function getSidebar(): string
    {
        $articles = $this->articleRepository->popularArticles();
        $articlesAll = $this->articleRepository->findAll();
        $categories = $this->categoryRepository->sidebarCategories();
        $categoriesAll = $this->categoryRepository->sidebarCategoriesAll();
        $users = $this->userRepository->findAll();
        $views = $this->articleRepository->totalViews();
        $tags = $this->tagRepository->findAll();
        $commentsAll = $this->commentRepository->findAll();
        $linksAll = $this->linkRepository->findAll();

        // return $this->twig->render('home/sidebar.html.twig', [
        //     'articles' => $articles,
        //     'articlesAll' => $articlesAll,
        //     'commentaires' => $commentaires,
        //     'commentairesAll' => $commentairesAll,
        //     'categories' => $categories,
        //     'users' => $users,
        //     'vues' => $vues
        // ]);

        try {
            return $this->twig->render('home/sidebar.html.twig',
                compact('articles', 'articlesAll', 'categories', 'categoriesAll', 'users', 'views', 'tags', 'commentsAll', 'linksAll'));
        } catch (LoaderError | RuntimeError | SyntaxError $e) {
        }
    }
}
