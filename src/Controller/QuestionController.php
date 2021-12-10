<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function homepage(): Response
    {
        return new Response('What a bewitching controller we have conjured!');
    }

    /**
     * @Route("/question/{slug}", name="question")
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

        // return new Response(
        //     sprintf(
        //         'Future page to show the question "%s"!',
        //         ucwords(str_replace('-', ' ', $slug))
        //     )
        // );
    }
}
