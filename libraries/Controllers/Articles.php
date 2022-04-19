<?php

namespace Controllers;

class Articles extends Controller
{

    public function index()
    {
        $articleClass = new \Models\Articles();

        $articles = $articleClass->findAll();

        $pageTitle = "Articles";

        $this->render('accueil', compact('pageTitle', 'articles'));
    }
}
