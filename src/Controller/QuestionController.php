<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function homepage(Environment $twigEnvironment): Response
    {
        /* Fun example of using the Twig service directly 
        $html = $twigEnvironment->render('question/homepage.html.twig');

        return new Response($html);
        */

        return $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("/question/{slug}", name="question_show")
     */
    public function show(string $slug): Response
    {
        $answers = [
            'Make sure your cat is sitting purrrfectly still',
            'Honestly, I like furry shoes better then MY cat',
            'Maybe... try sating the spell backwards?',
        ];

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,
        ]);
    }
}
