<?php


namespace App\Controller;

class ScenarioController extends AbstractController
{
    public function sceNaRio()
    {
        return $this->twig->render('scenario/scenario.html.twig');
    }
}
