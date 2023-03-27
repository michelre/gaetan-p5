<?php

namespace Remimichel\P5\Model;

class Post
{

    public function findAll()
    {
        // Futur accès à la BD pour récupérer les données
        return [
            [
                "id" => 1,
                "title" => "Post 1"
            ],
            [
                "id" => 2,
                "title" => "Post 2"
            ],
            [
                "id" => 3,
                "title" => "Post 3"
            ]
        ];
    }

    public function findById()
    {

    }

    public function update()
    {

    }

}