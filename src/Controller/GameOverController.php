<?php


namespace App\Controller;

class GameOverController extends AbstractController
{
    public function gameOver()
    {
        return $this->twig->render("gameover/gameover.html.twig");
    }
}
