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
    public function question(string $slug): Response
    {
        return new Response(
            sprintf(
                'Future page to show the question "%s"!',
                ucwords(str_replace('-', ' ', $slug))
            )
        );
    }
}
