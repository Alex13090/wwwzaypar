<?php

//namespace App\Controller;
//
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Annotation\Route;
//
//class ProfileController extends AbstractController
//{
//    #[Route(path: '/espace-client', name: 'app_profile')]
//    public function show(): Response
//    {
//        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
//        $user = $this->getUser();
//
//        return $this->render('user/profile.html.twig', ['user' => $user]);
//    }
//
//}