<?php

namespace App\Controller;

use App\Rss\Rss;
use App\Entity\Article;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RssController extends AbstractController
{
    /**
     * @Route("/rss", name="rss_feed")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function rssAction()
    {
        // Ftech 5 last articles order by date
        $article = $this->getDoctrine()->getRepository(Article::class)->findBy([],['created_at' => 'DESC'], 5);

        $response = new Response();
        $response->headers->set("Content-type", "text/xml");
        $response->setContent(Rss::generate($article));
        return $response;
    }
}