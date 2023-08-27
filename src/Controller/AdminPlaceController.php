<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use TeiEditionBundle\Entity\Place;
use App\Form\AdminPlaceType;

/**
 * @Route("/admin/place")
 */
class AdminPlaceController extends AbstractController
{
    /**
     * @Route("/", name="app_admin_place_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $results = $entityManager
            ->getRepository(Place::class)
            ->findBy([], [
                'name' => 'ASC',
            ]);

        return $this->render('Admin/Place/index.html.twig', [
            'results' => $results,
        ]);
    }

    /**
     * @Route("/new", name="app_admin_place_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $place = new Place();
        $form = $this->createForm(AdminPlaceType::class, $place);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($place);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_place_show', [
                    'id' => $place->getId(),
                ], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('Admin/Place/new.html.twig', [
            'place' => $place,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_place_show", methods={"GET"})
     */
    public function show(Place $place): Response
    {
        return $this->render('Admin/Place/show.html.twig', [
            'place' => $place,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_admin_place_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Place $place, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AdminPlaceType::class, $place);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_place_show', [
                    'id' => $place->getId(),
                ], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('Admin/Place/edit.html.twig', [
            'place' => $place,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_place_delete", methods={"POST"})
     */
    public function delete(Request $request, Place $place, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$place->getId(), $request->request->get('_token'))) {
            $entityManager->remove($place);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_place_index', [], Response::HTTP_SEE_OTHER);
    }
}
