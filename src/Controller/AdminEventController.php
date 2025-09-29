<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use TeiEditionBundle\Entity\Event;
use App\Form\AdminEventType;

#[Route(path: '/admin/event')]
class AdminEventController extends AbstractController
{
    #[Route(path: '/', name: 'app_admin_event_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $results = $entityManager
            ->getRepository(Event::class)
            ->findBy([], [
                'name' => 'ASC',
            ]);

        return $this->render('Admin/Event/index.html.twig', [
            'results' => $results,
        ]);
    }

    #[Route(path: '/new', name: 'app_admin_event_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = new Event();
        $form = $this->createForm(AdminEventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_event_show', [
                'id' => $event->getId(),
            ], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Admin/Event/new.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route(path: '/{id}', name: 'app_admin_event_show', methods: ['GET'])]
    public function show(Event $event): Response
    {
        return $this->render('Admin/Event/show.html.twig', [
            'event' => $event,
        ]);
    }

    #[Route(path: '/{id}/edit', name: 'app_admin_event_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AdminEventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_event_show', [
                'id' => $event->getId(),
            ], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Admin/Event/edit.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route(path: '/{id}', name: 'app_admin_event_delete', methods: ['POST'])]
    public function delete(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $event->getId(), $request->request->get('_token'))) {
            $entityManager->remove($event);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_event_index', [], Response::HTTP_SEE_OTHER);
    }
}
