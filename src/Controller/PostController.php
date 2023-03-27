<?php

namespace Remimichel\P5\Controller;

use Remimichel\P5\Model\Post;
use Twig\Environment;

class PostController
{

    private $post;
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->post = new Post();
        $this->twig = $twig;
    }

    public function displayAll()
    {
        // Récupérer les posts du modèle
        $posts = $this->post->findAll();
        // Afficher les posts renvoyés par le modèle
        echo $this->twig->render('posts.html.twig', [
            'posts' => $posts
        ]);
    }

}