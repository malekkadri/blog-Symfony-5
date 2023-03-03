<?php

namespace App\Controller;

use App\Entity\Tag;
use App\Form\TagType;
use App\Repository\TagRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class TagController extends AbstractController
{
    /**
     * @Route("/tag", name="tag_index", methods={"GET"})
     * @param TagRepository $tagRepository
     * @return Response
     */
    public function index(TagRepository $tagRepository): Response
    {
        return $this->render('tag/index.html.twig', [
            'tags' => $tagRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin/tag", name="tag_admin_index", methods={"GET"})
     * @param TagRepository $tagRepository
     * @return Response
     */
    public function indexAdmin(Request $request, TagRepository $tagRepository, PaginatorInterface $paginator): Response
    {
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT p FROM App:Tag p ORDER BY p.title DESC";
        $donnees = $em->createQuery($dql);

        $tags = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            5 // Nombre de résultats par page
        );

        return $this->render('tag/index.admin.html.twig', [
            'tags' => $tags,
        ]);
    }

    /**
     * @Route("/admin/tag/new", name="tag_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $tag = new Tag();
        $form = $this->createForm(TagType::class, $tag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tag);
            $entityManager->flush();

            return $this->redirectToRoute('tag_index');
        }

        return $this->render('tag/new.html.twig', [
            'tag' => $tag,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/tag/new/ajax/{label}", name="tag_new_ajax", methods={"POST"})
     */
    public function newTagAjax(string $label, EntityManagerInterface $em): Response 
    {
        $tag = new Tag();
        $tag->setTitle(trim(strip_tags($label)));
        $em->persist($tag);
        $em->flush();
        $id = $tag->getId();
        return new JsonResponse(['id' => $id]);
    }

    /**
     * @Route("/tag/{slug}", name="tag_show", methods={"GET"})
     * @param Tag $tag
     * @return Response
     */
    public function show(Tag $tag): Response
    {
        return $this->render('tag/show.html.twig', [
            'tag' => $tag,
        ]);
    }

    /**
     * @Route("/admin/tag/{id}/edit", name="tag_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Tag $tag
     * @return Response
     */
    public function edit(Request $request, Tag $tag, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(TagType::class, $tag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $message = $translator->trans('Tag edited with success!');
            $this->addFlash('message', $message);
            
            return $this->redirectToRoute('tag_admin_index');
        }

        return $this->render('tag/edit.html.twig', [
            'tag' => $tag,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/tag/{id}", name="tag_delete", methods={"POST"})
     * @param Request $request
     * @param Tag $tag
     * @return Response
     */
    public function delete(Request $request, Tag $tag): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tag->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tag);
            $entityManager->flush();
        }

        $this->addFlash('message_deleted', 'Tag deleted with success!');
        return $this->redirectToRoute('tag_index');
    }
}
